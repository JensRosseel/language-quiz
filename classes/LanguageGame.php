<?php
include 'Word.php';
class LanguageGame
{
    private string $anwer;
    private string $word;
    private array $english;
    private array $french;

    public function __construct()
    {
        $i = 0;
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            $this->french[$i] = $frenchTranslation;
            $this->english[$i] = $englishTranslation;
            $i++;
        }
    }

    public function resetEverything()
    {
        $random = rand(0, 7);
        $this->word = $this->french[$random];
        $this->answer = $this->english[$random];
        $_SESSION['word'] = $this->word;
        $_SESSION['answer'] = $this->answer;
        echo "<script type='text/javascript'> document.getElementById('word').value = '{$this->word}'; document.getElementById('score').innerHTML = 'Score: {$_SESSION['win']}/{$_SESSION['loss']}'</script>";
    }
    public function run()
    {
        if(isset($_POST['guess']) && $_POST['guess'] !== "")
        {
            $_SESSION['guess'] = $_POST['guess'];
        }
        
        if(isset($_POST['answer']) && !empty($_SESSION['guess']))
        {
            $verify = new Word();
            $verify->verify($_SESSION['answer'], $_SESSION['guess']);
            self::resetEverything();
            unset($_SESSION['guess']);
            echo "<script type='text/javascript'> document.getElementById('word').value = '{$_SESSION['word']}'; </script>"; 
        }
        else if(isset($_POST['resetScore']))
        {
            session_destroy();
            header("Refresh:0");
        }
        else if(empty($_SESSION['guess']))
        {  
            self::resetEverything();
            echo "<script type='text/javascript'> document.getElementById('word').value = '{$this->word}';</script>";
        }
    }
    
}
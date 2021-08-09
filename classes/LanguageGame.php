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

    public function run()
    {
        if(empty($_SESSION['guess']))
        {  
            $random = rand(0, 7);
            $this->word = $this->french[$random];
            $this->answer = $this->english[$random];
            $_SESSION['word'] = $this->word;
            $_SESSION['answer'] = $this->answer;
            echo "<script type='text/javascript'> document.getElementById('word').value = '{$this->word}';</script>";
        }
        else
        {
            echo "<script type='text/javascript'> document.getElementById('word').value = '{$_SESSION['word']}'; document.getElementById('guess').value = '{$_SESSION['guess']}';</script>";
            $verify = new Word();
            $verify->verify($_SESSION['answer'], $_SESSION['guess']);
        }
    }
}
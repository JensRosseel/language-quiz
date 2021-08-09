<?php

class Word
{
    public function verify(string $answer, string $guess)
    {
        if(strtolower($guess) == $answer)
        {
            $_SESSION['win']++;
            if($_SESSION['win'] == 10 || $_SESSION['loss'] == 10)
            {
                echo "<script> alert('Congratulation you have reached the end! \\n Your score is {$_SESSION['win']}/{$_SESSION['loss']}'); </script>";
            }
            else
            {
                echo "<script> alert('Your guess is correct!!!'); </script>";
            }
        }
        else
        {
            $_SESSION['loss']++;
            if($_SESSION['win'] == 10 || $_SESSION['loss'] == 10)
            {
                echo "<script> alert('Congratulation you have reached the end! \\n Your score is {$_SESSION['win']}/{$_SESSION['loss']}'); </script>";
            }
            else
            {
                echo "<script> alert('Your guess is NOT correct!!!'); </script>";
            }   
        }
    }
}
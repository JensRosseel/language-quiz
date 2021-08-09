<?php

class Word
{
    public function verify(string $answer, string $guess)
    {
        if($guess == $answer)
        {
            echo "<script> alert('Your guess is correct!!!'); </script>";
            $_SESSION['win']++;
        }
        else
        {
            echo "<script> alert('Your guess is NOT correct!!!'); </script>";
            $_SESSION['loss']++;
        }
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}
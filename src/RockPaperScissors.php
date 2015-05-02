<?php

class RockPaperScissors
{
    function roShamBo($first_input, $second_input)
    {
        return "Player 1";
    }

    function roShamBo2($input)
    {
        $player1_wins = ["sl", "ls", "dj", "jd", "fk", "kf"];
        $player2_wins = ["jf", "fj", "ks", "sk", "ld", "dl"];
        $draw = ["sj", "js", "dk", "kd", "fl", "lf"];

        $input = strtolower($input);
        if(in_array($input, $player1_wins)) {
            return "Player 1 wins";
        }

        elseif(in_array($input, $player2_wins)) {
            return "Player 2 wins";
        }
        elseif(in_array($input, $draw)) {
            return "Draw!!";
        }

        else {
            return "Not a valid combination. Please use SDF and JKL to play.";
        }
    }

    function computerPlayer($input)
    {
        $player2array = ["j","k","l"];
        $computerplayer2 = array_rand($player2array, 1);
        $newval = $input . $computerplayer2;

        $this->roshambo2($newval);


    }



}

?>

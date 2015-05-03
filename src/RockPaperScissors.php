<?php

class RockPaperScissors
{

//two player mode
//compares input to array of all possible win states
//else "not valid"
    function roShamBo2($input)
    {
        $player1_wins = ["sl", "ls", "dj", "jd", "fk", "kf"];
        $player2_wins = ["jf", "fj", "ks", "sk", "ld", "dl"];
        $draw = ["sj", "js", "dk", "kd", "fl", "lf"];

        //change players input to lower case
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
        $player2array = ["j", "k", "l"];

        //grab random index from computer player array
        $computerplayer2 = array_rand($player2array, 1);

        //assign index to input2
        $input2 = $player2array[$computerplayer2];

        //concat
        $newval = $input . $input2;
        return $newval;

    }



}

?>

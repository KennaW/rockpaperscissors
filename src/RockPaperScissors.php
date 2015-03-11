<?php

class RockPaperScissors
{
    function roShamBo($first_input, $second_input)
    {
        return "Player 1";
    }

    function roShamBo2($input)
    {
        $player1_wins = ["SL", "sl", "LS", "ls", "DJ", "dj", "JD", "jd", "FK", "fk", "KF", "kf"];
        $player2_wins = ["JF", "jf", "FJ", "fj", "KS", "ks", "SK", "sk", "LD", "ld", "DL", "dl"];
        $draw = ["SJ", "sj", "JS", "js", "DK", "dk", "KD", "kd", "FL", "fl", "LF", "lf"];

        if(in_array($player1_wins == $input) {
            return "Player 1 wins";
        }

        elseif(in_array($player2_wins == $input) {
            return "Player 2 wins";
        }
        elseif(in_array($draw == $input) {
            return "Draw!!";
        }

        else{
            return "Not a valid combination. Please use SDF and JKL to play.";
        }
    }



}

?>

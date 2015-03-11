<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        //sample from assignment
        function test_roShamBo()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->roShamBo($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        //tests for our code

        //test for player 1 winning
        function test_roShambo2()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input = "sl";
            // $player1_wins = ["sl"];

            //Act
            $result = $test_RockPaperScissors->roShamBo2($input);

            //Assert
            $this->assertEquals("Player 1 wins", $result);
        }

        //test for player 2 win
        function test_player2win()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input = "KS";

            //Act
            $result = $test_RockPaperScissors->roShamBo2($input);

            //assert
            $this->assertEquals("Player 2 wins", $result);
        }

        //test for draw
        function test_draw()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input = "kd";

            //act
            $result = $test_RockPaperScissors->roShamBo2($input);

            //assert
            $this->assertEquals("Draw!!", $result);
        }

        //test for else
        function test_else()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input = "qq";

            //act
            $result = $test_RockPaperScissors->roShamBo2($input);

            //Assert
            $this->assertEquals("Not a valid combination. Please use SDF and JKL to play.", $result);
        }
    }

?>

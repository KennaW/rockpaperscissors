<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

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

        function test_roShambo2($input)
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input = "sl"

            //Act
            $result = $test_RockPaperScissors->roShamBo2($input);

            //Assert
            $this->assertEquals("Player 1 wins", $result);
        }
    }

?>

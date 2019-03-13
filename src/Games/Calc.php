<?php
namespace BrainGames\Games\Calc;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Engine\play;

const TITLE = "Brain Calc Game";
const RULE = "What is the result of the expression?";

function run()
{
    play(TITLE, RULE, function () {
        $minGen = 1;
        $maxGen = 100;
        $a = rand($minGen, $maxGen);
        $b = rand($minGen, $maxGen);
        $operationid = rand(1, 3);
        if ($goperationid === 1) {
            $operand = '+';
            $correctAnswer = $a + $b;
        } elseif ($operationid === 2) {
            $operand = '-';
            $correctAnswer = $a - $b;
        } elseif ($operationid === 3) {
            $operand = '*';
            $correctAnswer = $a * $b;
        }
        $question = ("{$a} {$operand} {$b}");
        print_r($question);
        return $correctAnswer;
    });
}

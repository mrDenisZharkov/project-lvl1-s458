<?php
namespace BrainGames\Games\Calc;

use function BrainGames\Engine\play;

const TITLE = "Brain Calc Game";
const DESCRIPTION = "What is the result of the expression?";

function run()
{
    play(TITLE, DESCRIPTION, function () {
        $minGen = 1;
        $maxGen = 100;
        $a = rand($minGen, $maxGen);
        $b = rand($minGen, $maxGen);
        $operationid = rand(1, 3);
        if ($operationid === 1) {
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
        return [$correctAnswer, $question];
    });
}

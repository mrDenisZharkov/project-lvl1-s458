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
        $operations = [
            ['operand' => '+', 'correctAnswer' => $a + $b],
            ['operand' => '-', 'correctAnswer' => $a - $b],
            ['operand' => '*', 'correctAnswer' => $a * $b]
        ];
        $operationid = rand(0, count($operations));
        $correctAnswer = (string)$operations[$operationid]['correctAnswer'];
        $question = "{$a} {$operations[$operationid]['operand']} {$b}";
        return [$correctAnswer, $question];
    });
}

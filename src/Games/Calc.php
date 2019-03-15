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
            ['operand' => '+', 'correctAnswer' => function ($a, $b) {
                return $a + $b;
            }],
            ['operand' => '-', 'correctAnswer' => function ($a, $b) {
                return $a - $b;
            }],
            ['operand' => '*', 'correctAnswer' => function ($a, $b) {
                return $a * $b;
            }]
        ];
        $operationid = rand(0, count($operations) - 1);
        $correctAnswer = $operations[$operationid]['correctAnswer']($a, $b);
        $question = "{$a} {$operations[$operationid]['operand']} {$b}";
        return [$correctAnswer, $question];
    });
}

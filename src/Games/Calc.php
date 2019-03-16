<?php
namespace BrainGames\Games\Calc;

use function BrainGames\Engine\play;

const TITLE = "Brain Calc Game";
const DESCRIPTION = "What is the result of the expression?";
const MIN_GEN = 1;
const MAX_GEN = 100;

function run()
{
    $operations = [
            ['operand' => '+', 'getAnswer' => function ($a, $b) {
                return $a + $b;
            }],
            ['operand' => '-', 'getAnswer' => function ($a, $b) {
                return $a - $b;
            }],
            ['operand' => '*', 'getAnswer' => function ($a, $b) {
                return $a * $b;
            }]
        ];
    $gameData = function () use ($operations) {
        $a = rand(MIN_GEN, MAX_GEN);
        $b = rand(MIN_GEN, MAX_GEN);
        $operationid = rand(0, count($operations) - 1);
        $correctAnswer = (string) $operations[$operationid]['getAnswer']($a, $b);
        $question = "{$a} {$operations[$operationid]['operand']} {$b}";
        return [$correctAnswer, $question];
    };
    play(TITLE, DESCRIPTION, $gameData);
}

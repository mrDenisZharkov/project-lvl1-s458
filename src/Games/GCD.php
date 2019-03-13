<?php
namespace BrainGames\Games\GCD;

use function BrainGames\Engine\play;

const TITLE = "Brain GCD Game";
const DESCRIPTION = "Find the greatest common divisor of given numbers.";

function run()
{
    play(TITLE, DESCRIPTION, function () {
        $minGen = 1;
        $maxGen = 100;
        $a = rand($minGen, $maxGen);
        $b = rand($minGen, $maxGen);
        $correctAnswer = 1;
        $question = ("{$a} <==> {$b}");
        $lowerNum = ($a <= $b) ? $a : $b;
        for ($i = 1; $i <= $lowerNum; $i++) {
            $correctAnswer = ($a % $i || $b % $i) ? $correctAnswer : $i;
        }
        return [$correctAnswer, $question];
    });
}

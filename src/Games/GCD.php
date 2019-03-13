<?php
namespace BrainGames\Games\GCD;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Engine\play;

const TITLE = "Brain GCD Game";
const RULE = "Find the greatest common divisor of given numbers.";

function run()
{
    play(TITLE, RULE, function () {
        $minGen = 1;
        $maxGen = 100;
        $a = rand($minGen, $maxGen);
        $b = rand($minGen, $maxGen);
        $correctAnswer = 1;
        $question = ("{$a} <==> {$b}");
        print_r($question);
        $lowerNum = ($a <= $b) ? $a : $b;
        for ($i = 1; $i <= $lowerNum; $i++) {
            $correctAnswer = ($a % $i || $b % $i) ? $correctAnswer : $i;
        }
        return $correctAnswer;
    });
}

<?php
namespace BrainGames\Games\GCD;

use function BrainGames\Engine\play;

const TITLE = "Brain GCD Game";
const DESCRIPTION = "Find the greatest common divisor of given numbers";

function getGCD($a, $b)
{
    return $b === 0 ? abs($a) : getGCD($b, $a % $b);
}
function run()
{
    play(TITLE, DESCRIPTION, function () {
        $minGen = 1;
        $maxGen = 100;
        $a = rand($minGen, $maxGen);
        $b = rand($minGen, $maxGen);
        $question = ("{$a} <==> {$b}");
        $correctAnswer = getGCD($a, $b);
        return [$correctAnswer, $question];
    });
}

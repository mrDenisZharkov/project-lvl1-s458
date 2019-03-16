<?php
namespace BrainGames\Games\GCD;

use function BrainGames\Engine\play;

const TITLE = "Brain GCD Game";
const DESCRIPTION = "Find the greatest common divisor of given numbers";
const MIN_GEN = 1;
const MAX_GEN = 100;

function getGCD($a, $b)
{
    return $b === 0 ? abs($a) : getGCD($b, $a % $b);
}
function run()
{
    $gameData = function () {
        $a = rand(MIN_GEN, MAX_GEN);
        $b = rand(MIN_GEN, MAX_GEN);
        $question = ("{$a} <==> {$b}");
        $correctAnswer = (string) getGCD($a, $b);
        return [$correctAnswer, $question];
    };
    play(TITLE, DESCRIPTION, $gameData);
}

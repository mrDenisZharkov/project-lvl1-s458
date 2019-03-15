<?php
namespace BrainGames\Games\Prime;

use function BrainGames\Engine\play;

const TITLE = "Brain Prime Game";
const DESCRIPTION = "Answer 'yes' if given number is prime. Otherwise answer 'no'";

function isPrime($a)
{
    $deviderCountOperations = 2;
    $baseConditionPrime = 2;
    if ($a < $baseConditionPrime) {
        return false;
    }
    for ($i = $baseConditionPrime; $i <= $a / $deviderCountOperations; $i++) {
        if ($a % $i === 0) {
            return false;
        }
    }
    return true;
}
function run()
{
    play(TITLE, DESCRIPTION, function () {
        $minInit = 1;
        $maxInit = 100;
        $question = rand($minInit, $maxInit);
        $correctAnswer = isPrime($question) ? "yes" : "no";
        return [$correctAnswer, $question];
    });
}

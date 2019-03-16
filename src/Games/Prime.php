<?php
namespace BrainGames\Games\Prime;

use function BrainGames\Engine\play;

const TITLE = "Brain Prime Game";
const DESCRIPTION = "Answer 'yes' if given number is prime. Otherwise answer 'no'";
const MIN_GEN = 1;
const MAX_GEN = 100;

function isPrime($a)
{
    if ($a < 2) {
        return false;
    }
    for ($i = 2; $i <= $a / 2; $i++) {
        if ($a % $i === 0) {
            return false;
        }
    }
    return true;
}
function run()
{
    $gameData = function () {
        $minInit = 1;
        $maxInit = 100;
        $question = (string) rand(MIN_GEN, MAX_GEN);
        $correctAnswer = isPrime($question) ? "yes" : "no";
        return [$correctAnswer, $question];
    };
    play(TITLE, DESCRIPTION, $gameData);
}

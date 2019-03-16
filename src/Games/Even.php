<?php
namespace BrainGames\Games\Even;

use function BrainGames\Engine\play;

const TITLE = "Brain Even Game";
const DESCRIPTION = "Answer 'yes' if number even otherwise answer 'no'";
const MIN_GEN = 1;
const MAX_GEN = 100;

function isEven($number)
{
    return $number % 2 === 0;
}
function run()
{
    $gameData = function () {
        $question = (string) rand(MIN_GEN, MAX_GEN);
        $correctAnswer = isEven($question) ? "yes" : "no";
        return [$correctAnswer, $question];
    };
    play(TITLE, DESCRIPTION, $gameData);
}

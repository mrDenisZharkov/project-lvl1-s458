<?php
namespace BrainGames\Games\Even;

use function BrainGames\Engine\play;

const TITLE = "Brain Even Game";
const DESCRIPTION = "Answer 'yes' if number even otherwise answer 'no'.";

function isEven($number)
{
    return ($number % 2 === 0) ? true : false;
}
function run()
{
    play(TITLE, DESCRIPTION, function () {
        $minGen = 1;
        $maxGen = 100;
        $question = rand($minGen, $maxGen);
        $correctAnswer = isEven($question) ? "yes" : "no";
        return [$correctAnswer, $question];
    });
}

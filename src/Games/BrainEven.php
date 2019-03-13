<?php
namespace BrainGames\Games\BrainEven;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Engine\play;

const TITLE = "Brain Even Game";
const RULE = "Answer 'yes' if number even otherwise answer 'no'.";

function isEven($number)
{
    return ($number % 2 === 0) ? true : false;
}
function run()
{
    play(TITLE, RULE, function () {
        $minGen = 1;
        $maxGen = 100;
        $question = rand($minGen, $maxGen);
        print_r($question);
        return isEven($question) ? "yes" : "no";
    });
}

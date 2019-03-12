<?php
namespace BrainGames\games\GameBrainEven;

use function \cli\line;
use function \cli\prompt;

//Constants (settable)
const MIN_GEN_NUMBER = 1;
const MAX_GEN_NUMBER = 100;
const COUNT_GAME_LOOPS = 3;
const RULES = "Answer 'yes' if number even otherwise answer 'no'.";
const GAME_NAME = "Brain Even Game";

//Question description (writeable)
function giveQuestion()
{
    $questionNum = rand(MIN_GEN_NUMBER, MAX_GEN_NUMBER);
    print_r($questionNum);
    $correctAnswer = ($questionNum % 2 === 0) ? "yes" : "no";
    return $correctAnswer;
}

//Engine
function init($gameName, $rules, &$username)
{
    line("Welcome to the {$gameName}!");
    line($rules);
    $username = prompt('May I have your name?');
    line("Hello, %s!", $username);
}
function play()
{
    for ($i = 0; $i < COUNT_GAME_LOOPS; $i++) {
        line("Question: ");
        $correctAnswer = giveQuestion();
        $answerUser = prompt("\nYour answer: ");
        if ($answerUser == $correctAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;"
            . "(. Correct answer was '%s'.d", $answerUser, $correctAnswer);
            return false;
        }
    }
    return true;
}
function summarize($winIndicator, $username)
{
    if ($winIndicator) {
        line("Congratulations, %s!", $username);
    } else {
        line("Let's try again, %s!", $username);
    }
}
function run()
{
    $username = 'unknown';
    init(GAME_NAME, RULES, $username);
    $result = play();
    summarize($result, $username);
}

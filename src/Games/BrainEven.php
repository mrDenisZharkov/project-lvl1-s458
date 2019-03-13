<?php
namespace BrainGames\Games\BrainEven;

use function \cli\line;
use function \cli\prompt;

//Constants (settable)

const RULE = "Answer 'yes' if number even otherwise answer 'no'.";
const TITLE = "Brain Even Game";

//Question description (writeable)
function isEven($number)
{
	return ($number % 2 === 0) ? true : false;
}
function question()
{
	$minGen = 1;
	$maxGen = 100;
    $questionNum = rand($minGen, $maxGen);
    print_r($questionNum);
    return (isEven($questionNum)) ? "yes" : "no";
}
function run()
{
	play(TITLE, RULE);
}
function play($title, $rule)
{
	$countrounds = 3;
    line("\tWelcome to the {$title}!");
    line("\n{$rule}");
    $username = prompt("\nMay I have your name?");
    line("\tHello, {$username}!");
    for ($i = 0; $i < $countrounds; $i++) {
        line("\nQuestion: ");
        $correctAnswer = question();
        $playerAnswer = prompt("\nYour answer: ");
        $winIndicator = true;
        if ($playerAnswer == $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$playerAnswer}' is wrong answer. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$username}...");
            return;
	    }
    }
    line("\n\tCongratulations, {$username}!");
}


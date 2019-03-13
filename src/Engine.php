<?php
namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;
const COUNT_ROUNDS = 3;

function play(string $title, string $rule, callable $question)
{
    line("\tWelcome to the {$title}!");
    line("\n{$rule}");
    $username = prompt("\nMay I have your name?");
    line("\tHello, {$username}!");
    for ($i = 0; $i < COUNT_ROUNDS; $i++) {
        line("\nQuestion: ");
        $correctAnswer = $question();
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

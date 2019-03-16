<?php
namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;
const COUNT_ROUNDS = 3;

function play(string $title, string $description, callable $genData)
{
    line("\n\t*Welcome to the {$title}!*");
    line("\n{$description}");
    $username = prompt("\nMay I have your name?");
    line("\tHello, {$username}!");
    for ($i = 0; $i < COUNT_ROUNDS; $i++) {
        line("\nQuestion: ");
        [$correctAnswer, $question] = $genData();
        line($question);
        $playerAnswer = prompt("\nYour answer");
        if ($playerAnswer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$playerAnswer}' is wrong answer. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$username}...\n");
            return;
        }
    }
    line("\n\tCongratulations, {$username}!\n");
}

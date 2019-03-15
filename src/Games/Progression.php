<?php
namespace BrainGames\Games\Progression;

use function BrainGames\Engine\play;

const TITLE = "Brain Progression Game";
const DESCRIPTION = "What number is missing in the progression?";

function run()
{
    play(TITLE, DESCRIPTION, function () {
        $minInit = 1;
        $maxInit = 100;
        $minStep = 1;
        $maxStep = 100;
        $lenght = 10;
        $firstMember = rand($minInit, $maxInit);
        $step = rand($minStep, $maxStep);
        $hiddenElementIndex = rand(0, $lenght - 1);
        for ($i = 0; $i < $lenght; $i++) {
            $progression[$i] = $firstMember + $step * $i;
        }
        $correctAnswer = $progression[$hiddenElementIndex];
        $progression[$hiddenElementIndex] = "..";
        $question = implode(' ', $progression);
        return [$correctAnswer, $question];
    });
}

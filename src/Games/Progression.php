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
        $questionIndex = rand(0, $lenght - 1);
        $progression = [];
        $member = $firstMember;
        for ($i = 0; $i < $lenght; $i++) {
            $progression[$i] = $member;
            $member += $step;
        }
        $correctAnswer = $progression[$questionIndex];
        $progression[$questionIndex] = "..";
        $question = implode(' ', $progression);
        return [$correctAnswer, $question];
    });
}

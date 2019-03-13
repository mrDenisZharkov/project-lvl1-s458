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
        $countElements = 10;
        $member = rand($minInit, $maxInit);
        $step = rand($minStep, $maxStep);
        $questid = rand(0, $countElements - 1);
        $array = [];
        for ($i = 0; $i < $countElements; $i++) {
            $array[$i] = $member;
            $member += $step;
        }
        $correctAnswer = $array[$questid];
        $array[$questid] = "..";
        $question = ("{$array[0]}");
        for ($i = 1; $i < $countElements; $i++) {
            $question = ("{$question}  {$array[$i]}");
        }
        return [$correctAnswer, $question];
    });
}

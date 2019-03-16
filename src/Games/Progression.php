<?php
namespace BrainGames\Games\Progression;

use function BrainGames\Engine\play;

const TITLE = "Brain Progression Game";
const DESCRIPTION = "What number is missing in the progression?";
const MIN_GEN_INIT = 1;
const MAX_GEN_INIT = 100;
const MIN_GEN_STEP = 1;
const MAX_GEN_STEP = 100;
const PROGRESSION_SIZE = 10;
function run()
{
    $gameData = function () {
        $firstMember = rand(MIN_GEN_INIT, MAX_GEN_INIT);
        $step = rand(MIN_GEN_STEP, MAX_GEN_STEP);
        $hiddenElementIndex = rand(0, PROGRESSION_SIZE - 1);
        for ($i = 0; $i < PROGRESSION_SIZE; $i++) {
            $progression[$i] = $firstMember + $step * $i;
        }
        $correctAnswer = (string)$progression[$hiddenElementIndex];
        $progression[$hiddenElementIndex] = "..";
        $question = implode(' ', $progression);
        return [$correctAnswer, $question];
    };
    play(TITLE, DESCRIPTION, $gameData);
}

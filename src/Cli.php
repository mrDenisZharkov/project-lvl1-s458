<?php
namespace BrainGames\Cli;
use function \cli\line;
use function \cli\prompt;
use function BrainGames\Games\GameBrainEven\run as gameEven;
use function BrainGames\Games\GameBrainCalc\run as gameCalc;
use function BrainGames\Games\GameBrainGCD\run as gameGCV;
function run()
{
    line("Welcome to the Brain Games!");
    line("Menu:");
    line("1 - Brain Even Game");
    line("2 - Brain Calc Game");
    line("3 - Brain GSV Game");
    line("any other - EXIT");
    $answerUser = prompt("\nEnter number of game to run it: ");
    if ($answerUser == 1) {
        gameEven();
    } elseif ($answerUser == 2) {
        gameCalc();
    } elseif ($answerUser == 3) {
        gameGSV();
    }
}

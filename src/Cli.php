<?php
namespace BrainGames\Cli;
use function \cli\line;
use function \cli\prompt;
use function BrainGames\games\GameBrainEven\run as gameEven;
use function BrainGames\games\GameBrainCalc\run as gameCalc;
use function BrainGames\games\GameBrainGCD\run as gameGCV;
function run()
{
    line("Welcome to the Brain Games!");
    line("Menu:");
    line("1 - Brain Even Game");
    line("2 - Brain Calc Game");
    line("any other - EXIT");
    $answerUser = prompt("\nEnter number of game to run it: ");
    if ($answerUser == 1) {
        gameEven();
    } elseif ($answerUser == 2) {
        gameCalc();
    }
}

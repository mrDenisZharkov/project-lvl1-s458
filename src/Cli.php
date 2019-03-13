<?php
namespace BrainGames\Cli;
use function \cli\line;
use function \cli\prompt;
use function BrainGames\Games\Even\run as runEven;
use function BrainGames\Games\Calc\run as runCalc;
use function BrainGames\Games\GCD\run as runGCD;
function runMenu()
{
    line("Welcome to the Brain Games!");
    line("Menu:");
    line("1 - Brain Even Game");
    line("2 - Brain Calc Game");
    line("3 - Brain GSV Game");
    line("any other - EXIT");
    $userAnswer = prompt("\nEnter number of game to run it: ");
    if ($userAnswer == 1) {
        runEven();
    } elseif ($userAnswer == 2) {
        runCalc();
    } elseif ($userAnswer == 3) {
        runGCD();
    }
}

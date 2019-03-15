<?php
namespace BrainGames\Cli;
use function \cli\line;
use function \cli\prompt;
use function BrainGames\Games\Even\run as runEven;
use function BrainGames\Games\Calc\run as runCalc;
use function BrainGames\Games\GCD\run as runGCD;
use function BrainGames\Games\Progression\run as runProgression;
use function BrainGames\Games\Prime\run as runPrime;
function runMenu()
{
    $games = [
            ['title' => "Brain Even Game", 'call' => function () {
                runEven();
            }],
            ['title' => "Brain Calc Game", 'call' => function () {
                runCalc();
            }],
            ['title' => "Brain GSV Game", 'call' => function () {
                runGCD();
            }],
            ['title' => "Brain Progression Game", 'call' => function () {
                runProgression();
            }],
            ['title' => "Brain Prime Game", 'call' => function () {
                runPrime();
            }]
        ];
    line("\n\t*Welcome to the Brain Games!*");
    line("\nMenu:");
    foreach ($games as $index => $game) {
        $currentIndex = $index + 1;
        line("{$currentIndex} - {$games[$index]['title']}");
    }
    line("any other - EXIT");
    $selection = prompt("\nEnter number of game to run it");
    $bye = "\nHave a good day!\n\n";
    $commandStart = ($selection > 0 && $selection <= count($games)) ? $games[$userCommand - 1]['call']() : exit($bye);
    return;
}

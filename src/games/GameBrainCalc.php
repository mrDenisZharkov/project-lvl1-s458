<?php
namespace BrainGames\games\GameBrainCalc;

use function \cli\line;
use function \cli\prompt;

//Constants (settable)
const MIN_GEN_NUMBER = 1;
const MAX_GEN_NUMBER = 100;
const COUNT_GAME_LOOPS = 3;
const RULES = "What is the result of the expression?";
const GAME_NAME = "Brain Calc Game";

//Question description (writeable)
const START_COUNT_GENERATED_OPERANDS = 1;
const COUNT_GENERATED_OPERANDS = 3;
const INDEX_ADITION_ACT = 1;
const INDEX_SUBSTRACTION_ACT = 2;
const INDEX_MULTIPLICATION_ACT = 3;

function giveQuestion()
{
    $genQuestionNumA = rand(MIN_GEN_NUMBER, MAX_GEN_NUMBER);
    $genQuestionNumB = rand(MIN_GEN_NUMBER, MAX_GEN_NUMBER);
    $genQuestionOperandNum = rand(START_COUNT_GENERATED_OPERANDS, COUNT_GENERATED_OPERANDS);
    if ($genQuestionOperandNum === INDEX_ADITION_ACT) {
        $operandStr = '+';
        $correctAnswer = $genQuestionNumA + $genQuestionNumB;
    } elseif ($genQuestionOperandNum === INDEX_SUBSTRACTION_ACT) {
        $operandStr = '-';
        $correctAnswer = $genQuestionNumA - $genQuestionNumB;
    } elseif ($genQuestionOperandNum === INDEX_MULTIPLICATION_ACT) {
        $operandStr = '*';
        $correctAnswer = $genQuestionNumA * $genQuestionNumB;
    }
    $question = $genQuestionNumA . $operandStr . $genQuestionNumB;
    print_r($question);
    return $correctAnswer;
}
//Engine
function initGame($gameName, $rules, &$username)
{
    line("Welcome to the {$gameName}!");
    line($rules);
    $username = prompt('May I have your name?');
    line("Hello, %s!", $username);
}
function playGame()
{
    for ($i = 0; $i < COUNT_GAME_LOOPS; $i++) {
        line("Question: ");
        $correctAnswer = giveQuestion();
        $answerUser = prompt("\nYour answer: ");
        if ($answerUser == $correctAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;"
            . "(. Correct answer was '%s'.d", $answerUser, $correctAnswer);
            return false;
        }
    }
    return true;
}
function showResults($winIndicator, $username)
{
    if ($winIndicator) {
        line("Congratulations, %s!", $username);
    } else {
        line("Let's try again, %s!", $username);
    }
}
function run()
{
    $username = 'unknown';
    initGame(GAME_NAME, RULES, $username);
    $result = playGame();
    showResults($result, $username);
}

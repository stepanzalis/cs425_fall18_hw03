<?php

/**
 * Returns new question depending on previous user's answer
 * @return String new question
 */
function getQuestion() {

    $jsonData = file_get_contents("questions.json");
    $dataHolder = json_decode($jsonData, true);
    $number = (mt_rand(0, 24));
    return $dataHolder[$_SESSION['level']]['questions'][$number];
}

function saveAnswer($correct) {
    $val = $correct ? "1," : "0,";
    $_SESSION['answers'] = $_SESSION['answers'] . $val;

}

function printScoreWithPoints($score, $points) {
    return "Question: $score " . '(' . $points . " points" . ')';
}

/**
 * @param $points Int Save player's points
 */
function saveScore($points) {
    $_SESSION['score'] += $points;
}

/**
 * @param $correct bool If the previous answer
 * true -> was correct
 * false -> was not correct
 */
function changeDifficulty($correct)
{
    $current = $_SESSION['level'];
    if ($correct) {
        if ($current < 2) ++$_SESSION['level'];
    } else {
        if (!$current <= 0) --$_SESSION['level'];
    }
}

/**
 * Append text to file
 * @param name Player's name
 * @param score Player's score
 */
function writeScoreToFile($name, $score)
{
    $filename = "file.txt";
    $file = fopen($filename, "a");

    $text = $name . " " . $score . "\n";
    fwrite($file, $text);
}

/** Get scores from text file
 * @return array Sorted array of (names-score)
 */
function getScores()
{
    $filename = "../file.txt";
    $array = array();

    if (file_exists($filename)) {

        $file = fopen($filename, "r");

        try {
            while (!feof($file)) {
                $line = fgets($file, 1024);
                $line = explode(" ", $line);

                $array[$line[0]] = isset($line[1]) ? $line[1] : 0;
            }

        } finally {
            fclose($file);
        }
    }

    // sort by value
    arsort($array, SORT_NUMERIC);
    return $array;
}

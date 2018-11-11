<?php

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
                // Load one complete line and put to [] to put double dot between
                $line = fgets($file, 1024);
                $line = explode(" ", $line);

                $array[$line[0]] = isset($line[1]) ? $line[1] : 0;
            }

        } finally {
            fclose($file);
        }
    }

    arsort($array, SORT_NUMERIC);
    return $array;
}



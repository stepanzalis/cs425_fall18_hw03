<?php

// Append text to file
function writeScoreToFile($name, $score)
{

    $filename = "file.txt";
    $file = fopen($filename, "a");

    $text = $name . " " . $score . "\n";
    fwrite($file, $text);
}



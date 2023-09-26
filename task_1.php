<?php
// Task 1: String Manipulation

$string = "The quick brown fox jumps over the lazy dog.";

function printModifyText($text)
{
    $lowercaseText = strtolower($text);
    $modifiedText = str_replace('brown', 'red', $lowercaseText);
    return $modifiedText;
}

$result = printModifyText($string);
echo $result;

?>
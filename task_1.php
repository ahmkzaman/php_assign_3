<?php
//Task 1: String Manipulation
function modifyText($text)
{
    $replacedText = str_replace("brown", "red", $text);
    echo strtolower($replacedText);
}
$text = "The quick brown fox jumps over the lazy dog.";

modifyText($text);

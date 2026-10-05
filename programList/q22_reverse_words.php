<?php
$sentence = "Hello World from PHP";

// Split the sentence into words, reverse each word, and rejoin them
$words = explode(" ", $sentence);
$reversedWords = array_map('strrev', $words);
$result = implode(" ", $reversedWords);

echo "Original Sentence: $sentence<br>";
echo "Reversed Words: $result";
?>
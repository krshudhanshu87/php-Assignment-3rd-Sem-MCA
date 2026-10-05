<?php
$password = "Secure@Pass123";

// Rules checking
$uppercase = preg_match('/[A-Z]/', $password);
$lowercase = preg_match('/[a-z]/', $password);
$number    = preg_match('/[0-9]/', $password);
$special   = preg_match('/[^a-zA-Z0-9]/', $password);
$minLength = strlen($password) >= 8;

if ($uppercase && $lowercase && $number && $special && $minLength) {
    echo "Password '$password' is valid and strong.";
} else {
    echo "Password '$password' is invalid. Status:<br>";
    echo "- Minimum 8 characters: " . ($minLength ? "Passed" : "Failed") . "<br>";
    echo "- At least 1 uppercase letter: " . ($uppercase ? "Passed" : "Failed") . "<br>";
    echo "- At least 1 lowercase letter: " . ($lowercase ? "Passed" : "Failed") . "<br>";
    echo "- At least 1 digit: " . ($number ? "Passed" : "Failed") . "<br>";
    echo "- At least 1 special character: " . ($special ? "Passed" : "Failed") . "<br>";
}
?>
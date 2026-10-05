<?php
$email = "user.example@domain.com";

// Regex pattern for standard email validation
$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

if (preg_match($pattern, $email)) {
    echo "'$email' is a valid email address.";
} else {
    echo "'$email' is NOT a valid email address.";
}
?>
<?php
$mobileNumber = "9876543210";

// Regular expression to check for a valid 10-digit number (starting with digits 6-9)
$pattern = "/^[6-9][0-9]{9}$/";

if (preg_match($pattern, $mobileNumber)) {
    echo "Mobile number '$mobileNumber' is valid.";
} else {
    echo "Mobile number '$mobileNumber' is invalid. It must be a 10-digit number starting with 6, 7, 8, or 9.";
}
?>
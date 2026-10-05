PHP
<?php
$filename = "sample.txt";

// Create sample file if it doesn't exist for demonstration
if (!file_exists($filename)) {
    file_put_contents($filename, "Hello!\nThis is a sample text file content.\nDisplaying line by line.");
}

// Read and display content safely
if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo "<h3>File Content:</h3>";
    echo nl2br(htmlspecialchars($content));
} else {
    echo "Error: File does not exist.";
}
?>
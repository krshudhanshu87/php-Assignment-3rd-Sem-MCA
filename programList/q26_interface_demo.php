<?php
// Define the interface
interface LoggerInterface {
    public function log(string $message): void;
}

// Class implementing the interface
class FileLogger implements LoggerInterface {
    public function log(string $message): void {
        echo "Logging message to file: $message<br>";
    }
}

class ConsoleLogger implements LoggerInterface {
    public function log(string $message): void {
        echo "Displaying message on console: $message<br>";
    }
}

// Usage
$fileLogger = new FileLogger();
$fileLogger->log("System initialized.");

$consoleLogger = new ConsoleLogger();
$consoleLogger->log("Database connected successfully.");
?>
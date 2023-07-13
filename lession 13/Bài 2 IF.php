<?php
interface Logger {
    public function logInfo($message);
    public function logWarning($message);
    public function logError($message);
}

class FileLogger implements Logger {
    private $logFile;

    public function __construct($logFile) {
        $this->logFile = $logFile;
    }

    public function logInfo($message) {
        $this->writeLog("INFO", $message);
    }

    public function logWarning($message) {
        $this->writeLog("WARNING", $message);
    }

    public function logError($message) {
        $this->writeLog("ERROR", $message);
    }

    private function writeLog($level, $message) {
        $logEntry = "[" . date("Y-m-d H:i:s") . "] [$level] $message\n";
        file_put_contents($this->logFile, $logEntry, FILE_APPEND);
    }
}

class DatabaseLogger implements Logger {
    private $connection;

    public function __construct($host, $username, $password, $database) {
        $this->connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function logInfo($message) {
        $this->writeLog("INFO", $message);
    }

    public function logWarning($message) {
        $this->writeLog("WARNING", $message);
    }

    public function logError($message) {
        $this->writeLog("ERROR", $message);
    }

    private function writeLog($level, $message) {
        $timestamp = date("Y-m-d H:i:s");
        $stmt = $this->connection->prepare("INSERT INTO logs (level, message, timestamp) VALUES (?, ?, ?)");
        $stmt->execute([$level, $message, $timestamp]);
    }
}

// Sử dụng:
$fileLogger = new FileLogger("app.log");
$fileLogger->logInfo("This is an information message.");
$fileLogger->logWarning("This is a warning message.");
$fileLogger->logError("This is an error message.");

$databaseLogger = new DatabaseLogger("localhost", "username", "password", "logs_db");
$databaseLogger->logInfo("This is an information message.");
$databaseLogger->logWarning("This is a warning message.");
$databaseLogger->logError("This is an error message.");
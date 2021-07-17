<?php


class Connection
{
    private string $host = 'localhost';
    private string $database = 'data_management';
    private string $username = 'root';
    private string $password = '';

    /**
     * Connection constructor.
     */
    public function __construct()
    {
    }

    public function getConnection(): PDO
    {
        $conn = null;
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
    }
}
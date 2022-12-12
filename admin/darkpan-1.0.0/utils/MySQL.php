<?php


class MySQL
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private static $conn;

    public function __construct()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "webthaylam";
        if (self::$conn == null) {
            echo "Create Connected";
            $this->connectDB();
        } else {
            echo "Use old Connected";
            return self::$conn;
        }
    }

    public function __destruct()
    {
        $this->servername = "";
        $this->username = "";
        $this->password = "";
        $this->dbname = "";
        self::$conn = null;
    }
    public function connectDB()
    {
        try {
            self::$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function disconnectDB()
    {
        echo "Dissconnected successfully! <br/>";
        self::$conn = null;
    }
}
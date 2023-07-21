<?php

class Connection {
    public $hostName;
    public $userName;
    public $password;
    public $dbName;
    public $conn;
    public function __construct($host, $user, $pass, $db)
    {
        $this->hostName = $host;
        $this->userName = $user;
        $this->password = $pass;
        $this->dbName = $db;

        
        $this->conn = mysqli_connect($this->hostName, $this->userName, $this->password, $this->dbName);

        if (!$this->conn) {
            echo "not connected";
        }
    }
}

// $connection = new Connection('localhost', 'root', '', 'oop_crud');










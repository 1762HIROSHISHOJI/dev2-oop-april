<?php

class Database{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = ''; // if you're windows, password is blank
    private $database_name = 'shops';
    public $conn;

    public function __construct()
    {   
        $this->conn = new mysqli($this->servername,$this->username, $this->password, $this->database_name);

        if($this->conn->connect_error){
            die('Unable to connect to database '. $this->conn->connect_error);
        }
    }
}
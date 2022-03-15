<?php

class user {
    public $email = "";
    public $password = "";
    public $password_hash = "";
    public $authenticated = false;
    private $connection;

    function __construct($connection, $email, $password){
        $this->email = mysqli_real_escape_string($connection, $email);
        $this->password = mysqli_real_escape_string($connection, $password);

        $this->password_hash = password_hash($password, PASSWORD_BCRYPT);

        $this->connection = $connection;
    }

    function insert() {
        $sql = "
        Insert INTO users(
            email,
            password,
            is_active
        )
        VALUES (
            '{$this->email}',
            '{$this->password_hash}',
            '0'
        )    
        ";
        
        $sqlQuery = mysqli_query($this->connection, $sql);

        if(!$sqlQuery){

            die("MySQL query failed!" . mysqli_error($this->connection));
        }

    }

    function authenticate() {
        $sql = "
            SELECT id, email, password, token, is_active
            FROM users
            WHERE email=\"{$this->email}\";
            ";
        
            $result = $this->connection->query($sql);
            if ($row = $result->fetch_assoc()) {

                if(password_verify($this->password, $row['password'])) {
                    $this->authenticated = true;
                }
            }
    }

    function is_logged_in(){
        return $this->authenticated;
    }   

}

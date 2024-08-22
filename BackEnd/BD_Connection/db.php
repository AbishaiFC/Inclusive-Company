<?php

require_once 'DB.php';

$db = new DB();

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = 'localhost';
        $this->db       = 'new_vision2';
        $this->user     = 'root';
        $this->password = "";
        $this->charset  = 'utf8mb4';
    }

    public function connect(){
       
        $mysqli = new mysqli($this->host, $this->user, $this->password, $this->db);


        if ($mysqli->connect_error) {
            die('Error en la conexión (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
        }


        if (!$mysqli->set_charset($this->charset)) {
            printf("Error cargando el conjunto de caracteres utf8mb4: %s\n", $mysqli->error);
            exit();
        }

        return $mysqli;
    }
}
?>

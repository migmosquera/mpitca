<?php
require_once 'connect/conection.php';
class User {
    private $id;
    private $password;
    private $username;
    const TABLA = 'user';
    
    public function getId() {
        return $this -> id;
    }

    public function getPassword() {
        return $this -> password;
    }

    public function setPassword($password) {
        $this -> password = $password;
    }
    
    public function getUsername() {
	return $this -> username;
    }

    public function setUsername($username) {
	$this -> username = $username;
    }
    
    public function __construct($password,$username, $id = null) {
	$this -> id = $id;
	$this -> password = $password;
	$this -> username = $username;
    }
    
    public static function loginUser($username, $pass) {

        $conectar = new Conection();
        $query = $conectar->prepare('SELECT * FROM ' . self::TABLA . ' WHERE username = :username AND password = md5(:pass)');
        $query->bindParam(':username', $username);
        $query->bindParam(':pass', $pass);
        $query->execute();
        $data = $query->fetch();
        if ($data) {
            return new self($data['password'], $data['username'], $data['iduser']);
        } else {
            return FALSE;
        }
        $conectar = null;
    }

}

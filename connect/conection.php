<?php

class Conection extends PDO {
    private $dns = 'mysql:dbname=mpitcaP;host=127.0.0.1';
	
	public function __construct() {
		try {
                    parent::__construct($this->dns, "root", "root");
		} catch(PDOException $e) {
			echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e -> getMessage();
			exit ;
		}
	}
}

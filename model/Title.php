<?php
require_once 'connect/conection.php';
class Title {
    private $id;
    private $name;
    private $img_title;
    const TABLA = 'title_proyect';
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getImg_title() {
        return $this->img_title;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setImg_title($img_title) {
        $this->img_title = $img_title;
    }

    function __construct($id, $name, $img_title) {
        $this->id = $id;
        $this->name = $name;
        $this->img_title = $img_title;
    }
    
    public static function registerTitle($nameTitle, $urlImg) {
     
        $conectar = new Conection();
        $query = $conectar->prepare('INSERT INTO ' . self::TABLA . ' (name,img_title) VALUES (:name, :url_img)');
        $query->bindParam(':name', $nameTitle);
        $query->bindParam(':url_img', $urlImg);
        $query->execute();
        $data = $query->fetch();
        if ($data) {
            return new self($data['id'], $data['name'], $data['iduser']);
        } else {
            return FALSE;
        }
        $conectar = null;
    }
    public static function editTitle($id, $nameTitle, $urlImg) {

        $conectar = new Conection();
        $query = $conectar->prepare('UPDATE ' . self::TABLA  . ' SET name=:name, img_title=:url_img WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->bindParam(':name', $nameTitle);
        $query->bindParam(':url_img', $urlImg);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
        $conectar = null;
    }
    
    public static function deleteTitle($id, $urlImg) {

        $conectar = new Conection();
        $query = $conectar->prepare('DELETE FROM ' . self::TABLA  . ' WHERE id=:id');
        $query->bindParam(':id', $id);
        unlink($urlImg);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
        $conectar = null;
    }
    
    public static function searchTitle() {

        $conectar = new Conection();
        $query = $conectar->prepare('SELECT * FROM ' . self::TABLA );
        $query->execute();
        $data = $query->fetchAll();
        return $data;
        $conectar = null;
    }
    
}

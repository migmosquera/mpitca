<?php
require_once 'connect/conection.php';
class Proyect {
    private $id;
    private $content;
    private $id_title;
    const TABLA = 'content_proyect';
    
    function getId() {
        return $this->id;
    }

    function getContent() {
        return $this->content;
    }

    function getId_title() {
        return $this->id_title;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setContent($content) {
        $this->content = $content;
    }

    function setId_title($id_title) {
        $this->id_title = $id_title;
    }

    function __construct($id, $content, $id_title) {
        $this->id = $id;
        $this->content = $content;
        $this->id_title = $id_title;
    }
    
    public static function registerContent($content, $id_title, $name_company) {
     
        $conectar = new Conection();
        $query = $conectar->prepare('INSERT INTO ' . self::TABLA . ' (content_proyect,id_title,name_company) VALUES (:content, :id_title, :name_company)');
        $query->bindParam(':content', $content);
        $query->bindParam(':id_title', $id_title);
        $query->bindParam(':name_company', $name_company);
        $query->execute();
        $data = $query->fetch();
        if ($data) {
            return TRUE;
        } else {
            return FALSE;
        }
        $conectar = null;
    }
    public static function editContent($id, $content, $id_title) {

        $conectar = new Conection();
        $query = $conectar->prepare('UPDATE ' . self::TABLA  . ' SET content_proyect=:content, id_title=:id_title WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->bindParam(':content', $content);
        $query->bindParam(':id_title', $id_title);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
        $conectar = null;
    }
    
    public static function deleteContent($id) {

        $conectar = new Conection();
        $query = $conectar->prepare('DELETE FROM ' . self::TABLA  . ' WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();
        $data = $query->fetchAll();
        return $data;
        $conectar = null;
    }
    
    public static function searchContent() {

        $conectar = new Conection();
        $query = $conectar->prepare('SELECT * FROM ' . self::TABLA );
        $query->execute();
        $data = $query->fetchAll();
        return $data;
        $conectar = null;
    }

}

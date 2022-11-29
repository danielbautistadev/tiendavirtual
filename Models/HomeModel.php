<?php 

class HomeModel extends Mysql {
    public function __construct() {
        parent::__construct();
    }
    
    // public function setuser(string $nombre, int $edad){
    //     $query_insert = "INSERT INTO usuario(nombre,edad) VALUES(?,?)";
    //     $arrData = array($nombre,$edad);
    //     $request_insert = $this -> insert($query_insert,$arrData);
    //     return $request_insert;
    // }
    // public function getuser($id) {
    //     $sql = "SELECT * FROM usuario WHERE id = $id";
    //     $request = $this -> select($sql);
    //     return $request;
    // }
    // public function updateuser(int $id, string $nombre, int $edad) {
    //     $sql = "UPDATE usuario SET nombre = ?, edad = ? WHERE id = $id";
    //     $arrData = array($nombre,$edad);
    //     $request = $this -> update($sql,$arrData);
    //     return $request;
    // }
    // public function getusers() {
    //     $sql = "SELECT * FROM usuario";
    //     $request = $this -> select_all($sql);
    //     return $request;
    // }
    // public function deleleuser($id) {
    //     $sql = "DELETE FROM usuario WHERE id = $id";
    //     $request = $this -> delete($sql);
    //     return $request; 
    // }
}

?>
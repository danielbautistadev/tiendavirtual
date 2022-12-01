<?php 

class Home extends Controllers {
    public function __construct(){
        parent::__construct();
    }
    public function home(){
        
        $data["page_tag"] = "Tienda Virtual";
        $data["page_title"] = "E-Commerce - Dycan Technology";
        $data["page_name"] = "tienda_virtual";
        
        $this -> views -> getView($this,"home",$data);
        
    }
    // public function insertar() {
    //     $data = $this -> model -> setuser("Marcos",48);
    //     print_r($data);
    // }
    // public function verusuario($id) {
    //     $data = $this -> model -> getuser($id);
    //     print_r($data);
    // }
    // public function actualizar() {
    //     $data = $this -> model -> updateuser(1,"Nicol",23);
    //     print_r($data);
    // }
    // public function verusuarios() {
    //     $data = $this -> model -> getusers();
    //     print_r($data);
    // }
    // public function eliminarusuario($id) {
    //     $data = $this -> model -> deleleuser($id);
    //     print_r($data);
    // }
}

?>
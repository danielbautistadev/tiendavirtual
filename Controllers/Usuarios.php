<?php 

class Usuarios extends Controllers {
    public function __construct(){
        parent::__construct();
    }
    public function usuarios(){
        $data["page_tag"] = "Usuarios - Tienda Virtual";
        $data["page_title"] = "Usuarios";
        $data["page_name"] = "usuarios";
        $data["page_functions_js"] = "functions_usuarios.js";
        $this -> views -> getView($this,"usuarios",$data);
        // echo "Mensaje desde el controlador";
    }
    
}

?>
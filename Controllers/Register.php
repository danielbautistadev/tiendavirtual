<?php 

class Register extends Controllers {
    public function __construct(){
        parent::__construct();
    }
    public function register(){
        $data["page_tag"] = "Registro - Dycan Technology";
        $data["page_title"] = "Registro";
        $data["page_name"] = "register";
        $data["page_functions_js"] = "functions_register.js";
        $this -> views -> getView($this,"register",$data);
        
    }
    
}

?>
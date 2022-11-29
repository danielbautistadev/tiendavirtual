<?php 

class Forgot extends Controllers {
    public function __construct(){
        parent::__construct();
    }
    public function forgot(){
        $data["page_tag"] = "Recupera tu contraseña";
        $data["page_title"] = "Forgot Password";
        $data["page_name"] = "forgot";
        $data["page_functions_js"] = "functions_forgot_password.js";
        $this -> views -> getView($this,"forgot",$data);
        
    }
    
}

?>
<?php 

class Errors extends Controllers {
    public function __construct(){
        parent::__construct();
    }
    public function NotFound(){
        $this -> views -> getView($this,"error");
        // echo "Mensaje desde el controlador";
    }    
}

$notFound = new Errors();
$notFound -> NotFound();
?>
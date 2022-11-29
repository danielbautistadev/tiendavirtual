<?php 

class Dashboard extends Controllers {
    public function __construct(){
        parent::__construct();
    }
    public function Dashboard() {
        $data["page_tag"] = "Dashboard - Tienda Virtual";
        $data["page_title"] = "Dashboard";
        $data["page_name"] = "daskboard";
        
        $this -> views -> getView($this,"dashboard",$data);
        // echo "Mensaje desde el controlador";
    }
    
}

?>
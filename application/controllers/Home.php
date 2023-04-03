<?php 
/*require 'load_user.php';*/
class Home extends CI_Controller {
    public function index() {
        $this->load->view('home/list');
    }
}

?>
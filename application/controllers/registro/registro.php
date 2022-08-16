<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller{

    require_once('controllers/principal.php');

    public function mostrar()
    {
        $this->load->view('registro/registroView');
    }
}

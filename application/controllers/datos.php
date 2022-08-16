<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datos extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('proyectoautogestionitr3');
    }

    public function Datos()
    {
        $nombre_user = $this->input->post('nombre_user');
        $email = $this->input->post('email');
        $contraseña = $this->input->post('NECESITO_UN_CIGARRILLO');
        $profesor = $this->input->post('profesorBoton');
        $alumno = $this->input->post('alumnoBoton');

        $datos = array(
            'nombre_user' => $nombre_user, 
            'email' => $email,
            'NECESITO_UN_CIGARRILLO' => $contraseña,
            'profesorBoton' => $profesor,
            'alumnoBoton' => $alumno
        );
        if($profesor)
        {
            redirect('profe/vistaProfe');
        }
        else
        {
            redirect('alumno/vistaAlumno');
        }
    }
}
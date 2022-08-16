<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modelo_Autogestion');
        $this->load->library('ion_auth');
        $this->load->helper('form');
    }


    public function index()
    {
        $this->load->view('principal/vistaPrincipal');
    }

    public function indexv()
    {
        $data['seleccionarGrupos']= $this->Modelo_Autogestion->selectgroups();
        $data['seleccionarProfe']= $this->Modelo_Autogestion->selectProfe();
        $data['insertarProfe']= $this->Modelo_Autogestion->insertProfe();
        $data['seleccionarAlumno']= $this->Modelo_Autogestion->selectAlumno();
        $data['insertarAlumno']= $this->Modelo_Autogestion->insertAlumno();

    }

    public function validacion_usuario()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules("username", "Username", "required|alpha_numeric");
        $this->form_validation->set_rules("email", "Email", "required|valid_email");
        $this->form_validation->set_rules("password", "Password", 
                                          "required|alpha_numeric|max_length[10]|min_length[6]");


        if ($this->form_validation->run() == FALSE)
        {
            //poner la vista de los formularios 
            $this->load->view('profe/registroProfe');
        }
        else
        {
            $username = $this->input->post("username");
            $password = $this->input->post('password');
            $email = $this->input->post('email');
    
            $this->ion_auth->register($username, $password, $email); 
     
            $this->load->view('profe/paginaProfes');
        }
    }

    /*public function registerprofe()
    {
        $username = $this->input->post("username");
        $password = $this->input->post('password');
        $email = $this->input->post('email');

        $this->ion_auth->register($username, $password, $email); 
 
        $this->load->view('profe/paginaProfes');

    }*/

    public function registeralumno()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $email = $this->input->post("email");

        $this->ion_auth->register($username, $password, $email);

        $this->load->view('alumno/paginaAlumno');
    }


    public function Alumno()
    {
        $this->load->view('alumno/registroAlumno');
    }
    public function Profesor()
    {
        $this->load->view('profe/registroProfe');
    }

    


}   

?>
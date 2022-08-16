<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_Autogestion extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function selectgroups()
    {
        $query = $this->db->query('Select * from groups');
        return $query;
    }

    public function selectProfe()
    {
        $query = $this->db->query('Select * from users');
        return $query;
    }

    public function insertProfe($username, $password, $email, $additional_data)
    {
        $arrayUsuario = array(
            'username'=> $username,
            'password' => $password,
            'email' => $email,
            'materia' => $additional_data,
        );

        $this->db->insert('users', $arrayUsuario);
    }

    public function selectAlumno()
    {
        $query = $this->db->query('Select * from users');
        return $query;
    }

    public function insertAlumno($username, $password, $email)
    {
        $arrayAlumno = array(
            'username'=> $username,
            'password' => $password,
            'email' => $email
        );
    }
}
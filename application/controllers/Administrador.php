<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Administrador
 *
 * @author Williams
 */
class Administrador extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if ($this->session->userdata("administrador")) {
            $this->load->view("templates/header");
            $this->load->view("administrador/home");
            $this->load->view("templates/footer");
        } else {
            redirect("index");
        }
    }
    
    public function camara(){
        if ($this->session->userdata("administrador")) {
            $this->load->view("templates/header");
            $this->load->view("administrador/camaraenvivo");
            $this->load->view("templates/footer");
        }  else {
            redirect("index");
        }
    }

}

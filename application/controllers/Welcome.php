<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('usuario');
    }

    public function index() {
        $this->load->view('template2/header');
        $this->load->view('login');
        $this->load->view('template2/footer');
    }

    public function indexuser() {
        $this->load->view('templates/header');
        $this->load->view('principal');
        $this->load->view('templates/footer');
    }

    public function form() {
        $this->load->view('templates/header');
        $this->load->view('formulario');
        $this->load->view('templates/footer');
    }

    public function olvideClave() {
        $this->load->view('template2/header');
        $this->load->view('olvidemiclave');
        $this->load->view('template2/footer');
    }

    public function login() {
        $rut = $this->input->post("rut");
        $clave = $this->input->post("clave");
        $arrayUser = $this->usuario->login($rut, $clave);

        if (count($arrayUser) > 0) {
            if ($arrayUser[0]->tipo == 0) {
                echo json_encode(array("msg" => "administrador"));
            } else {
                echo json_encode(array("msg" => "guardia"));
            }
        } else {
            echo json_encode(array("msg" => "404"));
        }
    }

    
    
    public function proceso() {
        $nombre = $this->input->post("nombre");
        echo json_encode(array("msg" => "Hola " . $nombre));
    }

}

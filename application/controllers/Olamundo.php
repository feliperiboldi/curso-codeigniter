<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Olamundo extends CI_Controller {
    public function index() 
    {
        $dados['mensagem'] = "Hello Word!";

        $this->load->view('olamundo', $dados);
    }

    public function teste()
    {
        $dados['mensagem'] = "Testando";
        
        $this->load->view('olamundo', $dados);
    }
}   
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {

        // this commment please !!

        $this->load->helper('url');
        $this->load->view("dashboard");
    }
}

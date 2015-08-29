<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function post() {

        $this->load->view("post"); 
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function show_404() {
        // $this->output->set_status_header('404');
        
        $data['page_title'] = 'Page Not Found - TinyMCE Documentation';
        
        // Load your custom 404 view
        $this->load->view('errors/html/error_404', $data);
    }
}
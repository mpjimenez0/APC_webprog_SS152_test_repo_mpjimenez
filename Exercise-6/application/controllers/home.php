<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
    {
        //load model
        $this->load->model('home_model');
        
        //get data from the database
        $data['images'] = $this->home_model->get_images();
        
        //load view and pass the data
        $this->load->view('home_view', $data);
    }
}
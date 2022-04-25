
<?php 
class Home extends CI_Controller{

    public function __construct()
    {
            parent::__construct();
            $this->load->model('patient_model');
            $this->load->helper('url_helper');
            $this->load->helper('assets_helper');
    }


    public function index()
    {
            $this->load->view('templates/header');
            $this->load->view('patient/index.php');
            $this->load->view('templates/footer');
    }
}
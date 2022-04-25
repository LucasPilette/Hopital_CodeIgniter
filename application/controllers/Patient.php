<?php
class Patient extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('patient_model');
                $this->load->helper('url_helper');
                $this->load->helper('assets_helper');
        }

        public function index()
{
        $data['patient'] = $this->patient_model->get_patient();
        $data['title'] = 'Liste de patient';
        $data['id'] = $_GET['id'] ?? '';

        $this->load->view('templates/header', $data);
        $this->load->view('patient/patientList', $data);
        $this->load->view('templates/footer');
}
public function view($slug = NULL)
{
        $data['patient_item'] = $this->patient_model->get_patient($slug);
        $data['title'] = $data['patient_item']['id'];
        if (empty($data['patient_item']))
        {
                show_404();
        }

        $data['id'] = $data['patient_item']['id'];

        $this->load->view('templates/header', $data);
        $this->load->view('patient/view', $data);
        $this->load->view('templates/footer');
}
}
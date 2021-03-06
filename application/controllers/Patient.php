<?php

class Patient extends CI_Controller
{

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
                $this->load->model('appointment_model');
                $data['patient_item'] = $this->patient_model->get_patient($slug);
                $data['appointments'] = $this->appointment_model->get_appointment_by_ID($slug);
                // $data['title'] = $data['patient_item']['id'];
                if (empty($data['patient_item'])) {
                        show_404();
                }

                $data['id'] = $data['patient_item']['id'];

                $this->load->view('templates/header', $data);
                $this->load->view('patient/view', $data);
                $this->load->view('templates/footer');
        }

        public function create()
        {       
                $this->load->helper('form');
                $this->load->library('form_validation');
                $this->load->helper('assets_helper');
                $this->load->helper('const_helper');

                $data['title'] = 'Ajouter un patient';

                $this->form_validation->set_rules('lastname', 'lastname', 'required|trim|min_length[1]|max_length[150]|regex_match[/'.REG_EXP_NAME.'/]');
                $this->form_validation->set_rules('firstname', 'firstname', 'required|trim|min_length[1]|max_length[150]|regex_match[/'.REG_EXP_NAME.'/]');
                $this->form_validation->set_rules('birthdate', 'birthdate');
                $this->form_validation->set_rules('mail', 'mail', 'required|trim|valid_email');
                $this->form_validation->set_rules('phone', 'phone|regex_match[/'.REG_EXP_PHONE.'/]');

                if ($this->form_validation->run() === FALSE) {
                        $this->load->view('templates/header', $data);
                        $this->load->view('patient/createPatient');
                        $this->load->view('templates/footer');
                } else {
                        $this->patient_model->createPatient();
                        $this->load->view('templates/header', $data);
                        $this->load->view('patient/index.php');
                        $this->load->view('templates/footer');
                }
        }

        public function modifyPatient(){
                $this->load->helper('form');
                $this->load->library('form_validation');
                $this->load->helper('assets_helper');
                $this->load->helper('const_helper');


                $id = intval(filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT));
                $data['title'] = 'Modifier un patient';
                $data['patient_item'] = $this->patient_model->get_patient($id);

                $this->form_validation->set_rules('lastname', 'lastname', 'required|trim|min_length[1]|max_length[150]|regex_match[/'.REG_EXP_NAME.'/]');
                $this->form_validation->set_rules('firstname', 'firstname', 'required|trim|min_length[1]|max_length[150]|regex_match[/'.REG_EXP_NAME.'/]');
                $this->form_validation->set_rules('birthdate', 'birthdate');
                $this->form_validation->set_rules('mail', 'mail', 'required|trim|valid_email');
                $this->form_validation->set_rules('phone', 'phone','required|regex_match[/'.REG_EXP_PHONE.'/]');

                if ($this->form_validation->run() === FALSE) {
                        $this->load->view('templates/header', $data);
                        $this->load->view('patient/modifyPatient');
                        $this->load->view('templates/footer');
                } else {
                        $this->patient_model->modifyPatient($id);
                        $this->load->view('templates/header', $data);
                        $this->load->view('patient/index.php');
                        $this->load->view('templates/footer');
                }
        }
}

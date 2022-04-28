<?php

class Appointment extends CI_Controller
{
    public function __construct()
        {
                parent::__construct();
                $this->load->model('appointment_model');
                $this->load->model('patient_model');
                $this->load->helper('url_helper');
                $this->load->helper('assets_helper');
        }

        public function index()
        {
                $data['appointment'] = $this->appointment_model->get_appointment();
                $data['patient'] = $this-> patient_model->get_patient();
                $data['title'] = 'Liste de rendez-vous';
                $data['id'] = $_GET['id'] ?? '';

                $this->load->view('templates/header', $data);
                $this->load->view('appointment/AppointmentList', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
                $data['appointment_item'] = $this->appointment_model->get_appointment($slug);
                $data['patient'] = $this-> patient_model->get_patient($slug);
                // $data['title'] = $data['appointment_item']['id'];
                if (empty($data['appointment_item'])) {
                        show_404();
                }

                $data['id'] = $data['appointment_item']['id'];

                $this->load->view('templates/header', $data);
                $this->load->view('appointment/view', $data);
                $this->load->view('templates/footer');
        }

        public function create()
        {       
                $this->load->helper('form');
                $this->load->library('form_validation');
                $this->load->helper('assets_helper');
                $this->load->helper('const_helper');

                $data['title'] = 'Ajouter un rendez-vous';
                $data['patient'] = $this->patient_model->get_patient();

                $this->form_validation->set_rules('date', 'date', 'required');
                $this->form_validation->set_rules('hour', 'hour', 'required');
                $this->form_validation->set_rules('patient', 'Patient', 'required');

                if ($this->form_validation->run() === FALSE) {
                        $this->load->view('templates/header', $data);
                        $this->load->view('appointment/createAppointment');
                        $this->load->view('templates/footer');
                } else {
                        $this->appointment_model->createAppointment();
                        $this->load->view('templates/header', $data);
                        $this->load->view('patient/index.php');
                        $this->load->view('templates/footer');
                }
        }

        public function modifyAppointment(){
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->helper('assets_helper');
            $this->load->helper('const_helper');


            $id = intval(filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT));
            $data['title'] = 'Modifier un rendez-vous';
            $data['patient_list'] = $this->patient_model->get_patient();
            $data['patient_item'] = $this->patient_model->get_patient($id);
            $data['appointment_item'] = $this->appointment_model->get_appointment($id);

            $this->form_validation->set_rules('date', 'date', 'required');
            $this->form_validation->set_rules('hour', 'hour', 'required');
            $this->form_validation->set_rules('patient', 'Patient', 'required');

            if ($this->form_validation->run() === FALSE) {
                    $this->load->view('templates/header', $data);
                    $this->load->view('appointment/modifyAppointment');
                    $this->load->view('templates/footer');
            } else {
                    $this->appointment_model->modifyAppointment($id);
                    $this->load->view('templates/header', $data);
                    $this->load->view('patient/index.php');
                    $this->load->view('templates/footer');
            }
    }
}
<?php
class Appointment_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_appointment($slug = FALSE)
{
        if ($slug === FALSE)
        {
                $query = $this->db->get('appointments');
                return $query->result_array();
        }

        $query = $this->db->get_where('appointments', array('id' => $slug));
        return $query->row_array();
}

public function createAppointment()
{
        $this->load->helper('url');

        $schedule = $this->input->post('date').' '.$this->input->post('hour').':'.$this->input->post('minutes');
        $data = array(
                'dateHour' => $schedule,
                'idPatients' => $this->input->post('patient')
        );
        

        return $this->db->insert('appointments', $data);
}

public function modifyAppointment($id)
{
        $this->load->helper('url');

        $schedule = $this->input->post('date').' '.$this->input->post('hour').':'.$this->input->post('minutes');
        $data = array(
                'dateHour' => $schedule,
                'idPatients' => $this->input->post('patient')
        );
        
        $this->db->where('id', $id);
        return $this->db->update('appointments', $data);
}
}
<?php
class Patient_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_patient($slug = FALSE)
{
        if ($slug === FALSE)
        {
                $query = $this->db->get('patients');
                return $query->result_array();
        }

        $query = $this->db->get_where('patients', array('id' => $slug));
        return $query->row_array();
}
}
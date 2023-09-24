
<?php

class Apartment_model extends CI_Model {


    function gig()
    {
		$query = $this->db->get('portfolio');
        return $query->result_array();

    }
    function elec()
    {
        $this->db->where('skill', 'electrician');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function assignment()
    {
        $this->db->where('skill', 'Assignment Helper');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function photo()
    {
        $this->db->where('skill', 'Photographer');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function project()
    {
        $this->db->where('skill', 'Project Writter');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function gen()
    {
        $this->db->where('skill', 'Generator Repairer');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    // all this belongs to work \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    function checkwork($user)
    {
        $this->db->where('user_id', $user);
        $query = $this->db->get('work');
        if($query->num_rows() > 0){
            $this->session->set_userdata('work', TRUE);
          return $query->row();
        }

    }

    function checkhire($user)
    {
        $this->db->where('hire_e', $user);
		$query = $this->db->get('hire');
        return $query->result_array();

    }
    function hiretime($user)
    {
        $this->db->where('hire_e', $user);
		$query = $this->db->get('hire');
        return $query->num_rows();

    }
    function dadipay($user)
    {
        $this->db->where('hire_e', $user);
        $this->db->select_sum('amount');
        $query = $this->db->get('hire')->row();
        return $query;

    }
     // aADMIN SECTION  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    
}
?>
 

<?php

class Agent_model extends CI_Model {

 function agent($token, $user, $inst, $dept, $phone, $line)
	{ 
        
        $data = array(
            'inst' => $inst,
            'dept' => $dept,
            'phone' => $phone,
            'line'	=> $line,
            'token' => $token,
            'user' => $user
            
        );

        $this->db->insert('agent', $data);
	}

function check($user)
    {
        $this->db->where('user', $user);
		$query = $this->db->get('agent');
  		return $query->num_rows();

    }
    function calltoken($user)
    {
        $this->db->where('user', $user);
		$query = $this->db->get('agent');
  		return $query->row();

    }
    function number_of_ref()
    {
        $all_tok = $this->session->userdata('tokk');
        $this->db->where('ref_id', $all_tok);
		$query = $this->db->get('signup');
  		return $query->num_rows();
    }

    function number_of_task()
    {
        $all_tok = $this->session->userdata('tokk');
        $this->db->where('ref_id', $all_tok);
		$query = $this->db->get('task');
  		return $query->num_rows();
    }

    function agentdata($user)
    {
        $this->db->where('user', $user);
		$query = $this->db->get('agent');
  		return $query->row();
    }
// this updates DATABASE WHEN USER GETS UPTO 10 REFERRALS WHO CREATED A TASK
    function update_database($task_user, $user)
    {
        $this->db->where('star', $user);
		$query = $this->db->get('agent');
        $row = $query->row_array();
        echo $row['star'];
        $star =  $row['star'] + 1;
    if($task_user >= 10 ){
        $data = array(
        'status' => 1,
        'star' =>  $star
        );
        $this->db->where('user', $user);
        $this->db->update('agent', $data);
    }
    if($task_user < 10 ){
        $data = array(
        'status' => 0,
        'star' =>  0
        );
        $this->db->where('user', $user);
        $this->db->update('agent', $data);
    }
    
    }


    function update($user, $total, $pr, $tot_ref, $task_user)
    {
   
        $data = array(
        'price' => $total,
        'total_ref' => $tot_ref,
        'total_ref' => $tot_ref,
        'performance' => $pr
        );
        $this->db->where('user', $user);
        $this->db->update('agent', $data);
    }

    function everything ()
    {
        $this->db->order_by('id', 'RANDOM');
        $query = $this->db->get('random');
  		return $query->result_array();
    }
    function MB ($user, $total)
    {
        $data = array(
            'withdraw' => 1,
            'price' => $total
            );
            $this->db->where('user', $user);
            $this->db->update('agent', $data);
    }

    function tagline($user)
    {
        $this->db->where('user_id', $user);
		$query = $this->db->get('signup');
  		return $query->row();
    }
	
}
?>
 
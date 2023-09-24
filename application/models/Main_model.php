<?php
class Main_model extends CI_Model {
public function __construct()
        {
        	$this->load->database();
        	  
        }
public function ins_port($image, $image_id)
	{
		$worker_id =  $this->session->userdata('id_work');
		$gall = array(
	        'image' => $image,
	        'worker_id' => $worker_id,
	        'image_id' => $image_id
		);
		$ins = $this->db->insert('gallery', $gall);

	}

public function check_key($email, $key)
		{
			$this->db->where('email', $email);
			$query = $this->db->get('workforce');
			if ($query->num_rows() > 0)
			{
				 $row = $query->row();
				if ($row->w_key == $key) 
				{
					$this->session->set_userdata('key', $row->w_key);
				}
				else
				{
					return 'Wrong Key';
				}
				
			}
			else
			{
				return 'your email does not exist';
			}

		}
public function store_unknownuser($ip, $unknown_id, $bro, $os)
		{
			$data = array(
		        'ip' => $ip,
		        'unknown_id' => $unknown_id,
		        'browser'	=> $bro,
				'os'	=> $os,
				'ref_id' => $this->session->tempdata('ref')  
				);

			$this->db->insert('daily', $data);
  			
		}
public function check_unknownuser_today()
	{
			$unknown = $this->session->userdata('unknown');
			$dat = date("Y-m-d");
			$this->db->where('unknown_id', $unknown);
			$this->db->where('daily_date', $dat);
			$query = $this->db->get('daily');
			$cut = $query->num_rows();
			return $cut;
		
	}

public function insert_description($name, $contact, $con, $ip, $bro, $worker, $job, $end_time)
		{
			$this->session->set_tempdata('worker_id', $worker, 259200);
			$this->session->set_tempdata('job_id', $job, 259200);

			$data = array(
		        'name' => $name,
		        'contact' => $contact,
		        'description'	=> $con,
				'work_id'	=> $worker,
				'job_id'	=> $job,
				'end_time'	=> $end_time,
				'user_id'	=> $this->session->userdata('user')
				);
			$insert = $this->db->insert('hire', $data);
      
			if ($insert) {
			return TRUE;
			}else{
			return FALSE;
			}
		}
public function job_detail_for_worker($worker)
		{
			$this->db->where('work_id', $worker);
  			$query = $this->db->get('workforce');
  	 		return $query->result();
		}
public function insert_user($name, $contact, $ip, $bro)
		{
			$u_id = $this->session->userdata('user');
  	 		$user = array(
              'name' => $name,
              'contact' => $contact,
              'user_id' => $u_id,
	          'ip'  => $ip,
	          'browser' => $bro
          );
 
        $ins = $this->db->insert('users', $user);
  			
		}

public function insert_w($key, $gender, $ip, $fn, $ln, $email, $location, $phone, $fbpl, $sell, $skill, $from, $to, $work_id, $user_id)
	{
		$worker = array(
	        'w_key' => $key,
	        'gender' => $gender,
	        'ip' => $ip,
	        'firstname' => $fn,
	        'lastname'  => $ln,
	        'email'  => $email,
	        'hireme'  => $sell,
	        'state'  => $location,
	        'referrer'  => $this->session->tempdata('ref'),
	        'contact'  => $phone,
	        'job'  => $skill,
	        'facebook_page'  => $fbpl,
	        'work_id'  => $work_id,
	        'user_id'  => $user_id,
	        'w_from'  => $from,
	        'w_to' => $to
		);
		$this->session->set_tempdata('worker_p', $work_id , 60);
		$this->session->set_userdata('key', $key);
		$ins = $this->db->insert('workforce', $worker);

	}
public function get_worker_details($worker_id)
	{
		$this->db->where('work_id', $worker_id);
  		$query = $this->db->get('workforce');
  	 	return $query->result();
	}
public function get_worker_details_with_key($key_p)
	{
		$this->db->where('w_key', $key_p);
  		$query = $this->db->get('workforce');
  	 	return $query->result();
	}
public function my_notifiaction($my_id)
	{
		$this->db->where('work_id', $my_id);
 		$query = $this->db->get('hire');
 		return $query->result_array();	

	}
public function get_hire($ref)
	{
		
        $this->db->where('referrer', $ref);
        $query = $this->db->get('workforce');
        return $query->num_rows();
	}
public function get_amount($ref)
	{
        $this->db->where('referrer', $ref);
        $query = $this->db->get('workforce');
        foreach ($query->result_array() as $key) 
        {

            $this->db->where('work_id', $key['work_id']);
            $this->db->select_sum('cut');
            $cut = $this->db->get('hire');
            foreach ($cut->result_array() as $row) 
            {
                echo $row['cut'];
            }

        }   
	}
public function total_hire($ref)	
	{	 
		$this->db->where('referrer', $ref);
        $query = $this->db->get('workforce');
        foreach ($query->result_array() as $key) 
        {
            $this->db->where('work_id', $key['work_id']);
            $cut = $this->db->get('hire');
            return $cut->num_rows();
        }   
	}
public function referral($ref)
{	
	$this->db->where('referrer', $ref);
    $query = $this->db->get('networkers');
    return $query->result_array();		
}
//admin database

public function call_userdata($u)
{
  	 	$this->db->from('userdata');
  	 	$query = $this->db->count_all_results();
  	 	return $query;
}
public function call_networkers()
{
			$this->db->from('networkers');
  	 	$query = $this->db->count_all_results();
  	 	return $query;
}
public function call_workforce()
{
		$this->db->from('workforce');
  	 	$query = $this->db->count_all_results();
  	 	return $query;		
}

//end admin code


























// CHESCK WORK CODES
public function get_job($worker)
{
			$this->db->where('work_id', $worker);
			$this->db->from('hire');
	  	 	$query = $this->db->count_all_results();
	  	 	return $query;	
}
public function get_decline($worker)
{
			$this->db->where('work_id', $worker);
			$this->db->where('decline', '1');
			$this->db->from('hire');
	  	 	$query = $this->db->count_all_results();
	  	 	return $query;	
}
public function get_completed($worker)
{
			$this->db->where('work_id', $worker);
			$this->db->where('completed', '1');
			$this->db->from('hire');
	  	 	$query = $this->db->count_all_results();
	  	 	return $query;	
}
public function get_rating($worker)
{

            $this->db->select_avg('w_rating');
            $rating = $this->db->get('hire');
            return $rating;
}

// END WORK CODES
public function bid_increase($no_bid, $j_id)
{
			$data = array(
		        'bids' => $no_bid,
				);

			$this->db->where('job_id', $j_id);
			$this->db->update('task', $data);
		
}
public function loadstash($id)
{
	$this->db->where('user_id', $id);
	$query = $this->db->get('signup');
	return $query->row();
		
}
public function insert_port($portf)
{
                $insert = $this->db->insert('portfolio', $portf);
		  	 		if ($insert) {
		  	 	$se = $this->set_session->userdata('portfolio');	    
		  	 	$this->session->set_tempdata('item2', 'your portfolio has been created', 20);
				return TRUE;
				
					}else{
				return FALSE;
			}
		  	 	

}
public function substash($id)
{
	$this->db->where('user_id', $id);
	$query = $this->db->get('signup');
	return $query->row();	
	
			
}
public function ccss($sta, $id)
{
	$this->db->where('user_id', $id);
	$query = $this->db->get('signup');
	$row = $query->row();
	if ($row) {	
		$u_stash = $row->stash;
		if ($u_stash > $sta) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
			
}
public function updatestash($id, $tot)
{
	$data = array(
		        'stash' => $tot,
				);
	$this->db->where('user_id', $id);
	$hello = $this->db->update('signup', $data);	
	if ($hello) {
				return TRUE;
				}else{
				return FALSE;
				}
}

public function tryy()
{
    $one = 1;
 
	$sql = $this->db->query("SELECT * FROM `task` WHERE emailsend = 1 limit 5 ");
	return $sql->result();
}
public function main()
{
	$id = $this->session->userdata('user_id');
	$this->db->where('user_id', $id);
	$query = $this->db->get('portfolio');
	return $query->row();	
	
			
}
public function bidding($jobid)
{
		$this->db->where('job_id', $jobid);
  	 	$query = $this->db->from('bid')->count_all_results();
  	 	return $query;
}
# this calls the show me model where jobid is used to get all bidders details from the database"
public function showme($show)
{
	    $this->session->set_tempdata('show', $show, 5);
		$this->db->where('job_id', $show);
  	 	$query = $this->db->get('bid');
  	 	return $query->result_array();
}
# this calls the get portfolioname for nene where user_id is used to get all bidders details from portfolio"
public function get_port_for_showme($show)
{$query = $this->db->from('bid')->count_all_results();
		$this->db->where('user_id', $user);
  	 	$query = $this->db->get('portfolio');
  	 	return $query->result_array();
}
# this belongs to the group above get_port_for_showme"

public function get_title_for_showme($show)
{
		$this->db->where('job_id', $show);
		$query = $this->db->get('task');
		return $query->row_array();	
}
public function cport($uid)
{
		$this->db->where('user_id', $uid);
  	 	$query = $this->db->from('portfolio')->count_all_results();
  	 	return $query;
}
#END EVERYTHING
}
?>
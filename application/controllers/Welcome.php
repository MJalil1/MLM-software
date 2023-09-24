<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
{
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
	$this->load->library('user_agent');
    $this->load->helper('url');
    $this->load->model('Main_model');
    date_default_timezone_set('Africa/Lagos');
	//$this->session->sess_destroy();
    /*if (!$this->session->userdata('LOGIN')) 
    {
        redirect('login');
    }*/
}
	public function index($data = null)
	{ 
 		//$this->session->set_userdata('user', '3a418fd91d');

		//GET THE USE REFERRAL id
		//sttore it so as to determine the time the user who isnt registered, logged in
		//store the user load browser data into database

		// result goes with an object style [$row->name]
		// result_array goes with an array style [$row['name']

		$ref = $this->uri->segment(1, 10);
	
		$this->session->set_tempdata('ref', $ref, 259200);
		$this->load->view('new_home');

    
	}

	//MLM START

		public function mlm( )
	{ 
		$this->load->view('mlm/home');
	}

	//MLM END
		public function intro( )
	{ 
		$this->load->view('agent/include/intro');
	}
		public function listview( )
	{ 
		$this->load->view('pro/list');
	}
		public function now( )
	{ 
		echo "string";
	}
		public function home( )
	{ 
		$this->load->view('new_home');
	}
		public function apart_form( )
	{ 
		$this->load->view('form/apartment');
	}
		public function signup( )
	{ 
		$this->load->view('form/signup');
	}
		public function login( )
	{ 
		$this->load->view('form/login');
	}
		public function success( )
	{ 
		$this->load->view('success');
	}
		public function agent( )
	{ 
		$this->load->view('agent/agent');
	}
		public function dashboard( )
	{
		$this->session->set_userdata('user_key', 'ksdjhk');
		//$this->session->unset_userdata('user_key') ;
		echo $this->session->unset_userdata('login', 'lp') ;
		if (!$this->session->userdata('user_key') and !$this->session->userdata('login')) 
	    {
	    	
	        redirect('login');
	    }
	    if($this->session->userdata('user_key') && !$this->session->userdata('login'))
	    {
	    	
	    	$this->load->view('dashboard/dashboard');
	    }
	   	if(!$this->session->userdata('user_key') && $this->session->userdata('login'))
	    {
	    	
	    	redirect('login');
	    }		
	}


}

	
    
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlm extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->database();
    $this->load->helper('text');
    $this->load->helper(array('form'));
    $this->load->library('session');
    $this->load->library('user_agent');
    $this->load->helper('url');
    $this->load->model('Apartment_model');
    $this->load->helper(array('email'));
    $this->load->library(array('email'));
    //$this->load->library('image_lib');
    date_default_timezone_set('Africa/Lagos');
    //$this->session->unset_userdata('key');
    //$this->session->sess_destroy();
    //$this->session->unset_userdata('key');
    /*if (!$this->session->userdata('LOGIN')) 
    {
        redirect('login');
    }*/
}

	public function index()
{

$this->db->where('ref_id', $this->input->post('user'));
$query = $this->db->get('mlm');
if ($query->num_rows() < 2){
echo "less";

foreach ($query->result_array() as $value)
{
echo $value['his_id'], '<span>1 referrers </span> <br>';
}

}else{
// NEST 1
foreach ($query->result_array() as $value)
{
	echo'<div class="w3-container user w3-margin-top w3- w3-hover-light-grey w3-padding w3-round-large" >
            <div class="w3-center">'.$value['name'].'</div>
              <div id="" class="w3-center w3-right total<?php echo $key ?>">'.$value['total_ref'].'</div>
        </div>';

$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');
$him = $value['his_id'];
// NEST 2

foreach ($query->result_array() as $value)
{
$this->db->where('his_id', $value['his_id']);
$query = $this->db->get('mlm');
$row = $query->row();
	echo'<div class="w3-container user w3-margin-top w3- w3-hover-light-grey w3-padding w3-round-large" >
            <div class="w3-center">'.$value['name'].'</div>
              <div id="" class="w3-center w3-right total<?php echo $key ?>">'.$value['total_ref'].'</div>
        </div>';
//echo '<span style="margin-left:10px;color:red;">'.$value['name'].' 2st their referrers of '.$row->ref_id.' this niggur referred '.$query->num_rows().' of people</span><br>';
$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');
$him = $value['his_id'];
// NEST 3
foreach ($query->result_array() as $value)
{
$this->db->where('his_id', $value['his_id']);
$query = $this->db->get('mlm');
$row = $query->row();
	echo'<div class="w3-container user w3-margin-top w3- w3-hover-light-grey w3-padding w3-round-large" >
            <div class="w3-center">'.$value['name'].'</div>
              <div id="" class="w3-center w3-right total<?php echo $key ?>">'.$value['total_ref'].'</div>
        </div>';
//echo '<span style="margin-left:15px;color:blue;">'.$value['his_id'].' 3st their referrers of '.$row->ref_id.' this niggur referred '.$query->num_rows().' of people</span><br>';
$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');
$him = $value['his_id'];
// NEST 4
foreach ($query->result_array() as $value)
{
$this->db->where('his_id', $value['his_id']);
$query = $this->db->get('mlm');
$row = $query->row();
	echo'<div class="w3-container user w3-margin-top w3- w3-hover-light-grey w3-padding w3-round-large" >
            <div class="w3-center">'.$value['name'].'</div>
              <div id="" class="w3-center w3-right total<?php echo $key ?>">'.$value['total_ref'].'</div>
        </div>';
//echo '<span style="margin-left:20px;color:green;">'.$value['his_id'].' 4st their referrers of '.$him.' this niggur referred '.$query->num_rows().' of people</span><br>';
$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');
// NEST 5
foreach ($query->result_array() as $value)
{
	echo'<div class="w3-container user w3-margin-top w3- w3-hover-light-grey w3-padding w3-round-large" >
            <div class="w3-center">'.$value['name'].'</div>
              <div id="" class="w3-center w3-right total<?php echo $key ?>">'.$value['total_ref'].'</div>
        </div>';
//echo '<span style="margin-left:25px;color:yellow;">'.$value['his_id'].' 5st their referrers </span><br>';
$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');
// NEST 6
foreach ($query->result_array() as $value)
{
	echo'<div class="w3-container user w3-margin-top w3- w3-hover-light-grey w3-padding w3-round-large" >
            <div class="w3-center">'.$value['name'].'</div>
              <div id="" class="w3-center w3-right total<?php echo $key ?>">'.$value['total_ref'].'</div>
        </div>';
//echo $value['his_id'],' ', '<span> 6st their referrers </span><br>';
$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');
// NEST 7
foreach ($query->result_array() as $value)
{
	echo'<div class="w3-container user w3-margin-top w3- w3-hover-light-grey w3-padding w3-round-large" >
            <div class="w3-center">'.$value['name'].'</div>
              <div id="" class="w3-center w3-right total<?php echo $key ?>">'.$value['total_ref'].'</div>
        </div>';
//echo $value['his_id'],' ', '<span> 7st their referrers </span><br>';
$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');
// NEST 8
foreach ($query->result_array() as $value)
{
	echo'<div class="w3-container user w3-margin-top w3- w3-hover-light-grey w3-padding w3-round-large" >
            <div class="w3-center">'.$value['name'].'</div>
              <div id="" class="w3-center w3-right total<?php echo $key ?>">'.$value['total_ref'].'</div>
        </div>';
//echo $value['his_id'],' ', '<span> 8st their referrers </span><br>';
$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');
// NEST 9
foreach ($query->result_array() as $value)
{
	echo'<div class="w3-container user w3-margin-top w3- w3-hover-light-grey w3-padding w3-round-large" >
            <div class="w3-center">'.$value['name'].'</div>
              <div id="" class="w3-center w3-right total<?php echo $key ?>">'.$value['total_ref'].'</div>
        </div>';
//echo $value['his_id'],' ', '<span> 8st their referrers </span><br>';
$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');
// NEST 10
foreach ($query->result_array() as $value)
{
	echo'<div class="w3-container user w3-margin-top w3- w3-hover-light-grey w3-padding w3-round-large" >
            <div class="w3-center">'.$value['name'].'</div>
              <div id="" class="w3-center w3-right total<?php echo $key ?>">'.$value['total_ref'].'</div>
        </div>';
//echo $value['his_id'],' ', '<span> 8st their referrers </span><br>';
$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');
// NEST 11
foreach ($query->result_array() as $value)
{
	echo'<div class="w3-container user w3-margin-top w3- w3-hover-light-grey w3-padding w3-round-large" >
            <div class="w3-center">'.$value['name'].'</div>
              <div id="" class="w3-center w3-right total<?php echo $key ?>">'.$value['total_ref'].'</div>
        </div>';
//echo $value['his_id'],' ', '<span> 8st their referrers </span><br>';
$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');
// NEST 12
foreach ($query->result_array() as $value)
{
	echo'<div class="w3-container user w3-margin-top w3- w3-hover-light-grey w3-padding w3-round-large" >
            <div class="w3-center">'.$value['name'].'</div>
              <div id="" class="w3-center w3-right total<?php echo $key ?>">'.$value['total_ref'].'</div>
        </div>';
//echo $value['his_id'],' ', '<span> 8st their referrers </span><br>';
$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');


}

}

}

}

}

}

}	

}	

}	

}

}

}

}

}    

	public function level()
{
		$level = '';
		$this->db->where('ref_id', '447');
        $query = $this->db->get('mlm');
	        if ($query->num_rows() < 2){

	        }else{
	        	$level = 1;
	        	
	        $sum = 0;       
		        foreach ($query->result_array() as $value)
		        {
		        	
		        	$this->db->where('ref_id', $value['his_id']);
	        		$query = $this->db->get('mlm');
	        		//echo $query->num_rows();
					$sum+= $query->num_rows();
		        }
		        if($sum < 4){
		        	exit();
		        }else{
		        	$level = 2;

	      
		        }

		        

	        }
	        echo $level;
	       
}                    
                       



function start(){
$this->session->set_userdata('u', $this->input->post('user'));
	$this->db->where('ref_id', $this->session->userdata('u'));
	$query = $this->db->get('mlm');
	if ($query->num_rows() < 2)
	{

	}
	$this->db->where('his_id', $this->session->userdata('u'));
	$this->db->set('total_ref', $query->num_rows(), FALSE);
	$this->db->update('mlm');
		$this->start2($query->result_array());
	
}

function start2($data = ''){
	$sum = 0;
	foreach ($data as $value) {
		$this->db->where('ref_id', $value['his_id']);
		$query = $this->db->get('mlm');
		echo $value['his_id'],'<br>';
		$sum+= $query->num_rows();
		
	}
		if ($sum < 4)
	{
		echo "less";
	}

	$this->db->where('his_id', $this->session->userdata('u'));
	$this->db->set('total_ref', 'total_ref+'.$sum.'', FALSE);
	$this->db->update('mlm');

	foreach ($data as $value) {
		$this->db->where('ref_id', $value['his_id']);
		$query = $this->db->get('mlm');
		$this->start3($query->result_array());
		
	}
		
}
function start3($data = ''){
	$sum = 0;
	foreach ($data as $value) {
		$this->db->where('ref_id', $value['his_id']);
		$query = $this->db->get('mlm');
		echo $value['his_id'],'<br>';
		$sum+= $query->num_rows();
		
	}
		if ($sum < 4)
	{
		echo "less";
	}

	$this->db->where('his_id', $this->session->userdata('u'));
	$this->db->set('total_ref', 'total_ref+'.$sum.'', FALSE);
	$this->db->update('mlm');

	foreach ($data as $value) {
		$this->db->where('ref_id', $value['his_id']);
		$query = $this->db->get('mlm');
		$this->start4($query->result_array());
		
	}
	
}
function start4($data = ''){
	$sum = 0;
	foreach ($data as $value) {
		$this->db->where('ref_id', $value['his_id']);
		$query = $this->db->get('mlm');
		echo $value['his_id'],'<br>';
		$sum+= $query->num_rows();
		
	}
		if ($sum < 4)
	{
		
	}

	$this->db->where('his_id', $this->session->userdata('u'));
	$this->db->set('total_ref', 'total_ref+'.$sum.'', FALSE);
	$this->db->update('mlm');

	foreach ($data as $value) {
		$this->db->where('ref_id', $value['his_id']);
		$query = $this->db->get('mlm');
		//$this->start4($query->result_array());
		
	}
	
}






public function total()
{
$this->db->where('his_id', $this->input->post('user'));
$query = $this->db->get('mlm');
$num = $query->num_rows();
if ($num < 1) {
echo  '0';
	
}else{
	 $row = $query->row() ;
 echo $row->total_ref;
	
}
	

}


public function totals()
{


$this->db->where('ref_id', '447');
$query = $this->db->get('mlm');
$num = $query->num_rows();
if ($query->num_rows() < 2){
	if ($query->num_rows() > 0){
	$this->db->where('his_id', '447');
	$this->db->set('total_ref', $num, FALSE);
	$this->db->update('mlm');
	}



}else{

// NEST 1
foreach ($query->result_array() as $value)
{

$query = $this->db->get('mlm');
$him = $value['his_id'];
$num = $query->num_rows();

$this->db->where('his_id', '447');
$this->db->set('total_ref', $num, FALSE);
$this->db->update('mlm'); 


foreach ($query->result_array() as $value)
{


$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');
$him = $value['his_id'];

// NEST 3
foreach ($query->result_array() as $value)
{


$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');
$him = $value['his_id'];

// NEST 4
foreach ($query->result_array() as $value)
{


$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');

// NEST 5
foreach ($query->result_array() as $value)
{

$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');

// NEST 6
foreach ($query->result_array() as $value)
{

$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');

// NEST 7
foreach ($query->result_array() as $value)
{

$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');

// NEST 8
foreach ($query->result_array() as $value)
{

$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');

// NEST 9
foreach ($query->result_array() as $value)
{

$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');

// NEST 10
foreach ($query->result_array() as $value)
{

$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');

// NEST 11
foreach ($query->result_array() as $value)
{

$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');

// NEST 12
foreach ($query->result_array() as $value)
{

$this->db->where('ref_id', $value['his_id']);
$query = $this->db->get('mlm');


}

}

}

}

}

}

}	

}	

}	

}

}

}
//echo $sum;
}

}












public function mainpage()
{
	//$this->db->where('ref_id', $value['his_id']);
	$query = $this->db->get('mlm');
	foreach ($query->result()  as  $key =>  $row)
	{?>
	
		 <div class="w3-container w3-margin-top w3-white w3-hover-light-grey w3-padding w3-round-large" onclick="w3.show('#more<?php echo $key ?>')" style=" width:;">
          <div class="w3-left">
            <div class="w3-center"><?php echo $row->name ?></div>
              <div class="w3-small w3-text-grey"><?php echo $row->his_id ?></div>
          </div>
            <div class="w3-right w3-small">
              <div id="" class="w3-center total<?php echo $key ?>">56</div>
              <div class="w3-text-pink">total</div>
            </div>
        </div>
		
	
		
<div id="more<?php echo $key ?>" class="w3-modal" style="display: none;">
  <div class="w3-transparent " style="position: absolute;bottom: 0;width: 100%;">

    <div id="reg_show<?php echo $key ?>" class="w3-light-grey w3-animate-right" style="position: fixed;bottom:0; height: 300px; width: 100%;z-index: 2;display: none;">
      <h4 class="w3-center "> <b>Register Under <?php echo $row->name ?></b></h4>

      <form class="" style="position: relative; padding: 5px 10px;">
          <input type="text" id="his<?php echo $key ?>" name="" class="w3-hide" value="<?php echo $row->his_id ?>">
          <input type="text" id="namez<?php echo $key ?>" name="" class="w3-input w3-round-large w3-border-0 w3-padding-16 w3-margin-bottom" placeholder="Name" >
        
          <br>
      
          <div class="w3-btn w3-text-green w3-round-xlarge send<?php echo $key ?>">Send</div>
          <div class="w3-btn w3-text-red w3-round-xlarge" onclick="w3.hide('#reg_show<?php echo $key ?>')">Cancel</div>
      </form>
    </div>

    <div class="w3-white w3-container w3-animate-bottom" style="position: relative; height: 510px;min-height: 350px; width: 100%">

      <div class="w3-center" style="width:100%;height: 5px;padding:;margin:4px 0 0 0;">
        <div class="w3-black w3-center w3-round-large" style="height:5px;max-width:20px;margin:auto;"></div>
      </div>
      <h5 class="" style="letter-spacing: 3px;text-align: center; flex: 2"> <b><?php echo $row->name ?></b> <span class="w3-text-red w3-right" onclick="w3.hide('#more<?php echo $key ?>')"><b>x</b></span> </h5>
      
      <div style="display: flex; flex-wrap: wrap;">

        <div style="height: 80px; width: 40%;margin:5%;padding-top:10px;" class="w3-red w3-round-large">
          <div>
            <div class="w3-center ">Total</div>
            <div class="total<?php echo $key ?> w3-center">56</div>
          </div>
        </div>

        <div style="height: 80px; width: 40%;margin:5%;padding-top:10px; " class="w3-light-grey w3-round-large">
          <div>
            <div class="w3-center">Level</div>
            <div class="w3- w3-center">56</div>
          </div>
        </div>

        <div style="height: 80px; width: 40%;margin:5%;padding-top:10px;" class="w3-light-grey w3-hide w3-round-large">
          <div>
            <div class="w3-center">Total</div>
            <div class="w3- w3-center">56</div>
          </div>
        </div>

        <div style="height: 80px; width: 40%;margin:5%;padding-top:10px;" class="w3-green w3-hide w3-round-large">
          <div>
            <div class="w3-center">Total</div>
            <div class="w3- w3-center">56</div>
          </div>
        </div>

      </div><!-- end flex-->

      <h5><b>Refferals</b></h5>
      <div class="users<?php echo $key ?> w3-border-bottom"  style="min-height:150px; max-height: 200px; overflow-x: scroll;margin-bottom: 15px;">   



      </div>

      <div id="reg" style="margin-bottom: 20px;">
        <div class="w3-btn w3-text-red w3-mobile w3-hover-red oi w3-round-large" onclick="w3.show('#reg_show<?php echo $key ?>')">Register</div>
      </div>


    </div>
  </div>
  
</div>
<script>
	$('.send<?php echo $key ?>').click(function(){
	  var his = $('#his<?php echo $key ?>').val();
      var name = $('#namez<?php echo $key ?>').val();
					$.ajax({
                      url:'Mlm/enter',
                      //dataType: 'json',
                      method:"POST",
                      data:{his:his, name:name},
                        beforeSend: function(){ 
                          //alert('data')
                        },
                        success: function(data)
                        {
                        	          $.ajax({
							              url:'<?php echo base_url();?>Mlm',
							              method:"POST",
							              beforeSend: function(){ 
							                 // alert('sending');
							              },
							              success: function(data)
							              {
							                //alert('sent');
							                $('#name').html(data);
							              }
							          })
                        	w3.hide('#reg_show<?php echo $key ?>')
                        }
                   })
                  
	})
setInterval(() =>{
var user = '<?php echo $row->his_id ?>';
			$.ajax({
              url:'Mlm/total',
              method:"POST",
              data:{user:user},
              beforeSend: function(){ 
                  //alert('');
              },
              success: function(data)
              {
                //alert(data);
                $('.total<?php echo $key ?>').html(data);
              }
          })

          $.ajax({
              url:'Mlm',
              method:"POST",
              data:{user:user},
              beforeSend: function(){ 
                 // alert('sending');
              },
              success: function(data)
              {
                //alert(data);
                $('.users<?php echo $key?>').html(data);
              }
          })
          $.ajax({
              url:'<?php echo base_url();?>Mlm/start',
              method:"POST",
              data:{user:user},
              beforeSend: function(){ 
                  //alert('');
              },
              success: function(data)
              {
                //alert('');
               
              }
          })
    }, 5000)
</script>
<?php
	}
}



public function enter()
{
 			$this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'name', 'trim|required');

            if ($this->form_validation->run() == TRUE)
       		{
            	     $data = array(
                        'name' => $this->input->post('name'),
                        'his_id' => bin2hex(openssl_random_pseudo_bytes(5)),
                        'ref_id' => $this->input->post('his')
                        
                     );
                		$insert = $this->db->insert('mlm', $data);
                		if($insert){
                			echo "success";
                		}else{
                			echo "error";
                		}

            }else{
            	echo "no result";
            }
}


//end everything             
}



<?php 
$this->session->unset_tempdata('couts');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>DADI| Find and Hire Artisans around you</title>
<meta name="viewport"  content="width=device-width, initial-scale=1">
<meta name="description" content="DADI| Find and Hire Artisans around you">
<meta name="keywords" content=" Connecting Artisans and frelancers to potential consumers">
<meta name="robots"  content="index, follow">
<meta property="og:url"           content="https://www.dadi.com.ng" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Find and Rent Appartments" />
<meta property="og:description"   content="Connecting Artisans and frelancers to potential consumers" />
<meta property="og:image"         content="https://www.dadi.com.ng/asset/image/dadi128.png" />
<link rel="manifest" href="<?php  echo base_url();?>manifest.json">
<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>asset/image/dadi128.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="<?php  echo base_url();?>asset/css/w3.css"/>
<link rel="stylesheet" href="<?php  echo base_url();?>asset/css/st.css"/>
<link rel="stylesheet" href="css1/bootstrap.css"/>
<script src="<?php echo base_url();?>asset/script/jquery-3.3.1.js"></script>
<script src="w3.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Inria+Serif|Open+Sans+Condensed:300|Playfair+Display|Quicksand|Titillium+Web&display=swap" rel="stylesheet">

</head>
<style >
body{
  background-color: #f6f7ff;
  font-family: Tahoma,Geneva, sans-serif;
  /*font-family: Lucida, sans Unicode,Lucida Granade;*/
}
.colors{color:#434458;}
.colors2{color:#24385a;}
.bk_col{background-color: #f6f7ff;}
.w3-special{box-shadow:0 2px 3px 0 rgba(68, 144, 206, 0.2), 0 5px 15px 0 rgba(15, 32, 51, 0.19)}
.w3-card-1{box-shadow:0px 0px 0px 0 rgb(167 168 185 / 13%), 0px 9px 10px 0px rgb(165 162 177 / 10%)}
.input{padding:12px;background-color: ;}
</style>

</head>
<body class="w3-" style="  max-width:800px; margin: auto;">
<div id="maindiv" class=" " style="position: relative;min-height:100vh; padding:0 0 20px 0;" >

  <div class="w3-white" style="position: fixed;top:0; height: 50px;max-width:800px; width:100%;padding:10px 0 0 10px;z-index: 3;">
      <div class="w3-large w3-center">Multi Level Marketing</div>
  </div>

      <div class="w3-white " style="position: relative;top:50px;height: 50px; width:100%;padding:10px 0 0 10px;">
          <div class="w3-large" style="float: left; font-weight: 700;"> <i class="fa fa-bars w3-margin-right" style="font-weight: 300;" ></i> Divine`s Profile</div>
      </div>
<section class="w3-transparent w3- w3-container" style="height: auto;text-transform: capitalize; width:100%;position: relative;top:50px;margin-bottom: 100px;padding:25px 10px 50px 10px;">

     <div> Level: <b id="level"></b> </div>
     <div> Total Referral:<b id="total"></b> </div>
     <div> Payment/user: <b>N 200</b> </div>
     <div> 
      <h2>names of users</h2> 
        <div id="name">
          
        </div>
    </div>

</section>


<footer class="w3-hide" style="position: absolute;bottom: 0; width: 100%; height: 200px; margin:0 0 0 0 ;background-color: #434458;">
  <div></div>
</footer>
</div>
</body>
</html>
<script >
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
          $.ajax({
              url:'<?php echo base_url();?>Mlm/level',
              method:"POST",
              beforeSend: function(){ 
                  //alert('');
              },
              success: function(data)
              {
                //alert('');
                $('#level').html(data);
              }
          })

          $.ajax({
              url:'<?php echo base_url();?>Mlm/start',
              method:"POST",
              beforeSend: function(){ 
                  //alert('');
              },
              success: function(data)
              {
                //alert('');
               
              }
          })
          $.ajax({
              url:'<?php echo base_url();?>Mlm/total',
              method:"POST",
              beforeSend: function(){ 
                  //alert('');
              },
              success: function(data)
              {
                //alert(data);
                $('#total').html(data);
              }
          })
</script>

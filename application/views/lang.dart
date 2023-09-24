 
  <script type="text/javascript">
    var image = document.images[0]
    var bigImage = document.createElement("img")

    bigImage.onload = function(){
      image.src = this.src
      image.className = "noblur";
    }
    setTimeout(function() {
       bigImage.src = "<?php echo base_url(), "asset/image/new2.jpg"?>";
     }, 10000)
   

   $('#four').click(function(){
  window.location.href = "<?php echo base_url() . 'Aceptform/work'?>";
})
  </script>

void main() {
	int a = 5;
	print(a);
}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>DADI</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<title>Dadi.com.ng-Find Electricians-programmers and eventPlanner Nigeria</title>
<meta name="description" content=" Make money from your skills by working with DADI">
<meta name="keywords" content="Handymen in Nigeria, Electricians in Nigeria Programmers in Nigeria,  graphic designer in Nigeria,painter in Nigeria, phone/Laptop Repairs in Nigeria, ">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>asset/image/d 3.png">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet"
href="<?php echo base_url();?>asset/css/w3.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="<?php echo base_url();?>asset/script/jquery-3.3.1.js">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style >
 body{
      font-family: 'Candara body copy';
      font-family:'Inria Serif', serif;
      font-family:'Titillium Web', sans-serif;
    

    }

#mes{
  font-size: 13px;
  font-family: 'Candara body copy';
}
  #maindiv{
    max-width:800px; margin: auto;
    height: 500px;
  }
  #header{
    height:80px;
    max-width: 800px;
    position:;
  }
  .w3-btnhover:hover{background-color:rgb(156, 77, 220)!important;}

  .w3-hov:hover{border-color:rgb(21, 46, 228)!important;}
  .w3-hover-dadi:hover{color:white!important;background-color:rgb(47, 102, 202)!important}
  .w3-card-1{box-shadow:0px 0px 0px 0 rgba(33, 31, 31, 0.13), 0px 3px 3px 0 rgba(0,0,0,0.12)}
  .w3-card-5{box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2), 0px 20px 20px 0 rgba(0,0,0,0.19)}
  .w2-modal-content{margin:auto;background-color:;position:relative;padding:0;outline:0;width:600px}
    #body{
        height:100vh;
        max-width:1000px;
    }

 
 .w3-special-2{box-shadow: 0 2px 10px 0 rgba(224, 218, 218, 0.16), 0 2px 10px 0 rgba(165, 182, 220, 0.12);}
  .w3-card-1{box-shadow:0px 0px 0px 0 rgba(33, 31, 31, 0.13), 0px 3px 3px 0 rgba(0,0,0,0.12)}


  /* The container must be positioned relative: */
.custom-select {
  position: relative;
  font-family: Arial;

}

.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  color: black!important;
  border-bottom: 2px solid black!important;
  background-color:rgb(244, 242, 253);
}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: black;
  padding: 8px 16px;
  border-bottom: 1px solid transparent;
  border-color: grey;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  ;
  position: absolute;
  background-color: white;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>

</head>
<body class="w3-white" style="  max-width:800px; margin: auto;">
    <div id="body" style="background-color: white;">
      <div class="w3-top " style="z-index:1;max-width: 800px;background-color: rgb(156, 77, 220);height:55vh; margin-top: 50px; border-bottom-right-radius:10%;border-bottom-left-radius:60%;"></div>
      <div  style="max-width:800px;z-index:3;" class="w3-top w3-bar w3-white w3-special-2 w3-padding">
  <div class="w3-center" >
  <img src='<?php echo base_url(), "asset/image/Graphic1.png"?>' style="height: 30px; width:80px; margin-top: 5px; margin-left: 5px;">
  </div>
</div>
<!--HEADER-->
      <!--colour-->
<?php if ($this->session->userdata('work_start')) { ?>
  <h4 class="w3-text-white w3-left w3-animate-zoom " style="font-weight:600;position:relative;z-index:2; margin: 60px 10px 0 10px; "> Hi  <?php echo $this->session->userdata('name') ?></h4>
<?php } ?>
      <?php if (!$this->session->userdata('work_start')) { ?>
  <div class="w3-text-white w3-center w3-animate-zoom" style="font-weight:20;position:relative;z-index:2; margin: 50px 10px 0 10px; ">
    <h3 style="z-index:3;">WORK FORM</h3>
    <h4 class="w3-text-white w3-center w3-small" style=" color:black;">
     To begin, you have to fill the work form, indicating the service you offer. We have over 100 service options which you can choose from
    </h4>
    </div>
    <!--text-->


<?php echo form_open_multipart('');?>

<div class="w3-he w3-display-container w3-container w3-round w3-card-1 w3-animate-zoom" style="z-index:2;height: auto;max-width:800px;background-color:rgb(255, 255, 255); position: relative;font-weight:50;margin: 50px 10px 0 10px; ">


  <P id="mesg" class="w3-text-black">
   <?php 
     if (isset($_SESSION['message'])) 
     {
      $message = $_SESSION['message'];
       echo $message
    ;
     }else{
      echo '';
     }
     ?>
   </P>
      <p class="w3-show">
        <label>Full Name </label> 
        <input id= "name" class="w3-input w3-hov " name="name" type="text"  value="<?php echo set_value('name'); ?>"  style="width:90%;outline: none; border-bottom:2px solid #040319;" >
        <?php echo form_error('name', "<div class='w3-text-red w3-small'>" ,"</div>"); ?>
        <?= (isset($error))?$error:'' ?>
      </p>
      <p class="w3-show">
        <label> Email </label> 
        <input id= "email" class="w3-input w3-hov" name="email" type="text"  value="<?php echo set_value('email'); ?>"  style="width:90%;outline: none; border-bottom:2px solid #040319;" >
        <?php echo form_error('email', "<div class='w3-text-red w3-small'>" ,"</div>"); ?>
        <?= (isset($error))?$error:'' ?>
      </p>
      <p class="w3-hide">
        <label> Category </label> 
        <input id= "category" class="w3-input w3-hov" name="category" type="text" value="all category" style="width:90%;outline: none; border-bottom:2px solid #040319;" >
       <?php echo form_error('category', "<div class='w3-text-red w3-small'>" ,"</div>"); ?>
      </p>

      <p>
        <p  style="margin-top:5px;"> Skill/Service </p> 
    <div class="custom-select" style="width:90%;">
        <select id="skill" class="" style="outline:none;width:90%;" name="skill" value="<?php echo set_value('skill'); ?>">
        <option value="" disabled selected > --Choose Your Service --</option>        
        <option value="Architecture">Architecture</option>
        <option value="Ads Services">Ads Services</option>
        <option value="AC Installation">AC Installation</option>
        <option value="Advance Excel Skills ">Advance Excel Skills </option>
        <option value="Assignment Handler">Assignment Writters</option>
        <option value="Affiliate Marketing">Affiliate Marketing</option>
        <option value="Animated Explainers">Animated Explainers</option>
        <option value="Aluminium and Glass Works">Aluminium and Glass Works</option>
        <option value="" disabled  > B</option>
        <option value="Branding">Branding</option>    
        <option value="Branding Services">Blogging</option>    
        <option value="Business Startup">Business Startup</option>    
        <option value="Beads Making">Beads Making</option>    
        <option value="Body Massage ">Body Massage </option>    
        <option value="Baking">Baking (snacks, making cakes)</option> <option value="" disabled  >C</option>
        <option value="Copywriting">Copywriting</option>
        <option value="Content Writing">Content Writing</option>    
        <option value="Comedy">Comedy (Comedian)</option>    
        <option value="Cover Letters">Cover Letters</option>
        <option value="Comedic Writing ">Comedic Writing </option>   
        <option value="Calligraphy">Calligraphy</option>   
        <option value="Cartoon Making">Cartoon Making</option>   
        <option value="Car Mechanic">Car Mechanic</option>   
        <option value="CCTV Installation">CCTV Installation</option>   
        <option value="Cooking">Cooking</option>
        <option value="Composers">Composers</option>
        <option value="Chatbots Creation">Chatbots Creation</option>
        <option value="cybersecurity-data-protection">cybersecurity-data-protection</option>
        <option value="Character Animation">Character Animation</option>
        <option value="" disabled  >D</option>   
        <option value="Digital Marketing">Digital Marketing</option>
        <option value="Desktop Applications Developers">Desktop Applications Developers</option>
        <option value="Data Analysis">Data Analysis</option> 
        <option value="Data Entry">Data Entry</option> 
        <option value="" disabled  >E</option>  
        <option value="Electronic repairs">Electronic repairs (Television, radio, etc) </option> 
        <option value="Data Minning">Data Minning </option> 
        <option value="Editing">Editing</option> 
        <option value="E-book writing">E-book writing</option> 
        <option value="E-Commerce Development">E-Commerce Development</option>
        <option value="Event Planning">Event Planning</option>
        <option value="" disabled  >F</option>
        <option value="Flyer Distributors">Flyer Distributors</option>
        <option value="Fitness Trainers">Fitness Trainers</option>
        <option value="Furniture Making">Furniture Making</option>
        <option value="Floor Tiling">Floor Tiling</option>
        <option value="Fashion Design">Fashion Design</option>
        <option value="Fancy Brick Making">Fancy Brick Making</option>
        <option value="Flower Gardening">Flower Gardening</option>
        <option value="Flipping">Flipping</option>
        <option value="" disabled  >G</option>  
        <option value="Graphic Design">Graphic Design</option>
        <option value="Game Development">Game Development</option>
        <option value="Generator Mechanic">Generator Mechanic</option>
        <option value="Greeting Cards Writing">Greeting Cards Writing</option>
        <option value="General Programming">General Programming</option>
        <option value="Greeting Cards Writing">Greeting Cards Writing</option>
        <option value="" disabled  >H</option>  
        <option value="Hair Dressing">Hair Dressing</option>
        <option value="Hair Barbing">Hair Barbing</option>
        <option value="Hairstyling">Hairstyling</option>
        <option value="Housing Agents">Housing Agents</option>
        <option value="" disabled  >I</option>  
        <option value="Influencer Marketing">Influencer Marketing</option>
        <option value="Investing">Investing</option>
        <option value="Interior Decoration">Interior Decoration</option>
        <option value="Illustrator Design">Illustrator Design</option>
        <option value="Industrial Generator Repairs">Industrial Generator Repairs</option>
        <option value="Iron Bending">Iron Bending</option>
        <option value="Instrumentation">Instrumentation</option>
        <option value="IT Support Services">IT Support Services</option>
        <option value="" disabled  >L</option>  
        <option value="Logo Animationr">Logo Animation</option>
        <option value="Lyrics Writing ">Lyrics Writing </option>
        <option value="Legal Writing">Legal Writing</option>        
        <option value="Legal Consulting">Legal Consulting</option> 
        <option value="Laptop Repairs">Laptop Repairs</option>
        <option value="" disabled  >M</option>          
        <option value="Manicure">Manicure</option>        
        <option value="Mobile phone Repair">Mobile phone Repair</option>              
        <option value="Flipping">Mobile App Development</option>
        <option value="Flipping">Machine Learning</option>
        <option value="Music Composing and Production">Music Composing and Production</option>
        <option value="Making Sound Effects and Jingles">Making Sound Effects and Jingles</option>
        <option value="Mixing and Mastering">Mixing and Mastering</option>
        <option value="Movie Editing">Movie Editing</option>
        <option value="Movies and Music Reviews">Movies and Music Reviews </option>
       <option value="Makeup business">Makeup business</option>
       <option value="Market Research">Market Research</option>
       <option value="Music Promotion">Music Promotion</option>
       <option value="" disabled  >P</option>
       <option value="Proofreading">Proofreading</option>
       <option value="Plumbing">Plumbing</option>
       <option value="Painting">Painting</option>
       <option value="Python Programming">python programming</option>
       <option value="Packaging Design">Packaging Design</option>
       <option value="Poster Design">Poster Design</option>
       <option value="Project Management">Project Management</option>
       <option value="Presentations">Presentations</option>
       <option value="Public Speaking ">Public Speaking </option>
       <option value="Photography">Photography</option>
       <option value="Professional Project Writters">Professional Project Writters</option>
       <option value="product-design-services">product-design-services</option>
       <option value="presentations design">presentations design</option>
       <option value="Professional Writing">Professional Writing</option>
       <option value="Press Release">Press Release</option>
       <option value="Product Reviews">Product Reviews </option>
       <option value="Poetry">Poetry </option>
       <option value="Panel beating">Panel beating</option>
       <option value="Proposal and Grant Writing ">Proposal and Grant Writing </option>
       <option value="Proofreading">Proofreading </option>
       <option value="" disabled  >R</option>
       <option value="Resume Writing">Resume Writing</option>
       <option value="Resume and CV writing">Resume and CV writing</option> 
       <option value="" disabled  >S</option> 
       <option value="Solar Power Installation">Solar Power Installation</option>
       <option value="Software development">Software development</option>
       <option value="Survey">Survey </option>
       <option value="Social Media Marketing">Social Media Marketing</option>
       <option value="Search Engine Optimisation">Search Engine Optimisation</option>
       <option value="Startup and Business Plans">Startup and Business Plans</option>
       <option value="Singing">Singing</option>
       <option value="Sketching">Sketching</option>
       <option value="Subtitles">Subtitles</option>
       <option value="Speechwriting">Speechwriting</option>
       <option value="Scriptwriting">Scriptwriting</option>
       <option value="Shoemaking and Repairs">Shoemaking and Repairs</option>
       <option value="Subtitles Writing">Subtitles Writing</option>
       <option value="Slideshow Videos">Slideshow Videos</option>
       <option value="Song writting">Song writting</option>
       <option value="Sketching">Sketching</option>
       <option value="" disabled  >T</option>
       <option value="Tailoring">Tailoring</option>
       <option value="Teaching Online">Teaching Online</option>
       <option value="Translation Services">Translation Services</option>
       <option value="T-Shirts Designs">T-Shirts Designs</option>
       <option value="Technical Writing ">Technical Writing </option>
       <option value="Tattoo Design">Tattoo Design</option>
       <option value="" disabled  >U</option>
       <option value="UX (User Experience) Design ">UX (User Experience) Design </option>
       <option value="User Testing">User Testing</option>
       <option value="" disabled  >V</option>
       <option value="Visual Effects">Visual Effects</option>
       <option value="Virtual Assistant">Virtual Assistant</option>
       <option value="Video Shooting">Video Shooting</option>
       <option value="Vocalists">Vocalists</option>
       <option value="Vocal Tuning">Vocal Tuning</option>
       <option value="" disabled  >W</option>
       <option value="Wrist Watches Repair">Wrist Watches Repair</option>
       <option value="Web Design">Web Design</option>
       <option value="Whiteboard Animation">Whiteboard Animation</option>
       <option value="Web Scraping">Web Scraping</option>
       <option value="3D Animation">3D Animation</option>
       <option value="2D Animation">2D Animation</option>
       <option value="Website Development">Website Development</option>
       <option value="Web Programming">Web Programming</option>
       <option value="wiring/Installations">Wiring/Installations</option>
        <option value="Wordpress Services">Wordpress Services</option>
          </select>
        </div>
       <?php echo form_error('skill', "<div class='w3-text-red w3-small'>" ,"</div>"); ?>
      </p>

      <p>
        <label>Sell Yourself </label> 
        <p class=" w3-text-grey" style="font-size: 0.5em;">Why should someone hire you ?</p>
        <textarea id= "description" class="w3-input w3-hov" name="description" type="tel" value="<?php echo set_value('description'); ?>" style="width:90%;outline: none; border-bottom:2px solid #040319;" ></textarea>
       <?php echo form_error('description', "<div class='w3-text-red w3-small'>" ,"</div>"); ?>
      </p>
    

      <p>
        <label> Business Contact </label> 
        <input id= "bc" class="w3-input w3-hov" name="bc" type="tel" value="<?php echo set_value('bc'); ?>" placeholder="active phone number" style="width:90%;outline: none; border-bottom:2px solid #040319;" >
       <?php echo form_error('bc', "<div class='w3-text-red w3-small'>" ,"</div>"); ?>
      </p>

      <p>
        <p style="">Current Location </p> 
      <div class="custom-select" style="width:90%;">
        <select id="location" class="w3-select " style="font-size: 12px;border-bottom: 2px solid black; width:90%; outline:none;" name="location" value="<?php echo set_value('location'); ?>">
        <option value="" disabled selected> States</option>        
        <option value="Abia">Abia</option>
        <option value="Adamawa">Adamawa</option>
        <option value="Akwa Ibom">Akwa Ibom</option>
        <option value="Anambra">Anambra</option>
        <option value="Bauchi">Bauchi</option>
        <option value="Bayelsa">Bayelsa</option>
        <option value="Benue">Benue</option>
        <option value="Borno">Borno</option>
        <option value="Cross River">Cross River</option>
        <option value="Delta">Delta</option>
        <option value="Ebonyi">Ebonyi</option>
        <option value="Edo">Edo</option>
        <option value="Ekiti">Ekiti</option>
        <option value="Enugu">Enugu</option>
        <option value="Gombe">Gombe</option>
        <option value="Imo">Imo</option>
        <option value="Gigawa">Gigawa</option>
        <option value="Kaduna">Kaduna</option>
        <option value="Katsina">Katsina</option>
        <option value="Kebi">Kebi</option>
        <option value="Kogi">Kogi</option>
        <option value="Kwara">Kwara</option>
        <option value="Lagos">Lagos</option>
        <option value="Nassarawa">Nassarawa</option>
        <option value="Niger">Niger</option>
        <option value="Ogun">Ogun</option>
        <option value="Ondo">Ondo</option>
        <option value="osun">osun</option>
        <option value="Oyo">Oyo</option>
        <option value="Plateau">Plateau</option>
        <option value="Rivers">Rivers</option>
        <option value="Sokoto">Sokoto</option>
        <option value="Taraba">Taraba</option>
        <option value="Yobe">Yobe</option>
        <option value="Zamfara">Zamfara</option>
        <option value="Gause">Gause</option>
        <option value="Abuja">Abuja</option>
        
          </select>
        </div>
       <?php echo form_error('location', "<div class='w3-text-red w3-small'>" ,"</div>"); ?>
      </p>
      <p>
        <label> Discount  (optional)</label> 
        <p class="w3-tiny w3-text-grey">Giving discounts on your service, might increase your chances of hire</p>
        <select id= "discount" class="w3-select"  name="discount" type="text" value="<?php echo set_value('discount'); ?>" style="width:60%;outline: none; border-bottom:2px solid #040319;" >
        
        <option value="" disabled selected> --Discount in % --</option>        
        <option value="0">none</option>
        <option value="10%">10%</option>
        <option value="15%">15%</option>
        <option value="20%">20%</option>
        <option value="25%">25%</option>
        <option value="30%">30%</option>
        <option value="35%">35%</option>
        <option value="40%">40%</option>
        <option value="45%">45%</option>
        <option value="50%">50%</option>
          </select>
       <?php echo form_error('discount', "<div class='w3-text-red w3-small'>" ,"</div>"); ?>
</p>      


 <button id= "det-submit" onclick="signup()" class=" w3-btn w3-special-2 w3-btnhover w3-bar w3-section w3-text-white w3-hover-text-white w3-round-xlarge"  style=" outline: none; width:100%; background-color:rgb(93, 14, 156);" type="submit" name="submit">
         Submit
 </button>
</div>
</form>
  <?php } ?>
      <!--echo your WORK message,then set a session that wont echo it again-->
<?php if ($this->session->userdata('work_start')) {
?>
<div id="tab" class="w3-white w3-small w3-special-2 " style="position: relative;z-index: 2; top:30%; max-width: 800px; height: auto; font-weight:50; margin:5% 5% 15% 5%;">
<div class="w3-green w3-center" style="position:relative; top:-50px;height: 50px; width: 100%; "><li  class="w3-text-white fa fa-check fa-2x" style="position:relative;top:14px;right: 25px;"></li></div>
<div id="mes" class="w3-container" style="position:relative; top:-90px; margin-top: ;">
<h5 style="font-weight: bold; text-align: center;">Your application has been received</h5>
<p style="letter-spacing: 0.9px;"> You are expected to gather documents/images of previous works that shows you can perform the service you choose. A text message will be sent to you when we begin.</p>
<p style="letter-spacing: 0.5px;">Do you have friends who are also skilled? Please invite them clicking the button below</p>
</div>
<a class="" style="outline:none; text-decoration:none; "  href="https://api.whatsapp.com/send?text= DADI is recruiting people with Skills and Handi-work, To work with DADI, visit https://www.dadi.com.ng now.. " data-action="share/whatsapp/share"><div id="" class=" w3-green w3-hover-shadow w3-center " style="position:relative;max-width: 300px; height: 35px;padding: 8px; margin:auto;top:-50px; margin:5px;">Share On Whatsapp</div></a>

<div id="" class="w3-blue w3-center w3-card-5 w3-hover-shadow" style="position:relative;max-width: 300px; height: 35px;padding: 8px; margin:5px;top:-40px;">
    <a style="text-decoration: none;" id="sh" href="https://twitter.com/share?ref_src=twsrc%5Etfw" 
              class="twitter-share-button share1"
              data-text="DADI is recruiting people with Skills and Handi-work, To work with DADI, visit https://www.dadi.com.ng now" 
              data-via="QuotedReplies @Techpointdotng @microtraction @Cc_HUB"  
              data-url="dadi.com.ng/?ref=<?php echo $this->session->userdata('tokk')?>"  
              data-hashtags="DADIcares" 
              data-show-count="true">
              <div id="" class="w3- w3-center " style="width: 100%; ">share on twitter</div>
              </a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
    </div>
</div>
<script>
$('#agg').click(function(){

})
</script>
<?php

} ?>

</div>
      

    </div>
</body>
</html>
<script >
  var x, i, j, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
</script>


























\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

<html>
<head>
  <title>Your Website Title</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
</head>
<body>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
  <div class="fb-share-button" 
    data-href="https://www.your-domain.com/your-page.html" 
    data-layout="button_count">
  </div>

</body>
</html>


<html>
<head>
  <title>Your Website Title</title>
    <!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
</head>
<body>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0"></script>

  <!-- Your like button code -->
  <div class="fb-like" 
    data-href="https://www.your-domain.com/your-page.html" 
    data-layout="standard" 
    data-action="like">
  </div>

</body>
</html>
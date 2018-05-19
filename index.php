<?php
session_start();
?>
<link href="bootstrap.min.css" rel="stylesheet">

<?php 
  include("header.php");
  include("library.php");
  noAccessIfLoggedIn();
?>
<div class="container">
 	<h1>Welcome to Sunrise Hospital's Official Website</h1>
    <p class="block-quote">Our aim has always been to bring world–class medical care within the reach of common man.</p>
    <p><?php include('slideshow.php');?></p>
  <?php 
    if(isset($_POST['lemail'])){
      $i = login($_POST['lemail'],$_POST['lpassword'],"users");
      if($i==1){
        echo '<script type="text/javascript"> window.location = "add_patient.php" </script>';
      }
    }else if(isset($_POST['remail'])){
      $i = register($_POST['remail'],$_POST['rpassword'],$_POST['rfullname'],"users");
      if($i==1){
        echo '<script type="text/javascript"> window.location = "add_patient.php"</script>';
      }
    }else{
      echo "<div class='alert alert-info'>
              <strong>Info!</strong> Login or Register to be able to book your appointment.</div>";
    }
    unset($_POST);
  ?>
<div class="row">
  <div class="col col-xl-6 col-sm-6">
      <h2>Login</h2>
      <form action="index.php" method="POST">
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="lemail" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="lpassword" required>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Login">
          <input type="reset" class="btn btn-danger">
        </div>
          
      </form>
  </div>
          
  <div class="col col-xl-6 col-sm-6" id="register1">
    <form method="post" action="index.php">
	    <h2>Registration</h2>
	      <div class="form-group">
	        <label for="usr">Full Name:</label>
	        <input type="text" class="form-control" name="rfullname" required>
	      </div>
        
        <div class="form-group">
	        <label for="usr">Email:</label>
	        <input type="email" class="form-control" name="remail" required>
	      </div>
	          
        <div class="form-group">
	        <label for="pwd">Password:</label>
	        <input type="password" class="form-control"  name="rpassword" required>
	      </div>

	      <div class="form-group">
	        <input type="submit" class="btn btn-primary">
	        <input type="reset" class="btn btn-danger"></button>
	      </div>
    </form>
  </div>
</div>
</div>
<?php include("footer.php"); ?>
<div class="newsletter" id="contact">
    <div class="container">
      <div class="col-md-6 w3agile_newsletter_left">
        <h3>Contact With us</h3>
        <p>Developer:Abhishek Kumar</p>
          <p>Founder:Aman Shrivastava</p>
          <p>Co-Founder:Gaurav Jha</p>
          <p>Phone No:9646431257</p>
          
      </div>
      <div class="col-md-6 w3agile_newsletter_right">
        <form method="post" action="contacting_thanks.php">
<div class="cars" style="height:450px;">
<div class="heading">CONTACT US</div><hr/>
<div style="width:100%;height:500px;">
<label>Name</label>
<input type="text" name="Name" placeholder="EX: Abhishek Kumar"   style="margin-left:12%;  background-color:#F5F5F5;  width:30%;"/><br/><br/>
<label>Company</label>&nbsp;
<input type="text" name="Company" placeholder="Ex: Nearur"style="margin-left:7.7%; background-color:#F5F5F5;  width:30%;"/><br/><br/>
<label>Email</label>
<input type="email" name="Email" placeholder="Ex: Email"style="margin-left:11.8%; background-color:#F5F5F5;  width:30%;"/><br/><br/>
<label>Phone</label>
<input type="Phone" name="Phone" placeholder="EX: 9685741236" style="margin-left:11.5%; background-color:#F5F5F5;  width:30%;"/><br/><br/>
<label>Message</label>
<textarea type="text" name="Message" placeholder="Ex: Please Enter your message here"style="margin-left:9%; width:40%; height:20%;  background-color:#F5F5F5;"></textarea><br/><br/>
<div class="button"align="left"style="margin-left:5%;">
<input type="submit" name="submit" value="Submit" style="width:30%; height:30px; background-color:#9F0000; color:#FFFFFF; border:1px solid #530000;"/>
<input type="reset" value="Reset" style="width:30%; height:30px; background-color:#2D2D2D; color:#FFFFFF; border:1px solid #333333;"/></div>
</div>
</div>
</form>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>

<div class="team" id ="team">
    <div class="container">
      <h3 class="head">Meet Our Team</h3>
      <p class="urna">.</p>
      <div class="agile_team_grids">
        <div class="col-md-3 agile_team_grid">
          <div class="agile_team_grid_main">
            <img src="images/t1.jpg" alt=" " class="img-responsive">
            <div class="p-mask">
                
            </div>
          </div>
          <div class="agile_team_grid1">
            <h3>Aman Shrivastava</h3>
            <p>Founder</p>
          </div>
        </div>
        <div class="col-md-3 agile_team_grid">
          <div class="agile_team_grid_main">
            <img src="images/t2.jpg" alt=" " class="img-responsive">
            <div class="p-mask">
                
            </div>
          </div>
          <div class="agile_team_grid1">
            <h3>Gaurav Jha</h3>
            <p>Co-founder</p>
          </div>
        </div>
          <div class="col-md-3 agile_team_grid">
          <div class="agile_team_grid_main">
            <img src="images/t3.jpg" alt=" " class="img-responsive">
            <div class="p-mask">
                
            </div>
          </div>
          <div class="agile_team_grid1">
            <h3>Abhishek Sinha</h3>
            <p>Developer</p>
          </div>
        </div>
        <div class="col-md-3 agile_team_grid four">
          
          
        </div>
      
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>


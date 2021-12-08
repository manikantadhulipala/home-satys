<?php 

include('connection.php');
extract($_REQUEST);
if(isset($send))
{
mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')");	
$msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}

?>

<footer style="background-color: #393939;">
    <div class="container-fluid">
	<div class="col-sm-4 ">
    
		<img src="logo/ahwlogo2.png"width="200px"height="50px"/><br><br>

    <p class="text-justify">Welcome to Azure Homestays - A safe haven. We hope you have a comfortable stay. We support authentic family run homestays across India. We aim to provide travelers a unique cultural experience and the locals an alternate source of income. Staying in homestays give an enriching experience. Homestay owners host their spaces in many different ways, which makes each homestay experience unique and full of discovery. Live in an informal setting and get an opportunity to interact with hosts and co-travelers, experience the local culture & traditions and taste India’s rich cuisine.</p><br>
      <center><a href="about.php" class="btn btn-danger"><b>Read More..</b></a></center><br><br><br>
 <?php
  include('Social ican.php')
?>
	</div>&nbsp;&nbsp;
	<div class="col-sm-4 text-justify">
	       <h3 style="color:#cdd51f;">Contact Us</h3>
      <p style="color:white;"><strong>Address:&nbsp;</strong>No. 13, Raja Ram Mohan Roy Road, Bangalore Karnataka – 560025</p>
      <p style="color:white;"><strong>Email-Id:&nbsp;</strong>homestay@gmail.com</p>
      <p style="color:white;"><strong>Contact Us:&nbsp;</strong>(+91)1234567890</p><br><br><br>
    
      <center><img src="image/devlop/img2.jpg"class="img-responsive"style="width:200px;height:150px;border-radius:100%;"></center>

    </div>&nbsp;

	<div class="col-sm-4 text-center">
      <div class="panel panel-primary">
        <div class="panel-heading">Feedback</div>
          <div class="panel-body">
            <?php echo @$msg; ?>
      <div class="feedback">
      <form method="post"><br>
        <div class="form-group">
          <input type="text" name="n" class="form-control" id="#"placeholder="Enter Your Name"required>
        </div>
        <div class="form-group">
          <input type="Email" name="e" class="form-control" id="#"placeholder="Email"required>
        </div>
        <div class="form-group">
          <input type="Number" name="mob" class="form-control" id="#"placeholder="Mobile Number"required>
        </div>
        <div class="form-group">
          <textarea type="Text" name="msg" class="form-control" id="#"placeholder="Type Your Message"required></textarea>
        </div>
          <input type="submit" value="send" name="send" class="btn btn-primary btn-group-justified"required>
      </form>     
        </div>
       </div>
      </div>
    </div>


  </div>
</footer>

<footer class="container-fluid text-center"style="background-color:#000408;height:40px;padding-top:10px;color:#f0f0f0;">
  <p>Developed with love by Lokesh, Manikanta, and Haarika | All Rights Reserved 2021 </p>
</footer>


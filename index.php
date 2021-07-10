<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "image_upload");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$address = mysqli_real_escape_string($db, $_POST['address']);
	$blood_group = mysqli_real_escape_string($db, $_POST['blood_group']);
	$gender = mysqli_real_escape_string($db, $_POST['gender']);
	$dob = mysqli_real_escape_string($db, $_POST['dob']);
	$medicine= mysqli_real_escape_string($db, $_POST['medicine']);
	$mquantity= mysqli_real_escape_string($db, $_POST['mquantity']);

	
	

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, name, email,phone, address, blood_group,gender,dob,medicine,mquantity) VALUES ('$image',  '$name', '$email', '$phone','$address','$blood_group','$gender','$dob','$medicine','$mquantity')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
		echo "<script type='text/javascript'>alert('Request submitted successfully! Team will get back to you through email.')</script>";
  	}else{
  		$msg = "Failed to upload image";
		echo "<script type='text/javascript'>alert('failed! Please try again')</script>";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 70%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
   
   
   
   
   
   
footer {
  background: url(../images/footer-bg.png);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  padding-top: 100px;
  padding-bottom: 50px;
}

footer p {
  color: #ffffff;
}

footer h6 {
  color: #ffffff;
  font-size: 20px;
  margin-bottom: 15px;
}

footer img {
  width: 70%;
  margin-bottom: 20px;
}

footer .nav .nav-item {
  background-color: #055c78;
  margin-right: 10px;
  border-radius: 50px;
  width: 40px;
  height: 40px;
  z-index: 15;
}

footer .nav .nav-item:hover {
  background: #ffffff;
}

footer .nav .nav-item .nav-link {
  color: #ffffff;
  transform: translate(-5%, 20%);
}

footer .nav .nav-item .nav-link:hover {
  color: #055c78;
}

hr {
  background: #ffffff;
  width: 95%;
  float: left;
}

footer h5 {
  color: #0690be;
  padding: 0.5rem 1rem;
  margin-top: 15%;
  font-weight: 600;
}

.nav .nav-link {
  color: #ffffff;
  padding: 0.2rem 1rem;
  z-index: 15;
}

.nav .nav-link:hover {
  color: #09df90;
  transition: 0.5s;
}

footer .footer-store {
  margin-top: 20px;
}

footer .footer-store img {
  width: 110%;
}

footer .footer-store .apple-logo {
  width: 120%;
  padding-left: 1rem;
}

footer .author {
  text-align: center;
  margin-top: 30px;
}

footer .scroll-top {
  position: absolute;
  bottom: 30px;
  right: 10px;
  border: 1px solid #055c78;
  padding: 2px 10px;
  border-radius: 100%;
  font-size: 20px;
  background: #055c78;
  z-index: 15;
}

footer .scroll-top:hover {
  background: #ffffff;
}

/*footer .scroll-top a:hover{
  background-color: #055C78;
}*/

footer .scroll-top:hover a i {
  color: #055c78;
}

footer .scroll-top a {
  color: #ffffff;
}

footer .scroll-top a i {
}

   
   
   
   
</style>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!-- Font Awesome Integration -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Google Font Integration -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Animation Integration -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

     <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" /><link rel="stylesheet" href="./style.css">




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />




</head>
<body>
<div id="content">

  <form method="POST" action="index.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	

 <label for="name">Patient's name</label>
	  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="1" 
      	name="name" 
      	placeholder="Your Name" required></textarea>
  	</div>
	
	
	 <label for="email">Email</label>
	  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="1" 
      	name="email" 
      	placeholder="Email..."></textarea>
  	</div>
	  	
		 <label for="phone">Phone Number</label>
		<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="1" 
      	name="phone" 
      	placeholder="Phone Number" required></textarea>
  	</div>
		  	<label for="address">Address</label><div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="1" 
      	name="address" 
      	placeholder="Address..." required></textarea>
  	</div>
	
	
	
	<label for="dob">Date of Birth</label>
  <input type="date" id="dob" name="dob" required><br>
	
	  <label for="blood_group">Blood group:</label>
  <select id="blood_group" name="blood_group">
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
	<option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
  </select>
	
		  <label for="gender">Gender:</label>
  <select id="gender" name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
    
  </select>
  
  
  <div>
	<p>Please upload your prescription</p>
  	  <input type="file" name="image">
  	</div>
	  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Additional instruction regarding the prescription..."></textarea>
  	</div>
	
	
	<!--here-->
<!--
<label >Please let us know any more medicine you need</label>
<div class="table-responsive">
<div align="center">
<button type="button" name="remove_all" class="btn btn-info remove_all">Remove All Fields</button>
</div>


<table class="table table-bordered" id="myTable" style="width:10%">
<tr>
<th> Medicine name</th>
<th>Quantity</th>

</tr>
<tr>
<td><input type="text" contenteditable="true" name="medicine" class="clear" id="medicine"></td>
<td><input type="text" contenteditable="true" name="mquantity" class="clear" id="mquantity"></td>

<td></td>

</tr>


</table>


<div align="center">

<button type="button" name="add" id="add" class="btn btn-success ">+ Add</button>

</div>

<br />
<div id="inserted_item_data"></div>

</div>

<!--here to--->
<div class="container">
  <table class="_table">
    <thead>
      <tr>
       <th> Medicine name</th>
       <th>Quantity</th>
        <th>Address</th>
        <th width="50px">
          <div class="action_container">
            <button class="success" onclick="create_tr('table_body')">
              <i class="fa fa-plus"></i>
            </button>
          </div>
        </th>
      </tr>
    </thead>
    <tbody id="table_body">
      <tr>
        <td>
          <input type="text" class="form_control" name="medicine" placeholder="Jhon Dhoe" id="medicine">
        </td>
        <td>
          <input type="text" class="form_control" name="mquantity" placeholder="+880177x-xxxxxx" id="mquantity">
        </td>
        <td>
          <textarea class="form_control" placeholder="Enter Your Address..."></textarea>
        </td>
        <td>
          <div class="action_container">
            <button class="danger" onclick="remove_tr(this)">
              <i class="fa fa-close"></i>
            </button>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<!-- partial -->
  <script  src="./script.js"></script>
<!--here-->





	

	
	
  	<div>	
  		<button type="submit" class="btn" name="upload" class="btn btn-success">Place order</button>
  	</div>
  </form>
</div>


  

</body>
</html>

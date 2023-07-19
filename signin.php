<?php
	
include('conn.php');
if(isset($_SESSION['IS_LOGIN'])){
	header('location:index.php');
	die();
}
if(isset($_POST['submit'])){
	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	
	$res=mysqli_query($conn,"select * from user where username='$username'");
	
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$verify=password_verify($password,$row['password']);
		if($verify==1){
			$_SESSION['IS_LOGIN']=true;
			$_SESSION['UNAME']=$row['name'];

			header('location:index.php');
			die();
		}else{
      echo "<script>
      alert('Please Enter correct Password');
  window.location.href='signin.php';
        </script>";
		}
	}else{
    echo "<script>
    alert('Please Enter correct username');
window.location.href='signin.php';
      </script>";
	}
	
}
?>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Lenztravels</title>
<link rel="icon" type="image/x-icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
<link rel="stylesheet" href="assets/css/Responsive-footer-1.css">
    <link rel="stylesheet" href="assets/css/Responsive-footer-basicfooter.css">
    <link rel="stylesheet" href="assets/css/Responsive-footer.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Babylonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Beautiful-Footer.css">
<link rel="stylesheet" href="assets/css/Pop-Out-Vertical-Nav-w-Footer--Social-Links--1-Vertical-Nav.css">
    <link rel="stylesheet" href="assets/css/Pop-Out-Vertical-Nav-w-Footer--Social-Links--1.css">



<body style="background: rgb(14,8,54);">
<div class="container" style="background:yellow;color:black;margin-top:20%;margin-bottom:50%;padding:10px; border-radius:15px;text-align: center;">
<img src="assets/img/logo.png" style="width: 150PX;">
<div class="jumbotron" style="background: rgb(14,8,54);color:white;border-radius:15px;text-align:justify;">



<form method="post" >

<div class="form-outline mb-4">
<label class="form-label" for="form2Example1" >Username</label>
<input type="text" id="form2Example1" class="form-control" name="username" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example2">Password</label>
<input type="password" id="form2Example2" class="form-control" name="password" />
   
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      
    </div>

  <!-- Submit button -->
  <button type="submit" name="submit"  class="btn btn-primary btn-block mb-4">Login</button>
  </form>

  <div class="col">
      <!-- Simple link -->
      <a href="forgotp.php">Forgot password?</a>
    </div>
  </div>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="signup.php">Register</a></p>
  <!--  <p>or Login with:</p>
    

    <button type="button" class="btn  btn-link btn-floating mx-1">
      <i class="fab fa-google" style="color:red;"></i>
    </button> -->

   

  
  </div>



</div>

</div>




</body>
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
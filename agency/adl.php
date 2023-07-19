<?php
include('../conn.php');

if(isset($_POST['submit'])){
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$pass=mysqli_real_escape_string($conn,$_POST['pass']);
	
	$res=mysqli_query($conn,"select   * from agentregistration where Email='$email' AND STATUS='APPROVED' ");
	
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$verify=password_verify($pass,$row['password']);
		if($verify==1){
		
			$_SESSION['Aname']=$row['AgencyName'];

			header('location:../agency/home.php');
			die();
		}else{
      echo "<script>
      alert('Please Enter correct Password');
  window.location.href='../agency/index.php';
        </script>";
		}
	}else{
    echo "<script>
    alert('Please Enter correct username');
window.location.href='../agency/index.php';
      </script>";
	}
	
}
?>
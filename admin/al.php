	<?php
include('../conn.php');

if(isset($_POST['submit'])){
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$pass=mysqli_real_escape_string($conn,$_POST['pass']);
	
	$res=mysqli_query($conn,"select * from admin where email='$email'");
	
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$verify=password_verify($pass,$row['password']);
		if($verify==1){
		
			$_SESSION['admin']=$row['user'];

			header('location:../admin/home.php');
			die();
		}else{
      echo "<script>
      alert('Please Enter correct Password');
  window.location.href='../admin/index.php';
        </script>";
		}
	}else{
    echo "<script>
    alert('Please Enter correct username');
window.location.href='../admin/index.php';
      </script>";
	}
	
}
?>
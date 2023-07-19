<?php 
 include ("conn.php");

 if(isset($_POST['submit'])) {

      $name= $_POST['name'];
      $Uname = $_POST['uname'];
      $email=$_POST['email'];
     
       $select=$_POST['select'];
       $pass=$_POST['pass'];
       $passe= password_hash($pass,PASSWORD_DEFAULT);
      
   
  
 
       if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }      

    if(mysqli_num_rows(mysqli_query($conn,"select * from user where username='$Uname'"))>0){
      echo "<script>
      alert('Username Already Present or Taken Choose another');
  window.location.href='SignUp.php';
        </script>";
    }
     


$sql="INSERT INTO user(name,username,password,email,gender) VALUES ('$name','$Uname','$passe',' $email',' $select')";

if($conn->query($sql) === TRUE){


  echo "<script>
		alert('Record Added');
window.location.href='index.php';
			</script>";
  

 
}

 else {
  echo "<script>
  alert('Record  not Added');
window.location.href='index.php';
    </script>";
}

 }
$conn->close();
?>


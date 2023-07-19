<?php 
 include ("../conn.php");

 if(isset($_POST['submit'])) {

      $ustatus= $_POST['ustatus'];
      $agency= $_POST['agency'];
  
 
       if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }      

  

$sql="UPDATE agentregistration SET STATUS='$ustatus' WHERE AgencyName='$agency'";

 if($conn->query($sql) === TRUE){


  echo "<script>
		alert('Agency  Approved Sucessfully');
window.location.href='approvea.php';
			</script>";
  

 
}

 else {
  echo "<script>
  alert('Please Try again');
window.location.href='../admin/approvea.php';
    </script>";
}

 }
$conn->close();
?>



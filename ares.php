<?php

include ("conn.php");

if(isset($_POST['submit'])) {

     $name= $_POST['name'];
     $Aname = $_POST['Aname'];
      $email=$_POST['email'];
      $Cnum=$_POST['mobile'];   
      $address=$_POST['address'];  
      $pass=$_POST['pass'];
      $passe= password_hash($pass,PASSWORD_DEFAULT);
  
 

      if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }      

   if(mysqli_num_rows(mysqli_query($conn,"select * from agentregistration where AgencyName='$Aname'"))>0){
     echo "<script>
     alert('Agency Name Already Present or Taken Choose another');
 window.location.href='agencyris.php';
       </script>";
   }
    


$sql="INSERT INTO agentregistration(name,AgencyName,Email,ContactNumber,Address,STATUS,password) VALUES ('$name','$Aname','$email','$Cnum','$address','NA','$passe')";

if($conn->query($sql) === TRUE){


 echo "<script>
       alert('Thank You ... Your Request is sucessfully uploaded ..!');
window.location.href='index.php';
           </script>";
 


}

else {
 echo "<script>
 alert('Error So Sorry please try again');
window.location.href='agencyris.php';
   </script>";
}

}
$conn->close();


?>
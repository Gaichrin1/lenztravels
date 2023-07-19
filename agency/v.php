<?php 
 include ("../conn.php");

 if(isset($_POST['submit'])) {

      $Vnum= $_POST['Vnum'];
      $Vname= $_POST['Vname'];
      $Aname= $_POST['Aname'];
      $Vtype= $_POST['Vtype'];
      $Snum= $_POST['Snum'];
      $Sloc= $_POST['Sloc'];
      $Eloc= $_POST['Eloc'];
      $Rtime= $_POST['Rtime'];
      $Stime= $_POST['Stime'];
      $Etime= $_POST['Etime'];
      $date= $_POST['date'];
      $P1= $_POST['P1'];
      $P2= $_POST['P2'];
      $P3= $_POST['P3'];
      $fare= $_POST['fare'];
      
   
  
 
       if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }      

  

$sql="INSERT INTO vehicledetails(VehicleNumber,VehicleName,AgencyName,VehicleType,NumberOfSeats,StartLocation,EndLocation,ReportingTime,StartTime,EndTime,Date,PickUpPoint1,PickUpPoint2,PickUpPoint3,Fare,	STATUS) 
VALUES (' $Vnum',' $Vname','$Aname','$Vtype','$Snum','$Sloc','$Eloc',' $Rtime','$Stime',' $Etime',' $date','$P1',' $P2','$P3','$fare','NA')";

if($conn->query($sql) === TRUE){


  echo "<script>
		alert('vehicle  Added Sucessfully');
window.location.href='../agency/vehicle.php';
			</script>";
  

 
}

 else {
  echo "<script>
  alert('Record  not Added');
window.location.href='../agency/home.php';
    </script>";
}

 }
$conn->close();
?>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    

	
	

<?php



include ("conn.php");


if(isset($_POST['submit'])){
	$from=$_POST['from'];
    $to=$_POST['to'];
	$date=$_POST['date'];

    if (!empty($from) && !empty($to) && !empty($date)) {
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

$sql = "select * from vehicledetails where VehicleType='BUS'  AND StartLocation like'%$from%' AND EndLocation like'%$to%'   AND Date like'%$date%'   ";


$result = $conn->query($sql);

  
if ($result->num_rows > 0) {
	
	
    echo'<h3> VEHICLE LIST FROM  '.$from.' TO '.$to.' </h3> ';
	
    // output data of each row
    while($row = $result->fetch_assoc()) {







       echo' <div class="text-center profile-card" style="margin-top:10px;background: #0f245b;color: var(--bs-white);padding:10px; margin-left:10px;margin-right:10px; ">';
       echo '<div>';
          echo'  <h3 style="padding: 10PX; background-color:#221092;">FARE : <i class="fas fa-rupee-sign"></i>.&nbsp;'.$row['Fare'].'</h3>';
       
   echo' <button class="btn btn-danger" type="button" style="background-color:var(--bs-red);" onclick="redirectToPage()"  >VIEW SEATS</button>';
    echo' </div>';
          echo'<div class="row" style="padding:0;padding-bottom:10px;padding-top:20px;">';
             echo' <div class="col-md-6">';
                 echo' <p class="text-start" style=" background-color:#221092;color:white;margin-left:60px;margin-right:60px;padding:20px;"> <strong>AGENCY / COUNTER NAME &nbsp; <br>'. $row['AgencyName'].'</strong></p>';
                 echo' <p class="text-start" style=" background-color:#221092;color:white;margin-left:60px;margin-right:60px;padding:20px;"><strong>VEHICLE TYPE &nbsp;<br>'. $row['VehicleType'].'</strong></p>';
                echo'  <p class="text-start" style=" background-color:#221092;color:white;margin-left:60px;margin-right:60px;padding:20px;" ><strong>VEHICLE NUMBER &nbsp; <br>'. $row['VehicleNumber'].'</strong></p>';
             echo' </div>';
             echo' <div class="col-md-6">';
                 echo' <p class="text-end" style=" background-color:#221092;color:white;margin-left:60px;margin-right:60px;padding:20px;">REPORTING TIME  <br>'.$row['ReportingTime'].'</p>';
                 echo' <p class="text-end" style=" background-color:#221092;color:white;margin-left:60px;margin-right:60px;padding:20px;"><strong>DEPATURE TIME  <br>'.  $row['StartTime'].'</strong></p>';
                 echo' <p class="text-end" style=" background-color:#221092;color:white;margin-left:60px;margin-right:60px;padding:20px;"><strong>DESTINATION TIME  <br>'.$row['EndTime'].'</strong></p>';
              echo'</div>';
         echo' </div>';
   echo'   </div>';
}
} else {
	echo "0 records";
}


$conn->close();
} else {
    echo 'Please enter all search criteria.';
}
}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>
    function redirectToPage() {
      window.location.href = "seat.php";  // Replace with your desired URL
    }
  </script>
<h6 style='margin-top:100px;'> <?PHP 
session_start();
?>
<H2>ALL AGENCIES VEHICLE LIST </h2>
<?php



$Ag=$_SESSION['Aname'];


 include ("../conn.php");

 $query="SELECT *FROM vehicledetails where AgencyName='$Ag' ";
 
 $query_run = mysqli_query($conn, $query);
 echo '<div class="row">';
WHILE($row=mysqli_fetch_assoc($query_run))
{
  echo '<div class="col-sm-6 col-md-4 col-lg-3">';
 echo' <div class="card" style="width: 18rem;">';
 echo' <img src="assets/img/vehi.png" class="card-img-top" alt="...">';
 echo' <div class="card-body">';
 echo' <h5 class="card-title">'.$row['AgencyName'].'</h5>';
   echo' <h5 class="card-title">'.$row['VehicleNumber'].'</h5>';
   echo' <p class="card-text">'.$row['VehicleName'].' </p>';
   echo 'No Of Seats : '.$row['NumberOfSeats'] ;

  echo"</div>";
  echo"</div>";
echo"</div>";

 
}


  ?>
 

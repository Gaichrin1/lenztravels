<?php include 'header.php'; ?>

<div class="col-12 col-sm-11 col-md-9 bg-light py-3">
  <h1><u> TAXI REGISTERED LIST </u></h1>

<?php
 include ("../conn.php");
 $query="SELECT *FROM vehicledetails where VehicleType='TAXI'";
 $query_run = mysqli_query($conn, $query);
 WHILE($row=mysqli_fetch_array($query_run))
 {


   echo"<div class='row mt-5'>"; 
     echo" <div class='col-lg-3 col-md-6'>";
     echo"<div class='card text-center card-shadow on-hover border-0 mb-4'>";   
         echo"<div class='card-body font-14'>"; 
           echo"<h5 class='mt-3 mb-1 font-weight-medium'>".$row['AgencyName']."</h5>"; 
           echo"<h6 class='subtitle font-weight-normal'>Vehicle Type : ".$row['VehicleType']."</h6>"; 
           echo"<h6 class='subtitle font-weight-normal'>Vehicle Number : ".$row['VehicleNumber']."</h6>"; 
           echo"<h6 class='subtitle font-weight-normal'>Date : ".$row['Date']."</h6>"; 
           echo"<h6 class='subtitle font-weight-normal'>From : ".$row['StartLocation']."</h6>"; 
           echo"<h6 class='subtitle font-weight-normal'>To : ".$row['EndLocation']."</h6>"; 
           echo"<h6 class='subtitle font-weight-normal'>No Of Seats : ".$row['NumberOfSeats']."</h6>"; 
           echo"<div class='pricing my-3'>"; 
            echo" Fare :<span class='monthly display-5'>".$row['Fare']."</span>";  
            
           echo"</div>"; 
         echo"</div>"; 
       echo"</div>"; 
     echo"</div>";
   echo"</div>";
 }
    ?>

  </div>




<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/Advanced-Pricing-Cards.js"></script>
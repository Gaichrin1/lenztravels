<?php include 'header.php';?>
<br>
<h6 style='margin-top:100px;margin-left:10px;'> <?PHP 
session_start();
echo $_SESSION['Aname'];

?> : TAXI LIST <h6>
<?php


$Ag=$_SESSION['Aname'];


 include ("../conn.php");

 $query="SELECT *FROM vehicledetails where AgencyName='$Ag' AND 	VehicleType='TAXI' ";
 
 $query_run = mysqli_query($conn, $query);
 echo '<div class="row" style="margin:10px;">';
WHILE($row=mysqli_fetch_assoc($query_run))
{
  echo '<div class="col-sm-1 col-md-4 col-lg-3">';
 echo' <div class="card" >';
 echo' <img src="assets/img/vehi.png" class="card-img-top" alt="..." style="width:80px;">';
 echo' <div class="card-body">';
 echo' <h5 class="card-title">'.$row['AgencyName'].'</h5>';
   echo' <h5 class="card-title">'.$row['VehicleNumber'].'</h5>';
   echo' <span class="card-text">'.$row['VehicleName'].' </span>';
   echo '<br>';
   echo 'No Of Seats : '.$row['NumberOfSeats'] ;
   echo '<br>';
   echo'<sapn class="card-text"> Ticket Amount : '.$row['Fare'].'</span>';
   echo '<br>';
   echo 'Journey Date : '.$row['Date'] ;
   echo '<br>';
   echo'<input type="submit" name="submit" Value="Delete" class="btn btn-danger">';
   
  echo"</div>";
  echo"</div>";
echo"</div>";
 
}
  ?>
  <div class="jumbotron" style="padding:10px; margin:10px;">
  <div class="row">
  <h6> 
    <?php echo $_SESSION['Aname']; ?>

  : BUS LIST</h6>

<?php 

 $Query="SELECT *FROM vehicledetails where AgencyName='$Ag' AND 	VehicleType='BUS' ";
 $Query_run = mysqli_query($conn, $Query);
WHILE($row=mysqli_fetch_assoc($Query_run))
{
  echo '<div class="col-sm-1 col-md-4 col-lg-3">';
  echo' <div class="card" >';
  echo' <img src="assets/img/vehi.png" class="card-img-top" alt="..." style="width:80px;">';
  echo' <div class="card-body">';
  echo' <h5 class="card-title">'.$row['AgencyName'].'</h5>';
    echo' <h5 class="card-title">'.$row['VehicleNumber'].'</h5>';
    echo' <span class="card-text">'.$row['VehicleName'].' </span>';
    echo '<br>';
    echo 'No Of Seats : '.$row['NumberOfSeats'] ;
    echo '<br>';
    echo'<sapn class="card-text"> Ticket Amount : '.$row['Fare'].'</span>';
    echo '<br>';
    echo 'Journey Date : '.$row['Date'] ;
    echo '<br>';
    echo '<button class="delete-button" data-id="' . $row['Slno'] . '">Delete</button>';
   echo"</div>";
   echo"</div>";
 echo"</div>";
 
}
?>


  </div>

  </div>


<br>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.delete-button').click(function() {
        var id = $(this).data('Slno');

        $.ajax({
            url: 'delete.php', // PHP file to handle the deletion
            method: 'POST',
            data: {Slno: Slno},
            success: function(response) {
                // Handle success response, such as updating the UI or displaying a success message
            },
            error: function(xhr, status, error) {
                // Handle error response, such as displaying an error message
            }
        });
    });
});



</script>

<?php include 'footer.php';?>


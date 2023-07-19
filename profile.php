<?php
include 'header.php';
include 'conn.php';

$ser = $_SESSION['UNAME'];
?>

<div class="container" style="min-height:70vh;">
    <div class="row gutters" style="margin-top: 10px;margin-bottom:10px;border-radius:15px;">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                <?php

                                $query = "SELECT *FROM user where name='$ser'";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $gender = $row['gender'];
                                    if ($gender == 'MALE') {
                                        echo '<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">';
                                     
                                    } 
                                    else 
                                    {
                                        echo '<img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Maxwell Admin">';
                                       
                                    }
                                }

                                    
                                ?>                     
                                   </div>
                          

                        </div>
                        <div class="about">
                        <h6><a href="viewo.php" class="about" style="color:#007ae1;">view Ordered</a></h6>
                            <h6><a href="manage.php" class="about" style="color:#007ae1;">Manage Tickets</a></h6>
                            <h6><a href="forgotpass.php" class="about" style="color:#007ae1;">Change  Password</a></h6>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">Personal Details</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <?php
                                  echo   "<input type='text' class='form-control' id='fullName' value= '$ser' disabled >";
                                  ?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="eMail">Email</label>
                                <?php
                  
                            


                  $query = "SELECT *FROM user where name='$ser'";
                  $query_run = mysqli_query($conn, $query);
                  while ($row = mysqli_fetch_array($query_run)) {

                         $email=$row['email'];
                         $gender=$row['gender'];
                         $unn=$row['username'];
               

            
                             echo   "<input type='email' class='form-control' id='eMail' value= '  $email' disabled >";
                  
                  }

                              
                          echo"</div>";
                     echo "</div>";
                     echo "<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>";
                          echo "<div class='form-group'>";
                               echo" <label for='phone'>Gender</label>";
                             echo"<input type='text' class='form-control' id='phone' value='$gender' disabled>";
                            echo "</div>";
                       echo" </div>";
                      echo"  <div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>";
                           echo" <div class='form-group'>";
                               echo"<label for='website'>User Name</label>";
                               echo" <input type='text' class='form-control' id='website' value='$unn' disabled>";
                           echo" </div>";
                        echo"</div>";
                   echo" </div>";
                    ?> 
                    
                        
                        </div>
                       
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<?php include 'footer.php'; ?>
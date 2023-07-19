<?php include 'header.php'; ?>

<div class="col-12 col-sm-11 col-md-9 bg-light py-3">
  <h1><u> Agency Approval Form </u></h1>
  <div class="row">
    <div class="jumbotron">
      <?php
      include("../conn.php");

      $query = "SELECT *FROM agentregistration where STATUS='NA' ORDER BY id DESC;";

      $query_run = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_assoc($query_run)) {






        echo ' <div class="card" style="width: 18rem;">';
        echo ' <img class="card-img-top" src="assets/img/agency.png" style="width: 200px;" >';
        echo ' <div class="card-body">';
        echo '<p class="card-text">';

        echo " <h6> Agency Name : " . $row['AgencyName'] . " </h6> ";
        echo " <h6> Name : " . $row['name'] . " </h6> ";
        echo " <h6> Email : " . $row['Email'] . " </h6> ";
        echo " <h6>Contact Number : " . $row['ContactNumber'] . " </h6> ";
        echo " <h6>" . $row['Address'] . " </h6> ";
        echo " <h6> Status : " . $row['STATUS'] . " </h6> ";

        echo '<p class="card-text" >';
      }

      ?>
      <form method="post" action="upag.php">
        <input class="form-control" type="text" name="agency" placeholder="Agency Name">
        <select name="ustatus">
          <option>NA</option>
          <option>APPROVED</option>
        </select>
        <input type="submit" name="submit" value="Approved" class="btn btn-primary">
    </div>
  </div>
</div>

</div>
</div>
</div>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
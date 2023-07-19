


<?php include 'header.php'; ?>

<div class="col-12 col-sm-11 col-md-9 bg-light py-3">
  <h1>ADD VEHICLE</h1>
  <div class="row">
    <div class="jumbotron" style="margin-top:30px; background-color: rgb(14,8,54);color:whitesmoke;padding:10px;border-radius:20px;">
      <form method="post" action="v.php" >
        <div class="row form-group">
          <div class="col-sm-4 label-column"><label class="col-form-label" for="Vnum-input-field">Vehicle Number </label></div>
          <div class="col-sm-6 input-column"><input class="form-control" type="text" name="Vnum" oninput="convertToUpperCase()" required=""></div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 label-column"><label class="col-form-label" for="Vname-input-field">Vehicle Name </label></div>
          <div class="col-sm-6 input-column"><input class="form-control" type="text" name="Vname" oninput="convertToUpperCase()" required=""></div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 label-column"><label class="col-form-label" for="Vname-input-field">Agency Name </label></div>
          <div class="col-sm-6 input-column"><input class="form-control" type="text" name="Aname" oninput="convertToUpperCase()" required=""></div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 label-column"><label class="col-form-label" for="Vname-input-field">Vehicle type</label></div>
          <div class="col-sm-6 input-column">

            <select name="Vtype">
              <option class="dropdown-item">SELECT</option>
              <option class="dropdown-item">TAXI</option>
              <option class="dropdown-item">BUS</option>
            </select>
          </div>
          <div class="row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="Snum-input-field">Number of Seats </label></div>
            <div class="col-sm-6 input-column"><input class="form-control" type="text" name="Snum" required=""></div>
          </div>
           
          <div class="row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="Sloc-input-field">Start Location</label></div>
            <div class="col-sm-6 input-column"><input class="form-control" type="text" name="Sloc" required=""></div>
          </div>
        
          <div class="row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="Eloc-input-field">End Location</label></div>
            <div class="col-sm-6 input-column"><input class="form-control" type="text" name="Eloc" required=""></div>
          </div>
           
          <div class="row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="Rtime-input-field">Reporting Time</label></div>
            <div class="col-sm-6 input-column"><input class="form-control" type="time" name="Rtime" required=""></div>
          </div>

          <div class="row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="Stime-input-field">Start Time</label></div>
            <div class="col-sm-6 input-column"><input class="form-control" type="time" name="Stime" required=""></div>
          </div>
              
          <div class="row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="Etime-input-field">End Time</label></div>
            <div class="col-sm-6 input-column"><input class="form-control" type="time" name="Etime" required=""></div>
          </div>
          

          <div class="row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="date-input-field">Date</label></div>
            <div class="col-sm-6 input-column"><input class="form-control" type="date" name="date" required=""></div>
          </div>

          <div class="row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="p1-input-field">Pick Up Point 1</label></div>
            <div class="col-sm-6 input-column"><input class="form-control" type="text" name="P1" required=""></div>
          </div>

          <div class="row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="p2-input-field">Pick Up Point 2</label></div>
            <div class="col-sm-6 input-column"><input class="form-control" type="text" name="P2" required=""></div>
          </div>

          <div class="row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="p3-input-field">Pick Up Point 3</label></div>
            <div class="col-sm-6 input-column"><input class="form-control" type="text" name="P3" required=""></div>
          </div>

          <div class="row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" for="fare-input-field">Fare</label></div>
            <div class="col-sm-6 input-column"><input class="form-control" type="text" name="fare" required=""></div>
          </div>
             
          


        </div>
        </div class="flex-box"  >
                    
                    <input name="submit" type="submit" Value="Save" class="btn btn-primary"  >
             
        </div>



      </form>


    </div>
  </div>
</div>



</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
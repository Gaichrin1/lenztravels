<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TAXI SEATS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Text-Input.css">
</head>

<body>
    <div class="toast-container"></div>
    <div class="p-5 mb-4 bg-light round-3">
        <div class="container">
            <div class="row">
           <div class="col-11 col-md-12 offset-3" style="font-size: 20PX;font-family: 'Abril Fatface', serif;text-align: center;align-items: center;"><label class="col-form-label text-center text-sm-center text-md-center text-lg-center text-xl-center text-xxl-center" style="text-align: center;">TAXI&nbsp; &nbsp;SEAT&nbsp; &nbsp;BOOKING</label></div>
            </div>
        </div>
        <div class="container-fluid text-center py-5" style="padding: 0px;"><button class="btn btn-primary" type="button" style="background: var(--bs-btn-border-color);padding: 10px;border-color: var(--bs-btn-disabled-color);"><i class="material-icons" style="font-size: 28px;background: rgba(0,0,0,0);border-color: var(--bs-white);">event_seat</i>1</button><button class="btn btn-primary" type="button" style="background: var(--bs-btn-border-color);padding: 10px;border-color: var(--bs-btn-disabled-color);margin-left: 5px;" ><i class="material-icons" style="font-size: 28px;background: rgba(0,0,0,0);border-color: var(--bs-white);">event_seat</i>2</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" type="button" style="background: var(--bs-btn-border-color);padding: 10px;border-color: var(--bs-btn-disabled-color);margin-left: 5px;" disabled ><i class="material-icons" style="font-size: 28px;background: rgba(0,0,0,0);border-color: var(--bs-white);" >D</i></button></div>
        <div class="container-fluid text-center py-5" style="padding: 0px;"><button class="btn btn-primary" type="button" style="background: var(--bs-btn-border-color);padding: 10px;border-color: var(--bs-btn-disabled-color);"><i class="material-icons" style="font-size: 28px;background: rgba(0,0,0,0);border-color: var(--bs-white);">event_seat</i>3</button><button class="btn btn-primary" type="button" style="background: var(--bs-btn-border-color);padding: 10px;border-color: var(--bs-btn-disabled-color);margin-left: 5px;"><i class="material-icons" style="font-size: 28px;background: rgba(0,0,0,0);border-color: var(--bs-white);">event_seat</i>4</button><button class="btn btn-primary" type="button" style="background: var(--bs-btn-border-color);padding: 10px;border-color: var(--bs-btn-disabled-color);margin-left: 5px;"><i class="material-icons" style="font-size: 28px;background: rgba(0,0,0,0);border-color: var(--bs-white);">event_seat</i>5</button><button class="btn btn-primary" type="button" style="background: var(--bs-btn-border-color);padding: 10px;border-color: var(--bs-btn-disabled-color);margin-left: 5px;"><i class="material-icons" style="font-size: 28px;background: rgba(0,0,0,0);border-color: var(--bs-white);">event_seat</i>6</button></div>
        <div class="container-fluid text-center py-5" style="padding: 0px;"><button class="btn btn-primary" type="button" style="background: var(--bs-btn-border-color);padding: 10px;border-color: var(--bs-btn-disabled-color);"><i class="material-icons" style="font-size: 28px;background: rgba(0,0,0,0);border-color: var(--bs-white);">event_seat</i>7</button><button class="btn btn-primary" type="button" style="background: var(--bs-btn-border-color);padding: 10px;border-color: var(--bs-btn-disabled-color);margin-left: 3px;"><i class="material-icons" style="font-size: 28px;background: rgba(0,0,0,0);border-color: var(--bs-white);">event_seat</i>8</button><button class="btn btn-primary" type="button" style="background: var(--bs-btn-border-color);padding: 10px;border-color: var(--bs-btn-disabled-color);margin-left: 3px;"><i class="material-icons" style="font-size: 28px;background: rgba(0,0,0,0);border-color: var(--bs-white);">event_seat</i>9</button><button class="btn btn-primary" type="button" style="background: var(--bs-btn-border-color);padding: 10px;border-color: var(--bs-btn-disabled-color);margin-left: 3px;"><i class="material-icons" style="font-size: 28px;background: rgba(0,0,0,0);border-color: var(--bs-white);">event_seat</i>10</button></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12"><div class="group">      
    <input type="text" name="seats" required readonly="readonly">
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>SEATS :</label>
   <div class="row"><br></div>
        <div class="row">
     <div class="col-md-12"><div class="group">      
    <input type="text" name="name" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Name :</label>
    <div class="row"><br></div>
    <div class="row">
 <div class="col-md-12"><div class="group">      
<input type="text" name="Cnum" required>
<span class="highlight"></span>
<span class="bar"></span>
<label>Contact Number :</label>
<div class="row"><br></div>
<div class="row">
<div class="col-md-12"><div class="group">      
<input type="text" name="address" required>
<span class="highlight"></span>
<span class="bar"></span>
<label>Address :</label>
<div class="row"><br></div>
<div  class="row">
<select class="form-select" aria-label="Default select example" style="width: auto;">
    <option selected>Select drop location </option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
<div class="row"><br></div>
<div  class="row">
<select class="form-select" aria-label="Default select example" style="width: auto;">
    <option selected>Select pick up location</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
<div class="row"><br></div>
<div class="row">
<div class="col-md-12"><div class="group">      
<input type="text" name="Tamount" required readonly="readonly">
<span class="highlight"></span>
<span class="bar"></span>
<label>Total Amount :</label>

</div>
<input class="btn btn-primary"  type="submit" name="submit" value="BOOK TICKET" >


</div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
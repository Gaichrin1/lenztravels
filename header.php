
<?php

    session_start();

?>

<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Lenztravels</title>
<link rel="icon" type="image/x-icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
<link rel="stylesheet" href="assets/css/Responsive-footer-1.css">
    <link rel="stylesheet" href="assets/css/Responsive-footer-basicfooter.css">
    <link rel="stylesheet" href="assets/css/Responsive-footer.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Babylonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Beautiful-Footer.css">
<link rel="stylesheet" href="assets/css/Pop-Out-Vertical-Nav-w-Footer--Social-Links--1-Vertical-Nav.css">
    <link rel="stylesheet" href="assets/css/Pop-Out-Vertical-Nav-w-Footer--Social-Links--1.css">
    <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css">
</head>
<body style="background: rgb(14,8,54);text-align: right;">
    <nav class="navbar navbar-light navbar-expand-md py-3" style="background: var(--warning);">
        <div class="container"><img src="assets/img/logo.png" style="width: 100PX;"><a class="navbar-brand d-flex align-items-center" href="index.php"><span style="font-weight: bold;">LenzTravels</span></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link active" href="bus.php" style="font-weight: bold;">Bus Tickets</a></li>
                    <li class="nav-item"><a class="nav-link active" href="taxi.php" style="font-weight: bold;">Taxi Tickets</a></li>
                    <li class="nav-item"><a class="nav-link active" href="manage.php" style="font-weight: bold;">Manage Tickets</a></li>
                <li class="nav-item"><a class="nav-link active" href="faq.php" style="margin-right: 25px;font-weight: bold;color: var(--gray-dark);">FAQ</a></li>
            </ul>


            <?php

if(isset($_SESSION['UNAME'])) {

   
    echo"<a class='btn btn-primary' role='button' href='profile.php' style='margin-right: 5px;background: var(--blue);'>Profile</a>";
        echo"<a class='btn btn-primary' role='button' href='Logout.php' style='margin-right: 5px;background: var(--danger);'>Log out</a>";
  

  }
  else
  { echo"<a class='btn btn-primary' role='button' href='signin.php' style='margin-right: 5px;background: var(--green);'>Sign In</a>";
    echo"<a class='btn btn-primary' role='button' href='signup.php' style='margin-right: 5px;background: var(--danger);'>Sign Up</a>";
     
 
  

  }

  ?>
    
         
            </div>
        </div>
    </nav>
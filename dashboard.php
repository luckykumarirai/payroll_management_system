<?php
session_start();
 ?>

<!doctype html>
<html lang="en">
  <head>
    <title>placement management system</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  * {box-sizing: border-box}
body {font-family: "Lato", sans-serif;
background-color:#DEFFDE;}

  .navbar {
  border-radius: 0 !important;
  border: none;
  margin-bottom: 0 !important; }

.navbar-inverse {
  color: #fff;
  min-height: 0px !important;
  height: auto !important;
  font-weight: 500;
  background-color: #003266;
  border-bottom: solid 6px #E87A0C;
  -webkit-transition: top 300ms;
  -moz-transition: top 300ms;
  transition: top 300ms; }
  .navbar-inverse .nav {
    position: relative;
     }
  .navbar-inverse .nav > li > a {
    padding: 10px 10px; }
  .navbar-inverse .nav > li.active,
  .navbar-inverse.nav > li > a:hover,
  .navbar-inverse .nav > li > a:focus,
  .navbar-inverse .nav > li > a:active {
    color: #000;
    background-color: #ffb040; }
  .navbar-inverse .navbar-brand {
    display: none;
    height: auto;
  }
  .navbar-inverse .dropdown-menu {
    background-color: #ffb040;
    border: none;
    border-radius: 0;
    -webkit-box-shadow: 0;
    box-shadow: 0; }
  .navbar-inverse .dropdown-menu > li > a {
    color: #000;
    background-color: #ffb040; }
  .navbar-inverse .dropdown-menu > li > a:hover,
  .navbar-inverse .dropdown-menu > li > a:focus {
    color: #fff;
    background-color: #003266; }
  .navbar-inverse .dropdown-menu > .active > a,
  .navbar-inverse .dropdown-menu > .active > a:hover,
  .navbar-inverse .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #003266; }
    .navbar-nav.navbar-center {
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
}
  </style>
  </head>
  <body>
  <a href="#"><img src="image/plogo.png" width="99%" height="90px" style="border:2px solid green;"></a>

<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">About Us</a></li>
    </ul>
    <?php
    if(isset($_SESSION['un']))
        {
        ?>
        <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Payroll_system <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li>
           <a href="leaveform.php"><span class="glyphicon glyphicon-pencil"></span>Apply For Leave</a>
         </li>
         <li>
           <a href="employee_report.php"><span class="glyphicon glyphicon-list"></span>Employee_report</a>
         </li>
         <li>
            <a href="salary_report.php"><span class="glyphicon glyphicon-list"></span>Salary_report</a>
          </li>
          </ul>
   </li>
 </ul>

         <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
          </li>
          <li>
            <h5 style="color:white;"><?php echo $_SESSION['un'] ?><span class="glyphicon glyphicon-user"></span></h5>
          </li>
        </ul>
        <?php
       }
        else
        {
         ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        <?php
        }
         ?>
  </div>
</nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>

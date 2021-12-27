
 <html>
 <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

   <style type="text/css">
   <script>
        var ScrollMsg= "Payroll Management System - "
        var CharacterPosition=0;
        function StartScrolling() {
        document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
        ScrollMsg.substring(0, CharacterPosition);
        CharacterPosition++;
        if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
        window.setTimeout("StartScrolling()",150); }
        StartScrolling();
    </script>
   body{
     background-color:#DEFFDE;
   }
 	.login-form {
 		width: 340px;
     	margin: 50px auto;
 	}
     .login-form form {
     	margin-bottom: 15px;
         background: #f7f7f7;
         box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
         padding: 30px;
     }
     .login-form h2 {
         margin: 0 0 15px;
     }
     .form-control, .btn {
         min-height: 38px;
         border-radius: 2px;
     }
     .btn {
         font-size: 15px;
         font-weight: bold;
     }
 </style>
 </head>
 <body>
 <a href="#"><img src="image/plogo.png" width="99%" height="90px" style="border:2px solid green;"></a>
 <div class="login-form">
     <form action="index.php" method="post">
         <h2 class="text-center">Log in</h2>
         <div class="form-group">
             <input type="text" class="form-control" placeholder="Username" name="uname" required="required">
         </div>
         <div class="form-group">
             <input type="password" class="form-control" placeholder="Password"  name="password" required="required">
         </div>
   <div class="form-check">
   <input class="form-check-input" type="radio" name="role" id="exampleRadios1" value="employee"  checked>
   <label class="form-check-label" for="exampleRadios1">
    Employee
   </label>
 </div>
 <div class="form-check">
   <input class="form-check-input" type="radio" name="role" id="exampleRadios2" value="admin">
   <label class="form-check-label" for="exampleRadios2">
    Admin
   </label>
 </div>
         <div class="form-group">
               <button class="btn btn-success btn-lg btn-block" <input type="submit" name="submit">Log in</button>
             </div>
         <div class="clearfix">
             <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
             <a href="#" class="pull-right">Forgot Password?</a>
         </div>
     </form>
 </div>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

 </body>
 </html>
 <?php
 include('dbcon.php');
 if(isset($_POST['submit']))
 {
  $un=$_POST['uname'];
  $pw=$_POST['password'];
  $role=$_POST['role'];
  $qry="SELECT * FROM `user` WHERE username='$un' AND password='$pw' AND role='$role'";
  $run1=mysqli_query($con,$qry);
  $row=mysqli_num_rows($run1);
    if($row>0)
    {
        $result=mysqli_fetch_assoc($run1);
        $x=$result['username'];
        $y=$result['role'];
        session_start();
        $_SESSION['un']=$x;
        $_SESSION['role']=$y;
        if($role=="employee")
        {
          ?>
            <script>
              window.open('dashboard.php','_self');
            </script>
            <?php
          }
          else
          {
            ?>
              <script>
                window.open('home.php','_self');
              </script>
              <?php
          }

   }
   else
     {
         ?>
       <script>
         window.alert('username and password does not match !! Plz try again');
         window.open('index.php','_self');
       </script>
       <?php
     }
 }
 ?>

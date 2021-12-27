<?php
include("admindash.php");
?>
<center>
<form method="post" action="add_employee.php">
<table style="border:3px solid green;column-gap:40px;width:60%;" class="table">
<thead>
         <tr>
           <div style="width:100%;height:30px;background-color:green;color:white;">

             <h3 style="text-align:center;">Welcome to payroll system</h3>
         </tr><br>
        </thead>
<tbody>
<tr><td>Name:</td><td><input type="text" name="name"></td><td>basic_pay:</td><td><input type="text" name="bp"></td></tr>
<tr><td>Address:</td><td><input type="text" name="address"></td><td>class:</td><td><input type="text" name="class"></td></tr>
<tr><td>City:</td><td><input type="text" name="city" ></td><td>Salary:</td><td><input type="text" name="salary"></td></tr>
<tr><td>Pincode:</td><td><input type="text" name="pincode" ></td><td>Email:</td><td><input type="text" name="email"></td><tr>
<tr><td>Degree:
</td><td>
<select name="degree">
<option>PHD</option>
<option>M.tech</option>
<option>B.tech</option>
<option>12'th</option>
<option>10'th</option>
</select></td>
<td>Branch:</td><td>
<select name="branch">
<option>Engineering</option>
<option>HUman Resource</option>
<option>Accounting</option>
<option>Maintenance</option>
<option>Control</option>
<option>MIS</option>

</select></td>
</tr>
<tr><td>Designation:</td><td><input type="text" name="d"></td><td>Bank Account:</td><td><input type="text" name="ba"></td></tr>
<tr> 
</tr>
<tr><td>MObile_Number:</td><td><input type="text" name="mn" ></td><td><input type="submit" class="btn btn-success" name="submit" value="Add Employee"></td></tr?
</tbody>
</table>
</from>
</center>
<?php
include("dbcon.php");
if(isset($_POST['submit']))
{

    
    $name=$_POST['name'];
    $mn=$_POST['mn'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $pincode=$_POST['pincode'];
    $degree=$_POST['degree'];
    $ba=$_POST['ba'];
    $bp=$_POST['bp'];
    $salary=$_POST['salary'];
    $branch=$_POST['branch'];
    $d=$_POST['d'];
    $email=$_POST['email'];
    $class=$_POST['class'];
    $leave='0';
    $qry="INSERT INTO `employee`(`name`, `email`, `mobile_no`, `class`, `bank_account`, `degree`, `branch`, `city`, `pincode`, `basic_pay`, `salary`, `designation`, `address`, `leave`) VALUES ('$name','$email','$mn','$class','$ba','$degree','$branch','$city','$pincode','$bp','$salary','$d','$address','$leave')";
    $run=mysqli_query($con,$qry);
    if($run==true)
    {
    ?>
        <script>
              window.alert("data inserted successfully!!");
              window.open('add_employee.php','_self');
              </script>
             <?php
       }
       else
        {
          ?>
          <script>
          window.alert("Opps something wrong!!");
          window.open('add_employee.php','_self');
          </script>
         <?php
        }
}

?>


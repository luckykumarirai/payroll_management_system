
<?php
include("admindash.php");
include('dbcon.php');
$sid=$_GET['sid'];
$qry=" select * from employee,class where  employee.class=class.class and emp_id='$sid'";
$run=mysqli_query($con,$qry);
 $data=mysqli_fetch_assoc($run);
$basic_pay=$data['basic_pay'];
$ma=$data['m_a'];
$ta=$data['t_a'];
$leave=$data['leave'];
$ded=($leave*100);
$salary=$basic_pay+$ma+$ta+$leave*100;
?>
<div style="height:20%;width:100%;background-color:#530602;color:#fff;">
  <center>
    <h1>Salary report</h1>
  </center>
  </div>
<center>
<table class="table table-striped table-dark" style="width:60%;border:3px solid green;">
<tbody>
<tr><td>Employee Name</td><td><?php echo $data['name'];?></td></tr>
<tr><td>Class</td><td><?php echo $data['class'];?></td></tr>
<tr><td>Basic_pay</td><td><?php echo $data['basic_pay'];?></td></tr>
<tr><td>Medical insurance</td><td><?php echo $data['m_a'];?></td></tr>
<tr><td>Travelling insurance</td><td><?php echo $data['t_a'];?></td></tr>
<tr><td>Number of Leave</td><td><?php echo $data['leave'];?></td></tr>
<tr><td>Diduction money </td><td><?php echo $ded;?></td></tr>
<tr style="color:green;background-color:yellow;"><td > Total ammount of Salary</td><td><?php echo $salary;?></td></tr>
</tbody>
</table>
</center>

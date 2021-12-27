<?php
include("admindash.php");
?>
<form action="add_class.php" method="post">
<center>
<table style="border:2px solid green;width:50%;height:50%;" class="table">
<tr><td align="center">Class Name:</td><td colspan="2" align="center"><input type="text" name="c_name" /></td></tr></br>

<tr><td align="center">Basic Pay:</td><td colspan="2" align="center"><input type="text" name="B_P" /></td></tr></br>

<tr><td align="center">Salary:</td><td colspan="2" align="center"><input type="text" name="salary"/></td></tr></br>

<tr><td align="center">MedicalAllowance:</td><td colspan="2" align="center"><input type="text" name="M_A" /></td></tr></br>

<tr><td align="center">TravelAllowance:</td><td colspan="2" align="center"><input type="text" name="T_A" /></td></tr><br>

<tr> <td colspan="2"  align="center"><input  class="btn btn-success" type="submit" name="submit" value="add class"></td></tr>

</table>
</center>
</form>
<?php
include("dbcon.php");
if(isset($_POST['submit']))
 {
  $cn=$_POST['c_name'];
  $bp=$_POST['B_P'];
  $salary=$_POST['salary'];
  $ma=$_POST['M_A'];
  $ta=$_POST['T_A'];
  $qry="INSERT INTO `class`( `class_name`, `basic_pay`, `salary`, `m_a`, `t_a`) VALUES  ('$cn','$bp','$salary','$ma','$ta')";
  $run=mysqli_query($con,$qry);
  if($run==true)
  {
    ?>
    <script>
          window.alert("data inserted successfully!!");
          window.open('add_class.php','_self');
    </script>
        <?php
  }
else
  {
    ?>
    <script>
    window.alert("Opps something wrong!!");
    window.open('add_class.php','_self');
    </script>
  <?php
  }
 }
 ?>
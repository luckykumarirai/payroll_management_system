<?php
session_start();
if(isset($_SESSION['un']))
{
  echo "";
}
else
 {
  header('location:index.php');
}
include("dashboard.php");
?>
<form action="leaveform.php" method="post">
<center>
<table style="border:2px solid green;width:50%;height:50%;" class="table">
<tr><td align="center">From:</td><td colspan="2" align="center"><input type="date" name="c_name" /></td></tr></br>

<tr><td align="center">Number of days:</td><td colspan="2" align="center"><input type="number" name="days" /></td></tr></br>

<tr><td align="center">Reason:</td><td colspan="2" align="center"><textarea name="salary"></textarea></td></tr></br>

<tr> <td colspan="2"  align="center"><input  class="btn btn-success" type="submit" name="submit" value="add class"></td></tr>

</table>
</center>
</form>
</table>
 </center>
<?php
include("dbcon.php");
if(isset($_POST['submit']))
 {
  $days=$_POST['days'];
  $un=$_SESSION['un'];
  $qry="UPDATE `employee` SET `leave`='$days' WHERE `name`='$un' ";
  $run=mysqli_query($con,$qry);
  if($run==true)
  {
    ?>
    <script>
          window.alert("data inserted successfully!!");
          window.open('leaveform.php','_self');
    </script>
        <?php
  }
else
  {
    ?>
    <script>
    window.alert("Opps something wrong!!");
    window.open('leaveform.php','_self');
    </script>
  <?php
  }
 }
 ?>
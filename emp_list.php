<?php
include("admindash.php");
include("dbcon.php");
$un=$_SESSION['un'];
$q="SELECT * FROM `employee` ";
$run=mysqli_query($con,$q);
?>
<table border="1" class="table" align="center" style="margin-top:50px;width:80%;">
 <tr style="background-color:#000;color:#fff;">
<th>emp_id</th>
<th>Name</tr=h>
<th>city</th>
<th>Email</th>
<th>pincode</th>
<th>Salary</th>
<th>Basic_salary</th>
<th>No. of leave</th>


</tr>
<tbody>
<?php
if(mysqli_num_rows($run)<1)
{
  echo "<tr><td>no data found</td></tr>" ;
}
else
{
  while($data=mysqli_fetch_assoc($run))
  {
  ?>
  
    <tr align="center">
    <td><?php echo $data['emp_id']?></td>
    <td><?php echo $data['name']?></td>
    <td><?php echo $data['city']?></td>
    <td><?php echo $data['email']?></td>
    <td><?php echo $data['pincode']?></td>
    <td><?php echo $data['salary']?></td>
    <td><?php echo $data['basic_pay']?></td>
    <td><?php echo $data['leave']?></td>
  </tr>
<?php
  }
}

  ?>
  </tbody>
  </table>
  </center>





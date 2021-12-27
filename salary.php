<?php
include("admindash.php");
?>
<center>
<form method="post" action="salary.php">
<table style="width:60%;" class="table">
<thead>
         <tr>
           <div style="width:100%;height:30px;background-color:green;color:white;">

             <h3 style="text-align:center;">Generate Salary</h3>
         </tr><br>
        </thead>
<tbody>
<tr><td>Month:</td>
<td>
<select>
<option>January</option>
<option>February</option>
<option>March</option>
<option>Aprail</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>August</option>
<option>September</option>
<option>October,</option>
<option>November</option>
<option>December</option>
<option>All</option>
</select></td>
</td><td>Select Employee_id:</td><td><input type="text" name="emp_id"></td>
<td colspan="2" align="center"><input type="submit"  class="btn btn-success" name="submit" value="Generate"></td></tr>
</tbody>
</table>
</from>
</center>
<table border="1" class="table" align="center" style="margin-top:50px;width:80%;">
 <tr style="background-color:#000;color:#fff;">
<th>emp_id</th>
<th>Name</tr=h>
<th>email</th>
<th>Salary</th>
</tr>
<tbody>

<?php
include("dbcon.php");
if(isset($_POST['submit']))
 {
$emp_id=$_POST['emp_id'];
$qry=" SELECT * FROM `employee` WHERE `name` like '%$emp_id%' ";
$run=mysqli_query($con,$qry);
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
        <td><?php echo $data['email']?></td>
        <td><a href="salaryreport.php?sid=<?php echo $data['emp_id'];?>">Report</a></td>

      </tr>
<?php
      }
    }}

      ?>
      </tbody>
      </table>
      </center>



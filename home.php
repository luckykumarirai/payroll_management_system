<?php
session_start();
include("admindash.php");

?>

<head>
<style>


.page
{
height:520px;
width:100%;
background-color:#DEFFDE;


}


/* Style the tab content */
.tabcontent {
  float: left;
  padding: 1px 12px;
  border: 2px solid green;
  width: 79%;
  border-left: none;
  height:570px;
  background-color:moccasin;
  margin-left:160px;
}

</style>
  </head>
  <body>
<div id="Home" class="tabcontent">
    
     <div class="page">
     <center>
       <table style="border:3px solid green;">
         <tr>
           <div style="width:100%;height:30px;background-color:green;color:white;">
             <h3 style="text-align:center;">Welcome to payroll system</h3>
         </tr>
         <tr>
           <td>
             <div style="width: 300px;margin:30px;height: 120px;border: 2px solid green;box-sizing: border-box;color:white;margin-top:30px;background-color:green;text-align:center;">
              <h3>Employee</h3>
              <hr style="height:2px;border-width:0;color:white;background-color:white;margin-top:0;">

              <?php
                echo "<h1>5</h1>";
               ?>
             </div>
           </td>
           <td>
             <div style="width: 300px;margin:30px;height: 120px;border: 2px solid green;box-sizing: border-box;color:white;margin-top:30px;background-color:green;text-align:center;">
               <h3>Active</h3>
               <hr style="height:2px;border-width:0;color:white;background-color:white;margin-top:0;">

               <?php
                 echo "<h1>3</h1>";
                ?>
             </div>
           </td>
           <td>
             <div style="width: 300px;margin:30px;height: 120px;border: 2px solid green;box-sizing: border-box;color:white;margin-top:30px;background-color:green;text-align:center;">
               <h3>Deactive</h3>
               <hr style="height:2px;border-width:0;color:white;background-color:white;margin-top:0;">

               <?php
                 echo "<h1>2</h1>";
                ?>
             </div>
           </td>
         </tr>
         <tr>
           <td>
             <div style="width: 300px;margin:30px;height: 120px;border: 2px solid green;box-sizing: border-box;color:white;margin-top:30px;background-color:green;text-align:center;">
               <h3>New Leave</h3>
               <hr style="height:2px;border-width:0;color:white;background-color:white;margin-top:0;">

               <?php
                 echo "<h1>0</h1>";
                ?>
             </div>
           </td>
           <td>
             <div style="width: 300px;margin:30px;height: 120px;border: 2px solid green;box-sizing: border-box;color:white;margin-top:30px;background-color:green;text-align:center;">
               <h3>Approved</h3>
               <hr style="height:2px;border-width:0;color:white;background-color:white;margin-top:0;">

               <?php
                 echo "<h1>0</h1>";
                ?>
             </div>
           </td>
           <td>
             <div style="width: 300px;margin:30px;height: 120px;border: 2px solid green;box-sizing: border-box;color:white;margin-top:30px;background-color:green;text-align:center;">
               <h3>Rejected</h3>
               <hr style="height:2px;border-width:0;color:white;background-color:white;margin-top:0;">

               <?php
                 echo "<h1>0</h1>";
                ?>
             </div>
           </td>
         </tr>

       </table>
</center>
        </div>
        </div>
        </body>
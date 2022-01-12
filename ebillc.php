<!DOCTYPE html> 
<html lang="en"> 
<style>
  body{
    text-align: center;
    border: double tomato;
    background-color: beige;
    content: "";
  position: absolute;
  top: 30px;
  right: 600px;
  width: 500px;
  height: 300px;
  z-index: -1;
  border-top-right-radius: 8px;
  border-bottom-right-radius:8px;
  border-bottom-left-radius: 8px;
  border-top-left-radius:8px;
  }
</style>
<body>
  
<h3>Electricity Bill Calculator</h3> 
   <p style="text-align: center;"> <b>Electricity Bill Calculator<b> </p>
   <p style="text-align:center;"> Energy in kWh= <?php echo $_POST["kWh"];?> </p>
   <p style="text-align:center;"> Electricity cost per day in RON = <?php echo $_POST["lei"];?> </p>

   <p style="text-align:center;"> <?php 
  $_week=7;
  $_month=30;
  $_year=360;
   echo "Electricity cost per day = ";
   echo floatval($_POST["kWh"]*$_POST["lei"]);
echo "LEI";    
 ?> <br><br>
 <?php 
  echo "Electricity cost per week = ";
   echo floatval($_POST["kWh"]*$_POST["lei"]*$_week);
echo "LEI";
 ?><br><br>
 <?php 
  echo "Electricity cost per month = ";
   echo floatval($_POST["kWh"]*$_POST["lei"]*$_month);
echo "LEI";
 ?><br><br>
 <?php 
echo "Electricity cost per year =  ";
   echo floatval($_POST["kWh"]*$_POST["lei"]*$_year);
echo "LEI"; 
 ?>
</p> <br>
<a href="home.html" style="color:blue;">RETURN TO HOME PAGE</a><br><br>
<a href="calculators.html" style="color:darkred;">RETURN TO ELECTRICITY BILL CALCULATOR</a><br><br>

 </body>
    </html>
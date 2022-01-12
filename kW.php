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
  
<h3>kVA to KW calculator</h3> 
   <p style="text-align: center;"> <b>kVA to kW Calculator<b> </p>
   <p style="text-align:center;"> Power consumption in kW= <?php echo $_POST["kW"];?> </p>
   <p style="text-align:center;"> The hours of use(h) appliances per day = <?php echo $_POST["hours"];?> </p>

   <p style="text-align:center;"> <?php 
  $_week=7;
  $_month=30;
  $_year=360;
   echo "Energy consumed in kWh per day = ";
   echo floatval($_POST["kW"]*$_POST["hours"]);
echo "kWh/day";    
 ?> <br><br>
 <?php 
  echo "Energy consumed in kWh per week = ";
   echo floatval($_POST["kW"]*$_POST["hours"]*$_week);
echo "kWh/week";
 ?><br><br>
 <?php 
  echo "Energy consumed in kWh per month = ";
   echo floatval($_POST["kW"]*$_POST["hours"]*$_month);
echo "kWh/month";
 ?><br><br>
 <?php 
echo "Energy consumed in kWh per year =  ";
   echo floatval($_POST["kW"]*$_POST["hours"]*$_year);
echo "kWh/year"; 
 ?>
</p> <br>
<a href="home.html" style="color:blue;">RETURN TO HOME PAGE</a><br><br>
<a href="kWh.html" style="color:darkred;">RETURN TO kWh CALCULATOR</a>
 </body><br><br>
<a href="home.html" style="color:blue;">RETURN TO HOME PAGE</a><br>
<a href="converters.html" style="color:darkred;">RETURN TO CONVERTERS</a><br>

    </html>
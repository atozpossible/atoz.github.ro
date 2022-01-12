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
  height: 210px;
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
   <p style="text-align:center;"> Apparent Power, kVA= <?php echo $_POST["kilovolt"];?> </p>
   <p style="text-align:center;"> Power factor, PF(cos φ)= <?php echo $_POST["powerfactor"];?> </p>

   <p style="text-align:center;"> <?php 
   echo "Active Power, kW= kVA*cos φ =";
   echo floatval($_POST["kilovolt"]*$_POST["powerfactor"]);
echo "kW";
?>   
</p> <br><br>
<a href="home.html" style="color:blue;">RETURN TO HOME PAGE</a><br>
<a href="converters.html" style="color:darkred;">RETURN TO CONVERTERS</a><br>

 </body>
    </html>
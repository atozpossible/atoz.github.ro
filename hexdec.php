<!DOCTYPE html> 
<html lang="en"> 
<style>
body{
   border: double tomato;
    background-color: beige;
    content: "";
  position: absolute;
  top: 30px;
  right: 500px;
  width: 500px;
  height: 200px;
  z-index: -1;
  border-top-right-radius: 8px;
  border-bottom-right-radius:8px;
  border-bottom-left-radius: 8px;
  border-top-left-radius:8px;
  }
</style>
 <body > 
   <h2 style="text-align: center;">CONVERTER OF NUMBERS(BASE)</h2> 
   <p style="text-align: center;">Enter a hexadecimal number you want to convert into a decimal number</p> 
   <p style="text-align: center;"> <b>hexadecimal to decimal:<b> </p>
   <p style="text-align:center;"> HEXADECIMAL= <?php echo $_POST["hexadecimal"];?> </p>
   <p style="text-align:center;"> 
   <?php 
   echo "DECIMAL= ";
   echo base_convert($_POST["hexadecimal"],16,10);
?>   <b>[THE ANSWER]</b></p> <br><br>
<a href="home.html" style="color:blue;">RETURN TO HOME PAGE</a><br>
<a href="converters.html" style="color:darkred;">RETURN TO CONVERTERS</a><br>

 </body>
    </html>

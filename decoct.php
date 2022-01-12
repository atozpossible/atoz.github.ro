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
   <p style="text-align: center;">Enter a decimal number you want to convert to octal</p> 
   <p style="text-align: center;"> <b> decimal to Octal:<b> </p>
   <p style="text-align:center;"> Decimal= <?php echo $_POST["decimal"];?> </p>
   <p style="text-align:center;"> 
      <?php 
   echo "OCTAL= ";
   echo base_convert($_POST["decimal"],10,8);
?>   <b>[THE ANSWER]</b></p> <br>
<a href="home.html" style="color:blue;">RETURN TO HOME PAGE</a><br><br>
<a href="converters.html" style="color:darkred;">RETURN TO CONVERTERS</a>
 
 </body>
    </html>

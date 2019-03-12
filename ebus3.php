<!DOCTYPE html>
<html>
    <body>
    <!-- //Starting the session to get the session variable from last page-->
   
 <?php
 
 session_start () ;
 $totalValue2 = $_POST ['txtTotal'];
 $fullNameValue= $_POST ['txtName'];
 echo "The name is : ".$fullNameValue.".";
 echo "<br></br>";
 echo "The total value is : ".$totalValue2.">";
 ?>
    </body>
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


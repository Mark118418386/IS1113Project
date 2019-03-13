<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Technology Purchasing</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
      <div class="topnav">
 
  <a href="Consultancy.php">Home</a>
  <a href="about.html">About</a>
 
</div>
        <body>
            <style>
body {
background-image: url("data:image/jpeg;base64,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");
background-repeat: no-repeat;
background-size: 2000px 1000px
}
    </style>
        <div class="form">
            <form name="intCalc" method="post" action="Ebus2.php">
        <h1>Shop Calculator</h1>  
        <hr/>
        <center>
            <table cellspacing="10">
                <tr>
                    <td><b>Technology</b></td>
                </tr>
                <tr>
                    <td>Blockchain</td>
                    <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                </tr>
                <tr>
                    <td>Autonomous Things (Robots)</td>
                    <td><input type="radio" id="Robots" name="rdoGroup" value="2000" /></td>
                </tr>
                <tr>
                    <td>Immersive Experience</td>
                    <td><input type="radio" id="Experience" name="rdoGroup" value="3000" /></td>
                </tr>
            </table>
        </center>
        <br/>
            <center>
                 <table cellspacing="10">
            <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
            </tr>
                <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                </tr>
                <tr>
                    <td>Discount @ 10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td>+ VAT @ 20%</td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
        </center>
      
        <br />
            <center>
            <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
            <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
            <input type="submit" name="btnProceed" id="btnProceed" onclick="ebus2.php" value="Proceed"/>
        </center>
            </form>
        </div>
      
            <script type="text/javascript">
                function calcSub(){
                    //Assigning variables to the values
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                    var Robots = parseFloat(document.getElementById('Robots').value);
                    var Experience = parseFloat(document.getElementById('Experience').value);
                  
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('Blockchain').checked) {
                        document.intCalc.txtSubTot.value = Blockchain;
                        subAmount = Blockchain;
                        calculation(subAmount);
                      
                    }
                   else if (document.getElementById('Robots').checked) {
                        document.intCalc.txtSubTot.value = Robots;
                        subAmount = Robots;
                        calculation(subAmount);
                      
                    }
                    else if (document.getElementById('Experience').checked) {
                        document.intCalc.txtSubTot.value = Experience;
                        subAmount = Experience;
                        calculation(subAmount);
                    }
                }
              
                //function for calculationg the values//
                function calculation(parmsTotal) {
                    var subTotal = parseFloat(parmsTotal);
                    var discCalc = parseFloat(subTotal * .10);
                    var vatCalc= parseFloat(subTotal * .20);  
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                  
                    //Inserting thrm intp thr correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = total;
                }
              
                function AmountClear() {
                    document.getElementById("txtSubTot").value="";
                    document.getElementById("txtDisc").value="";
                    document.getElementById("txtVAT").value="";
                    document.getElementById("txtTotal").value="";
                }
                  
            </script>
    </body>
    </html>
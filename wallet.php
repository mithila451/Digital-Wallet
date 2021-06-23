<?php
?>
<html>
<head><title> First Page </title>  </head>
<body>

<fieldset>
 <font color="red"><h2><b>Page 1 [Home]</b></h1></font>
    <font color="red"><h2><b>Digital Wallet</b></h1></font>


 <a  target="_blank" href="Page1.php">1.Home</a>
 <a  target="_blank" href="Page2.php">2.Tansaction History</a>
        

 <font color="red"><h2>Fund Transfer:</h1></font>
 <select>
 <option value="0" style ="display:none" selected>Select Category</option>
 <option>mobile recharge</option>
 <option>send money</option>
 <option>merchabt pay</option>
 </select><br><br>

 
<label for = "To:"> To </label>
<input type="To:" name="To" id="To">
<p style='color:red'> <?php echo $ToErr; ?> </p>
<br>
<label for = "Amount:"> Amount </label>
<input type="Amount:" name="Amount" id="Amount">
<p style='color:red'> <?php echo $AmountErr; ?> </p>
<br>

<input type="submit" value="Submit">
</form>
<br>#Digital-Wallet

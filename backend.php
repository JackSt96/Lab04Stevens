<?php
//get the item quantities
 $coffee = $_POST["coffee"];
 $latte = $_POST["latte"];
 $scone = $_POST["scone"];
//get user info
 $username = $_POST["username"];
 $password = $_POST["password"];
 //get shipping cost
 $shipping = $_POST["sMethod"];
 $orderTotal = 0;
 $orderTotal = $coffee*2 + $latte*4 + $scone*3 + $shipping;
if ($shipping == 0) {
  $shippingType = "Free 7 day";
}
else if ($shipping == 50) {
  $shippingType = "$50.00 over night";
}
else if ($shipping == 5) {
  $shippingType = "$5.00 three day";
}
echo'
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Receipt</title>
</head>
<body>';
echo '<h3>Welcome '. $username . ' your password is ' . $password;
//start the receipt table
echo '
<table id = "Receipt">
<tr>';
echo '<th>Item</th>';
echo '<th>Quantity</th>';
echo '<th>Cost Per Item</th>';
echo '<th>Sub Total</th>';
echo '</tr>';
//coffee info
echo '<tr>';
echo '<td>coffee</td>';
echo '<td>'.$coffee.'</td>';
echo '<td> $2 </td>';
echo '<td>$'. $coffee * 2 . '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Latte</td>';
echo '<td>'.$latte.'</td>';
echo '<td> $4</td>';
echo '<td>$'. $latte * 4 . '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Scone</td>';
echo '<td>'.$scone.'</td>';
echo '<td> $3 </td>';
echo '<td>$'. $scone * 3 . '</td>';
echo '</tr>';
//shipping info
echo '<tr>';
echo '<td>Shipping</td>';
echo '<td colspan = "2">' . $shippingType . '</td>';
echo '<td>$' . $shipping . '</td>';
echo '<tr>';
echo '<td colspan = "3">Total Cost</td>';
echo '<td>$'. $orderTotal .'</td>';
echo '</tr>';
echo '</table>';
echo'
</body>
</html>';
 ?>

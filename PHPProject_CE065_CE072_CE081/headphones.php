<?php
session_start();
if(!$_SESSION['project'])
{
  header('location:login.php');
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id=$_GET['id'];

?>
<html>
<head><title>Shopping Site</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
</head>
<body>
<ul>
     <li><a href="home.php">Home</a></li>
     <li><a href="AboutUs.php">About Us</a></li>
     <li><a href="category.php">choose_category_vice</a></li>
     <li><a href="help.php?id=<?php  echo $id;?>">Help</a></li>
     <li><a href="userinfo.php?id=<?php  echo $id;?>">User Info</a></li>
     <li><a href="logout.php">logout</a></li>
</ul>
<?php
$name="White Wired Headphone";
$price=300;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<tr><td><p> White Wired Headphone <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/hp-1.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>color=White  <?php  echo "<br/>" ;?>Model::JVC - HA-EB75 <?php  echo "<br/>" ;?>Warrenty=1.5 Year </lable></td></tr>
</div>
<?php
$name="Black Headphone";
$price=5000;
?>
<div class="web">
<tr><td><p> Black Headphone <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/hp-2.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>color=Black <?php  echo "<br/>" ;?>Model:Sony WH-1000XM4 Industry Leading Wireless  <?php  echo "<br/>" ;?>Noise Cancelling Headphones, Bluetooth Headset with Mic for Phone Calls, 30 Hours Battery Life, Quick Charge, Touch Control & Alexa Voice Control – (Black)</lable></td></tr>
</div>
<?php
$name="White Wired Headphone";
$price=350;
?>
<div class="web">
<tr><td><p> White Wired Headphone <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/hp-3.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>color=Black <?php  echo "<br/>" ;?>Model::JBL - Ma-UB75 <?php  echo "<br/>" ;?>Warrenty=2 Year </lable></td></tr>
</div>
<?php
$name="Ear Birds";
$price=5500;
?>
<div class="web">
<tr><td><p> Ear Birds <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/hp-4.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>color=Black-Blue <?php  echo "<br/>" ;?>Model:Sony WF-XB700 Truly Wireless Extra Bass Bluetooth Earbuds  <?php  echo "<br/>" ;?>True Wireless Earbuds with Mic for Phone Calls, 18 Hours Battery Life, Quick Charge, BT Ver 5.0 (Blue)</lable></td></tr>
</div>
</form>
</form>
</table>
</body>
</html>
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
     <li><a href="category.php?id=<?php  echo $id;?>">choose category</a></li>
     <li><a href="help.php?id=<?php  echo $id;?>">Help</a></li>
     <li><a href="userinfo.php?id=<?php  echo $id;?>">User Info</a></li>
     <li><a href="logout.php">logout</a></li>
</ul>

<?php
$name="Simple Basic Washing Machine";
$price=12000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<tr><td><p> Simple Basic Washing Machine<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/w-1.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Panasonic Econavi 8 Kg 5 Star Built-In Heater Machine  <?php  echo "<br/>" ;?> BEE Rating: 5 Star Rating | More Stars More Savings | Wash Programs: 15  <?php  echo "<br/>" ;?>Also Included in the Box:1 Washer unit, 1 User Manual, 1 Warranty Card and ECONAVI: Energy & Water Saving with Advanced Technology</lable></td></tr>
</div>
<?php
$name="3 Star Washing Machine";
$price=15000;
?>
<div class="web">
<tr><td><p> 3 Star Washing Machine<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/w-2.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Panasonic Econavi 8 Kg 3 Star Built-In Heater Machine  <?php  echo "<br/>" ;?> BEE Rating: 3 Star Rating  | Wash Programs: 10  <?php  echo "<br/>" ;?>Also Included in the Box:1 Washer unit, 1 User Manual, 1 Warranty Card and ECONAVI: Energy & Water Saving with Advanced Technology</lable></td></tr>
</div>
<?php
$name="5 Star Washing Machine ";
$price=25500;
?>
<div class="web">
<tr><td><p> 5 Star Washing Machine <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/w-3.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Panasonic Econavi 12 Kg 5 Star Built-In Heater Fully-Automatic  Washing Machine (NA-F80V9LRB, Silver, Stain Master+)  <?php  echo "<br/>" ;?> BEE Rating: 5 Star Rating  | Wash Programs: 20  <?php  echo "<br/>" ;?>Built-In Heater with Stain Master+: 60˚C Wash For 99.99% Bacteria Elimination|Intensive Removal of Stains and Germs</lable></td></tr>
</div>
<?php
$name="Latest Techno. Washing Machine";
$price=45000;
?>
<div class="web">
<tr><td><p> Latest Techno. Washing Machine<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/w-4.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Samsung Econavi 17 Kg 7 Star Built-In Heater Fully-Automatic Top Loading Washing Machine (NA-F80VSDF, Silver, Stain Master+)  <?php  echo "<br/>" ;?> BEE Rating: 7 Star Rating  | Wash Programs: 30  <?php  echo "<br/>" ;?>Built-In Heater with Stain Master+: 65˚C Wash For 99.99% Bacteria Elimination|Intensive Removal of Stains and Germs</lable></td></tr>
</div>
</form>
</form>
</table>
</body>
</html>
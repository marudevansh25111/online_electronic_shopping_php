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
$name="Double Door Fridge";
$price=75000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<tr><td><p> Double Door Fridge <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/r-1.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>LG 679 L Frost Free Side-by-Side Refrigerator(GC-B247KQDV.ADSQEBN, Graphite steel, Inverter Compressor)  <?php  echo "<br/>" ;?>Frost Free, Side-by-Side: Auto defrost to stop ice-build up & Capacity 679 L: Suitable for families with 5 or more members <?php  echo "<br/>" ;?>Shelf Type: Toughened Glass & Dimension (mm): Height (Net) 1790; Width (Net) 912; Depth (Net) 717 & Also included in the box: User manual, Warranty card</lable></td></tr>
</div>
<?php
$name="3 Star Godrej Fridge";
$price=25000;
?>
<div class="web">
<tr><td><p> 3 Star Godrej Fridge<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/r-2.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Whirlpool 190 L 3 Star Direct-Cool Single Door Refrigerator  <?php  echo "<br/>" ;?> Direct Cool Refrigerator, 190 L Upto 9 Hour Cooling Retention during Power Cuts <?php  echo "<br/>" ;?>Stabilizer Free Operation (Range: 130 V - 300 V) Warranty: 1 Year on Product, 10 Years on Compressor</lable></td></tr>
</div>
<?php
$name="7 Star Doble Door Latest Fridge ";
$price=78500;
?>
<div class="web">
<tr><td><p> 7 Star Doble Door Latest Fridge <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/r-3.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Whirlpool 180 L 7 Star Direct-Cool Single Door Refrigerator  <?php  echo "<br/>" ;?> Direct Cool Refrigerator, 160 L Upto 11 Hour Cooling Retention during Power Cuts <?php  echo "<br/>" ;?>Stabilizer Free Operation (Range: 110 V - 290 V) Warranty: 1.5 Year on Product, 15 Years on Compressor</lable></td></tr>
</div>
<?php
$name="5 Star Fridge";
$price=35000;
?>
<div class="web">
<tr><td><p> 5 Star Fridge <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/r-4.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>Whirlpool 125 L 3 Star Direct-Cool Single Door Refrigerator  <?php  echo "<br/>" ;?> Direct Cool Refrigerator, 110 L  <?php  echo "<br/>" ;?>Stabilizer Free Operation (Range: 90 V - 270 V) Warranty: 1/2 Year on Product, 2 Years on Compressor</lable></td></tr>
</div>
</form>
</form>
</table>
</body>
</html>
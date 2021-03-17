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
<table>
<!--<div class="web">
    <p> Dell Laptop</p>
    <p> PRICE=65000</p>
<img src="img/dell.jpg" alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='buy.php?id=2'" value="BUY" />
</div>
<div class="web">
<p> HP Laptop</p>
<p> PRICE=35000</p>
<img src="img/hp.png" alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href=' buy.php?id='" value="BUY" />
</div>
<div class="web">
<p> Apple Laptop</p>
<p> PRICE=100000</p>
<img src="img/apple.png" alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href=' buy.php?id=<'" value="BUY" />
</div>
<div class="web">
<p> Computer </p>
<p> PRICE=40000</p>
<img src="img/computer.png" alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href=' buy.php?id='" value="BUY" />
</div>-->
<?php
$name="dell LAPTOP";
$price=7000;
?>
<tr><td><p> DELL LAPTOP <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/dell.jpg " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>The Laptop Intel® Pentium® Gold Processor 7505 Windows 10 Home Single Language <?php  echo "<br/>" ;?>It Has Intel® UHD Graphics with shared graphics memory And  4GB,1x4GB,DDR4,3200MHz And 1TB 5400 rpm 2.5" SATA Hard Drive <?php  echo "<br/>" ;?>It comes with 39.6-cm. display <?php  echo "<br/>" ;?> It have Weight 1.78 kg With Mouse+Laptop Bag Free with it</lable></td></tr>
</div>
<?php
$name="HP LAPTOP";
$price=7000;
?>
<div class="web">
<tr><td><p> HP LAPTOP <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/hp.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>The Laptop 10th Generation Intel® Core™ i3-1005G1 Processor and Windows 10 Home Single Language <?php  echo "<br/>" ;?>It has Intel® UHD Graphics with shared graphics memory And 8GB, 8Gx1, DDR4, 2666MHz And 1TB 5400 rpm 2.5" SATA Hard Drive <?php  echo "<br/>" ;?>It comes with 37.6-cm. display <?php  echo "<br/>" ;?> It have Weight 1.84 kg With Mouse+Laptop Bag Free with it</lable></td></tr>
</div>
<?php
$name="APPLE LAPTOP";
$price=75000;
?>
<div class="web">
<tr><td><p> APPLE LAPTOP <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/apple.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>The Laptop Comes with 11th Generation Intel® Core™ i3-1115G4 ProcessorWindows 10 Home Single Language <?php  echo "<br/>" ;?> Intel® UHD Graphics with shared graphics memory And 4GB, 4Gx1, DDR4, 2666MHz And 256GB M.2 PCIe NVMe Solid State Drive (Boot) + 1TB 5400 rpm 2.5" SATA Hard Drive (Storage) <?php  echo "<br/>" ;?>It comes with 40.6-cm. display <?php  echo "<br/>" ;?> It have Weight 1.54 kg With 360 degree Rotation and Touchscreen Facality</lable></td></tr>
</div>
<?php
$name="COMPUTER";
$price=5000;
?>
<div class="web">
<tr><td><p> COMPUTER <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/computer.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>The Computer comes with Intel® Pentium® Gold G-6400 processor Windows 10 Home Single Language   <?php  echo "<br/>" ;?> Intel UHD Graphics 630 with shared graphics memory and 8GB, 1x8GB, DDR4, 2666MHz and 256GB M.2 PCIe NVMe Solid State Drive + 1TB 7200 rpm 3.5" SATA Hard Drive <?php  echo "<br/>" ;?>It comes with 40.6-cm. desktop <?php  echo "<br/>" ;?>It has 1TB 7200RPM 3.5" SATA HDD</lable></td></tr>
</div>
</form>
</form>
</table>
</body>
</html>
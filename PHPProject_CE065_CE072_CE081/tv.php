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
$name="LCD Tv";
$price=27000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<tr><td><p> LCD Tv <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/tv-1.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>1m 38cm (55") TUE60 4K Smart Crystal UHD TV  <?php  echo "<br/>" ;?> Crystal Processor 4K and Multi Voice Assist  <?php  echo "<br/>" ;?> Warranty: 5 Year on Product</lable></td></tr>
</div>
<?php
$name="Latest 3D Tv";
$price=52000;
?>
<div class="web">
<tr><td><p> Latest 3D Tv<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/tv-2.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>LG 108 cm (43 inches) Full HD LED Smart TV 43LM5650PTA (Ceramic Black) (2020 Model)  <?php  echo "<br/>" ;?> Resolution: Full HD (1920 x 1080) | Refresh Rate: 50 hertz  <?php  echo "<br/>" ;?>Display: Active HDR | Display Type: Flat | BackLight Module: Slim LED</lable></td></tr>
</div>
<?php
$name="LED Tv";
$price=38000;
?>
<div class="web">
<tr><td><p> LED Tv <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/tv-3.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>LG 100 cm (40 inches) Full HD LED Smart TV 43LM5650PTA (Ceramic Black) (2017 Model)  <?php  echo "<br/>" ;?> Resolution:  HD (1900 x 1020) | Refresh Rate: 40 hertz  <?php  echo "<br/>" ;?>Display: Active HDR | Display Type: Flat | BackLight Module: Slim LED</lable></td></tr>
</div>
<?php
$name="Basic LCD Tv";
$price=23000;
?>
<div class="web">
<tr><td><p> Basic LCD Tv<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/tv-4.png " alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>'" value="Place Order" /></td><td><lable>LP 90 cm (38 inches) Simple HD LCd Smart TV 43LM5DFGG (Ceramic Brown) (2011 Model)  <?php  echo "<br/>" ;?> Resolution: Simple HD (1920 x 1080) |   <?php  echo "<br/>" ;?>Display: Active Basic | BackLight Module: Slim LCD</lable></td></tr>
</div>
</form>
</form>
</table>
</body>
</html>
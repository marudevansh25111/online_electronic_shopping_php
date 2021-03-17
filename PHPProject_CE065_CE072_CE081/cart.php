<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$id=$_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM UserInfo WHERE id = $id";
$result = $conn->query($sql);
$row =$result->fetch_assoc();


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
     <li><a href="web.php?id=<?php  echo $id;?>">Web</a></li>
     <li><a href="help.php?id=<?php  echo $id;?>">Help</a></li>
     
     <li><a href="logout.php">logout</a></li>
</ul>


<form>  <lable class="yes">Product</lable></br>
<lable>Product Name : <?php echo $row['product'];?></lable></br>
<lable>Total Price :<?php echo $row['Price'];?></lable></br>


</form>
</body>
</html>
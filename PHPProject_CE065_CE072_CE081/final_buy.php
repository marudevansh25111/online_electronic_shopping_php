<?php
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

$name1=NULL;
$price=NULL;
$id=$_GET['id'];
// echo $row["address"];
$sql = "SELECT *FROM UserInfo  WHERE id= $id" ;
$result = $conn->query($sql);
$row =$result->fetch_assoc();
$name1=$row['product'];
$price1=$row['Price'];


?>
<html>
<head><title>Place Order</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
</head>

<body>
<ul>
     <li><a href="home.php">Home</a></li>
     <li><a href="AboutUs.php?id=<?php  echo $id;?>">About Us</a></li>
     <li><a href="userinfo.php?id=<?php  echo $id;?>">User Info</a></li>
     <li><a href="cart.php?id=<?php  echo $id;?>">CART</a></li>
     <li><a href="help.php?id=<?php  echo $id;?>">Help</a></li>
     <li><a href="logout.php">logout</a></li>
</ul>

<form method="POST" action="placeorder.php?id=<?php  echo $id;?>">
<table>
<div class="fm">

 <?php
 if(TRUE)
 {   
     $name=$name1." , ".$_GET["name"];
      
     $price =$price1 + $_GET['price'];
     $sql = " UPDATE UserInfo SET Price = '$price' , product= '$name' WHERE id=$id" ;
     $name1=NULL;
     $price1=NULL;
    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error updating record: " . $conn->error;
    }
    

 }
 ?> 
 <label ><input type="submit"  value="Place Order" name="submit" /></label><?php echo "</br>";?>
 <label >      Do You Want to change your address ?</label>
 <label ><input type="button" onclick="window.location.href='address.php?id=<?php  echo $id;?>'" value="Change Address" /></label><?php echo "</br>";?>
 <label >      Do You Want to Buy another product ?</label>
 <label ><input type="button" onclick="window.location.href='web.php?id=<?php  echo $id;?>'" value="Web" /></label>
 </div>
 
 
</table>
</form>

<body>
</html>
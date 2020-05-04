<?php
require_once "db_connect.php";


  $result = $conn->query("SELECT * FROM Candies WHERE Name = 'Candy Corn Oreos' LIMIT 1");
  $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	  <title> <?php echo $row['Name'] ?> </title>
	  <link rel="stylesheet" href="product.css">
	  <script src="product.js"> </script>
  </head>

  <body>
	<ul class="nav">
		<li><a href="candyTable.php">< Back</a></li>
	</ul>
	<h1> LIMITED EDITION - Candy Corn Oreos </h1>
	<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src=<?php echo "'".$row['Image1']."'" alt="COpic1"/>
	<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src=<?php echo "'".$row['Image2']."'" ?> alt="COpic2"/>
	<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src=<?php echo "'".$row['Image3']."'" ?> alt="COpic3"/>
	<h3><?php echo $row['Price'] ?></h3>
  <h2>Product Details</h2>
	<h4><?php echo $row['Description2'] ?></h4>
  <h4><?php echo $row['Description3'] ?></h4>
	<button class="button" onclick="orderProduct()">Buy now</button>
  </body>
</html>
<?php
$conn = null;
?>

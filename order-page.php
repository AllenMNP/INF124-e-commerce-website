<?php
require_once "db_connect.php";

if (isset( $_POST)){
	try{
	  $mysql = "
	  	CREATE TABLE Orders (

	  	FirstName VARCHAR(30) NOT NULL PRIMARY KEY,
	  	LastName VARCHAR(30) NOT NULL,
	  	PhoneNumber VARCHAR(30) NOT NULL,
	  	Product VARCHAR(30) NOT NULL,
	  	Quantity INT(100) NOT NULL,
	  	Address1 VARCHAR(40) NOT NULL,
	  	Address2 VARCHAR(30),
	  	Zipcode VARCHAR(20) NOT NULL,
	  	City VARCHAR(30) NOT NULL,
	  	State VARCHAR(30) NOT NULL,
	  	Country VARCHAR(30) NOT NULL,
	  	ShipMethod VARCHAR(30) NOT NULL,
	  	CCNumber VARCHAR(30) NOT NULL,
	  	ExpDate VARCHAR(10) NOT NULL,
	  	CVV INT(3) NOT NULL
	  	)";
	  	if ($conn->query($mysql) === TRUE) {
	  		echo 'Table created!';
	    }
	    else {
	    	//echo 'Error creating table' . $conn->error;
	    }


	  	$stmt = $conn->prepare("INSERT IGNORE INTO Orders (FirstName, LastName, PhoneNumber, Product, Quantity, Address1, Address2, Zipcode, City, State, Country, ShipMethod, CCNumber, ExpDate, CVV)
	  		VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

	  	$stmt->bind_param("ssssissssssssss", $firstname, $lastname, $phonenumber, $product, $quantity, $address1, $address2, $zipcode, $city, $state, $country, $shipment, $cardnumber, $expiration, $cvv);

	  	$firstname = $_POST["firstname"];
	  	$lastname = $_POST["lastname"];
	  	$phonenumber = $_POST["phonenumber"];
	  	$product = $_POST["product"];
	  	$quantity = $_POST["quantity"];
	  	$address1 = $_POST["street1"];
	  	if(isset($_POST["street2"]))
	  	{
	  		$address2 = $_POST["street2"];
	  	}
	  	$zipcode = $_POST["zipcode"];
	  	$city = $_POST["city"];
	  	$state = $_POST["state"];
	  	$country = $_POST["country"];
	  	$shipment = $_POST["shipment"];
	  	$cardnumber = $_POST["cardnumber"];
	  	$expiration = $_POST["expiration"];
	  	$cvv = $_POST["cvv"];
	  	$stmt->execute();

	  	echo 'Order inserted!';
	}

	catch(PDOException $e){
	    echo $sql . "<br>" . $e->getMessage();
	}
}
$stmt->close();
$conn->close();
//('Ryan','Nguyen','7146160227','Peanut Butter','3','1234 fake street','1234','92648','HB','CA','USA','3 day','14901384091','04/28','101')
?>
<?php
session_start();
require_once "db_connect.php";

if (isset( $_POST)){
	try{
	  $mysql = "
	  	CREATE TABLE Orders (
		OrderID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	  	FirstName VARCHAR(30) NOT NULL,
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
		CVV INT(3) NOT NULL,
		Subtotal DECIMAL(10,2) NOT NULL,
		Tax DECIMAL(10,2) NOT NULL,
		Total DECIMAL(10,2) NOT NULL
	  	)";
	  	if ($conn->query($mysql) === TRUE) {
	  		echo 'Table created!';
	    }
	    else {
	    	echo 'Error creating table' . $conn->error;
	    }
		
	  	$stmt = $conn->prepare("INSERT IGNORE INTO Orders (OrderID, FirstName, LastName, PhoneNumber, Product, Quantity, Address1, Address2, Zipcode, City, State, Country, ShipMethod, CCNumber, ExpDate, CVV, Subtotal, Tax, Total)
	  		VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

	  	$stmt->bind_param("issssissssssssssddd", $autoincrement, $firstname, $lastname, $phonenumber, $product, $quantity, $address1, $address2, $zipcode, $city, $state, $country, $shipment, $cardnumber, $expiration, $cvv, $subtotal, $tax, $total);

		$firstname = $_POST["firstname"];
		$_SESSION['firstname'] = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$_SESSION['lastname'] = $_POST["lastname"];
		$phonenumber = $_POST["phonenumber"];
		$_SESSION['phonenumber'] = $_POST["phonenumber"];
		$product = $_POST["product"];
		$_SESSION['product'] = $_POST["product"];
		$quantity = $_POST["quantity"];
		$_SESSION['quantity'] = $_POST["quantity"];

		$subtotal = 0;

		switch($product){
			case "Peanut Butter Cups":
				$subtotal = 7.99;
				break;
			case "Candy Canes":
				$subtotal = 3.56;
				break;
			case "Almond Joy":
				$subtotal = 0.99;
				break;
			case "Candy Corn Oreos":
				$subtotal = 8.23;
				break;
			case "Fruit Roll-Ups":
				$subtotal = 25.97;
				break;
			case "Nerds":
				$subtotal = 10.39;
				break;
			case "Swedish Fish":
				$subtotal = 4.98;
				break;
			case "Reeses Pieces":
				$subtotal = 6.99;
				break;
			case "Skittles":
				$subtotal = 29.20;
				break;
			case "Rice Krispies";
				$subtotal = 9.49;
				break;
		}

		$subtotal = $subtotal * $quantity;

		$address1 = $_POST["street1"];
		$_SESSION['street1'] = $_POST["street1"];
	  	if(isset($_POST["street2"]))
	  	{
			$address2 = $_POST["street2"];
			$_SESSION['street2'] = $_POST["street2"];
	  	}
		$zipcode = $_POST["zipcode"];
		$_SESSION['zipcode'] = $_POST["zipcode"];
		$city = $_POST["city"];
		$_SESSION['city'] = $_POST["city"];
		$state = $_POST["state"];
		$_SESSION['state'] = $_POST["state"];
		$country = $_POST["country"];
		$_SESSION['country'] = $_POST["country"];
		$shipment = $_POST["shipment"];
		$_SESSION['shipment'] = $_POST["shipment"];
		$_SESSION['tax'] = $_POST["tax"];

		

		$cardnumber = $_POST["cardnumber"];
		$_SESSION['cardnumber'] = $_POST["cardnumber"];
		$expiration = $_POST["expiration"];
		$_SESSION['expiration'] = $_POST["expiration"];
		$cvv = $_POST["cvv"];
		$_SESSION['cvv'] = $_POST["cvv"];
		$total = $_POST['total'];
		$_SESSION['subtotal'] = $_POST['subtotal'];
		$subtotal = $_POST['subtotal'];
		$_SESSION['total'] = $_POST['total'];


		$autoincrement = 0;


		$stmt->execute();
		header('Location: confirmation-page.php');
		
	}

	catch(PDOException $e){
	    echo $sql . "<br>" . $e->getMessage();
	}
}
$stmt->close();
$conn->close();
?>
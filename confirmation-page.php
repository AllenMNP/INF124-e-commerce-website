<?php
session_start();
require_once "db_connect.php";
try{
    $full_name = $_SESSION['firstname']." ".$_SESSION['lastname'];
    $product = $_SESSION['product'];
    $quantity = $_SESSION['quantity'];
    $phone = $_SESSION['phonenumber'];
    if(isset($_SESSION['street2'])){
        $address = $_SESSION['street1']." ". $_SESSION['street2']. ", ".$_SESSION['city']." ".$_SESSION['state']." ".$_SESSION['zipcode'];
    }
    else{
        $address = $_SESSION['street1'].", ".$_SESSION['city']." ".$_SESSION['state']." ".$_SESSION['zipcode'];
    }
    $shipping = $_SESSION['shipment'];
    $last_four = substr($_SESSION['cardnumber'], -4);
    $subtotal = $_SESSION['subtotal'];
    $tax = $_SESSION['tax'];
    $total = $_SESSION['total'];

}
catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" style="background-color: #E9F3F3;">
    <head>
        <meta charset="utf-8">
        <title>Order Confirmation Page</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body style="background-color: #E9F3F3;">
        <h1 class="confirm">Confirmation Page</h1>
        <ul class="nav">
		    <li><a href="candyTable.php">< Back</a></li>
	    </ul>
        <div class="content">
            <div class="content-head">
                <h2 class="thanks">Thanks for your order!</h2>
                <div class="details" style="margin-left:500px;"> 
                    <table class="detail-table" style="text-align:left">
                        <tr>
                            <th class="left">Details</th>
                            <th class="right">Value</th>
                        </tr>
                        <tr>
                            <td class="left">Product:</td>
                            <td class="right"><?php echo $product; ?></td>
                        </tr>
                        <tr>
                            <td class="left">Quantity:</td>
                            <td class="right"><?php echo $quantity; ?></td>
                        </tr>
                        <tr>
                            <td class="left">Name:</td>
                            <td class="right"><?php echo $full_name; ?></td>
                        </tr>
                        <tr>
                            <td class="left">Phone:</td>
                            <td class="right"><?php echo $phone; ?></td>
                        </tr>
                        <tr>
                            <td class="left">Address:</td>
                            <td class="right"><?php echo $address; ?></td>
                        </tr>
                        <tr>
                            <td class="left">Last 4 CC:</td>
                            <td class="right"><?php echo $last_four; ?></td>
                        </tr>
                    </table>
                </div>
                <br/>
                <div class="totals" style="margin-left:800px;">
                    <table style="text-align:right">
                        <tr>
                            <td class="left">Subtotal: </td>
                            <td class="right"><?php echo '$'.$subtotal; ?></td>
                        </tr>
                        <tr>
                            <td class="left">Shipping: </td>
                            <td class="right"><?php echo '$'.$shipping; ?></td>
                        </tr>
                        <tr>
                            <td class="left">Tax: </td>
                            <td class="right"><?php echo '$'.$tax; ?></td>
                        </tr>
                        <tr>
                            <td class="left">Total: </td>
                            <td class="right"><?php echo '$'.$total; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
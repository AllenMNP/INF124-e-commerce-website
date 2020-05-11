<?php
    require_once "db_connect.php";

    $val = $_GET["value"];

    $val_M = mysqli_real_escape_string($conn, $val);

    $sql = "SELECT Name, Price FROM Candies WHERE Name='$val_M'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0)
    {
        while ($rows = $result->fetch_assoc()){
            $product_price = floatval(ltrim($rows['Price'], '$'));
            echo $product_price;
        }
    }
?>
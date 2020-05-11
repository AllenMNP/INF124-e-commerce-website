<?php
    require_once "db_connect.php";

    $val = $_GET["value"];

    $match = mysqli_real_escape_string($conn, $val);

    $sql = "SELECT Name, Price FROM Candies WHERE Name='$match'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0)
    {
        while ($rows = $result->fetch_assoc()){
            $product_price = floatval(ltrim($rows['Price'], '$'));
            echo $product_price;
        }
    }
    $conn->close();
?>
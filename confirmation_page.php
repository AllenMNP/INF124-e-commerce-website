<?php
require_once "db_connect.php";
try{
    echo "Hello World";
}
catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}
?>
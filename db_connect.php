<?php
$conn = mysqli_connect("localhost", "root", "", "test");
if (!$conn){
  echo 'connection_error: ' . mysqli_connect_error();
}?>

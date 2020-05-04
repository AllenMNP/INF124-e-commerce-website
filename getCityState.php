<?php
  // zip codes
  $zip_codes = array();
  $file = fopen('zip_codes.csv', 'r');
  while (($line = fgetcsv($file)) !== FALSE)
  {
      $key = array_shift($line);
      //print_r($line);
      $arr = implode(", ", $line);
      $zip_codes[$key] = $arr;
      //print_r($arr);
  }
  fclose($file);
  //print_r($a);
  
  $zip = $_GET["zip"];
  if (array_key_exists($zip, $zip_codes))
    print $zip_codes[$zip];
  else
    print " , ";
?>
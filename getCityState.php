<?php
  // zip codes
  $zip_codes = array();
  $file = fopen('zip_codes.csv', 'r');
  while (($line = fgetcsv($file)) !== FALSE)
  {
      $key = array_shift($line);
      $arr = implode(", ", $line);
      $zip_codes[$key] = $arr;
  }
  fclose($file);
  
  $zip = $_GET["zip"];
  if (array_key_exists($zip, $zip_codes))
    print $zip_codes[$zip];
  else
    print " , ";
?>
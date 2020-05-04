<?php
  // tax rates
  $tax_rates = array();
  $f = fopen('tax_rates.csv', 'r');
  while (($l = fgetcsv($f)) !== FALSE)
  {
      $k = array_shift($l);
      $a = implode(", ", $l);
      $tax_rates[$k] = $a;
  }
  fclose($f);
  
  $tax = $_GET["zip"];
  if (array_key_exists($tax, $tax_rates))
    print $tax_rates[$tax];
  else
    print " , ";
?>
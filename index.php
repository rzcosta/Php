<?php
  $hamburger = 4.95;
  $milkshake = 1.95;
  $cola = 0.85;

  $tax_rate= 0.075;
  $tip_rate= 0.16;

  $dinner = (2 * $hamburger) + $milkshake + $cola;

  $tip= $dinner * $tip_rate;
  $tax= $dinner * $tax_rate;
  $total = $tax + $tip + $dinner;

  print 'The Grand total is $' . $total;

?>

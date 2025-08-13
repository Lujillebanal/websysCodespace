<?php
$num = 20;

function global_var() {

  global $num;
  echo "variable num inside function $num \n";
}

  global_var();
  
  echo "variable num inside function $num";
?>
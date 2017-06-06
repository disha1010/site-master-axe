<?php 
  if (!file_exists('counter.txt') || !is_numeric(file_get_contents('counter.txt'))) {
    $counter = 0;
  } 
  else {
    $counter = (int)file_get_contents('counter.txt');
  } 

  $counter++;
  file_put_contents('counter.txt', $counter);
  echo $counter;
?>
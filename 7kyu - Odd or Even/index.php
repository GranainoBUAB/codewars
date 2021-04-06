<?php
function odd_or_even(array $listnumber): string {
  // Your code here
  
  $index = 0;
  $resultado = 0;
  
  while ($index < count($listnumber))
  {
   $resultado +=  $listnumber[$index];
   $index++;
  }
  
  if ($resultado % 2 === 0)
  {
    return ("even");
  }

  return ("odd");
  
}
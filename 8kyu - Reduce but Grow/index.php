<?php

function grow($a) 
{
  // Your code here
  
  $cantidaddedatos = count($a);
  $index = 0;
  $resultado = 1;
  
  while ($index < $cantidaddedatos)
    {
    $resultado = $resultado * $a[$index];
    $index ++;
    }
  
  echo ($resultado). "\n";
}

grow([1, 2, 3]);
grow([4, 1, 1, 1, 4]);
grow([2, 2, 2, 2, 2, 2]);
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
  
  return ($resultado);
}
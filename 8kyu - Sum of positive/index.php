<?php
function positive_sum($numberlist) {
    // Your code here
    
    $index = 0;
    $resultado = 0;
    $nbdatos = count($numberlist);
      
    while ($index < $nbdatos) 
    {
      if ($numberlist[$index]>0)
      {
        $resultado += $numberlist[$index];
      }  
      $index++;
    }
    return ($resultado);
  }
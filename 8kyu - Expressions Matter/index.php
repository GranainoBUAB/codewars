<?php

function expressionMatter($a, $b, $c) {
    // your code here
  
    $value1 = $a * ($b + $c);
    //echo ($value1);
    $value2 = $a * $b * $c;
    //echo ($value2);
    $value3 = $a + $b * $c;
    //echo ($value3);
    $value4 = ($a + $b) * $c;
    //echo ($value4);
  
    if ($value1 > $value2)
    {
      $resultado = $value1;
    }  
    else
    {
      $resultado = $value2;
    }  
  
    
    if ($resultado < $value3)
    {
      $resultado = $value3;
    }  
    
    if ($resultado < $value4)
    {
      $resultado = $value4;
    } 
     
    
  //1 * (2 + 3) = 5
  //1 * 2 * 3 = 6
  //1 + 2 * 3 = 7
  //(1 + 2) * 3 = 9
  
  //return ($resultado);
  echo ($resultado); 
  
  }

  echo expressionMatter(2, 1, 2);
  echo "\n";
  echo expressionMatter(2, 1, 1);
  echo "\n";
  echo expressionMatter(2, 2, 4);
  echo "\n";
  echo expressionMatter(3, 3, 3);
  echo "\n";
  echo expressionMatter(1, 1, 1);
  echo "\n";
  echo expressionMatter(2, 10, 3);
  echo "\n";
  echo expressionMatter(10, 5, 6);
  echo "\n";
  




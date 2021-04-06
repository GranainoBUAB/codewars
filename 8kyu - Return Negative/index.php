<?php

function makeNegative(float $num) : float 
{

  if ($num < 0)
    {
      return ($num);
    }
 
    return ($num * -1);
}
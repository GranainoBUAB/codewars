<?php

function enough($cap, $on, $wait) {
    // your code here
    
    if ($cap - $on - $wait > 0)
    {
      return (0);
    }
    else
    {
      return (($cap - $on - $wait)*-1);
    }  
  }
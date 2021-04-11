<?php

function enough($cap, $on, $wait) {
    // your code here
    
    if ($cap - $on - $wait > 0)
    {
      return (0);
    }
    
    return (($cap - $on - $wait)*-1);
      
  }
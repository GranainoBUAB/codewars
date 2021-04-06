<?php

function basicOp($op, $val1, $val2)
{
  // Solution
  
  if ($op === '+')
  {
    return ($val1 + $val2);
  }
  elseif ($op === '-')
  {
    return ($val1 - $val2);
  }
    elseif ($op === '*')
  {
    return ($val1 * $val2);
  }
    elseif ($op === '/')
  {
    return ($val1 / $val2);
  }
}
<?php

function getPercentage($sent,$limit = -1): string {
    // write code here
    
    if ($limit === -1)
    {
      $limit = 1000;
    }
    
    if ($sent === 0)
    {
      return ("No e-mails sent");
    }
    
    if ($sent >= $limit)
    {
      return ("Daily limit is reached");
    }

    return (floor($sent/$limit*100));
   
    
  }

  echo (getPercentage(101, 1000));
  echo "<br>";
  echo(getPercentage(256, 500));
  echo "<br>";
  echo(getPercentage(256, 300));
  echo "<br>";
  echo(getPercentage(259));
  echo "<br>";
  echo(getPercentage(0));
  echo "<br>";
  echo(getPercentage(1000, 1000));
  
 /* $this->assertEquals(getPercentage(101, 1000), "10%");
  $this->assertEquals(getPercentage(256, 500), "51%");
  $this->assertEquals(getPercentage(256, 300), "85%");
  $this->assertEquals(getPercentage(259), "25%");
  $this->assertEquals(getPercentage(0), "No e-mails sent");
  $this->assertEquals(getPercentage(1000, 1000), "Daily limit is reached");
  */

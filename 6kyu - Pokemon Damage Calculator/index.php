<?php

function calculateDamage(string $yourType, string $opponentType, int $attack, int $defense): int
{
   
  if ($yourType === "fire" &&  $opponentType === "grass"){
    $effectiveness = 2;
  }
  elseif($yourType === "grass" &&  $opponentType === "fire"){
    $effectiveness = 0.5;
  }
  elseif($yourType === "fire" &&  $opponentType === "water"){
    $effectiveness = 0.5;
  }
  elseif($yourType === "water" &&  $opponentType === "fire"){
    $effectiveness = 2;
  }
  elseif(($yourType === "fire" &&  $opponentType === "electric") || ($yourType === "electric" &&  $opponentType === "fire")){
    $effectiveness = 1;
  }
  elseif($yourType === "water" &&  $opponentType === "grass"){
    $effectiveness = 0.5;
  }
  elseif($yourType === "grass" &&  $opponentType === "water"){
    $effectiveness = 2;
  }
  elseif($yourType === "water" &&  $opponentType === "electric"){
    $effectiveness = 0.5;
  }
  elseif($yourType === "electric" &&  $opponentType === "water"){
    $effectiveness = 2;
  }
  elseif(($yourType === "grass" &&  $opponentType === "electric") || ($yourType === "electric" &&  $opponentType === "grass")){
    $effectiveness = 1;
  }
  elseif($yourType === $opponentType){
    $effectiveness = 0.5;
  }
    
  return (50 * ($attack / $defense) * $effectiveness);
}

echo ("25 - " . calculateDamage("fire", "water", 100, 100));
echo "<br>";
echo ("100 - " . calculateDamage("grass", "water", 100, 100));
echo "<br>";
echo ("50 - " . calculateDamage("electric", "fire", 100, 100));
echo "<br>";
echo ("150 - " . calculateDamage("grass", "electric", 57, 19));
echo "<br>";
echo ("100 - " . calculateDamage("grass", "water", 40, 40));
echo "<br>";
echo ("175 - " . calculateDamage("grass", "fire", 35, 5));
echo "<br>";
echo ("250 - " . calculateDamage("fire", "electric", 10, 2));
 
 
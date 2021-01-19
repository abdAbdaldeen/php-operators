<?php 
function task1($y){
if ($y % 400 ===0) {
    return true;
}
else if ($y % 100 ===0) {
    return false;
}
else if ($y % 4 ===0) {
    return true;
}
return false;
}
// echo task1(2020);
// ===================
function task2($t){
if ($t <20) {
    return "winter";
}
else {
    return "summer";
}
}
// echo task2(20);
// ===================
function task3($x,$y){
if ($x===$y) {
    return $x*6;
}
else {
    return $x+$y;
}
}
// echo task3(5,5);
// ===================
function task4($n){
    $x = 100;

    if ($n > $x)
    {
      return ($n - $x)*3;
    }
  return $x - $n;
}
// echo task4(5);
// ===================
function task5($x, $y) 
{
    return ($x == 30) || ($y == 30) || ($x + $y == 30);
}
// ===================
function task6($x) 
{
   if (abs($x - 100) <= 10 || abs($x - 200) <= 10) return true;
     return false;
}
// ===================
function task7($n) 
{
   return $n % 3 == 0 || $n % 7 == 0;
}
// ===================
function task8($s) 
{
  if (strlen($s) > 2 && substr($s,0, 2) == "if")
            {
                return $s;
            }
      return "if ".$s;
}
// ===================
function task9($s, $n) 
{
   return substr($s,0,$n).substr($s,$n+1,strlen($s)-$n);
}

// ===================



function task10($x, $y) 
{
    return ($x >= 100 && $x <= 200) || ($y >= 100 && $y <= 200);
}



// ===================



function task11($x, $y) 
{
   return ($x <= 100 || $y >= 200) || ($y <= 100 || $x >= 200);
}


// ===================



function task12($x, $y, $z) 
{
  $max = max($x, max($y, $z));
  return $max;
}


// ===================


function task13($x, $y) 
{
   $n = 100;
   $val = abs($x - $n);
   $val2 = abs($y - $n);
   return $val == $val2 ? 0 : ($val < $val2 ? $x : $y);
}



// ===================




function task14($x, $y)
{
   return $x == 5 || $y == 5 || $x + $y == 5 || abs($x - $y) == 5;
 }

?>
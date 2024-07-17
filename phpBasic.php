<!DOCTYPE html>
<html lang="en">

<head>
  <title>Basic PHP</title>
</head>

<body style="text-align: center; font-size:larger;">
  <h1>PHP learning from scratch</h1>
  <?php 
  
  //  variable declaration
  $Cookies= "This is string";
  $age = 5; /*This is interger type variable */
  echo(gettype($age));
  echo("<br>");
  echo(gettype($Cookies));
  echo("<br>");
  // Conditional statement
// creating Calculator

function Calculator($x,$y,$opr){
  if ($opr === "+"){
    return $x + $y;
  }else if ($opr === "-"){
    return $x - $y;
  }else if ($opr === "*"){
    return $x * $y;
  }else if ($opr === "/"){
    return $x / $y;
  }
}
  $Result = Calculator(5,6,"+");
  echo("addition :$Result" ) ;
  echo("<br>");
  echo("<br>");
  $Result = Calculator(5,6,"-");
  echo("subtraction :$Result" ) ;
  echo("<br>");
  echo("<br>");
  $Result = Calculator(5,6,"*");
  echo("Multiplication :$Result" ) ;
  echo("<br>");
  echo("<br>");
  $Result = Calculator(8,4,"/");
  echo("Division: $Result" ) ;
  echo("<br>");
  echo("<br>");





  // looping in PHP

  for($x=0; $x<10; $x++){
    echo($x);
    
  }
  echo("<br>");
  echo("<br>");

  // Array in php

  $x = array("hello",5,6,7,8);
  foreach($x as $y){
    echo($y);
  }
  echo("<br>");
  echo("<br>");
  // Associative array
$asso = array("Name"=>"Aabhushan","Cast"=>"Dhakal");
foreach($asso as $key => $value){
  echo $key . ":" .$value . "<br>";
}
// array accessing particular element and changing the particular element =
$Array = array(5,6,1,8,78,9);
echo($Array[0]);
$Array[2]= 14;
echo("<br>");
echo($Array[2]);
  ?>
</body>

</html>
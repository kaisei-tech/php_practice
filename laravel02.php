<?php
  $a = 3;
  $b = 5;
  $c = $a + $b;
  echo "$c:";
  var_dump($c);
?>

<?php
  $array_month = ["January","February","March","April","May","June","July","August","Septembe","October","November","December"];
  echo $array_month[7];
?>

<?php

  $hello = "Hello,";
  $name = "Kaisei";
  $world = "'s World!";
  $title = $hello . $name . $world;
  echo $title;
?>

<?php

  $tech_boost = "tech";
  $tech_boost .="boost";
  echo $tech_boost;
  
?>

<?php

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $calendar_2018["December"];

?>  
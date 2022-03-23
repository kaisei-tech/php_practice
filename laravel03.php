<?php

$name = "Kaisei";
if ($name != "Kaisei") {
  echo "私はKaiseiではありません。";
} else {
  echo "私はKaiseiです。";    
}

?>


<?php

$total = 0;
echo $total;


for ($i = 0; $i <= 1000; $i++) {
    $total += $i;
}

echo $total;

?>

<?php

$fruits = array("apple", "orange", "lemon","kiwi","lime");


foreach ($fruits as $value) {
    echo "果物は" . $value;
    echo"\n";
}

?>

<?php

// for文の始めの値を定義する 
$start = 1;
// for文の終わりの値を定義する 
$end = 100;

for($i = $start; $i <= $end; $i++) {

// 5で割り切れたら{}内を実行する
  if ($i % 5 == 0){
    
    echo $i;
    echo "\n";
  }
}

?>



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
    

for($i = 1; $i <= 100; $i++) {
    
if($i % 5 == 0) 
echo $i;

}
  

?>


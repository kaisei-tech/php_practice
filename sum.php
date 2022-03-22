<?php

function multi($num){
    $result = $num * 2;
    return $result;
    
}
    
echo multi(3);

?>


<?php

function add($a, $b){
    $result = $a + $b;
    return $result;
}

echo add(1, 2);

?>

<?php

function arrymultipul($arr){
    $result = 1;
    foreach($arr as $num){
        $result *= $num;   
    }
    return $result;
    
}


$arr = array(1,3,5,7,9);
echo arrymultipul($arr);
    

?>

<?php

function max_array($arr){

 $max_number = $arr[0];
   foreach($arr as $a){
   if($max_number < $a) {
      $max_number = $a;
   }
   }

   return $max_number;
 
 }
 
 $arr = array(1,3,5,7,9);
 var_dump(max_array($arr));
 
 ?>
 
 
 
 // strip_tags  文字列からHTMLタグやPHPタグを取り除く 
 
 <?php
 
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);

?>

// array_push  配列の最後に1つ以上の要素を追加したい時に使用する関数

<?php

   $members=array("一郎","二郎","三郎");
   array_push($members,"四郎","五郎");
   print_r($members);
            
?>

// array_merge  配列同士を結合する際に使う関数

<?php 

  $array01 = ["りんご", "バナナ", "みかん", "メロン"];
  $array02 = ["ぶどう", "いちご"];
  $array03 = ["パイナップル", "もも", "柿"];
  var_dump(array_merge($array01, $array02));
  
?>

//  time  UNIXタイムスタンプを取得することができる関数

<?php

  var_dump( time() );

?>

// mktime  PHPの標準関数で指定した日時のタイムスタンプを取得するためのメソッド

<?php

  $time = mktime(9);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');

?>

//  date  指定された日時を任意の形式でフォーマットし、日付文字列を返す関数


<?php

echo date('Y/m/d');

?>


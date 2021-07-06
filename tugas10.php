
<?php
$arr = array(1,3,8,2,5,7,4,0);

print("Sebelum Di Sorting :<br>");
print_r($arr);

$arr = bubble_sort($arr);
print("<br> Setelah Disorting (Buble Sort) :<br>");
print_r($arr);


function bubble_sort($arr) {
        //Tulias Kode Kamu disini
  $ukuran = count($arr)-1;
  for ($i=0; $i<$ukuran; $i++) {
      for ($j=0; $j<$ukuran-$i; $j++) {
          $k = $j+1;
          if ($arr[$k] < $arr[$j]) {
              list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
          }
      }
  }
  return $arr;
}
?>

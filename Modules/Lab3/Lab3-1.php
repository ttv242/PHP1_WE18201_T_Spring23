<?php
echo "Bài 1: Hàm ẩn danh"."<br>";
$say = function($name) {
    echo "Hello".$name."<br>";
};

$say ("World"); // "Hello World"

function myCaller($myCallback) {
    echo $myCallback();
}
// "Hello"
myCaller(function() { echo "Hello"."<br>"; } );
$a = array(1, 2, 3, 4, 5);
$b = array_map(function($n) {
    return $n*$n*$n;
}, $a); print_r($b);

echo "<br>"
."<br>";

echo "Bài 2: Generator"."<br>";
function countToFive() {
    yield 1;
    yield from [2, 3, 4]; yield 5;
}

foreach (countToFive() as $v) 
echo $v; // "12345"

echo "<br>"
."<br>";

echo "Bài 3: Chia chuỗi (substr, chunk_split). Ví dụ: 082307 => 08:23:07"."<br>";
$string = '082307';
echo substr($string, 0, 2).':'.substr($string, 2, 2).':'.substr($string, -2)."<br>";
echo chunk_split($string, 2, ":");
?>

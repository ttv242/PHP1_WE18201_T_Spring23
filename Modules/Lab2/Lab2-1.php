<?php
echo "Bài 1: Mảng"."<br>";
 $color = array('red', 'green', 'blue');
 print_r($color);
 echo "<br>";
 echo $color[0];

echo "<br>";

 $age = array();
 $age[0] = 10;
 $age[1] = 20;
 $age[2] = 30;
print_r($age);

echo "<br>"
."<br>";
echo "Bài 2: Mảng"."<br>";
$salaries = array(
    "mohamad" => 2000,
    "qadir" => 1000,
    "zara" => 500
);

echo "Salary of Mohamad is ".$salaries['mohamad']
."<br>"
."Salary of Qadir is "
.$salaries['qadir']
."<br>"."Salary of Zara is "
.$salaries['zara']."<br>";
// echo "Salary of Qadir is ".$salaries['qadir']."<br>";
// echo "Salary of Zara is ".$salaries['zara']."<br>";

echo "<br>"
."<br>";
echo "Bài 3: Constant"."<br>";
define('LOCATOR', "/locator");
define('CLASSES', LOCATOR."/code/classes");
define('FUNCTIONS', LOCATOR."/code/functions");
define('USERDIR', LOCATOR."/user");

?>
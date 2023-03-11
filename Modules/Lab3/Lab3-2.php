<?php
echo "Bài 4: Dùng mã PHP để chuyển chuỗi thành các phần tử của mảng theo ví dụ"."<br>";

$string = 'Tran Thanh Vinh - PS26230';
$fullName = 'Tran Thanh Vinh';
$classCode = 'PS';
$studentID = 26230;
$arr = [$string, $fullName, $classCode, '-', $studentID];

print_r (explode(" ",$string));

echo "<br>";

echo var_dump($arr);

echo '<pre>';
    echo var_dump($arr);
echo '</pre>';

echo '<pre>';
    print_r($string);
echo '</pre>';

echo '<pre>';
    print_r($arr);
echo '</pre>';



echo "<br>";

echo "Bài 5: Sinh viên tự tìm hiểu hàm settype, gettype, strcontains (PHP8), str_starts_with (PHP8), str_ends_with (PHP8)"."<br>";
    $stringType = "26"; // string 
    settype($stringType, "integer"); // $stringType is now integer

    $integerType = 23; // integer 
    settype($integerType, "string"); // $integerType is now string

    $booleanType = false; // boolean 
    settype($booleanType, "integer"); // $booleanType is now integer (0)

    $arrType = [$stringType, $integerType, $booleanType];

    echo '<pre>';
        echo var_dump($arrType);
    echo '</pre>';

    echo $stringType.' '.$integerType.' '.$booleanType."<br>"."<br>";

    echo gettype($stringType) . "<br>";

    echo gettype($integerType) . "<br>";

    settype($booleanType, "boolean");
    echo gettype($booleanType) . "<br>";

    echo gettype($arr) . "<br>";

    $null = NULL;
    echo gettype($null) . "<br>";

    echo "<br>";
    echo 'Tìm chuỗi $searchString trong chuỗi $string {'.$string."}<br>";
    $searchString = '-';
    str_contains($string, $searchString);
    if (str_contains($string, $searchString)) {
        echo "Có chuỗi cần tìm";
    } else {
        echo "Không có chuỗi cần tìm";
    };

    
    echo "<br>"."<br>";
    echo 'Kiểm tra chuỗi $fullName có bắt đầu bằng chuỗi $string không...? {'.$string."}<br>";
    // if (str_starts_with($string, $fullName)) {
    //     echo "Yes". PHP_EOL;
    // };    

    echo str_starts_with($string, $fullName) ? "Yes". PHP_EOL : "No". PHP_EOL;

    echo "<br>"."<br>";
    echo 'Kiểm tra chuỗi $studentID có kết thúc bằng chuỗi $string không...? {'.$string."}<br>";
    // if (str_ends_with($string, $studentID)) {
    //     echo "Yes". PHP_EOL;
    // } else {
    //     echo "No". PHP_EOL;
    // };

    echo str_ends_with($string, $studentID) ? "Yes". PHP_EOL : "No". PHP_EOL;

?>
<?php 
    echo 'Bài 1: If - Else'."<br>";
    $age = 23;
    echo 'Your age is '.$age."<br>";

    if ($age < 30) {
        echo 'Your age is less than 30!';
    } elseif ($age>30 && $age<40) {
        echo 'Your age is between than 30 and 40!';
    } elseif ($age>40 && $age<50) {
        echo 'Your age is between than 40 and 50!';
    } else echo 'Your age is greater than 50!';

    echo "<br>"."<br>";

    echo 'Bài 2: While'."<br>";
    $max = 0;
    echo $i = 0;
    echo ", ";
    echo $j = 1;
    $result = 0;
    $n = 10;

    while ($max < $n) {
        $result = $i + $j;
        $j = $result;

        $max++;
        echo $result;
        
        echo ($max > $n-1) ? "." : ", ";
        // if ($max > $n-1) {
        //     echo ".";
        // } else echo ", ";
    }
    
    echo "<br>"."<br>";

    echo 'Bài 3: forEach'."<br>";
    $fruits = array('apple', 'banana', 'orange', 'grapes');
    
    foreach ($fruits as $fruit) {
        echo $fruit."<br>";
    }

    $employee = array('Name' => 'John Smith', 'Age' => 30, 'Profession' => 'Dev');
    foreach ($employee as $key => $value) {
        echo sprintf('%s: %s', $key, $value)."<br/>";
    }

    
    echo "<br>";

    echo 'Bài 4: for'."<br>";
    echo 'Simple Break';
    
    for ($i=1; $i<=2; $i++) {
        echo "<br>".'$i = '.$i.'; ';
        
        for ($j=1; $j<=5; $j++) {
            if($j==2) {
                break;
            }
            echo '$j = '.$j;
        }
    }

    echo "<br>".'Multi-level Break';
    for ($i=1; $i<=2; $i++) {
        echo "<br>".'$i = '.$i.'; ';
        for ($j=1; $j<=5; $j++) {
            if ($j == 2) {
                break;
            }
            echo '$j = '.$j.' ';
        }
    }
?>


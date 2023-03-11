<?php
    echo nl2br("Hello World\n It's\n Hello World \u{00C2A9} \u{C2A9}");//Để tạo một dòng mới, PHP cung cấp hàm nl2br() 
    
?>
<?php
    $a = 'hello';
    $$a = 'world'; 
    echo "$a ${$a} <br>";
?>
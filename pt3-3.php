<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    
    
    $chinese = $_POST['chinese'];
     $math = $_POST['math'];
     $English = $_POST['English'];
    
     $total =  $math + $English + $chinese;
    
$avg = $total/3;
    echo " 國文成績為 " . $chinese . "<br>";
    echo " 數學成績為 " . $math . "<br>";
    echo " 英文成績為 " . $English  . "<br>";
    
    echo "總成績為" . $total . "分";
     echo "總平均為" . $avg . "分";
    
    ?>
</body>

</html>

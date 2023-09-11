<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculator</title>
</head>
<body>
    <?php
    echo "<h1>meow</h1>";

    function add($x,$y){
        return ($x+$y);
    }
    function subtract($x,$y){
        return ($x-$y);
    }
    function multiply($x,$y){
        return ($x*$y);
    }
    function divide($x,$y){
        return ($x/$y);
    }

    echo "5+3=" . add(5,3) . "<br>";
    echo "5-3=" . subtract(5,3) . "<br>";
    echo "5*3=" . multiply(5,3) . "<br>";
    echo "10/2=" . divide(10,2) . "<br>";
    ?>
</body>
</html>

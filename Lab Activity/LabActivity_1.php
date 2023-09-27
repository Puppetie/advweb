<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array practice</title>
</head>
<body>
    <?php
    $ar = array("meow","osama","puppet","dumiya");
    $ar_length = count ($ar);
    echo $ar[0];
    echo "<br><hr>";
    echo $ar_length;
    echo "<br><hr>";
    for ($i=0; $i<$ar_length; $i++){
        echo "<li>$ar[$i]</li>";
    }
    echo "<br><hr>";
    if ($ar[0]=="meow"){
        echo "uhhhh... meow ??";
    }
    echo "<br><hr>";
    $arr = array(
        "p1" => "orange",
        "p2" => "banana",
        "p3" => "apple"
    );
    foreach ($arr as $code => $fruit){
        echo "key = ". $code . " fruit = " . $fruit;
        echo "<br>";
    }
    echo $arr["p1"];
    echo "<br>";
    echo count($arr);
    echo "<br>";
    foreach($arr as $code => $fruit){
        if($code=="p3"){
            echo $fruit;
        }
    }
    echo "<br><hr>";
    $myfav = array(
        array("Final Fantasy", "11","14"),
        array("JoJo's Bizarre Adventure","Golden Wind", "Stone ocean"),
        array("Spider-Man", "Into the spiderverse", "Across the spiderverse"),
    );
    echo "my fav game in " . $myfav[0][0] . " series are " . $myfav[0][1] . " and " . $myfav [0][2];
    echo "<br><hr>";
    $mood = "bad 24/7";

    if ($mood == "bad 24/7"){
        echo "u need therapy.";
    }
    
    ?>
    
    
</body>
</html>

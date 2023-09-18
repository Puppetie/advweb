<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
        .color {
            color: crimson;
        }
    </style>
</head>
<body>
    <h1>Osama Khlefawi 202111178</h1>
    <hr>
    <?php
    $classmates = array("Khalid", "Faisal", "FFXIV is better >:( !!!", "Yazeed");
    $length = count ($classmates);
    
    for($i=0; $i<$length; $i++){
        echo "<div class='color'>" . "<li>$classmates[$i]</li>" . "</div>";
    }
    
    echo "<hr>";
    $courses = array(
        "CIS 304" => "Computer Architechture",
        "CIS 316" => "AI",
        "NES 212" => "Data Communications"
);

    echo "<h3> Courses I took: </h3>";
    echo "<table border='3'>";
    echo "<tr>";
    echo "<th>Course codes </th>";
    echo "<th>Course Names </th>";
    echo "</tr>";
    foreach($courses as $code => $name){
        echo "<tr>";
        echo "<td>$code</td>";
        echo "<td>$name</td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>
    <hr>
</body>
</html>

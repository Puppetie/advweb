<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>db lab</title>
</head>
<body>
    <?php
    $host_ip="127.0.0.1";
    $username="Osama";
    $password="123";
    $database="db_name";


    $conn = mysqli_connect($host_ip,$username,$password,$database);
    if(!$conn){
        echo "Connection Error";
    }
    else
        echo "Connected Successfully :D";

        $query = "INSERT INTO table_01 (col_02, col_03, col_04) VALUES ('osamakh5','meow', '@gmail.com')";

    if (mysqli_query($conn, $query)){
        echo "</br>";
        echo "New record has been created";
    }
    else {
        echo "Error: " . $query . "</br>" . mysqli_error($conn);
    }

        mysqli_close($conn);
    ?>
</body>
</html>

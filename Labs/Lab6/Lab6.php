<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6</title>
</head>
<body>
    <?php
$host_ip="127.0.0.1";
$username="root";
$password="";
$database="lab6_db";


$conn = mysqli_connect($host_ip,$username,$password,$database);
if(!$conn){
    echo "Connection Error";
}
else
    echo "Connected Successfully :D";

    $query = "INSERT INTO 06_lab (F_name, L_name, S_id, Major) VALUES ('meow', 'meower', 202111258, 'Cat Engineering')";

    

    if(mysqli_query($conn, $query)){
        echo "</br>";
        echo "new record has been added";
    }
    else 
    echo "error";
    mysqli_close($conn);
    ?>
</body>
</html>

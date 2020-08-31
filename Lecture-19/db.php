<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div align="center">
<?php
$db = new mysqli('localhost', 'root', '123456', 'upskilling-db1');

if($db->connect_errno){
    echo "Error connecting to database $db->error";
}else{
    $result=$db->query('SELECT * from students');
    if(!$result){//in case of error
        echo $db->error;
    }else{    // in case of success
        echo "<table border='1'>";
        while($row= $result->fetch_assoc()){
            echo "<tr><td>$row[student_id]</td><td>$row[student_name]</td></tr>";
        }
        echo "</table>";
    }
}
?>    
</div>
</body>
</html>
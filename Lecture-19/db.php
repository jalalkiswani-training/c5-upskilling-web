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
    if(isset($_GET['command'])){
        $cmd=$_GET['command'];
        $id=$_GET['id'];
        if($cmd=='delete'){
            $result=$db->query("DELETE FROM  students WHERE student_id=$id");         
            if($result){
                if(mysqli_affected_rows($db)==1){
                    echo "record deleted successfully";
                }else{
                    echo "Record not found";
                }
            }else{
                echo "$db->error";
            }
        }
    }
    if(isset($_POST['id'])) {
    $result=$db->query("INSERT INTO students 
        VALUES('$_POST[id]','$_POST[name]','$_POST[email]',$_POST[avg])");
    if($result){
        echo "Added Successfully";
    }else{
        echo $db->error;
    }
    }
    $result=$db->query('SELECT * from students');
    if(!$result){//in case of error
        echo $db->error;
    }else{    // in case of success
        echo "<table border='1'>";
        while($row= $result->fetch_assoc()){
            $deleteLink="<a href=\"?command=delete&id=$row[student_id]\">Delete<a/>";
            echo "<tr><td>$row[student_id]</td><td>$row[student_name]</td><td>$deleteLink</td></tr>";
        }
        echo "</table>";
    }
}
?>    
</div>
<form method="post">
    <input type="number" name="id" placeholder="Student Id"/>
    <input type="text" name="name" placeholder="Name"/>
    <input type="email" name="email" placeholder="Email"/>
    <input type="number" name="avg" placeholder="Student Avg"/>
    <input type="submit" value="Save" />
</form>
</body>
</html>
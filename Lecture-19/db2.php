<?php
$db = new mysqli('localhost', 'root', '123456', 'upskilling-db1');

if($db->connect_errno){
    $msg= "Error connecting to database $db->error";
}else{
    if(isset($_GET['command'])){
        $cmd=$_GET['command'];
        $id=$_GET['id'];
        if($cmd=='delete'){
            $result=$db->query("DELETE FROM  students WHERE student_id=$id");         
            if($result){
                if(mysqli_affected_rows($db)==1){
                    $msg= "record deleted successfully";
                }else{
                    $msg= "Record not found";
                }
            }else{
                $msg="$db->error";
            }
        }
    }
    if(isset($_POST['id'])) {
    $result=$db->query("INSERT INTO students 
        VALUES('$_POST[id]','$_POST[name]','$_POST[email]',$_POST[avg])");
    if($result){
        $msg= "Added Successfully";
    }else{
        $msg= $db->error;
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Clowiz Page</title>
		
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/simplex/bootstrap.min.css" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	</head>

<body>
<?php echo $msg; ?>
<form method="post">
    <input type="number" name="id" placeholder="Student Id"/>
    <input type="text" name="name" placeholder="Name"/>
    <input type="email" name="email" placeholder="Email"/>
    <input type="number" name="avg" placeholder="Student Avg"/>
    <input type="submit" value="Save" />
</form>
<?php
        if($rowsResult)
        echo "<table border='1'>";
        while($row= $rowsResult->fetch_assoc()){
            $deleteLink="<a href=\"?command=delete&id=$row[student_id]\">Delete<a/>";
            echo "<tr><td>$row[student_id]</td><td>$row[student_name]</td><td>$deleteLink</td></tr>";
        }
        echo "</table>";
    }
?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js" type="text/javascript" charset="utf8"></script>
</body>
</html>
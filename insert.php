<?php

$conn = mysqli_connect("127.0.0.1", "root", "NewPassword123", "mdm");

if(!$conn){
    die("connection failed: " . mysqli_connect_error());
}

$id = 1;
$name = "John Doe";
$age = 30;

$sql = "INSERT INTO info values($id,'$name',$age)";

if(mysqli_query($conn,$sql)){
    echo "record inserted successfully";
}
else{
    echo "error" . mysqli_error($conn);
}

mysqli_close($conn);
?>

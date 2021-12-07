<?php

include('connection.php');

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$fileToUpload=$_FILES['fileToUpload']['name'];
$sql = "INSERT INTO student_db_table(imageName)
        VALUES('$fileToUpload')";
mysqli_query($conn,$sql);


print_r($_FILES["fileToUpload"]["name"]);exit;

?>
<?php

include('connection.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
// $mobileno = $_POST['mobileno'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$fileToUpload = $_FILES['fileToUpload']['name'];

if(isset($_POST['submit'])){



  if($fname != '' && $lname != '' && $fileToUpload != ''){


    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
      echo "<br>File already exists";
      $uploadOk = 0;  

    }  
    elseif ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "<br>Sorry, your file is too large. Please upload below 500kb";
      $uploadOk = 0;  

    }

    elseif ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
      echo "<br>Sorry, only JPG, JPEG & PNG are allowed.";
      $uploadOk = 0; 

    }

    elseif ($uploadOk == 0) {
    echo "<br>Sorry, your file was not uploaded.";  // if everything is ok, try to upload file 
  }

  if($uploadOk == 1){


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);


      $sql = "INSERT INTO student_db_table (fname, lname,imageName, email,gender,password) VALUES ('$fname','$lname','$fileToUpload','$email','$gender','$password')";
      mysqli_query($conn, $sql);
    }
    else {
      echo "<br>Sorry, there was an error uploading your file.";
    }

  }



}else{


  echo "Fname , Lname and Image is a compulsory field";
}
}

?>
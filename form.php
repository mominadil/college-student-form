<!DOCTYPE HTML>  
<html>
<head>
  <script>
    function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
  </script>
  <style>
    .error {color: #FF0000;}
  </style>
</head>
<body>
  
  <h2>Addmission Form</h2>
  <p><span class="error">* required field</span></p>
  <form  name= "myForm" method="post" action="action.php" enctype="multipart/form-data" method=" post" onsubmit="return validateForm()">  
    First Name: <input type="text" name="fname">
    <span class="error">*</span>
    <br><br>
    Last Name: <input type="text" name="lname" class="" id="">
    <span class="error">*</span>
    <br><br>
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"><br> Image should be in PNG , JPEG & JPG format & less than 500kb.
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">*</span>
    <br><br>
    Password: <input type="password" name="password">
    <br><br>
    Gender:
    <input type="radio" name="gender" value="male" >Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="other">Other
    <br><br>
    <script>
     document.querySelector('input[name=gender][value=male]').checked = true;
   </script>
   <input type="submit" name="submit" value="Submit">  
 </form>


</body>
</html>
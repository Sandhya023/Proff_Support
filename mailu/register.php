<html>
<head>
<title> registration page </title>
<link href = "test.css" rel = "stylesheet" type = "text/css" enctype="multipart/form-data">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  
  
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  
</head>
<body>
 <div class = "header">
  <h2>Registrer  </h2>
 </div>

<?php
   if(isset($_SESSION['message']))
    {
     echo "<div id = 'error_msg'>".$_SESSION['message']."</div>";
     unset($_SESSION['message']);
    }
    
 ?>
 <form  method="post" action ="register.php" enctype="multipart/form-data">

 <table>
   <tr>
      <td>Name* : </td>
      <td><input type = "text" name = "name" class = "textInput"  required pattern ="[A-Za-z]+" /></td>
   </tr>
   
   <tr>
       <td>Password* :</td>
       <td> <input type = "password" name = "password" class = "textInput" required/></td>
    </tr>
    
   <tr>
        <td>Password_Again* : </td>
        <td><input type = "password" name = "passwordagain" class = "textInput"   required  /></td>
    </tr>
  
   <tr>
         <td>Email*: </td>
         <td><input type = "email" name = "email" class = "textInput"  required /></td>
  </tr>

  

  <tr>
    <td>College:</td>
    <td>
      <input type="text" name="college" class = "textInput" required>
    </td>
  </tr>

  <tr>
    <td>Mobile no:</td>
    <td><input type="tel" name="mobile_no" class = "textInput" required></td>
  </tr>
   
   <tr>
        <td>Gender* :</td>
        <td>
       <input type = "radio" name = "gender" value = "Male" />Male
       <input type = "radio" name = "gender" value = "Female"/>Female</td>
    </tr>

    <tr>
      <td>Date:</td>
      <td>
        <input type="text"  name="date" class = "textInput"  id="datepicker"required>
      </td>
    </tr>
    
    <tr>
    <td>Choose Profile_Photo:</td><td><input type="file" name="image" class = "textInput" required></td>
    
    </tr>
    
   <tr>
    <td> <input type = "submit" name = "submit" value= "Register" class= "btn"  />
      </td>
   </tr>
   
   </table>
   <p> Already a member? <a href="login.php">Sign in</a></p>
</form>
</body>
</html>

<?php
    
  $name="";
  
  $mobile_no="";
  $email="";
  $password="";
  $college="";
  $date="";
  $image="";
  $tempname="";
  if(isset($_POST['submit']))
  { 
 
 include_once "auto.php";
  //echo $name."<br>";
 
  //$id=$_POST["id"];
  $name=$_POST["name"];
  
  $mobile_no=$_POST["mobile_no"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $passwordagain = $_POST['passwordagain'];
  $college=$_POST["college"];
  $date=$_POST["date"];
  $image=$_FILES["image"]["name"];
  $gender = $_POST['gender'];
 
 
 //include "regis.php";
 if($password==$passwordagain)
  {
     
$password=md5($password);
$conn=mysqli_connect("localhost","root","","eventmanage");

$uploaddir="C:/xampp/htdocs/mailu/dataimage/";

$uploadfile = $uploaddir . basename($_FILES['image']['name']);

move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

$sql="INSERT INTO registration(name,mobile_no,email,password,college,date,image,gender) VALUES ('$name','$

mobile_no','$email','$password','$college','$date','$image','$gender')";

$run=mysqli_query($conn,$sql);

$_SESSION['message'] = "You are now logged in!";
  $_SESSION['name'] = $name;
  
  
}   
 
     else{
        
         $_SESSION['message'] = "Your password does not match.TRY AGAIN!";
         }
}
//}
?>

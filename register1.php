<?php

include ("db_connect.php") ;



     $name = $_POST['name'];
     $email = $_POST['email'];
      $gender = $_POST['gender'];
      $age = $_POST['age'];
      $Pincode = $_POST['Pincode'];
      $work = $_POST['work'];
      $aadhar = $_POST['aadhar'];
      $local = $_POST['local'];
      $qualification = $_POST['qualification'];
      $aoi = $_POST['aoi'];
    
    
 
      $insert = mysqli_query($connect, "INSERT INTO mentor (name, gender, age, Pincode, work, aadhar, local, qualification, aoi, email) VALUES ('$name', '$gender', '$age', '$Pincode', '$work', '$aadhar', '$local', '$qualification', '$aoi', '$email')");

     

      if($insert) {
        header('location: redirect_mentor.html');
      }
      else{
        echo ' 
     <script>
        alert("Password and Confirm Password does not match");
        window.location = "mentor registration.html";
     </script>  '
     ;      

      }
    
    



?>
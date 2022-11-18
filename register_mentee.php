<?php

include ("db_connect.php") ;
     $name = $_POST['name'];
     $gender = $_POST['gender'];
     $age = $_POST['age'];
     $email = $_POST['email'];
     $aoi = $_POST['aoi'];
     $Pincode = $_POST['Pincode'];
     $insert = mysqli_query($connect, "INSERT INTO mentee (name, gender, Pincode, age, email, aoi) VALUES ('$name', '$gender', '$Pincode','$age', '$email' , '$aoi' )");

     
      if($insert) {
        header('location: matching_algo1.php');
      }
      else{
        echo ' 
     <script>
        alert("Password and Confirm Password does not match");
        window.location = "login page demo.html";
     </script>  '
     ;      

      }

?>
<?php
require_once 'source/session.php';
require_once 'source/db_connect.php';

if(isset($_POST['submitbtn'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
    
    echo "email:\n";
     echo $work;
    
      echo "hello";
    try {
      //  $SQLInsert = "INSERT INTO mentee (name, gender, age, Pincode, work, aadhar, local, qualification, select_aoi, email)
      //              VALUES (:name, :gender, :age, :Pincode, :work, :aadhar, :local, :quli, :select_aoi, :email)";
//  $SQLInsert = "INSERT INTO mentor (name, gender, age, Pincode, work, aadhar, local, qualification, select_aoi, email)
//  VALUES (,]', '$_POST[age]', '$_POST[Pincode]', '$_POST[work]', '$_POST[aadhar]', '$_POST[local]', '$_POST[qualification]', '$_POST[select_aoi]', '$_POST[email]')";
$SQLInsert = "INSERT INTO contact (name,email, message)
 VALUES (ss,a, a);"; 
echo $SQLInsert;
      $statement = $conn->prepare($SQLInsert);
      $statement->execute(array(':name' => $name,':email' => $email, ':message'=>$message));
      //mysqli_query($conn, $SQLInsert);
     
      }catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    }
    
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>  Contact Us Form   </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">our address</div>
          <div class="text-two"></div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">email of site</div>
          <div class="text-two"></div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>please share your experience with us</p>
    
        <form id="Register"class="inputgroup" action="register_contact.php" method="POST">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" name="name" id="name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" name="email" id="email">
        </div>
        <div class="input-box message-box">
          <textarea placeholder="Enter your message" name="message" id="message"></textarea>
        </div>
        <div class="button">
          <button type="submit" class="submitbtn">Send now</button>
        </div>
      </form>
    </div>
    </div>
  </div>

</body>
</html>
<?php
require_once 'source/session.php';
require_once 'source/db_connect.php';

if(isset($_POST['submitbtn'])) {
      $name = $_POST['name'];
      $gender = $_POST['gender'];
      $Pincode = $_POST['Pincode'];
      $age = $_POST['age'];
      $email = $_POST['email'];
      $aoi = $_POST['aoi'];
    
    echo "email:\n";
     echo $work;
    
      echo "hello";
    try {
      //  $SQLInsert = "INSERT INTO mentee (name, gender, age, Pincode, work, aadhar, local, qualification, select_aoi, email)
      //              VALUES (:name, :gender, :age, :Pincode, :work, :aadhar, :local, :quli, :select_aoi, :email)";
//  $SQLInsert = "INSERT INTO mentor (name, gender, age, Pincode, work, aadhar, local, qualification, select_aoi, email)
//  VALUES (,]', '$_POST[age]', '$_POST[Pincode]', '$_POST[work]', '$_POST[aadhar]', '$_POST[local]', '$_POST[qualification]', '$_POST[select_aoi]', '$_POST[email]')";
$SQLInsert = "INSERT INTO mentee (name, gender,Pincode,age, email, aoi)
 VALUES (ss,d,a,12 ,a, a);"; 
echo $SQLInsert;
      $statement = $conn->prepare($SQLInsert);
      $statement->execute(array(':name' => $name, ':gender' => $gender, ':Pincode'=>$Pincode, ':age' => $age, ':email' => $email, ':aoi'=>$aoi));
      //mysqli_query($conn, $SQLInsert);
     
      }catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    }
    
?>

<html>
    <head>
        <title>
            register
        </title>
        <link rel="stylesheet" href="style1.css">
        <style>
            
            </style>
        </head>
        <body>
            <div class="background">
            <div class="formbox">
                <div class="buttonbox">
                    <div id="btn"></div>
                   
                   <p class="toggle-btn" >Register</p>
                        <form id="Register"class="inputgroup" action="register_mentee.php" method="POST">
                        <input type="text" class="inputfield" placeholder="Name" name = "name" required>
                            <input type="text" class="inputfield" placeholder="Gender" name = "gender" required>
                            <input type="text" class="inputfield" placeholder="Pincode" name = "Pincode" required>
                            <input type="text" class="inputfield" placeholder="Age" name = "age" required>
                            <input type="email" class="inputfield" placeholder="Email name" name = "email" required> 
                            
<div class="dropdown">
    Select field of interest: <br> 
    <select class="dropdown-content"  id = "aoi"  name = "aoi" >
    <option value="engineering">Engineering</option>
    <option value="Arts">Arts</option>
    <option value="Designing">Designing</option>
    <option value="Photography">Photography</option>
    <option value="Accounting">Accounting</option>
    <option value="Defence">Defence</option>
    <option value="Bussiness">Bussiness</option>
    <option value="Medical">Medical</option>
    <option value="Teaching">Teaching</option>
    <option value="Law">Law</option>
    <option value="Aeronautics">Aeronautics</option>
    <option value="Sports">Sports</option>
    
     FOI</option>

  </select><br><br>
  

                              </div>
                              <br>
                              
                            <input type="checkbox" class="checkbox"> <span>I agree to terms and conditions</span>
                            <button type="submit" class="submitbtn">Signup</button>
                                </form>
                    </div>

            </div>
            </div>
           
    </body>
</html>
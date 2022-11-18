<?php
require_once 'source/session.php';
require_once 'source/db_connect.php';

if(isset($_POST['signup-btn'])) {

      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $age = $_POST['age'];
      $add = $_POST['Pincode'];
      $work = $_POST['work'];
      $aadhar = $_POST['aadhar'];
      $local = $_POST['local'];
      $quli = $_POST['qualification'];
      $aoi = $_POST['aoi'];
      $name = $_POST['name'];
    echo "email:\n";
     echo $work;
    
      echo "hello";

    try {
      //  $SQLInsert = "INSERT INTO mentor (name, gender, age, address, work, aadhar, local, qualification, select_aoi, email)
      //              VALUES (:name, :gender, :age, :address, :work, :aadhar, :local, :quli, :select_aoi, :email)";
//  $SQLInsert = "INSERT INTO mentor (name, gender, age, address, work, aadhar, local, qualification, select_aoi, email)
//  VALUES (,]', '$_POST[age]', '$_POST[address]', '$_POST[work]', '$_POST[aadhar]', '$_POST[local]', '$_POST[qualification]', '$_POST[select_aoi]', '$_POST[email]')";
$SQLInsert = "INSERT INTO mentor (name, gender, age, Pincode, work, aadhar, local, qualification, aoi, email)
 VALUES (ss,d, 12,a ,a,12,a,a,a,a);"; 
echo $SQLInsert;
      $statement = $conn->prepare($SQLInsert);
      $statement->execute(array(':name' => $name, ':aadhar'=>$aadhar, ':gender' => $gender, ':age' => $age, ':Pincode'=>$add, ':aoi'=>$aoi, ':work' => $work, ':email' => $email, ':local' => $local, ':quli' => $quli));
      //mysqli_query($conn, $SQLInsert);
     
      }catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    }
    



?>
<html>
    <head>
        <title>
            Register
        </title>
        <link rel="stylesheet" href="style5.css">
        <style>
            
            </style>
        </head>
        <body>
            <div class="background">
            <div class="formbox">
                <div class="buttonbox">
                    <div id="btn"></div>
                   
                   <p class="toggle-btn" >Register</p>
                    
                   
                        
                        
                        <form id="Register"class="inputgroup" action="register1.php" method="POST">
                        
                            <input type="text" class="inputfield" placeholder="Name" name = "name" required>
                            
                            <input type="text" class="inputfield" placeholder="Gender" name = "gender" required>
                            <input type="text" class="inputfield" placeholder="Pincode" name = "Pincode" required>
                            <input type="text" class="inputfield" placeholder="Age" name = "age" required>
                            <input type="email" class="inputfield" placeholder="Email name" name = "email" required>
                            <input type="text" class="inputfield" placeholder="Qualification" name = "qualification" required>
                            <input type="text" class="inputfield" placeholder="Aadhar NO" name = "aadhar" required>
                            <input type="text" class="inputfield" placeholder="Local area" name = "local" required>
                            <input type="text" class="inputfield" placeholder="Currently working as" name = "work">
                                <div class="dropdown">
                                 <label for="dropbtn" class="dropbtn">Field of interest</label>
                                    <select class="dropdown-content" name="field of interest" id="aoi" size="100" >
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
                                        


                                    </select><br><br>
  

                              </div>
                              <br>
                              
                            <input type="checkbox" class="checkbox"> <span>I agree to terms and conditions</span>
                            <input type="submit" class="submitbtn" name="signup-btn" class="btn" value="Signup">

                            
                                </form>
                    </div>

            </div>
            </div>
           
    </body>
</html>
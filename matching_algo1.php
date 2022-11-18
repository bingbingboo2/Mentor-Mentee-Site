<?php  
 $connect = mysqli_connect("localhost", "root", "", "neeyat");  
 session_start();
 if (isset($_GET['aoi'])){
 $aoi= $_SESSION['aoi'];
 $Pincode= $_SESSION['Pincode'];
 }
 $sql = " SELECT * FROM mentee INNER JOIN mentor ON mentor.aoi = mentee.aoi AND mentor.Pincode=mentee.Pincode"; 
 $result = mysqli_query($connect, $sql);
 ?>
 <!DOCTYPE html>  
 <html>  

      <head>  
           <title>Matchings</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
<style>
    .body {
    background: #67B26F;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #4ca2cd, #67B26F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    padding: 0;
    margin: 0;
    font-family: 'Lato', sans-serif;
    color: #000;
}
.container{
     position:relative;
     top: 100px;
     background-color:white;
     border:2px;
     border-radius:30px
}
.div0{
  width: 100%;
  height: 70px;
  background-color: #002244 ;
  position: fixed;
}
.divx1{

        align-content: justify;
        position:fixed;
         left :50%;
        top:30px;
        
      }
li{
        display: inline;
        

      }
.li1 {
       
        font-size: 25px;
        font-family: Arial, Helvetica, sans-serif;
        color: #f7f7f8;
      }
.li1 a{
        
        text-decoration: none;
        color: #f5f9fd;
      }
      
      /* #002244 rgb(215, 221, 221) */
.li1 a:hover
      {
        color: #002244;
        transition: 0.5s;
       background-color:rgb(215, 221, 221);
       padding: 10px 10px 10px 10px ;
      }
.li2{
        font-size: 25px;
        font-family: Arial, Helvetica, sans-serif;
      
      }
.li2 a{
    text-decoration: none;
        background: #002244;
        border-radius: 30px;
        transition: 0.5s;
        border-width: 10px;
        border: 10px;
        margin: 10px;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 2px;
        padding-bottom:2px ;
        top: 0;
        left: ;
        color: rgb(215, 221, 221);
      }
.li2 a:hover{
        font-size: 30px;
        transition: 0.5s;
        background-color: #e4139e;
        text-decoration: none;
      }

</style>
           <title>Matchings</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body class="body">  
           <br />  <div class="div0">
          <div class="divx1">
              <ul>
                  <li class="li1"><a href="index.html">Home<a></li>
                  &emsp;
                  <li class="li1"><a href="about.html">About<a></a></li>
                  &emsp;
                  <li class="li1"><a href="about.html">Vision<a></a></li>
                  &emsp;
                  <li class="li1"><a href="contact_us.html">Contact Us<a></a></li>
                  &emsp;
                  <li class="li2"><a 	href="Untitled-4.html">Assistance</a></li>
                  </ul>

          </div>
          <div>
           <div class="container" style="width:500px;">  
                <h1 align="">People We have Chosen</h1><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>Name</th>  
                               <th>Area</th>  
                               <th>Email id</th>
                               <th>Field of Interest </th>  
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  

                          <tr>  
                               <td><?php echo $row["name"];?></td>  
                               <td><?php echo $row["local"];?></td>  
                               <td><?php echo $row["email"];?></td>  
                               <td><?php echo $row["aoi"]; ?></td>  
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>
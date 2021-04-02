<?php
   include('db.php');
   if (isset($_POST['submit'])) {
   
       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       
   
       
       $sql = "INSERT INTO `infodata` (`name`, `email`, `phone no`, `stime`) VALUES ('$name', '$email', '$phone', current_timestamp());";
   
       // echo $sql;
   
       if (mysqli_query($con,$sql) == true){
        echo "";
       }
       else {
        echo "ERROR: $sql $con->error";
       }
   
   
   }

   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link rel="stylesheet" href=
         "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
      <script src=
         "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <style>
         #center {
         margin: 0;
         position: absolute;
         top: 50%;
         left: 50%;
         -ms-transform: translate(-50%, -50%);
         transform: translate(-50%, -50%);
         }
      </style>
   </head>
   <body style="background-color: red;">
      <div  id="center">
         <h1 style="color: white;">SUBMIT SUCCESSFULY..</h1>
         <a href="index.php" class="btn btn-outline-warning">Back</a>
      </div>
   </body>
</html>







<?php
include('db.php');

$query = "SELECT * FROM infodata ORDER BY sno ASC"; 
$result = mysqli_query($con,$query);



?>

<!DOCTYPE html>
<html>
<head>
<title>Widget - Project 01 2021</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        </script>
  
        <!-- Bootstrap -->
        <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
        <script src=
 "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
        </script>

<link rel="stylesheet" type="text/css" href="css/style.css">

   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</head>
<body>


  <div class="container">
      
  <table class="table table-dark table-hover my-4">
    <thead>
      <tr>
        <th>Sno</th>
        <th>Name</th>
        <th>Phone No.</th>
        <th>Email</th>
        <th>Time Difference</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $count=0;
while($res = mysqli_fetch_array($result)) {

$count++;
$datetimep = new DateTime($res['stime']);
$datetimec = new DateTime();
$interval = $datetimep->diff($datetimec);


  ?>
   <tr>
    
  <td><?php echo $count ;?></td>
  <td><?php echo $res['name'] ;?></td>
  <td><?php echo $res['phone no'] ;?></td>
  <td><?php echo $res['email'] ;?></td>
  <td><?php echo $interval->format('%d days %h hour %i minute %s second') ;?></td>

  </tr>
    
 <?php 
  
}  

?>
    </tbody>
  </table>
</div>

<button class="open-button" onclick="openForm()">Call Us</button>

<div class="form-popup" id="mypop">
  <form action="formdata.php" method="POST"  id="contactForm" class="form-container contactForm">

    <button type="button" class="close" data-dismiss="modal" onclick="closeForm()">&times;</button>
    
    <input type="text" placeholder="Enter Name" name="name" required>
    <input type="email" placeholder="Enter Email" name="email" required>
    <input type="phone" placeholder="Enter Phone No." name="phone" required>

    <button type="submit" name="submit" value="Send Message" class="btn">Request a call</button> 
    <button type="" class="btn">Call Now</button>


  </form>
</div>

<script type="text/javascript" src="js/wid.js"></script>

</body>
</html>











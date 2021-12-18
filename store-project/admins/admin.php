
<!DOCTYPE html>
<html>
 <head>
  <title>BSD ADMIN</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<link rel="stylesheet" href="style.css"></head>
 <body>
<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="admin.php">BSD ADMIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../PrivacyPolicy.html">Privacy Policy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Disclaimer.html">Disclaimer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php">BSD</a>
      </li>
    </ul>
  </div>
</nav> 
</br></br>
<?php
   include('connection.php');  


  $conn=mysqli_connect("localhost","root","","store");
  $sql="select * from items";
  $result=mysqli_query($conn,$sql);
  
  echo " <center><h1>Dashboard</h1></center>
  
  <table class='table container p-3 my-3 border' style='width:100%''>
  <thead class='thead-dark'>
 
  <th class='col'>department</th>
  <th class='col'>item</th>
  <th class='col'>quartity</th>
  <th class='col'>address</th>
  </thead>
  ";
{
 while($row=mysqli_fetch_array($result))
{
  echo"<tr>
  <td>".$row['department']."</td>
  <td>".$row['item']."</td>
  <td>".$row['quartity']."</td>
  <td>".$row['address']."</td>
</tr>";
  
}

echo "</table>";
}
?>
  
  </div>
  </br></br>
  

</br></br>
</br></br>
<footer class="bg-dark text-center text-white ">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="#">BSD ADMIN</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>
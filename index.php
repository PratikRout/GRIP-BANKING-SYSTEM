<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <title>GRIP BANK</title>
  </head>
  <body>
  <?php 
  include 'navbar.php';
  ?>
    <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h1 style="font-size: 100px;">GRIP BANK OF INDIA</h1>
                </div>
              </div>
            </div>
      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="list.jpg" style="width: 300px; height: 200px;" class="img-fluid pt-2">
                    <br>
                    <a href="transfermoney.php"><button style="background-color: red;">View All Customers</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="history.png" class="img-fluid pt-3" style="width: 300px; height: 200px;">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color: red;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<footer class="text-center  py-2">
  <p>&copy2021. Created by <b>Pratik Kumar Rout</b><br>Under The Sparks Foundation GRIP</p>
  </footer>
</body>
</html>
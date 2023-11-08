<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e91c2d247e.js" crossorigin="anonymous"></script>
    <title>CampIO</title>
</head>
<body>
 
  <nav class="navbar navbar-expand-lg d-flex">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-campground"></i>Camp.IO</a>
      
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Anasayfa</a>
          <a class="nav-link" href="market.php">Market</a>
          <a class="nav-link" href="tours.php">Turlar</a>
          <a class="nav-link" href="iletisim.php">İletişim</a>
          
        </div>
      </div>
      <form class="justify-content-end login">
      <button type="button" class="btn btn-info" onclick="location.href='login.php'"><i class="fa-regular fa-user"></i></button>
          <button type="button" class="btn btn-secondary" onclick="location.href='register.php'">Kayıt Ol</button>
      </form>
    </div>
  </nav>
  <br><br>
  <div class="container">

    <div class="card text-center">
      <div class="card-header">
        Kamp Bölgeleni Bul
      </div>
      <div class="card-body mb-3">
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
          <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="card-footer text-body-secondary">
        Beğendiğin bölgeleri paylaşmayı unutma
      </div>
    </div>
    <br><br>
    <div class="card mb-3">
      <img src="images/market.jpg" class="card-img-top op" alt="...">
      <div class="card-body">
        <h5 class="card-title">Kamp Marketi</h5>
        <p class="card-text">Kamp marketi bölümümüzden dilediğiniz ekipmanları en yüksek kalite ile satın alabilirsiniz.</p>
        <button type="button" class="btn btn-outline-success marketBtn" onclick="location.href='market.php'"><i class="fa-solid fa-shop"></i> Market</button>
        <p class="card-text"><small class="text-body-secondary">Şimdi kapıda ödeme imkanı ile!</small></p>
      </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
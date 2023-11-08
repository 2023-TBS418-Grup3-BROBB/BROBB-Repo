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
    <style>
        
        .giris{
            text-align: center;
            
        }
        .login-btn{
            width: 100%;
            margin: auto;
            text-align: center;
        }
        .submit{
            width: 100%;
        }
        
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg d-flex">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-campground"></i>Camp.IO</a>
      
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Anasayfa</a>
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
    <form action="loginUser.php" method="POST">
    <div class="card">
        <div class="card-header giris">Giriş Yap</div>
        <div class="card-body form-group row">
            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" name="email" placeholder="birisi@example.com">
            </div>
            <br><br>
            <label for="password" class="col-sm-2 col-form-label">Şifre</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" name="password" placeholder="qwerty123">
            </div>
            <div class="col-sm-10 submit">
            <button type="submit" class="btn btn-info login-btn" onclick="giris()">Giriş Yap</button><br><br>
            <a href="#">Şifremi unuttum...</a><br>
            <a href="register.php">Bir hesabım yok...</a>
            </div>
        </div>
    </div>
</form>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
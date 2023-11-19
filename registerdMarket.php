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

.navbar-brand{
    font-size: 2.3em !important;
    color: rgb(47, 50, 65)!important;
}

.nav-link{
    color: rgb(47, 50, 65)!important;
    font-size: 1.3em !important;
    margin-left: 1em;
}
.nav-link:hover{
    color: rgb(134, 70, 84) !important;
}
.login{
    margin-right: 1em;
}

.card{
    display: flex;
    width: 80%;
    height: 32em;
    margin: auto;
    background: rgba(255, 255, 255, 0.432);
    color: rgb(47, 50, 65)!important;
    margin-bottom: 1.5em;
        
}
.card-img-top{
    height: 15em;
}
.container{
    flex-wrap: wrap;
}

.card-text{
    font-weight: normal;
}
.btnn{
    position: absolute;
    top: 28em;
    left: 35%;
    width: 60%;
}
.btnn2{
    position: absolute;
    top: 28em;
    left: 5%;
    width: 20%;
}
    </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg d-flex">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-campground"></i>Camp.IO</a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="registerdIndex.php">Anasayfa</a>
          <a class="nav-link" href="registerdMarket.php">Market</a>
          <a class="nav-link" href="registerdTours.php">Turlar</a>
          <a class="nav-link" href="registerdIletisim.php">İletişim</a>
          
        </div>
      </div>
      <form class="justify-content-end login">
      <button type="button" class="btn btn-success" onclick="location.href='admin.php'">Profilim</button>
      <button type="button" class="btn btn-info" onclick="location.href='index.php'">Çıkış Yap</button>
      </form>
    </div>
</nav>
<br><br>
<div class="container d-flex flex-row">
  <div class="card" style="width: 18rem;">
  <img src="images/sandalye.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kamp Sandalyesi</h5>
    <p class="card-text">Kamp yaparken konforu yakalama zamanı. CampIO kamp sandalyesi tek renk seçeneğiyle satışta!</p>
    <a href="#" class="btn btn-success btnn"><i class="fa-solid fa-cart-shopping"></i> 260₺</a>
    <button type="button" class="btn btn-danger btnn2"><i class="fa-regular fa-heart"></i></button>
  </div></div>
  
  <div class="card" style="width: 18rem;">
  <img src="images/bag.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sırt Çantası</h5>
    <p class="card-text">Taşıma kolaylığı sağlayan CampIO sırt çantası! İç hacmi büyük olup dış kısmında da kamp matınızı taşıma imkanı sunar.</p>
    <a href="#" class="btn btn-success btnn"><i class="fa-solid fa-cart-shopping"></i> 1100₺</a>
    <button type="button" class="btn btn-danger btnn2"><i class="fa-regular fa-heart"></i></button>
  </div>

</div>
  <div class="card" style="width: 18rem;">
  <img src="images/cadir.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kamp Çadırı</h5>
    <p class="card-text">4 kişilik kapasitesi ile yazın serin kışın sıcak tutan kumaş yapısıyla evinizde hissedeceksiniz!</p>
    <a href="#" class="btn btn-success btnn"><i class="fa-solid fa-cart-shopping"></i> 1750₺</a>
    <button type="button" class="btn btn-danger btnn2"><i class="fa-regular fa-heart"></i></button>
  </div>

</div>
  <div class="card" style="width: 18rem;">
  <img src="images/hamak.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hamak</h5>
    <p class="card-text">230 kg'a kadar taşıma kapasitesi ile sizlere doğada konforlu bir uyku sağlar. Yanında klipsleri, taşıma çantası ve ipleri hediye!</p>
    <a href="#" class="btn btn-success btnn"><i class="fa-solid fa-cart-shopping"></i> 550₺</a>
    <button type="button" class="btn btn-danger btnn2"><i class="fa-regular fa-heart"></i></button>
  </div>

</div>
  <div class="card" style="width: 18rem;">
  <img src="images/ocak.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kamp Ocağı</h5>
    <p class="card-text">Tek tencere kapasiteli ocak! Çakmak gazı ile doldurulup çakmakla kolaylıkla yakabilirsiniz. Yanında dolum yapmanız için 750ml çakmak gazı hediye!</p>
    <a href="#" class="btn btn-success btnn"><i class="fa-solid fa-cart-shopping"></i> 400₺</a>
    <button type="button" class="btn btn-danger btnn2"><i class="fa-regular fa-heart"></i></button>
  </div>

</div>

  <div class="card" style="width: 18rem;">
  <img src="images/uyku.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Uyku Tulumu</h5>
    <p class="card-text">Yatağınızda uyuyormuş gibi hissedebilin diye! Tek kişi kapasiteli uyku tulumumuz kış aylarında 25 derece sıcaklık sağlar.</p>
    <a href="#" class="btn btn-success btnn"><i class="fa-solid fa-cart-shopping"></i> 300₺</a>
    <button type="button" class="btn btn-danger btnn2"><i class="fa-regular fa-heart"></i></button>
  </div>

</div>

<div class="card" style="width: 18rem;">
  <img src="images/mat.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kamp Matı</h5>
    <p class="card-text">Nefesle şişebilen kamp matı! Taşıma çantasıyla çok az yer kaplar. Yatak yumuşaklığını yakalayabileceğiniz bir kamp matı.</p>
    <a href="#" class="btn btn-success btnn"><i class="fa-solid fa-cart-shopping"></i> 300₺</a>
    <button type="button" class="btn btn-danger btnn2"><i class="fa-regular fa-heart"></i></button>
  </div>

</div>
  
  <div class="card" style="width: 18rem;">
  <img src="images/sise.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Matara</h5>
    <p class="card-text">12 saat sıcak ve soğuk tutma özelliğiyle kamp matarası! 2lt kapasiteli mataramızda ister su ister kahve için tercih sizin!</p>
    <a href="#" class="btn btn-success btnn"><i class="fa-solid fa-cart-shopping"></i> 250₺</a>
    <button type="button" class="btn btn-danger btnn2"><i class="fa-regular fa-heart"></i></button>
  </div>

</div>

<div class="card" style="width: 18rem;">
  <img src="images/olta.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Olta</h5>
    <p class="card-text">Deniz kenarı kamp turlarında acıkanlara özel! Yanında sahte yem, misina, kanca, taşıma çantası bizden olsun!</p>
    <a href="#" class="btn btn-success btnn"><i class="fa-solid fa-cart-shopping"></i> 550₺</a>
    <button type="button" class="btn btn-danger btnn btnn2"><i class="fa-regular fa-heart"></i></button>
  </div>

</div>
<div class="card" style="width: 18rem;">
  <img src="images/dus.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kabin</h5>
    <p class="card-text">Hem duş alabileceğiniz hem de kıyafet değiştirebileceğiniz fermuarlı kabin!</p>
    <a href="#" class="btn btn-success btnn"><i class="fa-solid fa-cart-shopping"></i> 520₺</a>
    <button type="button" class="btn btn-danger btnn2"><i class="fa-regular fa-heart"></i></button>
  </div>

</div>
<div class="card" style="width: 18rem;">
  <img src="images/kum.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kumanya Bıçağı</h5>
    <p class="card-text">Hem bıçak hem çatal hem kaşık bir arada! Malzemeleriniz çok yer kaplamasın istiyorsanız birebir! </p>
    <a href="#" class="btn btn-success btnn"><i class="fa-solid fa-cart-shopping"></i> 50₺</a> <br>
    <button type="button" class="btn btn-danger btnn2"><i class="fa-regular fa-heart"></i></button>

  </div>

</div>
<div class="card" style="width: 18rem;">
  <img src="images/lamba.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Güneş Enerjili lamba</h5>
    <p class="card-text">Güneş enerjisiyle çalışan lamba!
    </p>
    <a href="#" class="btn btn-success btnn"><i class="fa-solid fa-cart-shopping"></i> 110₺</a> <br>
    <button type="button" class="btn btn-danger btnn2"><i class="fa-regular fa-heart"></i></button>
  </div>

</div>

</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
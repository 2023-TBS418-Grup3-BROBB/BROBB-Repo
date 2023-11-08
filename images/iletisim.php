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
    <title>İletişim</title>
    <style>
    .bas{
    color: rgb(67, 72, 95)!important;
    font-family: 'Maven Pro', sans-serif;
 }
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    font-family: 'Maven Pro', sans-serif ;
}
 
body {
    font-family: 'Maven Pro', sans-serif;
    
    
    color: #888;
    
}
 
.container {
    max-width: 400px;
    width: 100%;
    margin: 0 auto;
    position: relative;

}
 
#contact input[type="text"],
#contact input[type="email"],
#contact textarea,
#contact button[type="submit"] {
    font: 500 12px/16px 'Maven Pro', sans-serif;;
}
 
#contact {
    background: rgba(255, 255, 255, 0.432);
    backdrop-filter: blur(10px);
    padding: 25px;
    margin: 100px 0;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    margin: auto;
}
 
#contact h2 {
    display: block;
    font-size: 30px;
    font-weight: 300;
    margin-bottom: 15px;
}
 
.form-control{
    border: none !important;
    margin: 0 0 10px;
    min-width: 100%;
    padding: 0;
    width: 100%;
}
 
#contact input[type="text"],
#contact input[type="email"],
#contact textarea {
    width: 100%;
    border: 1px solid #ccc;
    background: #FFF;
    margin: 0 0 5px;
    padding: 10px;
}
 
#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact textarea:hover {
    -webkit-transition: border-color 0.4s ease-in-out;
    -moz-transition: border-color 0.4s ease-in-out;
    transition: border-color 0.4s ease-in-out;
    border: 1px solid #aaa;
}
 
#contact textarea {
    height: 120px;
    max-width: 100%;
    resize: none;
}
 
#contact button[type="submit"] {
    cursor: pointer;
    width: 100%;
    border: none;
    background: #00b8e6;
    color: #FFF;
    border-radius: 5px;
    padding: 10px;
    font-size: 15px;
}
 
#contact button[type="submit"]:hover {
    background: #355C7D;
    
    transition: background-color 0.4s ease-in-out;
}
 
#contact button[type="submit"]:active {
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}
 
#contact input:focus,
#contact textarea:focus {
    outline: 0;
    border: 1px solid #aaa;
}
.social{
    font-size: smaller;
    font-weight: light;
    margin-left: 5px;
    text-decoration: underline;
}
.s{
    display: flex;
    padding: 5px;
    font-weight: bold;
    font-size: 20px;
    
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
        <form id="contact" action="" method="">
            <h2 class="bas">Bizimle İletişime Geçin!</h2>
            <div class="form-control">
                <input placeholder="Adınız Soyadınız" type="text" required autofocus>
            </div>
            <div class="form-control">
                <input placeholder="E-Posta Adresiniz" type="email" required>
            </div>
            <div class="form-control">
                <input placeholder="Konu" type="text" required>
            </div>
            <div class="form-control">
                <textarea placeholder="Lütfen Mesajınızı Buraya Yazın.." required></textarea>
            </div>
            <div class="form-control">
                <button name="submit" type="submit" id="submit" onclick="mesaj()">GÖNDER</button>
            </div>
            <i class="fa-brands fa-twitter s"><p class="social">CampIO</p></i><br>
            <i class="fa-solid fa-phone s "><p class="social">0312 334 7652</p></i><br>
            <i class="fa-brands fa-instagram fa-sm s"><p class="social">CampIO</p></i><br>
        <script>
            function mesaj() {
             alert("Mesajınız İletilmiştir!");
}
        </script>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
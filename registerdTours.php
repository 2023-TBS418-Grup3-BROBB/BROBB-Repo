<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
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
                    <a class="nav-link active" aria-current="page" href="registerdIndex.php">Anasayfa</a>
                    <a class="nav-link" href="registerdMarket.php">Market</a>
                    <a class="nav-link" href="registerdTours.php">Turlar</a>
                    <a class="nav-link" href="registerdIletisim.php">İletişim</a>

                </div>
            </div>
            <form class="justify-content-end login">
                <button type="button" class="btn btn-info" onclick="location.href='index.php'">Çıkış Yap</button>
            </form>
        </div>
    </nav>
    <br><br>
    <div class="container d-flex flex-row">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top wide" src="images/fethiye.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Bir Ege Macerası !</h5>
                <p class="card-text">Fethiye kıyılarında eşsiz bir kamp turuna hazır olun.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">1 hafta</li>
                <li class="list-group-item">Deniz kıyısı</li>
                <li class="list-group-item">150 kişilik alan</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Tura Katıl!</a>
                <a href="iletisim.html" class="card-link">İletişime Geç</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top wide" src="images/norveç.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Norveç Dağları !</h5>
                <p class="card-text">Soğuk Norveç dağlarında zorlu bir kamp</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">5 gün</li>
                <li class="list-group-item">Soğuk İklim</li>
                <li class="list-group-item">45 kişilik gruplar</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Tura Katıl!</a>
                <a href="iletisim.html" class="card-link">İletişime Geç</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top wide" src="images/kanada.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Kanada !</h5>
                <p class="card-text">En sevilen kamp lokasyonlarından biri.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">6 gün</li>
                <li class="list-group-item">Soğuk İklim</li>
                <li class="list-group-item">12 kişilik gruplar</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Tura Katıl!</a>
                <a href="iletisim.html" class="card-link">İletişime Geç</a>
            </div>
        </div>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
</body>

</html>
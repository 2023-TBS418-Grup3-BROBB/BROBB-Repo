<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/e91c2d247e.js" crossorigin="anonymous"></script>

<?php

$mail = $_POST['email'];
$pass = $_POST['password'];

if($mail == "admin@admin" && $pass == "admin"){
    echo "<div class='alert alert-success' role='alert'>
<h4 class='alert-heading'>Hoş Geldin Admin!</h4>
<p>Seni Yeniden Görmek Çok Güzel !</p>
<hr>
<p class='mb-0'>İyi Kamplar Dilerim.</p>
</div> ";
    header( "refresh:2;url=adminsTable.php" );

}
else{
    echo "<div class='alert alert-danger' role='alert'>
<h4 class='alert-heading'>Hatalı Admin Girişi</h4>
<p>Tekrar Deneyin!</p>
<hr>
<p class='mb-0'>İyi Kamplar Dilerim.</p>
</div>";
header( "refresh:2;url=admin.php" );
}




?>
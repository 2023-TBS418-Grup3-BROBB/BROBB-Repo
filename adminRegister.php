<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e91c2d247e.js" crossorigin="anonymous"></script>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campIO";

$mail = $_POST['email'];
$pass = $_POST['password'];

$conn = new mysqli($servername, $username, $password, $dbname);

$sql="select * from users WHERE email='$mail'";

$same= mysqli_query($conn,$sql);
$row=mysqli_num_rows($same);

if ($row>0)
{
    echo "<div class='alert alert-danger' role='alert'>
    <h4 class='alert-heading'> $mail zaten Kayıtlı  !</h4>
    <p>Başka email ile tekrar dene !</p>
    <hr>
    <p class='mb-0'>Ya da bizimle iletişime geç.</p>
    </div>";
    header( "refresh:2;url=adminsTable.php" );
} else{
$add="INSERT INTO users( email,passw) 
VALUES ('$mail','$pass')";
 
$Isadd=mysqli_query($conn,$add);
 
if ($Isadd==0)
echo "Eklenemedi, kontrol ediniz";
else
echo "<div class='alert alert-success' role='alert'>
<h4 class='alert-heading'>Başarıyla Kayıt Oldun $mail !</h4>
<p>Kamp Alanımıza Hoş Geldin!</p>
<hr>
<p class='mb-0'>İyi Kamplar Dilerim.</p>
</div>";
header( "refresh:2;url=adminsTable.php" );

};

?>
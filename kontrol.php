<?php
session_start();
if(isset($_POST['submit'])){
    $kullaniciadi = $_POST['kullaniciadi'];
    $parola = $_POST['parola'];
    if( $kullaniciadi == 'elvan' && $parola == '12345' ){
        $_SESSION['adim'] = 2;
        header("Location:index.php?adim=2");
    }
    else{
        header("Location:index.php?hata=giris");
    }

}

$dogrulama = $_POST['dogrulama'];
if(isset($_POST['qrsubmit'])){
    if($_POST['qrcode'] == $dogrulama){
        header("Location:index.php?adim=3");
    }else{
        echo '<p>Doğrulama kodu yanlış tekrar deneyin</p>';
        header("Location:index.php?adim=2&hata=qr");
    }
}
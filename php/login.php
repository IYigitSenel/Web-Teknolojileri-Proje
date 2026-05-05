<?php

$ogrenciNo = "b251210370"; 
$dogruKullanici = $ogrenciNo . "@sakarya.edu.tr";
$dogruSifre = $ogrenciNo;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gelenKullanici = $_POST['email'];
    $gelenSifre = $_POST['password'];

    // Bilgiler doğruysa
    if ($gelenKullanici === $dogruKullanici && $gelenSifre === $dogruSifre) {
        echo "<!DOCTYPE html>
        <html lang='tr'>
        <head>
            <meta charset='UTF-8'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
            <title>Giriş Başarılı</title>
        </head>
        <body class='bg-light d-flex justify-content-center align-items-center vh-100'>
            <div class='alert alert-success p-5 shadow text-center'>
                <h1 class='display-4 fw-bold'>Hoşgeldiniz $ogrenciNo</h1>
                <p class='lead'>Giriş başarıyla sağlandı.</p>
                <a href='../index.html' class='btn btn-success mt-3'>Ana Sayfaya Git</a>
            </div>
        </body>
        </html>";
    } 
    // Bilgiler hatalıysa veya boşsa geri gönder
    else {
        echo "<script>
            alert('Hata: Kullanıcı adı veya şifre hatalı!');
            window.location.href = '../login.html';
        </script>";
        exit();
    }
}
?>
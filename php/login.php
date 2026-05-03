<?php
/**
 * Login Kontrol Sayfası
 */

// Ödevde istenen bilgiler
$ogrenciNo = "b2412100001"; 
$dogruEmail = $ogrenciNo . "@sakarya.edu.tr";
$dogruSifre = $ogrenciNo;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gelenEmail = isset($_POST['email']) ? $_POST['email'] : "";
    $gelenSifre = isset($_POST['password']) ? $_POST['password'] : "";

    // PHP tarafında da doğrulama yapıyoruz
    if ($gelenEmail === $dogruEmail && $gelenSifre === $dogruSifre) {
        // BAŞARI DURUMU
        echo "<!DOCTYPE html>
        <html lang='tr'>
        <head>
            <meta charset='UTF-8'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
            <title>Hoşgeldiniz</title>
        </head>
        <body class='bg-light d-flex justify-content-center align-items-center vh-100'>
            <div class='container text-center'>
                <div class='alert alert-success shadow p-5 border-0'>
                    <h1 class='display-4 fw-bold'>Hoşgeldiniz $ogrenciNo</h1>
                    <p class='lead'>Giriş işleminiz başarıyla doğrulandı.</p>
                    <hr>
                    <!-- Bir üst klasöre çıkıp index.html'e döner -->
                    <a href='../index.html' class='btn btn-success px-4 fw-bold'>Ana Sayfaya Git</a>
                </div>
            </div>
        </body>
        </html>";
    } else {
        // HATA DURUMU: Bir üst klasöre çıkıp login.html'e geri gönderir
        header("Location: ../login.html");
        exit();
    }
} else {
    header("Location: ../login.html");
    exit();
}
?>
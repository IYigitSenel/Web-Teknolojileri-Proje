<?php
header('Content-Type: text/html; charset=utf-8');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <title>İşlem Başarılı</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body class='bg-light text-center py-5'>
        <div class='container'>
            <div class='card shadow mx-auto' style='max-width: 600px;'>
                <div class='card-header bg-success text-white'>
                    <h4>Form Verileri Sunucuya Ulaştı</h4>
                </div>
                <div class='card-body text-start'>
                    <p><strong>Gönderen:</strong> $name</p>
                    <p><strong>E-posta:</strong> $email</p>
                    <p><strong>Konu:</strong> $subject</p>
                    <p><strong>Mesaj:</strong> $message</p>
                    <hr>
                    <p class='text-muted small'>Bu veriler PHP tarafında POST yöntemiyle yakalanmıştır.</p>
                    <a href='index.html' class='btn btn-primary d-block'>Ana Sayfaya Dön</a>
                </div>
            </div>
        </div>
    </body>
    </html>";
} else {
    echo "Hata: Bu sayfaya doğrudan erişemezsiniz.";
}
?>
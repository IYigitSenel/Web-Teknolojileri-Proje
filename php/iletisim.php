<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $name    = isset($_POST['name'])    ? htmlspecialchars($_POST['name'])    : "Belirtilmedi";
    $email   = isset($_POST['email'])   ? htmlspecialchars($_POST['email'])   : "Belirtilmedi";
    $phone   = isset($_POST['phone'])   ? htmlspecialchars($_POST['phone'])   : "Belirtilmedi";
    $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : "Seçim Yapılmadı";
    $gender  = isset($_POST['gender'])  ? htmlspecialchars($_POST['gender'])  : "Seçim Yapılmadı";
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : "Mesaj içeriği boş";

    // Ekrana yazdırma 
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Form Verileri - Sunucu Sonucu</title>
        <!-- Bootstrap CSS -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
        <style>
            body { background-color: #f0f2f5; font-family: sans-serif; }
            .data-card { max-width: 650px; margin: 60px auto; border-radius: 12px; overflow: hidden; border: none; }
            .card-header { background: #0d6efd; color: white; text-align: center; padding: 20px; }
            .table th { background-color: #f8f9fa; width: 35%; }
        </style>
    </head>
    <body>

    <div class='container'>
        <div class='card data-card shadow-lg'>
            <div class='card-header'>
                <h2 class='h4 mb-0'>Gönderilen Form Verileri</h2>
                <small>PHP Sunucu Tarafı Karşılama Ekranı</small>
            </div>
            <div class='card-body p-4 bg-white'>
                <p class='text-muted text-center mb-4 small'>Aşağıdaki bilgiler <strong>iletisim.html</strong> üzerinden POST edilmiştir.</p>
                
                <table class='table table-bordered align-middle'>
                    <tbody>
                        <tr>
                            <th>Ad Soyad</th>
                            <td>$name</td>
                        </tr>
                        <tr>
                            <th>E-posta</th>
                            <td>$email</td>
                        </tr>
                        <tr>
                            <th>Telefon</th>
                            <td>$phone</td>
                        </tr>
                        <tr>
                            <th>Konu</th>
                            <td>$subject</td>
                        </tr>
                        <tr>
                            <th>Cinsiyet</th>
                            <td>$gender</td>
                        </tr>
                        <tr>
                            <th colspan='2' class='text-center'>Mesaj İçeriği</th>
                        </tr>
                        <tr>
                            <td colspan='2' class='p-3 text-secondary' style='min-height: 100px;'>
                                " . nl2br($message) . "
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class='mt-4 text-center'>
                    <!-- Bir üst klasöre (root) çıkıp ana sayfaya dönmek için ../ kullanılır -->
                    <a href='../index.html' class='btn btn-primary px-5 fw-bold'>Ana Sayfaya Dön</a>
                </div>
            </div>
        </div>
    </div>

    </body>
    </html>";

} else {
    // Form dışı erişimlerde iletişim sayfasına geri gönder
    header("Location: ../iletisim.html");
    exit();
}
?>
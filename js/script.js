document.getElementById('contactForm').addEventListener('submit', function(event) {
    // Sayfanın hemen yenilenmesini durduruyoruz ki kontrolleri yapabilelim
    event.preventDefault();

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!name || !email || !subject || !message) {
        alert("Hata: Tüm alanlar doldurulmalıdır!");
    } else if (!emailRegex.test(email)) {
        alert("Hata: Lütfen geçerli bir e-posta formatı giriniz!");
    } else {
        // Her şey doğruysa formu PHP dosyasına gönderiyoruz
        alert("Kontroller başarılı! Veriler sunucuya (PHP) iletiliyor...");
        this.submit(); 
    }
});
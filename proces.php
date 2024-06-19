<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nama = htmlspecialchars($_GET['nama']);
    $tanggal_lahir = $_GET['tanggal'];

    $month = (int)date('m', strtotime($tanggal_lahir));
    $day = (int)date('d', strtotime($tanggal_lahir));

    function getZodiacSign($month, $day) {
        if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
            return "Aquarius : Aquarius adalah zodiak yang progresif, independen, dan penuh ide. Mereka cenderung peduli pada masyarakat dan suka inovasi.";
        } elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
            return "Pisces : Pisces adalah zodiak yang intuitif, empatik, dan penuh imajinasi. Mereka cenderung artistik dan rentan terhadap dunia emosional.";
        } elseif (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
            return "Aries : Aries dikenal sebagai zodiak yang bersemangat, penuh energi, dan penuh inisiatif. Mereka biasanya berani, impulsif, dan suka tantangan";
        } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
            return "Taurus : Taurus dikenal sebagai zodiak yang stabil, praktis, dan penuh kesabaran. Mereka cenderung memiliki cita rasa yang baik dan bersikap mantap";
        } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
            return "Gemini : Gemini adalah zodiak yang ramah, cerdas, dan sangat berkomunikasi. Mereka cenderung cepat dalam berpikir dan dapat beradaptasi dengan berbagai situasi.";
        } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
            return "Cancer : Cancer adalah zodiak yang emosional, sensitif, dan memiliki kecenderungan untuk melindungi orang-orang yang mereka sayangi. Mereka juga cenderung memiliki intuisi yang kuat.";
        } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
            return "Leo : Leo adalah zodiak yang penuh percaya diri, penuh semangat, dan suka menjadi pusat perhatian. Mereka juga cenderung murah hati dan suka memberi dorongan.";
        } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
            return "Virgo : Virgo adalah zodiak yang analitis, praktis, dan memiliki standar yang tinggi. Mereka cenderung perfeksionis dan peduli pada detail.";
        } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
            return "Libra : Libra adalah zodiak yang penuh keadilan, diplomatik, dan suka harmoni. Mereka cenderung menyukai kerjasama dan keindahan.";
        } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
            return "Scorpio : Scorpio adalah zodiak yang intens, penuh misteri, dan sangat emosional. Mereka memiliki keinginan kuat untuk mencapai tujuan mereka.";
        } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
            return "Sagittarius : Sagittarius adalah zodiak yang suka petualangan, optimis, dan terbuka. Mereka cenderung filosofis dan berjiwa bebas.";
        } else {
            return "Capricorn : Capricorn adalah zodiak yang bertanggung jawab, ambisius, dan praktis. Mereka cenderung memiliki ketekunan dan fokus pada pencapaian tujuan jangka panjang.";
        }
    }

    $zodiac_sign = getZodiacSign($month, $day);
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Hasil Zodiak</title>
        <link rel='stylesheet' href='styles.css'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+NZ:wght@200&display=swap');
        </style>
    </head>
    <body>
        <div class='video-background'>
            <video autoplay loop muted>
                <source src='assets/BackgroundVideo.mp4' type='video/mp4'>
            </video>
        </div>
        <div class='container' style='font-family: 'Playwrite NZ', cursive; font-optical-sizing: auto; font-weight: 200; font-style: normal;'>
            <div class='row justify-content-center align-items-center vh-100'>
                <div class='col-12 text-center text-white'>
                    <h1 class='mb-5'>Halo, $nama!</h1>
                    <h2>Zodiakmu adalah: $zodiac_sign <br></h2>
                </div>
            </div>
        </div>
    </body>
    </html>";
}
?>

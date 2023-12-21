<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Montserrat:wght@400;700&family=Outfit:wght@400;500;700&family=Poppins:wght@400;700&family=Roboto+Serif:wght@400;500;700&display=swap" rel="stylesheet" />
    <title>Tanggap Sesama</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css" />
</head>

<body style="background-color: #DDF7F8;">
    <section>
        <div class="formheader">
            <a href="news.php">
                <img src="img/Arrow 3.png" alt="" />
            </a>
            <p>News</p>
            <div class="navform"></div>
        </div>
    </section>

    <section class="body-donations flex column p20 justify-center">
        <div class="p20">
            <img src="img/Rectangle 250.png" alt="" />
            <p class="outfit bold my20" style="color: #045256">
                Criminal Law, Kidnapping | Sunday, July 24, 2022
            </p>
            <p class="roboto-serif bold" style="font-size: 40px">
                Kebakaran Menghanguskan Rumah, Masyarakat Harus Waspada dan Siapkan Langkah Pencegahan </p>
            <p class="outfit" style="font-size: 20px; text-align: justify; line-height: 35px;  text-indent: 0.5in;">
                Kebakaran adalah salah satu bencana yang bisa terjadi kapan saja dan di mana saja, termasuk pada rumah tinggal. Bencana ini bisa terjadi karena banyak faktor, mulai dari korsleting listrik, kebocoran gas, hingga aksi kelalaian dalam menggunakan alat masak. Akibat kebakaran, tidak hanya kerugian material yang dialami, namun bisa saja menimbulkan korban jiwa jika tidak diatasi dengan cepat dan tepat.
                Pada tanggal 2 Mei 2023, kebakaran terjadi di sebuah rumah di kawasan perumahan Jenggala. Kebakaran ini terjadi pada pagi hari ketika penghuni rumah sedang tidak berada di dalam rumah. Kebakaran diduga berasal dari korsleting listrik yang terjadi di bagian ruang tamu. Api dengan cepat merambat ke ruangan lainnya dan menghanguskan seluruh isi rumah.
Kebakaran ini berhasil dipadamkan oleh tim pemadam kebakaran setelah berjuang selama 2 jam. Namun, kerugian material yang diderita cukup besar, tidak hanya pada bangunan rumah, tetapi juga perabotan dan barang-barang berharga lainnya. Kebakaran seperti ini bisa terjadi di mana saja dan kapan saja, sehingga penting bagi masyarakat untuk selalu waspada dan siapkan langkah-langkah pencegahan.
            </p>
            <img src="image/Image-1.png" style="float: right; width: 400px; padding: 0 40px" alt="" />
            <p class="outfit" style="
            font-size: 20px;
            text-align: justify;
            text-indent: 0.5in;
            line-height: 35px;
          ">
                  Pemerintah setempat telah membentuk posko bantuan dan menyediakan tempat penampungan sementara bagi warga yang kehilangan tempat tinggal. Tim medis juga berada di lapangan untuk memberikan perawatan dan bantuan kepada mereka yang membutuhkan. Proses penyelidikan sedang dilakukan untuk mengetahui penyebab pasti kebakaran ini, serta memastikan tindakan pencegahan yang lebih baik untuk masa mendatang.
            </p>
            <p class="outfit" style="
            font-size: 20px;
            text-align: justify;
            text-indent: 0.5in;
            line-height: 35px;
          ">
                 Proses penyelidikan sedang dilakukan untuk mengetahui penyebab pasti kebakaran ini, serta memastikan tindakan pencegahan yang lebih baik untuk masa mendatang.
            </p>
        </div>

    </section>

    <?php include 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(".arrow-right").on("click", function() {
                var scrollPos = $(".slider-container").scrollLeft();
                // Set the new horizontal scroll position
                $(".slider-container").scrollLeft(scrollPos + 50);
            });
            $(".arrow-left").on("click", function() {
                // Get the current horizontal scroll position
                var scrollPos = $(".slider-container").scrollLeft();
                // Set the new horizontal scroll position
                $(".slider-container").scrollLeft(scrollPos - 50);
            });
        });
    </script>
</body>

</html>
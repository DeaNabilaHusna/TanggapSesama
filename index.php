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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        #slick-left {
            position: absolute;
            top: 50%;
            left: 0;
            z-index: 10;
        }
        
        #slick-right {
            position: absolute;
            top: 50%;
            right: 0;
        }
        
        .slick-slider {
            position: relative;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php' ?>
    <section>
        <div class="hero-section" style="
          background-image: url(image/Group\ 3433.png);
          background-size: cover;
        ">
            <div class="container-menu">
                <div class="menu-items">
                    <a href="index.php">Home</a>
                    <div class="dropdown">
                        <button class="dropbtn">Publication</button>
                        <div class="dropdown-content">
                            <a href="news.php">News</a>
                            <a href="moreArticles.php">Articles</a>
                        </div>
                    </div>
                    <a href="donation.php">Donation</a>
                    <a href="Campaign.php">Campaign</a>
                    <a href="about.php">About</a>
                    <a href="contact.php">Contact</a>
                </div>
                <div class="search-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M19.7744 18.6882L15.6228 14.5367C17.0889 12.7907 17.8244 10.5462 17.6759 8.27112C17.5274 5.99608 16.5064 3.86619 14.8258 2.32559C13.1452 0.784989 10.9348 -0.0473715 8.65543 0.00208409C6.37608 0.0515397 4.20382 0.978993 2.59162 2.59104C0.979428 4.20308 0.0517713 6.37526 0.00210212 8.6546C-0.047567 10.9339 0.784586 13.1445 2.32503 14.8252C3.86547 16.5059 5.99527 17.5271 8.2703 17.6758C10.5453 17.8245 12.7899 17.0893 14.536 15.6233L18.6876 19.7749C18.8317 19.919 19.0272 20 19.231 20C19.4348 20 19.6302 19.9191 19.7743 19.775C19.9184 19.6309 19.9994 19.4354 19.9994 19.2316C19.9994 19.0278 19.9185 18.8324 19.7744 18.6882ZM1.55832 8.85806C1.55832 7.4143 1.98644 6.00295 2.78856 4.8025C3.59067 3.60206 4.73075 2.66642 6.06462 2.11391C7.39848 1.56141 8.86623 1.41685 10.2823 1.69851C11.6983 1.98018 12.999 2.67542 14.0199 3.69631C15.0408 4.71721 15.736 6.01791 16.0177 7.43394C16.2994 8.84997 16.1548 10.3177 15.6023 11.6516C15.0498 12.9854 14.1141 14.1255 12.9137 14.9276C11.7132 15.7298 10.3019 16.1579 8.85813 16.1579C6.92277 16.1557 5.06731 15.3859 3.6988 14.0174C2.3303 12.6489 1.56051 10.7934 1.55832 8.85806Z"
                fill="white"
              />
            </svg>
                </div>
            </div>
            <div class="container-slider-tittle">
                <div class="hero-tittle">
                    <p class="roboto-serif" style="font-size: 80px">Tanggap Sesama</p>
                    <p class="outfit" style="font-size: 30px">
                        Kita Tanggap, Kita Beraksi, Kita Membantu
                    </p>
                </div>
                <div class="slider-main-container">
                    <div class="slider-container">
                        <img src="img/slider1.png" alt="" />
                        <img src="img/slider2.png" alt="" />
                        <img src="img/slider3.png" alt="" />
                        <img src="img/slider4.png" alt="" />
                        <img src="img/slider5.png" alt="" />
                        <img src="img/slider6.png" alt="" />
                        <img src="img/slider7.png" alt="" />
                    </div>
                    <div class="container-button-slider">
                        <svg class="arrow-left pointer-cursor" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle
                  cx="40"
                  cy="40"
                  r="39"
                  stroke="white"
                  stroke-width="2"
                />
                <path
                  d="M45 48L34.9968 39.8007L45 32.37"
                  stroke="white"
                  stroke-width="3"
                />
              </svg>
                        <svg class="arrow-right pointer-cursor" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle
                  cx="40"
                  cy="40"
                  r="39"
                  stroke="white"
                  stroke-width="2"
                />
                <path
                  d="M35 32L45 40.1967L35 47.625"
                  stroke="white"
                  stroke-width="3"
                />
              </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-about-us">
            <div>
                <img src="img/about-us.png" class="img-cover" alt="" />
            </div>
            <div>
                <h1 class="roboto-serif-bold">About Us</h1>
                <h2 class="roboto-serif-bold">
                    Our Highest Ambition is to Help People
                </h2>
                <p>
                    Our programs contribute to peace and development through volunteerism worldwide. Take part in changing the lives of young people across the world. We’re focused on providing affordable volunteer travel experiences that are responsible.
                </p>
                <div>
                    <button class="see-more"><a href="about.php">See More</a></button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-barinfo">
            <div>
                <img src="img/infobar1.png" alt="" />
                <h5>597+</h5>
                <p>People rised</p>
            </div>
            <div>
                <img src="img/infobar2.png" alt="" />
                <h5>945+</h5>
                <p>Volunteer</p>
            </div>
            <div>
                <img src="img/infobar3.png" alt="" />
                <h5>3M+</h5>
                <p>Poor People Saved</p>
            </div>
        </div>
    </section>
    <section>
        <div class="campaign-container">
            <div class="campaign-items" style="background-image: url(img/donasi1.png); background-size: cover">
                <div class="campaign-details">
                    <h1>Urgent Cause</h1>
                    <h2>Bantu Bangun Sekolah Untuk Korban Banjir</h2>
                    <p>
                        Bantu mereka mendapat pendidikan yang layak dengan menggalang dana untuk membangun kembali sekolah mereka dan mengembalikan harapan anak-anak korban banjir bandang.
                    </p>
                    <div>
                        <h6>COLLECTION: Rp 160.000.000</h6>
                        <h6>GOAL: Rp 300.000.000</h6>
                    </div>
                    <div class="progress-bar">
                        <div style="width: 60%">
                            <div>
                                <p>60%</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="">
              <a href="donation-detail.php">DONATE</a>
            </button>
                </div>
            </div>
            <div class="campaign-items" style="background-image: url(img/donasi2.png); background-size: cover">
                <div class="campaign-details">
                    <h1>Urgent Cause</h1>
                    <h2>Bantu Korban Erupsi Gunung</h2>
                    <p>
                        Mari bersama-sama memberikan bantuan kepada korban bencana erupsi gunung! Setiap donasi Anda akan memberikan harapan dan kekuatan bagi mereka yang sedang mengalami kesulitan.
                    </p>
                    <div>
                        <h6>COLLECTION: Rp 160.000.000</h6>
                        <h6>GOAL: Rp 300.000.000</h6>
                    </div>
                    <div class="progress-bar">
                        <div style="width: 60%">
                            <div>
                                <p>60%</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="">DONATE</button>
                </div>
            </div>
            <div class="campaign-items" style="background-image: url(img/donasi3.png); background-size: cover">
                <div class="campaign-details">
                    <h1>Urgent Cause</h1>
                    <h2>Tanami Hutan Kita Lagi</h2>
                    <p>
                        Ayo, mari kita berikan dukungan kepada para pahlawan alam! Dengan setiap donasi yang Anda berikan, kita dapat melindungi hutan yang menjadi sumber kehidupan kita. Bersama, kita bisa menjaga keanekaragaman hayati, dan memastikan masa depan yang lestari.
                    </p>
                    <div>
                        <h6>COLLECTION: Rp 160.000.000</h6>
                        <h6>GOAL: Rp 300.000.000</h6>
                    </div>
                    <div class="progress-bar">
                        <div style="width: 60%">
                            <div>
                                <p>60%</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="">DONATE</button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="articles-blogs">
            <h1 class="roboto-serif-bold">Articles & Blogs</h1>
            <div class="row">
                <div>
                    <div class="container">
                        <div>
                            <img src="img/artikel1.png" alt="" class="img-cover" />
                        </div>
                        <p>CLK | Sunday, July 24, 2022</p>
                        <hr />
                        <h3>
                            Kebakaran Menghanguskan Rumah, Masyarakat Harus Waspada dan Siapkan Langkah Pencegahan
                        </h3>
                        <p class="paragraph">
                            Kebakaran adalah salah satu bencana yang bisa terjadi kapan saja dan di mana saja, termasuk pada rumah tinggal.
                        </p>
                    </div>
                    <div class="readmore">
                        <a href="articles-detail.php"> Read More</a>
                    </div>
                </div>
                <div>
                    <div class="container">
                        <div>
                            <img src="img/artikel2.png" alt="" class="img-cover" />
                        </div>
                        <p>Legal Advice | Sunday, July 24, 2022</p>
                        <hr />
                        <h3>
                            Tsunami Menerjang Pantai Selatan: Kerugian Besar dan Upaya Penyelamatan Dilakukan
                        </h3>
                        <p class="paragraph">
                            Sebuah tsunami menerjang pantai selatan pada pagi hari, mengejutkan penduduk dan menimbulkan kerusakan yang luas.
                        </p>
                    </div>
                    <div class="readmore">
                        <p>Read More</p>
                    </div>
                </div>
                <div>
                    <div class="container">
                        <div>
                            <img src="img/artikel3.png" alt="" class="img-cover" />
                        </div>
                        <p>Legal Advice | Friday, August 15, 2022</p>
                        <hr />
                        <h3>Ribuan Warga Mengungsi Akibat Bencana Alam yang Melanda</h3>
                        <p class="paragraph">
                            Bencana alam yang melanda sebuah wilayah telah memaksa ribuan warga setempat untuk mengungsi demi keselamatan mereka.
                        </p>
                    </div>
                    <div class="readmore">
                        <p>Read More</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="news">
            <h1 class="roboto-serif-bold">Latest News</h1>
            <div class="row">
                <div>
                    <div class="container">
                        <div>
                            <img src="image/Image.png" alt="" class="img-cover" />
                        </div>
                        <h3>Banjir</h3>
                        <p class="paragraph" style="font-family: 'outfit'">
                            Banjir Melanda Wilayah, Pohon Tumbang Meninggalkan Kekacauan dan Kerugian
                        </p>
                    </div>
                    <div style="
                padding: 15px;
                border: solid #ffffff 2px;
                width: 110px;
                margin-top: 20px;
              ">
                        <button class="btn-news">
                <a href="news-detail.php">Read More</a>
              </button>
                        <!-- <p style="margin: 0px;"> Read More</p> -->
                    </div>
                </div>
                <div>
                    <div class="container">
                        <div>
                            <img src="image/Image-1.png" alt="" class="img-cover" />
                        </div>
                        <h3>Banjir</h3>
                        <p class="paragraph" style="font-family: 'outfit'">
                            Banjir Melanda Wilayah, Pohon Tumbang Meninggalkan Kekacauan dan Kerugian
                        </p>
                    </div>
                    <div style="
                padding: 15px;
                border: solid #ffffff 2px;
                width: 110px;
                margin-top: 20px;
              ">
                        <button class="btn-news">Read More</button>
                        <!-- <p style="margin: 0px;"> Read More</p> -->
                    </div>
                </div>
                <div>
                    <div class="container">
                        <div>
                            <img src="image/Image-2.png" alt="" class="img-cover" />
                        </div>
                        <h3>Banjir</h3>
                        <p class="paragraph" style="font-family: 'outfit'">
                            Banjir Melanda Wilayah, Pohon Tumbang Meninggalkan Kekacauan dan Kerugian
                        </p>
                    </div>
                    <div style="
                padding: 15px;
                border: solid #ffffff 2px;
                width: 110px;
                margin-top: 20px;
              ">
                        <button class="btn-news">Read More</button>
                        <!-- <p style="margin: 0px;"> Read More</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="late"></div>
    </section>
    <?php include 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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
            $(".campaign-container").slick({
                arrows: true,
                autoplay: true,
                autoplaySpeed: 5000,
                prevArrow: '<img id="slick-left" src="img/left-arrow.png">',
                nextArrow: '<img id="slick-right" src="img/right-arrow.png">',
            });
        });
    </script>
    <script>
        window.addEventListener("DOMContentLoaded", function() {
            var dropdowns = document.getElementsByClassName("dropdown");
            for (var i = 0; i < dropdowns.length; i++) {
                dropdowns[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var dropdownContent = this.querySelector(".dropdown-content");
                    if (dropdownContent.style.display === "block") {
                        dropdownContent.style.display = "none";
                    } else {
                        dropdownContent.style.display = "block";
                    }
                });
            }
        });
    </script>
</body>

</html>
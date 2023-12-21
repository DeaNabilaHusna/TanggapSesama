<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Montserrat:wght@400;700&family=Outfit:wght@400;500;700&family=Poppins:wght@400;700&family=Roboto+Serif:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Tanggap Sesama</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">

</head>

<body>
    <?php include 'navbarhijau.php' ?>
    <section>
        <div class="hero-section" style="background-image: url(image/about.png); background-size: cover; height: 500px;">
            <div class="container-menu">
            <div class="menu-items-hijau">
                <a href="index.php">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">Publication</button>
                    <div class="dropdown-content"style="background-color: #045256;">
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
                            fill="#045256" />
                    </svg>

                </div>
            </div>
            <div class="container-tittle">
                <p class="roboto-serif-bold" style="font-size:60px; color:#045256">About Us
                </p>
            </div>
        </div>
    </section>



    <section class="body-donations flex column p20">
        <div class="flex my20" style="width: 100%; justify-content: space-around;">
            <div class="flex column" style="width: 45%;">
                <p class="outfit bold">Welcome to Tanggap Sesama</p>
                <p class="roboto-serif bold my20" style="font-size: 3em;">Let Us Come Together <br> To Make a Difference</p>
                <p class="outfit" style="color: #828282;">Join Our Platform for Goodness' Sake: <br> Together, Let's Create a Brighter Future by Sharing Hope <br> and Compassion through Donation!</p>
                <div class="flex">
                    <div class="flex" style="width: 100%;">
                        <div class="flex column">
                            <div class="flex my20">
                                <img src="image/secure.png" style="width: 30px; height: 35px;" alt="">
                                <p class="outfit bold mx20" style="font-size: 25px; color: #045256;">Our Mission</p>
                            </div>
                            <p class="outfit" style="color: #828282; text-align: justify; font-size: 20px;line-height: 30px;">our mission is to create positive <br> impact and make a difference <br> in the lives of those in need.</p>
                        </div>
                    </div>
                    <div class="flex" style="width: 100%;">
                        <div class="flex column">
                            <div class="flex my20">
                                <img src="image/paper.png" style="width: 30px; height: 35px;" alt="">
                                <p class="outfit bold mx20" style="font-size: 25px; color: #045256;">Our Vision</p>
                            </div>
                            <p class="outfit" style="color: #828282; text-align: justify; font-size: 20px;line-height: 30px;">Our vision is to create a world <br> where everyone has access to <br> the resources they need to thrive.</p>
                        </div>
                    </div>
                </div>
                <div class="flex column">
                    <div class="flex" style="justify-content: space-between;">
                        <p class="outfit bold my20">Donations</p>
                        <p class="outfit bold my20">75%</p>
                    </div>
                    <div class="progress-bar" style="width: 100%;">
                        <div class="progress" style="width: 75%; height: inherit; background-color: #045256;"></div>
                    </div>
                    <div class="flex" style="justify-content: space-between;">
                        <p class="outfit bold my20">Medical Help</p>
                        <p class="outfit bold my20">90%</p>
                    </div>
                    <div class="progress-bar" style="width: 100%;">
                        <div class="progress" style="width: 95%; height: inherit; background-color: #045256;"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center align-center mx20" style="width: 40%;">
                <img src="image/imageabout.png" style="object-fit: contain; width: 100%;" alt="">
            </div>
        </div>
        <div class="flex" style="padding: 40px 50px; margin: 30px 50px; justify-content: space-around;">
            <div class="" style="width: 40%;">
                <img src="image/Imagedesc.png" style="width: 100%; object-fit: contain;" alt="">
            </div>
            <div class="" style="width: 50%">
                <p class="outfit" style="text-align: justify; line-height: 35px;">
                    "Tanggap Sesama" is a website dedicated to providing assistance and disaster relief to communities in need. We are committed to always being ready to respond quickly and help disaster victims to recover their lives. With an experienced team and volunteers
                    ready to assist, we strive to provide appropriate solutions and assistance in emergency and post-disaster situations. We aim to continuously improve the quality of our services and reach out to communities in need throughout Indonesia.
                    We also collaborate with various trusted agencies and organizations in disaster management, such as the Indonesian Red Cross (PMI) and the National Disaster Management Agency (BNPB). We hope to contribute and help disaster victims
                    to recover their lives and create a more responsive and caring community towards each other.
                </p>
            </div>
        </div>
        <div class="flex column align-center">
            <p class="roboto-serif bold" style="text-align: center; font-size: 40px;">Our Mission</p>
            <p class="outfit my20" style="color: #828282; text-align: center; font-size: 20px; width: 400px;">We strive to provide a safe and reliable space for individuals, organizations, and communities to come together and support various causes through charitable giving.</p>
            <div class="" style="width: 400px; height: 500px; position: relative;">
                <img src="image/ourvision.png" style="width: inherit; object-fit: contain;" alt="">
                <img src="image/ourvision_2.png" style="width: 300px; position: absolute; left: 50px; top: 200px;" alt="">
            </div>
        </div>
    </section>
    <?php include 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.arrow-right').on('click', function() {
                var scrollPos = $('.slider-container').scrollLeft();
                // Set the new horizontal scroll position
                $('.slider-container').scrollLeft(scrollPos + 50);
            });
            $('.arrow-left').on('click', function() {
                // Get the current horizontal scroll position
                var scrollPos = $('.slider-container').scrollLeft();
                // Set the new horizontal scroll position
                $('.slider-container').scrollLeft(scrollPos - 50);
            });
        });
    </script>
        <script>
        window.addEventListener('DOMContentLoaded', function() {
            var dropdowns = document.getElementsByClassName('dropdown');
            for (var i = 0; i < dropdowns.length; i++) {
                dropdowns[i].addEventListener('click', function() {
                    this.classList.toggle('active');
                    var dropdownContent = this.querySelector('.dropdown-content');
                    if (dropdownContent.style.display === 'block') {
                        dropdownContent.style.display = 'none';
                    } else {
                        dropdownContent.style.display = 'block';
                    }
                });
            }
        });
    </script>
</body>

</html>
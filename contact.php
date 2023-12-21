<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Montserrat:wght@400;700&family=Outfit:wght@400;500;700&family=Poppins:wght@400;700&family=Roboto+Serif:wght@400;500;700&display=swap"
        rel="stylesheet">
    <title>Tanggap Sesama</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">

</head>

<body>
<?php include 'navbarhijau.php' ?>
    <section>
        <div class="hero-section" style="background-image: url(image/contact-head.png); background-size: cover; height: 500px;">
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
                <p class="roboto-serif-bold" style="font-size:60px; color:#045256">Contact Us
                </p>
            </div>
        </div>
    </section>
 
    
    <section class="body-donations flex column align-center">
        <div class="flex align-center column" style="width: 50%;">
            <div class="outfit flex bold" style="width: 150px ;border: 3px solid #045256; padding: 5px 20px; color: #045256; letter-spacing: 5px; margin-top:30px;">CONTACT US</div>
            <p class="outfit bold my20" style="font-size: 2em;">Get in Touch with Us!</p>
            <div class="flex my20" style="gap: 20px;">
                <div class="flex column p20 justify-center align-center" style="width: 250px; height: 200px; border: 10px solid #045256;">
                    <img src="image/call.png" class="" style="width: 70px; height: 70px;" alt="">
                    <h1 class="my20" class="outfit bold">Call us</h1>
                    <p class="outfit" style="color: #828282;">(+22) 123 - 4567 - 900<br>(+22) 123 - 4567 - 901</p>
                </div>
                <div class="flex column p20 justify-center align-center" style="width: 250px; height: 200px; border: 10px solid #045256;">
                    <img src="image/call.png" class="" style="width: 70px; height: 70px;" alt="">
                    <h1 class="my20" class="outfit bold">E-mail us</h1>
                    <p class="outfit" style="color: #828282;">support@doctorate.com<br>yourmail@gmail.com</p>
                </div>
            </div>
            <br><br><br>
        </div>
   
        <form action="" class="flex justify-center align-center" style="width: 70%; gap: 40px; flex-wrap: wrap;">
            <div class="col-2 mx20 outfit" style="width: 40%; height: 50px; ">
                <label class="bold" for="fullName">Full Name *</label>
                <input type="text" placeholder="John David" style="width: 100%; height: 30px; background-color: #045256; color: white; border: none; padding: 10px;">
            </div>
            <div class="col-2 mx20 outfit" style="width: 40%; height: 50px; ">
                <label class="bold" for="fullName">Full Email *</label>
                <input type="text" placeholder="example@youremail.com" style="width: 100%; height: 30px; background-color: #045256; color: white; border: none; padding: 10px;">
            </div>
            <div class="col-2 mx20 outfit" style="width: 40%; height: 50px; ">
                <label class="bold" for="fullName">Phone *</label>
                <input type="text" placeholder="Your Number here" style="width: 100%; height: 30px; background-color: #045256; color: white; border: none; padding: 10px;">
            </div>
            <div class="col-2 mx20 outfit" style="width: 40%; height: 50px; ">
                <label class="bold" for="fullName">Subject *</label>
                <input type="text" placeholder="How we can Help" style="width: 100%; height: 30px; background-color: #045256; color: white; border: none; padding: 10px;">
            </div>
            <div class="col-2 mx20 outfit" style="width: 89%;">
                <label class="bold" for="fullName">We Can Help You?</label>
                <textarea rows="10" placeholder="Type your message here.." style="width: 100%; background-color: #045256; color: white; border: none; padding: 10px;"></textarea>
            </div>
            <button class="outfit" style="padding: 15px 30px; border: none; background-color: black; color: white;">Send Message</button>
        </form>

        <img src="image/maps.png" class="my20" style="width: 100%; margin-bottom: 0px;" alt="">
    </section>
    <?php include 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('.arrow-right').on('click', function () {
                var scrollPos = $('.slider-container').scrollLeft();
                // Set the new horizontal scroll position
                $('.slider-container').scrollLeft(scrollPos + 50);
            });
            $('.arrow-left').on('click', function () {
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
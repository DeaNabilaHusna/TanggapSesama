<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Campaign</title>
    <link rel="stylesheet" href="Style2.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Montserrat:wght@400;700&family=Outfit:wght@400;500;700&family=Poppins:wght@400;700&family=Roboto+Serif:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container" style="width: fit-content;">
        <?php include 'navbar.php' ?>
        <div class="container-menu">
            <div class="menu-items">
                <a href="index.php">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">Publication</button>
                    <div class="dropdown-content" style=" background-color: #9AB8BA;">
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
                    <path d="M19.7744 18.6882L15.6228 14.5367C17.0889 12.7907 17.8244 10.5462 17.6759 8.27112C17.5274 5.99608 16.5064 3.86619 14.8258 2.32559C13.1452 0.784989 10.9348 -0.0473715 8.65543 0.00208409C6.37608 0.0515397 4.20382 0.978993 2.59162 2.59104C0.979428 4.20308 0.0517713 6.37526 0.00210212 8.6546C-0.047567 10.9339 0.784586 13.1445 2.32503 14.8252C3.86547 16.5059 5.99527 17.5271 8.2703 17.6758C10.5453 17.8245 12.7899 17.0893 14.536 15.6233L18.6876 19.7749C18.8317 19.919 19.0272 20 19.231 20C19.4348 20 19.6302 19.9191 19.7743 19.775C19.9184 19.6309 19.9994 19.4354 19.9994 19.2316C19.9994 19.0278 19.9185 18.8324 19.7744 18.6882ZM1.55832 8.85806C1.55832 7.4143 1.98644 6.00295 2.78856 4.8025C3.59067 3.60206 4.73075 2.66642 6.06462 2.11391C7.39848 1.56141 8.86623 1.41685 10.2823 1.69851C11.6983 1.98018 12.999 2.67542 14.0199 3.69631C15.0408 4.71721 15.736 6.01791 16.0177 7.43394C16.2994 8.84997 16.1548 10.3177 15.6023 11.6516C15.0498 12.9854 14.1141 14.1255 12.9137 14.9276C11.7132 15.7298 10.3019 16.1579 8.85813 16.1579C6.92277 16.1557 5.06731 15.3859 3.6988 14.0174C2.3303 12.6489 1.56051 10.7934 1.55832 8.85806Z" fill="white" />
                </svg>
            </div>
        </div>
        <div class="content">
            <div class="middle">
                <h2 style="font-family: 'roboto-serif'">Join Us Become Volunteer</h2>
                <p>
                    Get the opportunity to take part directly in our program activities.
                </p>
            </div>
            <div class="joinus">
                <a href="formvolunteer.php">
                    <button>Join Us</button>
                </a>
            </div>
        </div>
        <?php include 'footer.php' ?>
    </div>
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
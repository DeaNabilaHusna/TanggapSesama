<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
</head>

<body style="background-color: #9AB8BA;">
    <div class="login">
        <div class="background">
            <img style="width:600px; height:770px" src="img/Group 396.png" alt="">
        </div>
        <div class="container-menu-login">
            <img src="img/LOGOlogin.png" alt="">
            <div class="menu-items-login">
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
        </div>

        <form>
            <div class="buat-akun">
                <div class="menu">
                    <a href="login.php">Login</a>
                    <a href="signUp.php">Sign Up</a>
                </div>
                <br>
                <div class="form">
                    <div class="name" style=" display:flex;">
                        <input class="firstname" type="text" placeholder="First Name" id="firstname" required>
                        <br>
                        <input class="lastname" style="margin-left: 19px;" type="text" placeholder="Last Name" id="lastname" required>
                        <br>
                    </div>
                    <div class="auth" style="display:flex">
                        <input class="email" type="email" placeholder="Email" id="email" required>
                        <br>
                        <input class="phone" style="margin-left: 19px;" type="text" placeholder="Phone Number" id="phone" required>
                        <br>
                    </div>
                    <input class="password" type="password" placeholder="Password" id="password" required>
                    <img src="img/🦆 icon _eye_.png" alt="">
                    <br>
                </div>
                <div class="btn-menu-regis">
                    <a href="login.php" class="gradient-button" onclick="validateForm()">Sign Up</a>
                </div>
                <br>
                <div class="signupgoogle">
                    <a style="border: 3px solid #ffffff;" href="#"><img src="img/Group 3432.png" alt=""> Sign Up with Google</a>
                </div>
            </div>
        </form>
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
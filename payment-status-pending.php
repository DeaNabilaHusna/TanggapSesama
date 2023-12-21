<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment Status</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body style="background-color: #ddf7f8">
    <div class="container">
        <section>
            <div class="amount">
                <a href="payment-countdown.php">
                    <img src="img/Arrow 3.png " alt=" " />
                </a>
                <p>Payment Status</p>
                <div class="navform"></div>
            </div>
        </section>
    </div>
    <div class="container-status">
        <section>
            <p style="font-size: 22px; font-weight: bold; padding-bottom: 10px">
                Waiting for Payment
            </p>
            <p style="font-size: 18px">immediately make a payment before</p>
            <br />
            <div id="countdown" style="font-size: 22px;font-weight: bold;"></div>
            <br />
            <div class="status">
                <div class="firstline">
                    <p>Payment Method</p>
                    <p style="font-weight: bold; padding-left: 200px">
                        BRI Virtual Account
                    </p>
                </div>
                <div class="secondline">
                    <p>Donation ID</p>
                    <p style="font-weight: bold; padding-left: 240px">D0000001</p>
                </div>
                <div class="thirdline">
                    <p>Status</p>
                    <div class="status-value" style=" font-weight: bold; padding-left: 283px; "></div>
                    <p style="background-color: #045256;width: 100px; text-align: center;padding: 5px;border-radius: 50px; color: white; font-weight: bold;">Pending</p>
                </div>
                <div class="fourthline ">
                    <a href="donation.php "><button>Donate Again</button></a>
                    <a href="payment-status-paid.php "><button>Update Status</button></a>
                </div>
            </div>
        </section>
    </div>
    <?php include 'footer.php' ?>
    <script>
        window.onload = function() {
            // Mendapatkan waktu saat ini
            var now = new Date().getTime();

            // Mengatur batas waktu akhir menjadi 3 jam setelah waktu saat ini
            var endDate = now + 6* 60 * 60 * 1000;

            // Memperbarui hitungan mundur setiap 1 detik
            var countdown = setInterval(function() {
                // Dapatkan tanggal dan waktu saat ini
                var currentTime = new Date().getTime();

                // Hitung selisih antara waktu saat ini dengan waktu akhir
                var distance = endDate - currentTime;

                // Hitung jam, menit, dan detik
                var hours = Math.floor(
                    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                );
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Format jam, menit, dan detik menjadi format "00:00:00 "
                var formattedTime =
                    formatTime(hours) +
                    ":" +
                    formatTime(minutes) +
                    ":" +
                    formatTime(seconds);

                // Tampilkan hasil dalam elemen dengan id "countdown "
                var countdownElement = document.getElementById("countdown");
                if (countdownElement) {
                    countdownElement.innerHTML = formattedTime;
                }

                // Jika hitungan mundur berakhir, tampilkan pesan
                if (distance < 0) {
                    clearInterval(countdown);
                    if (countdownElement) {
                        countdownElement.innerHTML = "Time Has Expired";
                    }
                }
            }, 1000);

            // Fungsi untuk memformat jam, menit, dan detik menjadi format "00 "
            function formatTime(time) {
                return time < 10 ? "0" + time : time;
            }
        };
    </script>
</body>

</html>
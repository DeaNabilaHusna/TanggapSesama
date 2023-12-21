<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Please Complete Your Payment</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container" style="font-family: 'roboto', sans-serif; background-color: #DDF7F8;">
        <section>
            <div class="completedheader">
                <p style="font-size: 16px;">Payment Deadline</p>
                <div class="time">
                    <div id="current-date" style="font-size: 22px;"></div>
                    <img src="img/🦆 icon _timer_.png" alt="">
                    <div id="countdown" style="font-size: 22px;"></div>
                </div>
            </div>
        </section>
        <section>
            <div class="payment-content">
                <div class="bankname">
                    <p>BRI Virtual Account</p>
                    <img src="img/BankVirtual/BRI.png" alt="">
                </div>
                <div class="VAN">
                    <p>Virtual Account Number</p>
                    <div class="number">
                        <p style="font-size: 22px;">123 456 789 123 456</p>
                        <button type="">Copy</button>
                    </div>
                </div>
                <div class="end">
                    <p style="font-size: 18px; font-weight: 550;">Donation Amount</p>
                    <p style="font-size: 22px; font-weight: 700;">Rp 50.000</p>
                    <a href="payment-status-pending.php"><button>Check Payment Status</button></a>
                </div>
            </div>
        </section>
        <?php include 'footer.php' ?>
    </div>
    <script>
        // Dapatkan tanggal saat ini
        var today = new Date();

        // Daftar nama hari
        var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

        // Daftar nama bulan
        var months = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        // Ambil nama hari, tanggal, bulan, dan tahun
        var day = days[today.getDay()];
        var date = today.getDate();
        var month = months[today.getMonth()];
        var year = today.getFullYear();

        // Format tanggal dengan format yang diinginkan
        var formattedDate = day + ", " + date + " " + month + " " + year;

        // Tampilkan tanggal di elemen dengan id "current-date"
        var currentDateElement = document.getElementById("current-date");
        if (currentDateElement) {
            currentDateElement.innerHTML = formattedDate;
        }
    </script>
    <script>
        window.onload = function() {
            // Mendapatkan waktu saat ini
            var now = new Date().getTime();

            // Mengatur batas waktu akhir menjadi 3 jam setelah waktu saat ini
            var endDate = now + (6 * 60 * 60 * 1000);

            // Memperbarui hitungan mundur setiap 1 detik
            var countdown = setInterval(function() {
                // Dapatkan tanggal dan waktu saat ini
                var currentTime = new Date().getTime();

                // Hitung selisih antara waktu saat ini dengan waktu akhir
                var distance = endDate - currentTime;

                // Hitung jam, menit, dan detik
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Format jam, menit, dan detik menjadi format "00:00:00"
                var formattedTime = formatTime(hours) + ":" + formatTime(minutes) + ":" + formatTime(seconds);

                // Tampilkan hasil dalam elemen dengan id "countdown"
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

            // Fungsi untuk memformat jam, menit, dan detik menjadi format "00"
            function formatTime(time) {
                return time < 10 ? "0" + time : time;
            }
        };
    </script>
</body>

</html>
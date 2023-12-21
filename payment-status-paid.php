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
                Thank You For Donating
            </p>
            <p style="font-size: 18px">your payment has been paid</p>
            <br />
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
                    <p style="background-color: #045256;width: 100px; text-align: center;padding: 5px;border-radius: 50px; color: white; font-weight: bold;">Paid</p>
                </div>
                <div class="fourthline ">
                    <a href="donation.php "><button>Donate Again</button></a>
                    <a href="payment-status-paid.php "><button>Update Status</button></a>
                </div>
            </div>
        </section>
    </div>
    <?php include 'footer.php' ?>

</body>

</html>
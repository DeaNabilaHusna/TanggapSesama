<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment Detail</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="container"></div>
    <section>
        <div class="amount">
            <a href="payment.php ">
                <img src="img/Arrow 3.png " alt=" " />
            </a>
            <p>Payment Detail</p>
            <div class="navform"></div>
        </div>
    </section>
    <section>
        <div class="detail" style="background-color: #ddf7f8">
            <p>Payment Amount</p>
            <div class="nominal">
                <p>Rp 50.000</p>
            </div>
            <br />
            <br />
            <hr />
            <div class="bank">
                <img src="img/BankVirtual/BRI.png " alt=" " />
                <p>BRI Virtual Account</p>
                <a href="payment.php "><button>Change</button></a>
            </div>
            <hr />
            <div class="nextpayment">
                <a href="payment-countdown.php"><button>Continue Payment</button></a></div>

        </div>
    </section>
    <?php include 'footer.php' ?>
</body>

</html>
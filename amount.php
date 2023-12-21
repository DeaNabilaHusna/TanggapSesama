<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donation Amount</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body style="display: grid">
    <div class="container" style="background-color: #ddf7f8">
        <section>
            <div class="amount">
                <a href="donation-detail.php">
                    <img src="img/Arrow 3.png" alt="" />
                </a>
                <p>Donation</p>
                <div class="navform"></div>
            </div>
        </section>
        <section>
            <div class="formamount">
                <p>Enter Donation Amount</p>
                <div class="donation-options">
                    <div class="row">
                        <input type="radio" id="donation-5" name="donation-amount" value="5" />
                        <label for="donation-5">Rp 5.000</label>

                        <input type="radio" id="donation-10" name="donation-amount" value="10" />
                        <label for="donation-10">Rp 10.000</label>
                    </div>

                    <div class="row">
                        <input type="radio" id="donation-20" name="donation-amount" value="20" />
                        <label for="donation-20">Rp 20.000</label>

                        <input type="radio" id="donation-50" name="donation-amount" value="50" />
                        <label for="donation-50">Rp 50.000</label>
                    </div>
                </div>
                <div class="anotheramount">
                    <p>Enter Another Amount</p>
                    <input type="text" name="amount" id="amount" placeholder="Rp x.xxx" />
                    <div class="minimal">
                        <p>Min. Rp 1.000</p>
                    </div>
                </div>
                <div class="summary">
                    <p>Donation Summary</p>
                    <p style="font-weight: lighter;">
                        Main Donation <span style="float: right;">Rp 50.000</span>
                    </p>
                    <p style="font-weight: lighter;">
                        Total Payment <span style="float: right;">Rp 50.000</span>
                    </p>
                </div>
                <div class="payment">
                    <a href="payment.php">
                        <button>Continue Payment</button>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>
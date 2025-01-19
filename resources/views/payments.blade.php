<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="icon" type="image" href="images/soda_logo.png">
    <link rel="stylesheet" href="styles/styles.css" type="text/css"/>
    <link rel="stylesheet" href="styles/payments.css" type="text/css"/>
    <link rel="stylesheet" href="styles/checkout.css" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar flex js-navbar"></nav>

    <main>
        <h1>Pay with Paystack</h1>
        <section class="summary js-payment-summary"></section>

        <div class="payment-summary-title">Make Payment</div>
        <form id="paymentForm" class="flex">
            <div class="flex">
                <label for="email">Email</label>
                <input type="email" id="email" required placeholder="Enter your email" />
            </div>
            <div class="flex">
                <label for="amount">Amount: </label> <span class="total-amount"></span>
            </div>
                <button type="button" class="pay-button" onclick="import('/shop/scripts/payments.js').then(pay => pay.payWithPaystack())">Pay</button>
            </div>
        </form>

        <div>

    </main>

    <footer class="flex js-footer"></footer>

    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script type="module" src="shop/scripts/payments.js"></script>
</body>
</html>

<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Payment Options</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Services</a> / Payment Options
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="payment-content">
                <h3>Ways to Pay Your Taxes</h3>
                <div class="payment-methods">
                    <div class="payment-method">
                        <h4>Electronic Payments</h4>
                        <ul>
                            <li><strong>Direct Pay:</strong> Free from bank account</li>
                            <li><strong>Credit/Debit Card:</strong> Processing fee applies</li>
                            <li><strong>Electronic Funds Withdrawal:</strong> When e-filing</li>
                        </ul>
                    </div>

                    <div class="payment-method">
                        <h4>Traditional Payments</h4>
                        <ul>
                            <li><strong>Check or Money Order:</strong> Mail with payment voucher</li>
                            <li><strong>Cash:</strong> At participating retail partners</li>
                            <li><strong>Wire Transfer:</strong> For large payments</li>
                        </ul>
                    </div>

                    <div class="payment-method">
                        <h4>Payment Plans</h4>
                        <ul>
                            <li><strong>Short-term:</strong> 120 days or less</li>
                            <li><strong>Installment Agreement:</strong> Monthly payments</li>
                            <li><strong>Offer in Compromise:</strong> Settle for less</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
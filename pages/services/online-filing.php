<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Online Filing</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Services</a> / Online Filing
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="online-filing-content">
                <h3>E-File Your Tax Return</h3>
                <div class="filing-options">
                    <div class="filing-option">
                        <h4>Free File</h4>
                        <p>For taxpayers with income below $73,000</p>
                        <ul>
                            <li>Free guided tax preparation</li>
                            <li>Free e-filing</li>
                            <li>Maximum refund guarantee</li>
                        </ul>
                        <a href="#" class="btn">Start Free File</a>
                    </div>

                    <div class="filing-option">
                        <h4>Direct File</h4>
                        <p>Simple returns with common income types</p>
                        <ul>
                            <li>W-2 income</li>
                            <li>Social Security benefits</li>
                            <li>Interest under $1,500</li>
                            <li>Standard deduction only</li>
                        </ul>
                        <a href="#" class="btn">Use Direct File</a>
                    </div>

                    <div class="filing-option">
                        <h4>Fillable Forms</h4>
                        <p>For taxpayers comfortable with paper forms</p>
                        <ul>
                            <li>Electronic versions of paper forms</li>
                            <li>Basic calculations</li>
                            <li>Free for all income levels</li>
                        </ul>
                        <a href="#" class="btn">Access Fillable Forms</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
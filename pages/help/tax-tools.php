<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Tax Tools</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Help</a> / Tax Tools
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="tools-content">
                <h3>Interactive Tax Tools</h3>
                <div class="tools-grid">
                    <div class="tool-item">
                        <h4>Withholding Calculator</h4>
                        <p>Determine the right amount of tax to have withheld from your paycheck</p>
                        <a href="<?php echo $site_url; ?>/pages/tools/withholding-calculator.php" class="btn">Use
                            Calculator</a>
                    </div>

                    <div class="tool-item">
                        <h4>Tax Estimator</h4>
                        <p>Estimate your tax liability or refund for the current year</p>
                        <a href="<?php echo $site_url; ?>/pages/tools/tax-estimator.php" class="btn">Start
                            Estimating</a>
                    </div>

                    <div class="tool-item">
                        <h4>Refund Tracker</h4>
                        <p>Check the status of your tax refund</p>
                        <a href="<?php echo $site_url; ?>/pages/services/refund-status.php" class="btn">Track Refund</a>
                    </div>

                    <div class="tool-item">
                        <h4>Tax Calendar</h4>
                        <p>Important tax deadlines and due dates</p>
                        <a href="#" class="btn">View Calendar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
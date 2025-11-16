<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Payroll Taxes</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Businesses</a> / Payroll Taxes
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="payroll-content">
                <h3>Employer Payroll Tax Responsibilities</h3>
                <div class="payroll-info">
                    <div class="payroll-card">
                        <h4>Withholding Requirements</h4>
                        <ul>
                            <li>Federal income tax</li>
                            <li>Social Security tax (6.2%)</li>
                            <li>Medicare tax (1.45%)</li>
                            <li>State income tax (where applicable)</li>
                        </ul>
                    </div>

                    <div class="payroll-card">
                        <h4>Employer Contributions</h4>
                        <ul>
                            <li>Social Security tax (6.2% matching)</li>
                            <li>Medicare tax (1.45% matching)</li>
                            <li>Federal Unemployment Tax (FUTA)</li>
                            <li>State Unemployment Tax (SUTA)</li>
                        </ul>
                    </div>

                    <div class="payroll-card">
                        <h4>Filing Deadlines</h4>
                        <p><strong>Form 941:</strong> Quarterly</p>
                        <p><strong>Form 940:</strong> Annually</p>
                        <p><strong>W-2/W-3:</strong> January 31st</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
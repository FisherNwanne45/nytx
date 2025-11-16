<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Business Deductions</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Businesses</a> / Business Deductions
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="deductions-content">
                <h3>Common Business Deductions</h3>
                <div class="deductions-grid">
                    <div class="deduction-card">
                        <h4>Operating Expenses</h4>
                        <ul>
                            <li>Rent or mortgage interest</li>
                            <li>Utilities</li>
                            <li>Office supplies</li>
                            <li>Professional services</li>
                        </ul>
                    </div>

                    <div class="deduction-card">
                        <h4>Employee Costs</h4>
                        <ul>
                            <li>Salaries and wages</li>
                            <li>Employee benefits</li>
                            <li>Training and education</li>
                            <li>Retirement contributions</li>
                        </ul>
                    </div>

                    <div class="deduction-card">
                        <h4>Asset Expenses</h4>
                        <ul>
                            <li>Equipment purchases</li>
                            <li>Vehicle expenses</li>
                            <li>Depreciation</li>
                            <li>Section 179 deduction</li>
                        </ul>
                    </div>

                    <div class="deduction-card">
                        <h4>Other Deductions</h4>
                        <ul>
                            <li>Business insurance</li>
                            <li>Marketing and advertising</li>
                            <li>Travel and entertainment</li>
                            <li>Home office deduction</li>
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
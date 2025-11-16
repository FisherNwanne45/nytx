<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Deductions & Credits</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Individuals</a> / Deductions &
                Credits
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="deductions-content">
                <h3>Common Tax Deductions</h3>
                <div class="deductions-grid">
                    <div class="deduction-card">
                        <h4>Standard Deduction</h4>
                        <p><strong>Single:</strong> $13,850</p>
                        <p><strong>Married Filing Jointly:</strong> $27,700</p>
                        <p><strong>Head of Household:</strong> $20,800</p>
                    </div>

                    <div class="deduction-card">
                        <h4>Itemized Deductions</h4>
                        <ul>
                            <li>Medical expenses exceeding 7.5% of AGI</li>
                            <li>State and local taxes (up to $10,000)</li>
                            <li>Mortgage interest</li>
                            <li>Charitable contributions</li>
                        </ul>
                    </div>
                </div>

                <h3>Tax Credits</h3>
                <div class="credits-grid">
                    <div class="credit-card">
                        <h4>Child Tax Credit</h4>
                        <p>Up to $2,000 per qualifying child</p>
                    </div>

                    <div class="credit-card">
                        <h4>Earned Income Tax Credit</h4>
                        <p>For low to moderate income workers</p>
                    </div>

                    <div class="credit-card">
                        <h4>Education Credits</h4>
                        <p>American Opportunity Credit and Lifetime Learning Credit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
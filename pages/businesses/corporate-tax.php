<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Corporate Tax</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Businesses</a> / Corporate Tax
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="business-content">
                <h3>Corporate Tax Information</h3>
                <div class="business-grid">
                    <div class="business-card">
                        <h4>Corporate Tax Rates</h4>
                        <p>Flat rate of 21% for C corporations</p>
                        <p>Pass-through entities taxed at individual rates</p>
                    </div>

                    <div class="business-card">
                        <h4>Filing Deadlines</h4>
                        <p><strong>C Corporations:</strong> 15th day of 4th month after year-end</p>
                        <p><strong>S Corporations:</strong> 15th day of 3rd month after year-end</p>
                    </div>

                    <div class="business-card">
                        <h4>Business Deductions</h4>
                        <ul>
                            <li>Business expenses</li>
                            <li>Employee benefits</li>
                            <li>Depreciation</li>
                            <li>Research & Development</li>
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
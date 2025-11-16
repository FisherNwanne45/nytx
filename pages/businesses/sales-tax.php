<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Sales Tax</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Businesses</a> / Sales Tax
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="sales-tax-content">
                <h3>Sales Tax Collection & Reporting</h3>
                <div class="sales-tax-info">
                    <div class="tax-card">
                        <h4>Who Must Collect</h4>
                        <p>Businesses with physical presence or economic nexus in the state</p>
                        <p>Online sellers meeting threshold requirements</p>
                    </div>

                    <div class="tax-card">
                        <h4>Collection Requirements</h4>
                        <ul>
                            <li>Register for sales tax permit</li>
                            <li>Collect tax at point of sale</li>
                            <li>Maintain proper records</li>
                            <li>File regular returns</li>
                        </ul>
                    </div>

                    <div class="tax-card">
                        <h4>Filing Frequency</h4>
                        <p>Based on sales volume:</p>
                        <ul>
                            <li>Monthly: High volume</li>
                            <li>Quarterly: Medium volume</li>
                            <li>Annually: Low volume</li>
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
<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Tax Law Resources</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Help</a> / Tax Law Resources
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="tax-law-content">
                <h3>Understanding Tax Laws</h3>
                <div class="law-resources">
                    <div class="resource-card">
                        <h4>Internal Revenue Code</h4>
                        <p>The complete body of federal tax law</p>
                        <a href="#" class="btn">Browse Code</a>
                    </div>

                    <div class="resource-card">
                        <h4>Tax Regulations</h4>
                        <p>Treasury Department interpretations of tax laws</p>
                        <a href="#" class="btn">View Regulations</a>
                    </div>

                    <div class="resource-card">
                        <h4>Revenue Rulings</h4>
                        <p>Official interpretations of tax law applications</p>
                        <a href="#" class="btn">Search Rulings</a>
                    </div>

                    <div class="resource-card">
                        <h4>Recent Tax Law Changes</h4>
                        <p>Updates and amendments to tax legislation</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Refunds</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Individuals</a> / Refunds
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="refunds-content">
                <h3>Understanding Your Refund</h3>
                <div class="refund-info">
                    <div class="info-card">
                        <h4>Refund Processing Times</h4>
                        <ul>
                            <li><strong>E-file with direct deposit:</strong> 21 days average</li>
                            <li><strong>Paper return with direct deposit:</strong> 4-6 weeks</li>
                            <li><strong>Paper return with check:</strong> 6-8 weeks</li>
                        </ul>
                    </div>

                    <div class="info-card">
                        <h4>Where's My Refund?</h4>
                        <p>Check your Clearance Status 24 hours after e-filing or 4 weeks after mailing paper return.</p>
                        <a href="<?php echo $site_url; ?>/pages/services/refund-status.php" class="btn">Check Refund
                            Status</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
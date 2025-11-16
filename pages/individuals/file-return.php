<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>File Your Tax Return</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Individuals</a> / File Return
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="filing-options">
                <h3>Choose Your Filing Method</h3>
                <div class="options-grid">
                    <div class="option-card">
                        <h4>E-File Online</h4>
                        <p>File securely online for fastest processing and refunds</p>
                        <ul>
                            <li>Instant confirmation</li>
                            <li>Faster refunds (21 days average)</li>
                            <li>Secure digital submission</li>
                        </ul>
                        <a href="#" class="btn">Start E-Filing</a>
                    </div>

                    <div class="option-card">
                        <h4>Free File</h4>
                        <p>Free online filing for eligible taxpayers</p>
                        <ul>
                            <li>Income limitations apply</li>
                            <li>Guided preparation</li>
                            <li>Free for qualifying taxpayers</li>
                        </ul>
                        <a href="#" class="btn">Check Eligibility</a>
                    </div>

                    <div class="option-card">
                        <h4>Paper Filing</h4>
                        <p>Traditional paper form submission</p>
                        <ul>
                            <li>Download forms</li>
                            <li>Mail to processing center</li>
                            <li>Longer processing time</li>
                        </ul>
                        <a href="<?php echo $site_url; ?>/pages/forms/individual-forms.php" class="btn">Download
                            Forms</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
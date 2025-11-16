<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Individual Tax Forms</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Forms</a> / Individual Forms
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="forms-content">
                <h3>Common Individual Tax Forms</h3>
                <div class="forms-list">
                    <div class="form-item">
                        <h4>Form 1040 - Individual Income Tax Return</h4>
                        <p>Main tax form for individual filers</p>
                        <a href="#" class="btn-download">Download PDF</a>
                    </div>

                    <div class="form-item">
                        <h4>Form W-2 - Wage and Tax Statement</h4>
                        <p>Employer-provided wage information</p>
                        <a href="#" class="btn-download">Download PDF</a>
                    </div>

                    <div class="form-item">
                        <h4>Form 1099 Series</h4>
                        <p>Various information returns for non-employee compensation</p>
                        <a href="#" class="btn-download">View All 1099 Forms</a>
                    </div>

                    <div class="form-item">
                        <h4>Form 4868 - Application for Automatic Extension</h4>
                        <p>Request additional time to file your return</p>
                        <a href="#" class="btn-download">Download PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
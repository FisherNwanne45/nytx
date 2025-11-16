<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Business Tax Forms</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Forms</a> / Business Forms
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="forms-content">
                <h3>Common Business Tax Forms</h3>
                <div class="forms-list">
                    <div class="form-item">
                        <h4>Form 1120 - Corporation Income Tax Return</h4>
                        <p>For C corporations</p>
                        <a href="#" class="btn-download">Download PDF</a>
                    </div>

                    <div class="form-item">
                        <h4>Form 1120S - S Corporation Income Tax Return</h4>
                        <p>For S corporations</p>
                        <a href="#" class="btn-download">Download PDF</a>
                    </div>

                    <div class="form-item">
                        <h4>Form 1065 - Partnership Return</h4>
                        <p>For partnerships and LLCs</p>
                        <a href="#" class="btn-download">Download PDF</a>
                    </div>

                    <div class="form-item">
                        <h4>Form 941 - Employer's Quarterly Federal Tax Return</h4>
                        <p>Quarterly payroll tax reporting</p>
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
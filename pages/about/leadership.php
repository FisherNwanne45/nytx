<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Leadership</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">About</a> / Leadership
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="leadership-grid">
                <div class="leader-card">
                    <div class="leader-image">
                        <div class="image-placeholder">Photo</div>
                    </div>
                    <div class="leader-info">
                        <h3>John Smith</h3>
                        <p class="leader-title">Commissioner</p>
                        <p>With over 20 years of experience in public service and tax administration, John leads the NRA
                            with a focus on modernization and taxpayer service.</p>
                    </div>
                </div>

                <div class="leader-card">
                    <div class="leader-image">
                        <div class="image-placeholder">Photo</div>
                    </div>
                    <div class="leader-info">
                        <h3>Sarah Johnson</h3>
                        <p class="leader-title">Deputy Commissioner</p>
                        <p>Sarah oversees operations and technology implementation, driving digital transformation
                            across the organization.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Careers</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">About</a> / Careers
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="careers-intro">
                <h3>Join Our Team</h3>
                <p>Build a rewarding career while serving your country. The NRA offers competitive benefits,
                    professional development, and opportunities for advancement.</p>
            </div>

            <div class="job-listings">
                <h4>Current Openings</h4>
                <div class="job-card">
                    <h5>Tax Compliance Officer</h5>
                    <p><strong>Location:</strong> Headquarters</p>
                    <p><strong>Closing Date:</strong> <?php echo date('M j, Y', strtotime('+30 days')); ?></p>
                    <a href="#" class="btn">Apply Now</a>
                </div>

                <div class="job-card">
                    <h5>IT Specialist</h5>
                    <p><strong>Location:</strong> Regional Office</p>
                    <p><strong>Closing Date:</strong> <?php echo date('M j, Y', strtotime('+45 days')); ?></p>
                    <a href="#" class="btn">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
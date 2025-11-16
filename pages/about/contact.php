<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Contact Offices</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">About</a> / Contact
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="contact-grid">
                <?php foreach ($contact_info as $office): ?>
                    <div class="office-card">
                        <h3><?php echo $office['location']; ?> Office</h3>
                        <div class="contact-info">
                            <p><strong>Address:</strong> <?php echo $office['address']; ?></p>
                            <p><strong>Phone:</strong> <?php echo $office['phone']; ?></p>
                            <p><strong>Email:</strong> <?php echo $office['email']; ?></p>
                        </div>
                        <div class="office-hours">
                            <h4>Office Hours</h4>
                            <p>Monday - Friday: 8:30 AM - 4:30 PM</p>
                            <p>Saturday: 9:00 AM - 1:00 PM</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
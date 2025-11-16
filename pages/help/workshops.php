<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Tax Workshops</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Help</a> / Tax Workshops
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="workshops-content">
                <h3>Free Tax Education Workshops</h3>
                <div class="workshops-list">
                    <div class="workshop-item">
                        <h4>Small Business Tax Workshop</h4>
                        <p><strong>Date:</strong> <?php echo date('F j, Y', strtotime('+2 weeks')); ?></p>
                        <p><strong>Time:</strong> 6:00 PM - 8:00 PM</p>
                        <p><strong>Location:</strong> Virtual - Online</p>
                        <p>Learn about business deductions, record keeping, and tax planning strategies.</p>
                        <a href="#" class="btn">Register Now</a>
                    </div>

                    <div class="workshop-item">
                        <h4>Individual Tax Preparation</h4>
                        <p><strong>Date:</strong> <?php echo date('F j, Y', strtotime('+3 weeks')); ?></p>
                        <p><strong>Time:</strong> 10:00 AM - 12:00 PM</p>
                        <p><strong>Location:</strong> Main Office - Conference Room A</p>
                        <p>Understanding deductions, credits, and filing requirements for individuals.</p>
                        <a href="#" class="btn">Register Now</a>
                    </div>

                    <div class="workshop-item">
                        <h4>Retirement Tax Planning</h4>
                        <p><strong>Date:</strong> <?php echo date('F j, Y', strtotime('+4 weeks')); ?></p>
                        <p><strong>Time:</strong> 2:00 PM - 4:00 PM</p>
                        <p><strong>Location:</strong> Virtual - Online</p>
                        <p>Tax implications of retirement accounts and distribution strategies.</p>
                        <a href="#" class="btn">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
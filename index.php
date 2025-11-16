<?php
// index.php
require_once 'header.php';
?>

<main>
    <!-- Hero Slider -->
    <section class="slider">
        <div class="slide active" style="background-image: url('assets/images/tax-slider1.jpg');">
            <div class="slide-content">
                <h2>Tax Season is Here</h2>
                <p>File your tax return electronically for faster processing and quicker refunds. Deadline: April 15th.
                </p>
                <a href="<?php echo $site_url; ?>/pages/individuals/file-return.php" class="btn">File Your Return</a>
            </div>
        </div>
        <div class="slide" style="background-image: url('assets/images/tax-slider2.jpg');">
            <div class="slide-content">
                <h2>Understanding Your Tax Obligations</h2>
                <p>Comprehensive resources and guidance for individuals and businesses to meet their tax
                    responsibilities.</p>
                <a href="<?php echo $site_url; ?>/pages/help/faq.php" class="btn">Get Tax Help</a>
            </div>
        </div>
        <div class="slide" style="background-image: url('assets/images/tax-slider3.jpg');">
            <div class="slide-content">
                <h2>Business Tax Services</h2>
                <p>Streamlined solutions for corporate taxes, payroll reporting, and business compliance requirements.
                </p>
                <a href="<?php echo $site_url; ?>/pages/businesses/corporate-tax.php" class="btn">Business Services</a>
            </div>
        </div>
        <div class="slider-nav">
            <div class="slider-dot active"></div>
            <div class="slider-dot"></div>
            <div class="slider-dot"></div>
        </div>
    </section>

    <!-- Welcome Section - Full Width -->
    <section class="welcome-section bg-light">
        <div class="container">
            <div class="welcome-content">
                <h3>Welcome to the National Revenue Authority</h3>
                <p>The <?php echo $acronym; ?> is committed to administering the nation's tax laws fairly and
                    efficiently. Our mission is to provide top-quality service to help taxpayers meet their
                    responsibilities while enforcing the law with integrity and fairness to all.</p>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Quick Services Section -->
        <section class="content-section">
            <div class="section-header">
                <h3>Quick Services</h3>
                <p>Access our most popular services and tools</p>
            </div>
            <div class="card-container">
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14,2 14,8 20,8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                        </svg>
                    </div>
                    <div class="service-content">
                        <h4>File Your Return</h4>
                        <p>E-file your tax return securely online for faster processing and direct deposit refunds.</p>
                        <a href="<?php echo $site_url; ?>/pages/individuals/file-return.php" class="service-btn">Get
                            Started</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                    </div>
                    <div class="service-content">
                        <h4>Make a Payment</h4>
                        <p>Pay your tax balance securely online using various payment methods available.</p>
                        <a href="<?php echo $site_url; ?>/pages/services/payment-options.php" class="service-btn">Pay
                            Now</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 2L12 22"></path>
                            <path d="M17 5L9 12L17 19"></path>
                        </svg>
                    </div>
                    <div class="service-content">
                        <h4>Check Clearance Status</h4>
                        <p>Track your tax Clearance Status and get estimated deposit dates in real-time.</p>
                        <a href="<?php echo $site_url; ?>/pages/services/refund-status.php" class="service-btn">Check
                            Status</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tax Tools Section -->
        <section class="content-section">
            <div class="section-header">
                <h3>Interactive Tax Tools</h3>
                <p>Helpful calculators and tools to manage your taxes</p>
            </div>
            <div class="card-container equal-height">
                <div class="tool-card">
                    <div class="tool-image" style="background-image: url('assets/images/withholding-calculator.jpg');">
                        <div class="tool-overlay">
                            <h4>Tax Withholding Calculator</h4>
                        </div>
                    </div>
                    <div class="tool-content">
                        <p class="tool-description">Check if you're having the right amount of tax withheld from your
                            paycheck to avoid owing tax or receiving a large refund.</p>
                        <div class="tool-features">
                            <span class="feature-tag">Personalized calculation</span>
                            <span class="feature-tag">W-4 assistance</span>
                            <span class="feature-tag">Tax planning</span>
                        </div>
                        <a href="<?php echo $site_url; ?>/pages/tools/withholding-calculator.php"
                            class="tool-btn">Launch Calculator</a>
                    </div>
                </div>

                <div class="tool-card">
                    <div class="tool-image" style="background-image: url('assets/images/refund-tracker.jpg');">
                        <div class="tool-overlay">
                            <h4>Clearance Status Tracker</h4>
                        </div>
                    </div>
                    <div class="tool-content">
                        <div class="refund-preview">
                            <div class="refund-stat">
                                <div class="stat-number">21</div>
                                <div class="stat-label">Days Average</div>
                                <div class="stat-note">For e-file with direct deposit</div>
                            </div>
                        </div>
                        <p class="tool-description">Track the status of your tax refund and get estimated deposit dates.
                        </p>
                        <div class="tool-requirements">
                            <strong>Requirements:</strong> SSN, Filing Status, Refund Amount
                        </div>
                        <a href="<?php echo $site_url; ?>/pages/services/refund-status.php" class="tool-btn">Check Your
                            Refund</a>
                    </div>
                </div>

                <div class="tool-card">
                    <div class="tool-image" style="background-image: url('assets/images/tax-estimator.jpg');">
                        <div class="tool-overlay">
                            <h4>Tax Estimator</h4>
                        </div>
                    </div>
                    <div class="tool-content">
                        <p class="tool-description">Estimate your tax liability or refund for the current tax year based
                            on your income and deductions.</p>
                        <div class="tool-features">
                            <span class="feature-tag">Real-time calculation</span>
                            <span class="feature-tag">Multiple scenarios</span>
                            <span class="feature-tag">Tax saving tips</span>
                        </div>
                        <a href="<?php echo $site_url; ?>/pages/tools/tax-estimator.php" class="tool-btn">Start
                            Estimating</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest Updates Section -->
        <section class="content-section bg-light">
            <div class="section-header">
                <h3>Latest Tax Updates</h3>
                <p>Stay informed with the latest tax news and changes</p>
            </div>
            <div class="card-container">
                <div class="update-card">
                    <div class="update-image" style="background-image: url('assets/images/tax-law-update.jpg');"></div>
                    <div class="update-content">
                        <div class="update-badge new">New</div>
                        <h4>Tax Law Changes for <?php echo date('Y'); ?></h4>
                        <p>Important updates to tax brackets, standard deductions, and credits that may affect your
                            <?php echo date('Y'); ?> tax return.</p>
                        <div class="update-meta">
                            <span class="update-date"><?php echo date('M j, Y'); ?></span>
                            <span class="update-category">Individuals</span>
                        </div>
                        <a href="<?php echo $site_url; ?>/pages/help/tax-law.php" class="update-link">Read More</a>
                    </div>
                </div>

                <div class="update-card">
                    <div class="update-image" style="background-image: url('assets/images/business-tax.jpg');"></div>
                    <div class="update-content">
                        <div class="update-badge popular">Popular</div>
                        <h4>Small Business Tax Guide</h4>
                        <p>Comprehensive guide for small business owners covering deductions, credits, and compliance
                            requirements.</p>
                        <div class="update-meta">
                            <span class="update-date"><?php echo date('M j, Y', strtotime('-1 month')); ?></span>
                            <span class="update-category">Business</span>
                        </div>
                        <a href="<?php echo $site_url; ?>/pages/businesses/corporate-tax.php" class="update-link">Read
                            More</a>
                    </div>
                </div>

                <div class="update-card">
                    <div class="update-image" style="background-image: url('assets/images/tax-help.jpg');"></div>
                    <div class="update-content">
                        <h4>Free Tax Assistance Programs</h4>
                        <p>Learn about free tax preparation services available for eligible taxpayers including VITA and
                            TCE programs.</p>
                        <div class="update-meta">
                            <span class="update-date"><?php echo date('M j, Y', strtotime('-2 weeks')); ?></span>
                            <span class="update-category">Help</span>
                        </div>
                        <a href="<?php echo $site_url; ?>/pages/help/workshops.php" class="update-link">Read More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Important Dates Section -->
        <section class="content-section">
            <div class="dates-section">
                <div class="dates-header">
                    <h3>Important Tax Dates</h3>
                    <p>Mark your calendar with these key deadlines</p>
                </div>
                <div class="dates-grid">
                    <div class="date-card urgent">
                        <div class="date-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12,6 12,12 16,14"></polyline>
                            </svg>
                        </div>
                        <div class="date-content">
                            <div class="date-info">
                                <h5>Individual Tax Returns Due</h5>
                                <div class="date-display">April 15, <?php echo date('Y'); ?></div>
                                <p>Deadline for filing tax returns and paying any tax due</p>
                            </div>
                        </div>
                    </div>
                    <div class="date-card">
                        <div class="date-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                            </svg>
                        </div>
                        <div class="date-content">
                            <div class="date-info">
                                <h5>Q2 Estimated Tax Payment</h5>
                                <div class="date-display">June 17, <?php echo date('Y'); ?></div>
                                <p>Second quarter estimated tax payment deadline</p>
                            </div>
                        </div>
                    </div>
                    <div class="date-card">
                        <div class="date-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14,2 14,8 20,8"></polyline>
                            </svg>
                        </div>
                        <div class="date-content">
                            <div class="date-info">
                                <h5>Extension Filing Deadline</h5>
                                <div class="date-display">October 15, <?php echo date('Y'); ?></div>
                                <p>Final deadline for extension filers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<style>
    /* Optimized Spacing */
    .content-section {
        margin-bottom: 50px;
    }

    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-header h3 {
        color: var(--dark-blue);
        font-size: 2rem;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .section-header p {
        color: var(--text-gray);
        font-size: 1.1rem;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Full Width Welcome Section */
    .welcome-section {
        padding: 50px 0;
        background: var(--dark-blue);
        margin-bottom: 50px;
    }

    .welcome-content {
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }

    .welcome-content h3 {
        color: #fff;
        font-size: 2.2rem;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .welcome-content p {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #e3f5ffff;
    }

    /* Service Cards */
    .service-card {
        background: white;
        border-radius: 15px;
        padding: 30px 25px;
        text-align: center;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border: 1px solid #e2e8f0;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
    }

    .service-icon {
        width: 70px;
        height: 70px;
        margin: 0 auto 20px;
        background: linear-gradient(135deg, var(--dark-blue), var(--primary-blue));
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .service-content h4 {
        color: var(--dark-blue);
        font-size: 1.3rem;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .service-content p {
        color: var(--text-gray);
        margin-bottom: 20px;
        line-height: 1.6;
        font-size: 0.95rem;
    }

    .service-btn {
        display: inline-block;
        background: linear-gradient(135deg, var(--dark-blue), var(--primary-blue));
        color: white;
        padding: 12px 25px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }

    .service-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 84, 179, 0.3);
    }

    /* Equal Height Tool Cards */
    .equal-height {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        align-items: stretch;
    }

    .tool-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border: 1px solid #e2e8f0;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .tool-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
    }

    .tool-image {
        height: 160px;
        background-size: cover;
        background-position: center;
        position: relative;
        flex-shrink: 0;
    }

    .tool-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
        color: white;
        padding: 20px 20px 15px;
    }

    .tool-overlay h4 {
        margin: 0;
        font-size: 1.2rem;
        font-weight: 600;
    }

    .tool-content {
        padding: 25px 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .tool-description {
        color: var(--text-gray);
        margin-bottom: 15px;
        font-size: 0.95rem;
        line-height: 1.6;
        flex: 1;
    }

    .refund-preview {
        background: var(--light-gray);
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
        text-align: center;
    }

    .refund-stat {
        background: white;
        padding: 15px;
        border-radius: 8px;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary-blue);
        margin-bottom: 5px;
    }

    .stat-label {
        font-size: 0.9rem;
        color: var(--text-gray);
        margin-bottom: 3px;
    }

    .stat-note {
        font-size: 0.8rem;
        color: #888;
    }

    .tool-features {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        margin-bottom: 15px;
    }

    .feature-tag {
        background: var(--light-blue);
        color: var(--primary-blue);
        padding: 4px 10px;
        border-radius: 12px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .tool-requirements {
        font-size: 0.85rem;
        color: var(--text-gray);
        line-height: 1.4;
        margin-bottom: 15px;
        padding: 12px;
        background: #fff9e6;
        border-radius: 6px;
        border-left: 3px solid #f39c12;
    }

    .tool-btn {
        background: linear-gradient(135deg, var(--dark-blue), var(--primary-blue));
        color: white;
        text-decoration: none;
        padding: 12px 20px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-align: center;
        font-size: 0.95rem;
        display: block;
    }

    .tool-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 84, 179, 0.3);
    }

    /* Update Cards */
    .update-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border: 1px solid #e2e8f0;
    }

    .update-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
    }

    .update-image {
        height: 160px;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .update-content {
        padding: 25px 20px;
        position: relative;
    }

    .update-badge {
        position: absolute;
        top: -12px;
        right: 20px;
        background: #e74c3c;
        color: white;
        padding: 5px 12px;
        border-radius: 12px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .update-badge.popular {
        background: #f39c12;
    }

    .update-content h4 {
        color: var(--dark-blue);
        font-size: 1.2rem;
        margin-bottom: 12px;
        font-weight: 600;
    }

    .update-content p {
        color: var(--text-gray);
        margin-bottom: 15px;
        line-height: 1.6;
        font-size: 0.95rem;
    }

    .update-meta {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
        font-size: 0.85rem;
    }

    .update-date {
        color: #888;
    }

    .update-category {
        color: var(--primary-blue);
        font-weight: 500;
    }

    .update-link {
        color: var(--primary-blue);
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
    }

    .update-link:hover {
        color: var(--secondary-blue);
    }

    /* Dates Section */
    .dates-section {
        background: linear-gradient(135deg, var(--dark-blue), #3844ca);
        border-radius: 20px;
        padding: 40px 30px;
        color: white;
    }

    .dates-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .dates-header h3 {
        color: white;
        font-size: 2rem;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .dates-header p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1rem;
    }

    .dates-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
    }

    .date-card {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        padding: 25px 20px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .date-card:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-3px);
    }

    .date-card.urgent {
        background: rgba(231, 76, 60, 0.2);
        border: 1px solid rgba(231, 76, 60, 0.4);
    }

    .date-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        flex-shrink: 0;
    }

    .date-info h5 {
        color: white;
        margin-bottom: 6px;
        font-size: 1.1rem;
        font-weight: 600;
    }

    .date-display {
        color: #f39c12;
        font-weight: 700;
        font-size: 1rem;
        margin-bottom: 6px;
    }

    .date-info p {
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
        line-height: 1.4;
        margin: 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .welcome-section {
            padding: 40px 0;
            margin-bottom: 40px;
        }

        .welcome-content h3 {
            font-size: 1.8rem;
        }

        .section-header {
            margin-bottom: 30px;
        }

        .section-header h3 {
            font-size: 1.6rem;
        }

        .service-card,
        .tool-card,
        .update-card {
            padding: 25px 20px;
        }

        .dates-section {
            padding: 30px 20px;
        }

        .dates-grid {
            grid-template-columns: 1fr;
        }

        .date-card {
            flex-direction: column;
            text-align: center;
            gap: 12px;
        }

        .tool-image,
        .update-image {
            height: 140px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tool button interactions
        const toolButtons = document.querySelectorAll('.tool-btn');
        toolButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                // Links are now actual <a> tags, so no need for alerts
                // The href will handle navigation
            });
        });
    });
</script>

<?php
require_once 'footer.php';

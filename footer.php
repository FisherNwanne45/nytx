<?php
// footer.php
?>
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <div class="logo">
                    <img src="<?php echo $site_url; ?>/assets/images/logo.png" style="width: 80px;"
                        alt="<?php echo $acronym; ?> Logo" />
                </div>
                <div class="site-name"><?php echo $site_name; ?></div>
                <p>Fair Administration of Tax Laws</p>
            </div>
            <div class="footer-section">
                <h3>Quick Services</h3>
                <ul>
                    <li><a href="<?php echo $site_url; ?>/pages/individuals/file-return.php">File Your Return</a></li>
                    <li><a href="<?php echo $site_url; ?>/pages/services/payment-options.php">Make a Payment</a></li>
                    <li><a href="<?php echo $site_url; ?>/pages/services/refund-status.php">Check Clearance Status</a></li>
                    <li><a href="<?php echo $site_url; ?>/pages/forms/individual-forms.php">Download Forms</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Tax Information</h3>
                <ul>
                    <li><a href="<?php echo $site_url; ?>/pages/individuals/tax-rates.php">Tax Rates & Brackets</a></li>
                    <li><a href="<?php echo $site_url; ?>/pages/individuals/deductions.php">Deductions & Credits</a>
                    </li>
                    <li><a href="<?php echo $site_url; ?>/pages/businesses/corporate-tax.php">Business Taxes</a></li>
                    <li><a href="<?php echo $site_url; ?>/pages/help/tax-law.php">Tax Law Resources</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Help & Support</h3>
                <ul>
                    <li><a href="<?php echo $site_url; ?>/pages/help/faq.php">Frequently Asked Questions</a></li>
                    <li><a href="<?php echo $site_url; ?>/pages/about/contact.php">Contact Our Offices</a></li>
                    <li><a href="<?php echo $site_url; ?>/pages/help/workshops.php">Free Tax Workshops</a></li>
                    <li><a href="<?php echo $site_url; ?>/pages/compliance/appeals.php">Appeals Process</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo $acronym; ?> - <?php echo $site_name; ?>. All rights reserved.
                <span style="margin-left: 20px;"><a href="<?php echo $site_url; ?>/pages/about/privacy.php"
                        style="color: var(--text-gray);">Privacy Policy</a> |
                    <a href="<?php echo $site_url; ?>/pages/about/accessibility.php"
                        style="color: var(--text-gray);">Accessibility</a> |
                    <a href="<?php echo $site_url; ?>/pages/about/foia.php"
                        style="color: var(--text-gray);">FOIA</a></span>
            </p>
        </div>
    </div>
</footer>
<script>
    // Slider functionality
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.slider-dot');
        let currentSlide = 0;

        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            currentSlide = (n + slides.length) % slides.length;

            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        // Auto advance slides
        setInterval(() => {
            showSlide(currentSlide + 1);
        }, 5000);

        // Dot click events
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
            });
        });
    });
</script>
<script src="assets/js/main.js"></script>
<script>
    // Sidebar Expand/Collapse for Sections with Submenus
    const sidebar = document.querySelector(".sidebar nav ul");

    sidebar.addEventListener("click", function(e) {
        if (e.target.classList.contains("has-sub")) {
            e.preventDefault();
            const submenu = e.target.nextElementSibling;
            submenu.classList.toggle("open");
        }
    });

    // Mobile Sidebar Toggle
    const mobileToggle = document.createElement("div");
    mobileToggle.classList.add("mobile-menu-toggle");
    mobileToggle.innerHTML = "☰ Menu";
    document.body.prepend(mobileToggle);

    mobileToggle.addEventListener("click", function() {
        document.querySelector(".sidebar").classList.toggle("sidebar-open");
    });

    // Smooth Scroll for Internal Links
    const internalLinks = document.querySelectorAll('a[href^="#"]');
    internalLinks.forEach((link) => {
        link.addEventListener("click", function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute("href")).scrollIntoView({
                behavior: "smooth",
            });
        });
    });

    // Active Link Highlight based on current URL
    const currentPage = window.location.pathname.split("/").pop();
    const navLinks = document.querySelectorAll(".sidebar nav ul li a");

    navLinks.forEach((link) => {
        if (link.getAttribute("href").includes(currentPage)) {
            link.classList.add("active-link");
        }
    });

    // Fade-In Effect for Page Content
    window.addEventListener("load", () => {
        document.querySelector(".content-area").classList.add("fade-in");
    });

    // Withholding Calculator
    document.addEventListener("DOMContentLoaded", function() {
        // Withholding Calculator
        const withholdingForm = document.getElementById("withholdingForm");
        if (withholdingForm) {
            withholdingForm.addEventListener("submit", function(e) {
                e.preventDefault();

                const filingStatus = document.getElementById("filingStatus").value;
                const income = parseFloat(document.getElementById("income").value);
                const payPeriods = parseInt(document.getElementById("payPeriods").value);
                const currentWithholding =
                    parseFloat(document.getElementById("currentWithholding").value) || 0;

                // Simple tax calculation (simplified for demo)
                let tax = 0;
                if (income <= 11000) tax = income * 0.1;
                else if (income <= 44725) tax = 1100 + (income - 11000) * 0.12;
                else if (income <= 95375) tax = 5147 + (income - 44725) * 0.22;
                else tax = 16290 + (income - 95375) * 0.24;

                // Adjust for filing status
                if (filingStatus === "married_joint") tax *= 0.8;
                else if (filingStatus === "head_household") tax *= 0.85;

                const recommendedWithholding = (tax / payPeriods).toFixed(2);
                const difference = (recommendedWithholding - currentWithholding).toFixed(
                    2
                );
                const projectedResult = (difference * payPeriods).toFixed(2);

                document.getElementById(
                    "recommendedWithholding"
                ).textContent = `$${recommendedWithholding}`;
                document.getElementById(
                    "withholdingDifference"
                ).textContent = `$${difference}`;
                document.getElementById(
                    "projectedResult"
                ).textContent = `$${projectedResult}`;

                let advice = "";
                if (difference > 0) {
                    advice =
                        "Consider increasing your withholding to avoid owing tax at filing.";
                } else if (difference < 0) {
                    advice =
                        "You may be over-withholding. Consider adjusting to get more money in your paycheck.";
                } else {
                    advice = "Your current withholding appears to be accurate.";
                }

                document.getElementById("resultAdvice").textContent = advice;
                document.getElementById("results").style.display = "block";
            });
        }

        // Tax Estimator
        const taxEstimatorForm = document.getElementById("taxEstimatorForm");
        if (taxEstimatorForm) {
            taxEstimatorForm.addEventListener("submit", function(e) {
                e.preventDefault();

                const grossIncome = parseFloat(
                    document.getElementById("grossIncome").value
                );
                const standardDeduction = parseFloat(
                    document.getElementById("standardDeduction").value
                );
                const itemizedDeductions = parseFloat(
                    document.getElementById("itemizedDeductions").value
                );

                const deduction = Math.max(standardDeduction, itemizedDeductions);
                const taxableIncome = Math.max(0, grossIncome - deduction);

                // Simple tax calculation
                let tax = 0;
                if (taxableIncome <= 11000) tax = taxableIncome * 0.1;
                else if (taxableIncome <= 44725)
                    tax = 1100 + (taxableIncome - 11000) * 0.12;
                else if (taxableIncome <= 95375)
                    tax = 5147 + (taxableIncome - 44725) * 0.22;
                else tax = 16290 + (taxableIncome - 95375) * 0.24;

                const effectiveRate = ((tax / grossIncome) * 100).toFixed(1);

                document.getElementById(
                    "taxableIncome"
                ).textContent = `$${taxableIncome.toLocaleString()}`;
                document.getElementById(
                    "estimatedTax"
                ).textContent = `$${tax.toLocaleString()}`;
                document.getElementById(
                    "effectiveRate"
                ).textContent = `${effectiveRate}%`;
                document.getElementById("estimatorResults").style.display = "block";
            });
        }

        // Clearance Status Tracker
        const refundStatusForm = document.getElementById("refundStatusForm");
        if (refundStatusForm) {
            refundStatusForm.addEventListener("submit", function(e) {
                e.preventDefault();

                // Simulate Clearance Status check
                const statusApproved = document.getElementById("statusApproved");
                const statusSent = document.getElementById("statusSent");
                const currentStatus = document.getElementById("currentStatus");
                const depositDate = document.getElementById("depositDate");

                // Random status for demo
                const statuses = [{
                        status: "Return Received",
                        approved: false,
                        sent: false,
                        date: "Processing",
                    },
                    {
                        status: "Approved",
                        approved: true,
                        sent: false,
                        date: "Within 3 weeks",
                    },
                    {
                        status: "Refund Sent",
                        approved: true,
                        sent: true,
                        date: "Within 5-7 business days",
                    },
                ];

                const randomStatus =
                    statuses[Math.floor(Math.random() * statuses.length)];

                statusApproved.classList.toggle("active", randomStatus.approved);
                statusSent.classList.toggle("active", randomStatus.sent);
                currentStatus.textContent = randomStatus.status;
                depositDate.textContent = randomStatus.date;

                document.getElementById("refundResults").style.display = "block";
            });
        }

        // FAQ Functionality
        const faqQuestions = document.querySelectorAll(".faq-question");
        faqQuestions.forEach((question) => {
            question.addEventListener("click", function() {
                const answer = this.nextElementSibling;
                const isActive = answer.classList.contains("active");

                // Close all answers
                document.querySelectorAll(".faq-answer").forEach((ans) => {
                    ans.classList.remove("active");
                });
                document.querySelectorAll(".faq-question").forEach((q) => {
                    q.classList.remove("active");
                });

                // Open clicked answer if it wasn't active
                if (!isActive) {
                    answer.classList.add("active");
                    this.classList.add("active");
                }
            });
        });

        // FAQ Category Switching
        const categoryButtons = document.querySelectorAll(".category-btn");
        categoryButtons.forEach((button) => {
            button.addEventListener("click", function() {
                const category = this.getAttribute("data-category");

                // Update active button
                categoryButtons.forEach((btn) => btn.classList.remove("active"));
                this.classList.add("active");

                // Show selected category
                document.querySelectorAll(".faq-category").forEach((cat) => {
                    cat.classList.remove("active");
                });
                document
                    .querySelector(`.faq-category.${category}`)
                    .classList.add("active");
            });
        });
    });
</script>
</body>

</html>
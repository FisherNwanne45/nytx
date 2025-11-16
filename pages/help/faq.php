<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Help</a> / FAQ
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="faq-container">
                <div class="faq-categories">
                    <h3>Browse by Category</h3>
                    <div class="category-buttons">
                        <button class="category-btn active" data-category="filing">Filing</button>
                        <button class="category-btn" data-category="payment">Payments</button>
                        <button class="category-btn" data-category="refund">Refunds</button>
                        <button class="category-btn" data-category="business">Business</button>
                    </div>
                </div>

                <div class="faq-items">
                    <div class="faq-category filing active">
                        <h4>Filing Questions</h4>
                        <div class="faq-item">
                            <div class="faq-question">When is the tax filing deadline?</div>
                            <div class="faq-answer">The deadline for individual tax returns is typically April 15th each
                                year. If April 15th falls on a weekend or holiday, the deadline moves to the next
                                business day.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Can I get an extension to file my taxes?</div>
                            <div class="faq-answer">Yes, you can request an automatic 6-month extension. However, this
                                extends the time to file, not the time to pay any taxes due.</div>
                        </div>
                    </div>

                    <div class="faq-category payment">
                        <h4>Payment Questions</h4>
                        <div class="faq-item">
                            <div class="faq-question">What payment methods do you accept?</div>
                            <div class="faq-answer">We accept electronic payments, credit/debit cards, checks, and money
                                orders. Electronic payments are the fastest and most secure method.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
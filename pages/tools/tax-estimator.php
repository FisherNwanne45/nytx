<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Tax Estimator</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Tools</a> / Tax Estimator
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="estimator-container">
                <div class="estimator-form">
                    <h3>Estimate Your Tax</h3>
                    <form id="taxEstimatorForm">
                        <div class="form-section">
                            <h4>Income Information</h4>
                            <div class="form-group">
                                <label for="grossIncome">Gross Income</label>
                                <input type="number" id="grossIncome" required>
                            </div>
                        </div>

                        <div class="form-section">
                            <h4>Deductions</h4>
                            <div class="form-group">
                                <label for="standardDeduction">Standard Deduction</label>
                                <input type="number" id="standardDeduction" value="13850" readonly>
                            </div>
                            <div class="form-group">
                                <label for="itemizedDeductions">Itemized Deductions (if any)</label>
                                <input type="number" id="itemizedDeductions" value="0">
                            </div>
                        </div>

                        <button type="submit" class="btn-calculate">Estimate Tax</button>
                    </form>
                </div>

                <div class="estimator-results" id="estimatorResults" style="display: none;">
                    <h3>Tax Estimate</h3>
                    <div class="result-item">
                        <label>Taxable Income:</label>
                        <span id="taxableIncome">-</span>
                    </div>
                    <div class="result-item">
                        <label>Estimated Tax:</label>
                        <span id="estimatedTax">-</span>
                    </div>
                    <div class="result-item">
                        <label>Effective Tax Rate:</label>
                        <span id="effectiveRate">-</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
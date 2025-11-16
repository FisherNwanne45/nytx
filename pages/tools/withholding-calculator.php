<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Tax Withholding Calculator</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Tools</a> / Withholding Calculator
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="calculator-container">
                <div class="calculator-form">
                    <h3>Calculate Your Withholding</h3>
                    <form id="withholdingForm">
                        <div class="form-group">
                            <label for="filingStatus">Filing Status</label>
                            <select id="filingStatus" required>
                                <option value="">Select Status</option>
                                <option value="single">Single</option>
                                <option value="married_joint">Married Filing Jointly</option>
                                <option value="married_separate">Married Filing Separately</option>
                                <option value="head_household">Head of Household</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="income">Annual Income</label>
                            <input type="number" id="income" placeholder="Enter annual income" required>
                        </div>

                        <div class="form-group">
                            <label for="payPeriods">Pay Periods Per Year</label>
                            <select id="payPeriods">
                                <option value="52">Weekly (52)</option>
                                <option value="26">Bi-weekly (26)</option>
                                <option value="24">Semi-monthly (24)</option>
                                <option value="12">Monthly (12)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="currentWithholding">Current Withholding Per Pay Period</label>
                            <input type="number" id="currentWithholding" placeholder="Enter current withholding">
                        </div>

                        <button type="submit" class="btn-calculate">Calculate</button>
                    </form>
                </div>

                <div class="calculator-results" id="results" style="display: none;">
                    <h3>Results</h3>
                    <div class="result-item">
                        <label>Recommended Withholding:</label>
                        <span id="recommendedWithholding">-</span>
                    </div>
                    <div class="result-item">
                        <label>Difference:</label>
                        <span id="withholdingDifference">-</span>
                    </div>
                    <div class="result-item">
                        <label>Projected Refund/Balance:</label>
                        <span id="projectedResult">-</span>
                    </div>
                    <div class="result-advice" id="resultAdvice"></div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
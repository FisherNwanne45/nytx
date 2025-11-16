<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Tax Clearance Status Checker</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Services</a> / Tax Clearance Status
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="clearance-tracker">
                <!-- Tax Clearance Form Section -->
                <div class="tracker-form">
                    <div class="form-header">
                        <h3>Check Your Tax Clearance Status</h3>
                        <p>ENTER VALID TAX CLEARANCE INFORMATION ONLY BELOW TO VERIFY CLEARANCE STATUS</p>
                    </div>

                    <!-- Original form from clearance.php with same action and method -->
                    <form action="../../submit.php" method="post">
                        <div class="form-group">
                            <input type="text" name="search" class="form-control" placeholder="Enter Transaction ID"
                                required>
                            <input type="hidden" name="dropdown" value="cid" />
                        </div>

                        <button type="submit" name="submit" class="btn-track">CHECK STATUS</button>

                        <div class="form-footer">
                            <p><?php echo $site_name; ?> ONLINE - TAX CLEARANCE STATUS</p>
                        </div>
                    </form>
                </div>

                <!-- Information Section -->
                <div class="clearance-info">
                    <div class="info-grid">
                        <div class="info-card">
                            <h4>About Tax Clearance</h4>
                            <p>A Tax Clearance Certificate is an official document issued by the National Revenue
                                Authority confirming that a taxpayer has met all tax obligations for a specified period.
                            </p>
                            <ul>
                                <li>Required for government contracts</li>
                                <li>Necessary for business licensing</li>
                                <li>Mandatory for international tenders</li>
                                <li>Essential for loan applications</li>
                            </ul>
                        </div>

                        <div class="info-card">
                            <h4>Processing Time</h4>
                            <div class="processing-times">
                                <div class="time-item">
                                    <strong>Standard Processing:</strong>
                                    <span>5-7 working days</span>
                                </div>
                                <div class="time-item">
                                    <strong>Express Processing:</strong>
                                    <span>2-3 working days</span>
                                </div>
                                <div class="time-item">
                                    <strong>Emergency Processing:</strong>
                                    <span>24 hours</span>
                                </div>
                            </div>
                        </div>

                        <div class="info-card">
                            <h4>Required Documents</h4>
                            <ul>
                                <li>Completed application form</li>
                                <li>Business registration certificate</li>
                                <li>Tax identification number</li>
                                <li>Recent tax returns</li>
                                <li>Proof of tax payments</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .clearance-tracker {
        max-width: 800px;
        margin: 0 auto;
    }

    .tracker-form {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px;
        text-align: center;
    }

    .form-header h3 {
        color: var(--dark-blue);
        font-size: 1.8rem;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .form-header p {
        color: var(--text-gray);
        margin-bottom: 30px;
        font-size: 1.1rem;
    }

    .form-group {
        margin-bottom: 25px;
        text-align: left;
    }

    .form-control {
        width: 100%;
        padding: 15px 20px;
        border: 2px solid #e2e8f0;
        border-radius: 10px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary-blue);
        box-shadow: 0 0 0 3px rgba(0, 84, 179, 0.1);
    }

    .btn-track {
        background: linear-gradient(135deg, var(--dark-blue), var(--primary-blue));
        color: white;
        border: none;
        padding: 15px 40px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
        margin-bottom: 20px;
    }

    .btn-track:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 84, 179, 0.3);
    }

    .form-footer {
        border-top: 1px solid #e2e8f0;
        padding-top: 20px;
    }

    .form-footer p {
        color: var(--text-gray);
        font-size: 0.9rem;
        margin: 0;
    }

    /* Clearance Info Section */
    .clearance-info {
        margin-top: 60px;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .info-card {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        border-left: 4px solid var(--primary-blue);
    }

    .info-card h4 {
        color: var(--dark-blue);
        margin-bottom: 20px;
        font-size: 1.3rem;
        font-weight: 600;
    }

    .info-card p {
        color: var(--text-gray);
        margin-bottom: 15px;
        line-height: 1.6;
    }

    .info-card ul {
        list-style: none;
        padding: 0;
    }

    .info-card li {
        padding: 8px 0;
        border-bottom: 1px solid #eee;
        color: var(--text-gray);
        position: relative;
        padding-left: 20px;
    }

    .info-card li:before {
        content: '✓';
        position: absolute;
        left: 0;
        color: var(--primary-blue);
        font-weight: bold;
    }

    .info-card li:last-child {
        border-bottom: none;
    }

    .processing-times {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .time-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px;
        background: var(--light-gray);
        border-radius: 8px;
    }

    .time-item strong {
        color: var(--dark-gray);
    }

    .time-item span {
        color: var(--primary-blue);
        font-weight: 600;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .tracker-form {
            padding: 30px 20px;
        }

        .info-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<?php
require_once '../../footer.php';

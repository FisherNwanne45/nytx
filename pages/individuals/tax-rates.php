<?php
require_once '../../header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Tax Rates & Brackets</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / <a href="#">Individuals</a> / Tax Rates
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div class="tax-rates-content">
                <h3><?php echo date('Y'); ?> Tax Brackets</h3>

                <div class="rates-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Tax Rate</th>
                                <th>Single Filers</th>
                                <th>Married Filing Jointly</th>
                                <th>Head of Household</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10%</td>
                                <td>Up to $11,000</td>
                                <td>Up to $22,000</td>
                                <td>Up to $15,700</td>
                            </tr>
                            <tr>
                                <td>12%</td>
                                <td>$11,001 - $44,725</td>
                                <td>$22,001 - $89,450</td>
                                <td>$15,701 - $59,850</td>
                            </tr>
                            <tr>
                                <td>22%</td>
                                <td>$44,726 - $95,375</td>
                                <td>$89,451 - $190,750</td>
                                <td>$59,851 - $95,350</td>
                            </tr>
                            <tr>
                                <td>24%</td>
                                <td>$95,376 - $182,100</td>
                                <td>$190,751 - $364,200</td>
                                <td>$95,351 - $182,100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="standard-deductions">
                    <h4>Standard Deductions for <?php echo date('Y'); ?></h4>
                    <ul>
                        <li><strong>Single:</strong> $13,850</li>
                        <li><strong>Married Filing Jointly:</strong> $27,700</li>
                        <li><strong>Head of Household:</strong> $20,800</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
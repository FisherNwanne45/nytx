<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>Countries Overview</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/countries/overview.php">Countries</a> &rsaquo;
                Overview
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Global Economic Landscape</h3>
            <p>The <?php echo $acronym; ?> Countries Overview provides comprehensive analysis of 195 countries and
                territories, tracking their economic performance, trade patterns, and integration into the global
                economy. This section serves as a gateway to understanding national economic systems and their
                international connections.</p>
        </div>

        <div class="content-section">
            <h3>World Economic Indicators (2024)</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Global GDP</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Total:</strong> $105.5 trillion</p>
                        <p><strong>Growth Rate:</strong> 3.1%</p>
                        <p><strong>Per Capita:</strong> $13,200</p>
                        <p><strong>Largest Economy:</strong> United States ($27.4T)</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>International Trade</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Total Trade:</strong> $32.5 trillion</p>
                        <p><strong>Trade/GDP Ratio:</strong> 58%</p>
                        <p><strong>Top Exporter:</strong> China ($3.4T)</p>
                        <p><strong>Top Importer:</strong> United States ($3.2T)</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Economic Development</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Advanced Economies:</strong> 40 countries</p>
                        <p><strong>Emerging Markets:</strong> 45 countries</p>
                        <p><strong>Developing Economies:</strong> 110 countries</p>
                        <p><strong>Fastest Growing:</strong> Guyana (+37.2%)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Top 20 Economies by GDP (2024)</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Country</th>
                        <th>GDP (USD Trillions)</th>
                        <th>GDP Growth</th>
                        <th>Trade Balance</th>
                        <th>Main Export Sector</th>
                        <th>Global Rank</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>United States</td>
                        <td>$27.4</td>
                        <td>2.5%</td>
                        <td>-$891B</td>
                        <td>Services, Technology</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>China</td>
                        <td>$18.5</td>
                        <td>5.2%</td>
                        <td>+$535B</td>
                        <td>Manufacturing</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Germany</td>
                        <td>$4.6</td>
                        <td>0.2%</td>
                        <td>+$289B</td>
                        <td>Automotive, Machinery</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Japan</td>
                        <td>$4.2</td>
                        <td>1.2%</td>
                        <td>+$42B</td>
                        <td>Electronics, Automotive</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>India</td>
                        <td>$4.1</td>
                        <td>7.2%</td>
                        <td>-$189B</td>
                        <td>Services, Pharmaceuticals</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>United Kingdom</td>
                        <td>$3.5</td>
                        <td>0.8%</td>
                        <td>-$152B</td>
                        <td>Financial Services</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>France</td>
                        <td>$3.2</td>
                        <td>1.0%</td>
                        <td>-$85B</td>
                        <td>Aerospace, Luxury Goods</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>Italy</td>
                        <td>$2.3</td>
                        <td>0.7%</td>
                        <td>+$68B</td>
                        <td>Manufacturing, Fashion</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>Brazil</td>
                        <td>$2.1</td>
                        <td>2.9%</td>
                        <td>+$95B</td>
                        <td>Commodities, Agriculture</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Canada</td>
                        <td>$2.1</td>
                        <td>1.5%</td>
                        <td>+$25B</td>
                        <td>Energy, Natural Resources</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Regional Economic Performance</h3>
            <div style="background: var(--light-blue); padding: 20px; border-radius: 5px; margin: 20px 0;">
                <h4>2024 Economic Outlook by Region</h4>
                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-top: 15px;">
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Asia-Pacific</strong><br>
                        Growth: 4.5% | Trade: $12.7T | Top Performer: Vietnam
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>North America</strong><br>
                        Growth: 2.3% | Trade: $8.2T | Top Performer: United States
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Europe</strong><br>
                        Growth: 1.2% | Trade: $9.8T | Top Performer: Poland
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Latin America</strong><br>
                        Growth: 2.1% | Trade: $2.3T | Top Performer: Dominican Republic
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Country Classification Systems</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Classification</th>
                        <th>Number of Countries</th>
                        <th>Average GDP per Capita</th>
                        <th>Trade Openness</th>
                        <th>Major Organizations</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Advanced Economies</td>
                        <td>40</td>
                        <td>$48,200</td>
                        <td>65%</td>
                        <td>OECD, G7, EU</td>
                    </tr>
                    <tr>
                        <td>Emerging Markets</td>
                        <td>45</td>
                        <td>$12,500</td>
                        <td>55%</td>
                        <td>G20, BRICS, ASEAN</td>
                    </tr>
                    <tr>
                        <td>Developing Economies</td>
                        <td>75</td>
                        <td>$4,200</td>
                        <td>45%</td>
                        <td>UNCTAD, World Bank Groups</td>
                    </tr>
                    <tr>
                        <td>Least Developed</td>
                        <td>35</td>
                        <td>$1,100</td>
                        <td>35%</td>
                        <td>UN LDC Group, ACP</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Key Economic Trends by Development Stage</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Advanced Economies</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Services sector dominance (70-80% of GDP)</li>
                            <li>High digitalization and innovation</li>
                            <li>Aging populations and productivity challenges</li>
                            <li>Focus on green transition and sustainability</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Emerging Markets</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Rapid urbanization and industrialization</li>
                            <li>Growing middle class consumption</li>
                            <li>Infrastructure development needs</li>
                            <li>Digital leapfrogging opportunities</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Developing Economies</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Commodity dependence and price volatility</li>
                            <li>Youthful populations and demographic dividend</li>
                            <li>Infrastructure gaps and financing needs</li>
                            <li>Climate vulnerability and adaptation challenges</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Global Economic Integration Metrics</h3>
            <p>The <?php echo $acronym; ?> research tracks multiple dimensions of economic integration across countries:
            </p>

            <ul style="margin-left: 20px; margin-bottom: 20px;">
                <li><strong>Trade Integration:</strong> 58% of global GDP is traded internationally</li>
                <li><strong>Financial Integration:</strong> Cross-border capital flows equal 150% of global GDP</li>
                <li><strong>Production Integration:</strong> 70% of international trade involves global value chains
                </li>
                <li><strong>Digital Integration:</strong> 65% of world population uses the internet</li>
                <li><strong>Institutional Integration:</strong> 164 countries are WTO members</li>
            </ul>

            <p>Our analysis shows that countries with higher economic integration scores typically experience faster
                growth, greater stability, and better development outcomes, though the benefits must be managed to
                ensure inclusive distribution.</p>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>
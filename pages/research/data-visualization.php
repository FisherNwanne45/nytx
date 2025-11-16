<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>Data Visualization</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/research/data-visualization.php">Research</a> &rsaquo;
                Data Visualization
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Interactive Data Exploration</h3>
            <p>The <?php echo $acronym; ?> Data Visualization platform transforms complex trade and monetary data into interactive, insightful visualizations. Explore global trade patterns, economic trends, and policy impacts through our comprehensive visualization tools.</p>
        </div>

        <div class="content-section">
            <h3>Featured Visualizations</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Global Trade Flow Map</h4>
                    </div>
                    <div class="card-body">
                        <div id="tradeFlowMap" style="height: 200px; background: var(--light-gray); position: relative; margin-bottom: 15px;">
                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: var(--dark-gray);">
                                <div style="font-size: 14px; margin-bottom: 10px;">World Trade Flow Visualization</div>
                                <div style="display: flex; justify-content: center; gap: 10px; flex-wrap: wrap;">
                                    <div style="padding: 5px 10px; background: #e74c3c; color: white; border-radius: 3px; font-size: 12px;">Imports</div>
                                    <div style="padding: 5px 10px; background: #2ecc71; color: white; border-radius: 3px; font-size: 12px;">Exports</div>
                                    <div style="padding: 5px 10px; background: #3498db; color: white; border-radius: 3px; font-size: 12px;">Balance</div>
                                </div>
                            </div>
                            <!-- Simplified world map outline -->
                            <svg width="100%" height="100%" viewBox="0 0 800 400" style="position: absolute; top: 0; left: 0;">
                                <!-- Simplified continent shapes -->
                                <path d="M150,100 Q200,80 250,100 Q300,120 280,150 Q260,180 220,170 Q180,160 150,140 Z" fill="#3498db" fill-opacity="0.3" stroke="#2980b9" stroke-width="2" />
                                <path d="M400,120 Q450,100 500,120 Q550,140 520,170 Q490,200 450,190 Q410,180 380,160 Z" fill="#2ecc71" fill-opacity="0.3" stroke="#27ae60" stroke-width="2" />
                                <path d="M300,250 Q350,230 400,250 Q450,270 420,300 Q390,330 350,320 Q310,310 280,290 Z" fill="#e74c3c" fill-opacity="0.3" stroke="#c0392b" stroke-width="2" />

                                <!-- Trade flow lines -->
                                <line x1="200" y1="130" x2="420" y2="140" stroke="#e74c3c" stroke-width="3" stroke-dasharray="5,5" />
                                <line x1="450" y1="155" x2="320" y2="270" stroke="#2ecc71" stroke-width="3" />
                                <line x1="280" y1="280" x2="180" y2="150" stroke="#3498db" stroke-width="3" stroke-dasharray="5,5" />
                            </svg>
                        </div>
                        <p><strong>Description:</strong> Interactive map showing bilateral trade flows between countries with animated flow lines.</p>
                        <p><strong>Data Coverage:</strong> 195 countries, 1990-2023</p>
                        <p><strong>Key Features:</strong> Time slider, commodity filters, trade balance indicators</p>
                        <div style="display: flex; gap: 10px; margin-top: 15px;">
                            <a href="#" style="padding: 8px 15px; background: var(--primary-blue); color: white; text-decoration: none; border-radius: 4px; font-size: 0.9rem;">Explore</a>
                            <a href="#" style="padding: 8px 15px; background: var(--dark-blue); color: white; text-decoration: none; border-radius: 4px; font-size: 0.9rem;">Download Data</a>
                            <a href="#" style="padding: 8px 15px; background: var(--secondary-blue); color: white; text-decoration: none; border-radius: 4px; font-size: 0.9rem;">Embed</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Trade Policy Dashboard</h4>
                    </div>
                    <div class="card-body">
                        <div id="policyDashboard" style="height: 200px; background: var(--light-gray); position: relative; margin-bottom: 15px; padding: 15px;">
                            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; height: 100%;">
                                <div style="background: white; border-radius: 5px; padding: 10px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                    <div style="font-size: 24px; font-weight: bold; color: var(--primary-blue);">164</div>
                                    <div style="font-size: 12px; text-align: center;">WTO Members</div>
                                </div>
                                <div style="background: white; border-radius: 5px; padding: 10px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                    <div style="font-size: 24px; font-weight: bold; color: #e74c3c;">285</div>
                                    <div style="font-size: 12px; text-align: center;">Trade Measures</div>
                                </div>
                                <div style="background: white; border-radius: 5px; padding: 10px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                    <div style="font-size: 24px; font-weight: bold; color: #2ecc71;">45</div>
                                    <div style="font-size: 12px; text-align: center;">Active Agreements</div>
                                </div>
                                <div style="background: white; border-radius: 5px; padding: 10px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                    <div style="font-size: 24px; font-weight: bold; color: #f39c12;">12</div>
                                    <div style="font-size: 12px; text-align: center;">Disputes</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Description:</strong> Comprehensive dashboard tracking trade policy changes and their economic impacts.</p>
                        <p><strong>Data Coverage:</strong> 164 WTO members, 2015-2024</p>
                        <p><strong>Key Features:</strong> Policy database, impact assessment, trend analysis</p>
                        <div style="display: flex; gap: 10px; margin-top: 15px;">
                            <a href="#" style="padding: 8px 15px; background: var(--primary-blue); color: white; text-decoration: none; border-radius: 4px; font-size: 0.9rem;">Explore</a>
                            <a href="#" style="padding: 8px 15px; background: var(--dark-blue); color: white; text-decoration: none; border-radius: 4px; font-size: 0.9rem;">Download Data</a>
                            <a href="#" style="padding: 8px 15px; background: var(--secondary-blue); color: white; text-decoration: none; border-radius: 4px; font-size: 0.9rem;">Embed</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Supply Chain Network Analysis</h4>
                    </div>
                    <div class="card-body">
                        <div id="supplyChainNetwork" style="height: 200px; background: var(--light-gray); position: relative; margin-bottom: 15px;">
                            <svg width="100%" height="100%" viewBox="0 0 600 300" style="position: absolute; top: 0; left: 0;">
                                <!-- Nodes -->
                                <circle cx="100" cy="150" r="20" fill="#3498db" stroke="#2980b9" stroke-width="2" />
                                <circle cx="300" cy="100" r="15" fill="#2ecc71" stroke="#27ae60" stroke-width="2" />
                                <circle cx="300" cy="200" r="15" fill="#2ecc71" stroke="#27ae60" stroke-width="2" />
                                <circle cx="500" cy="150" r="20" fill="#e74c3c" stroke="#c0392b" stroke-width="2" />

                                <!-- Connections -->
                                <line x1="120" y1="150" x2="285" y2="100" stroke="#7f8c8d" stroke-width="2" />
                                <line x1="120" y1="150" x2="285" y2="200" stroke="#7f8c8d" stroke-width="2" />
                                <line x1="315" y1="100" x2="480" y2="150" stroke="#7f8c8d" stroke-width="2" />
                                <line x1="315" y1="200" x2="480" y2="150" stroke="#7f8c8d" stroke-width="2" />

                                <!-- Labels -->
                                <text x="100" y="190" text-anchor="middle" fill="#2c3e50" font-size="12">Supplier A</text>
                                <text x="300" y="80" text-anchor="middle" fill="#2c3e50" font-size="10">Manufacturer B</text>
                                <text x="300" y="230" text-anchor="middle" fill="#2c3e50" font-size="10">Manufacturer C</text>
                                <text x="500" y="190" text-anchor="middle" fill="#2c3e50" font-size="12">Consumer D</text>
                            </svg>
                        </div>
                        <p><strong>Description:</strong> Interactive network diagrams showing global value chain connections and dependencies.</p>
                        <p><strong>Data Coverage:</strong> 50 major industries, 2000-2023</p>
                        <p><strong>Key Features:</strong> Sector filters, risk analysis, dependency mapping</p>
                        <div style="display: flex; gap: 10px; margin-top: 15px;">
                            <a href="#" style="padding: 8px 15px; background: var(--primary-blue); color: white; text-decoration: none; border-radius: 4px; font-size: 0.9rem;">Explore</a>
                            <a href="#" style="padding: 8px 15px; background: var(--dark-blue); color: white; text-decoration: none; border-radius: 4px; font-size: 0.9rem;">Download Data</a>
                            <a href="#" style="padding: 8px 15px; background: var(--secondary-blue); color: white; text-decoration: none; border-radius: 4px; font-size: 0.9rem;">Embed</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Interactive Charts</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 20px; margin: 20px 0;">
                <div style="background: white; border-radius: 8px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h4 style="margin-bottom: 15px;">Top Exporting Countries (2023)</h4>
                    <div id="exportChart" style="height: 250px; position: relative;">
                        <div style="display: flex; flex-direction: column; gap: 10px;">
                            <!-- China -->
                            <div>
                                <div style="display: flex; justify-content: between; margin-bottom: 5px;">
                                    <span style="font-size: 14px;">China</span>
                                    <span style="font-size: 14px; font-weight: bold;">$3.4T</span>
                                </div>
                                <div style="width: 100%; background: #f0f0f0; border-radius: 5px; overflow: hidden;">
                                    <div style="width: 100%; height: 20px; background: #3498db;"></div>
                                </div>
                            </div>
                            <!-- USA -->
                            <div>
                                <div style="display: flex; justify-content: between; margin-bottom: 5px;">
                                    <span style="font-size: 14px;">United States</span>
                                    <span style="font-size: 14px; font-weight: bold;">$2.1T</span>
                                </div>
                                <div style="width: 100%; background: #f0f0f0; border-radius: 5px; overflow: hidden;">
                                    <div style="width: 62%; height: 20px; background: #2ecc71;"></div>
                                </div>
                            </div>
                            <!-- Germany -->
                            <div>
                                <div style="display: flex; justify-content: between; margin-bottom: 5px;">
                                    <span style="font-size: 14px;">Germany</span>
                                    <span style="font-size: 14px; font-weight: bold;">$1.8T</span>
                                </div>
                                <div style="width: 100%; background: #f0f0f0; border-radius: 5px; overflow: hidden;">
                                    <div style="width: 53%; height: 20px; background: #e74c3c;"></div>
                                </div>
                            </div>
                            <!-- Japan -->
                            <div>
                                <div style="display: flex; justify-content: between; margin-bottom: 5px;">
                                    <span style="font-size: 14px;">Japan</span>
                                    <span style="font-size: 14px; font-weight: bold;">$0.9T</span>
                                </div>
                                <div style="width: 100%; background: #f0f0f0; border-radius: 5px; overflow: hidden;">
                                    <div style="width: 26%; height: 20px; background: #f39c12;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="background: white; border-radius: 8px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h4 style="margin-bottom: 15px;">Trade Balance by Region (2023)</h4>
                    <div id="tradeBalanceChart" style="height: 250px; position: relative;">
                        <div style="display: flex; align-items: end; justify-content: space-around; height: 200px; padding: 0 20px;">
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <div style="height: 120px; width: 30px; background: #2ecc71; border-radius: 3px 3px 0 0;"></div>
                                <div style="margin-top: 10px; font-size: 12px; text-align: center;">Asia<br>+$485B</div>
                            </div>
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <div style="height: 80px; width: 30px; background: #2ecc71; border-radius: 3px 3px 0 0;"></div>
                                <div style="margin-top: 10px; font-size: 12px; text-align: center;">Europe<br>+$289B</div>
                            </div>
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <div style="height: 160px; width: 30px; background: #e74c3c; border-radius: 3px 3px 0 0;"></div>
                                <div style="margin-top: 10px; font-size: 12px; text-align: center;">N. America<br>-$865B</div>
                            </div>
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <div style="height: 40px; width: 30px; background: #2ecc71; border-radius: 3px 3px 0 0;"></div>
                                <div style="margin-top: 10px; font-size: 12px; text-align: center;">Middle East<br>+$325B</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Real-time Data Widgets</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin: 20px 0;">
                <div style="background: white; border-radius: 8px; padding: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center;">
                    <div style="font-size: 12px; color: #7f8c8d; margin-bottom: 5px;">USD/EUR Exchange Rate</div>
                    <div style="font-size: 24px; font-weight: bold; color: var(--primary-blue);">0.9200</div>
                    <div style="font-size: 12px; color: #e74c3c;">▼ -0.0020 (-0.22%)</div>
                </div>
                <div style="background: white; border-radius: 8px; padding: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center;">
                    <div style="font-size: 12px; color: #7f8c8d; margin-bottom: 5px;">Global Trade Volume</div>
                    <div style="font-size: 24px; font-weight: bold; color: var(--primary-blue);">$32.5T</div>
                    <div style="font-size: 12px; color: #2ecc71;">▲ +2.7% YoY</div>
                </div>
                <div style="background: white; border-radius: 8px; padding: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center;">
                    <div style="font-size: 12px; color: #7f8c8d; margin-bottom: 5px;">Container Freight Index</div>
                    <div style="font-size: 24px; font-weight: bold; color: var(--primary-blue);">1,245</div>
                    <div style="font-size: 12px; color: #e74c3c;">▼ -5.2% MoM</div>
                </div>
                <div style="background: white; border-radius: 8px; padding: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center;">
                    <div style="font-size: 12px; color: #7f8c8d; margin-bottom: 5px;">Oil Price (Brent)</div>
                    <div style="font-size: 24px; font-weight: bold; color: var(--primary-blue);">$82.45</div>
                    <div style="font-size: 12px; color: #2ecc71;">▲ +1.8% Today</div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Visualization Tools by Category</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Tool Category</th>
                        <th>Number of Visualizations</th>
                        <th>Data Frequency</th>
                        <th>Interactive Features</th>
                        <th>Export Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trade Flows</td>
                        <td>15</td>
                        <td>Monthly, Quarterly, Annual</td>
                        <td>Time slider, country filters, product breakdown</td>
                        <td>PNG, PDF, CSV, JSON</td>
                    </tr>
                    <tr>
                        <td>Economic Indicators</td>
                        <td>12</td>
                        <td>Quarterly, Annual</td>
                        <td>Comparison tools, trend analysis, forecasting</td>
                        <td>PNG, PDF, Excel</td>
                    </tr>
                    <tr>
                        <td>Policy Analysis</td>
                        <td>8</td>
                        <td>Annual, Event-based</td>
                        <td>Impact simulation, scenario analysis, policy tracking</td>
                        <td>PDF, PPT, CSV</td>
                    </tr>
                    <tr>
                        <td>Regional Integration</td>
                        <td>10</td>
                        <td>Annual</td>
                        <td>Regional comparisons, integration indices, progress tracking</td>
                        <td>PNG, PDF, JSON</td>
                    </tr>
                    <tr>
                        <td>Industry Analysis</td>
                        <td>14</td>
                        <td>Quarterly, Annual</td>
                        <td>Sector filters, value chain mapping, competitive analysis</td>
                        <td>PNG, PDF, Excel</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Custom Visualization Tools</h3>
            <div style="background: var(--light-blue); padding: 20px; border-radius: 5px; margin: 20px 0;">
                <h4>Build Your Own Visualizations</h4>
                <p>Create custom charts and dashboards using our interactive tools:</p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-top: 15px;">
                    <div style="padding: 15px; background: white; border-radius: 5px; text-align: center;">
                        <strong>Chart Builder</strong><br>
                        <a href="#" style="color: var(--primary-blue); text-decoration: none; font-size: 0.9rem;">Create Custom Charts</a>
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px; text-align: center;">
                        <strong>Dashboard Designer</strong><br>
                        <a href="#" style="color: var(--primary-blue); text-decoration: none; font-size: 0.9rem;">Build Dashboards</a>
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px; text-align: center;">
                        <strong>Map Customizer</strong><br>
                        <a href="#" style="color: var(--primary-blue); text-decoration: none; font-size: 0.9rem;">Customize Maps</a>
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px; text-align: center;">
                        <strong>Data Explorer</strong><br>
                        <a href="#" style="color: var(--primary-blue); text-decoration: none; font-size: 0.9rem;">Explore Datasets</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Data Sources and Methodology</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Primary Data Sources</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>World Trade Organization (WTO) statistics</li>
                            <li>United Nations COMTRADE database</li>
                            <li>International Monetary Fund (IMF) data</li>
                            <li>World Bank development indicators</li>
                            <li>National statistical agencies</li>
                            <li>Central bank reports</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Visualization Technologies</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>D3.js for custom interactive visualizations</li>
                            <li>Leaflet for mapping and geospatial data</li>
                            <li>Chart.js for standard chart types</li>
                            <li>Three.js for 3D visualizations</li>
                            <li>Python for data processing and analysis</li>
                            <li>R for statistical visualizations</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Quality Assurance</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Data validation and cleaning protocols</li>
                            <li>Cross-source verification</li>
                            <li>Regular updates and maintenance</li>
                            <li>User testing and feedback integration</li>
                            <li>Accessibility compliance (WCAG 2.1)</li>
                            <li>Mobile responsiveness testing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>API Access and Integration</h3>
            <div style="background: var(--light-gray); padding: 20px; border-radius: 5px; margin: 20px 0;">
                <h4>Developer Resources</h4>
                <p>Integrate our visualizations and data into your own applications and websites:</p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-top: 15px;">
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>REST API</strong><br>
                        Programmatic access to datasets and visualizations
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Embed Codes</strong><br>
                        Easy embedding of visualizations in websites
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Data Libraries</strong><br>
                        Client libraries for Python, R, and JavaScript
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Documentation</strong><br>
                        Comprehensive API documentation and examples
                    </div>
                </div>

                <p style="margin-top: 15px;">For API access and technical support, contact <a href="mailto:api@<?php echo $urlh; ?>" style="color: var(--primary-blue);">api@<?php echo $urlh; ?></a>.</p>
            </div>
        </div>
    </div>
</main>

<script>
    // Simple animation for the trade flow map
    document.addEventListener('DOMContentLoaded', function() {
        const tradeLines = document.querySelectorAll('#tradeFlowMap line');
        tradeLines.forEach((line, index) => {
            // Add animation delay
            line.style.animation = `dash 3s linear infinite ${index * 0.5}s`;
        });

        // Add CSS for the animation
        const style = document.createElement('style');
        style.textContent = `
        @keyframes dash {
            to {
                stroke-dashoffset: -20;
            }
        }
    `;
        document.head.appendChild(style);
    });
</script>

<?php
require_once '../../footer.php';
?>
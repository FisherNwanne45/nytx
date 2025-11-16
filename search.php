<?php
// search.php
require_once 'header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h2>Search Tax Information</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> / Search
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <div style="max-width: 600px; margin: 0 auto;">
                <form method="GET" action="<?php echo $site_url; ?>/search.php"
                    style="display: flex; gap: 10px; margin-bottom: 30px;">
                    <input type="text" name="q" value="<?php echo htmlspecialchars($_GET['q'] ?? ''); ?>"
                        placeholder="Enter search terms..."
                        style="flex: 1; padding: 12px; border: 1px solid #ddd; border-radius: 5px;" required>
                    <button type="submit"
                        style="padding: 12px 25px; background: var(--primary-blue); color: white; border: none; border-radius: 5px; cursor: pointer;">Search</button>
                </form>

                <?php
                if (isset($_GET['q']) && !empty(trim($_GET['q']))) {
                    $search_term = trim($_GET['q']);
                    echo '<h3>Search Results for: "' . htmlspecialchars($search_term) . '"</h3>';

                    // Simulated search results - in a real implementation, this would query a database
                    $simulated_results = [
                        [
                            'title' => 'Individual Tax Filing',
                            'url' => $site_url . '/pages/individuals/file-return.php',
                            'description' => 'Learn how to file your individual income tax return electronically or by mail.',
                            'category' => 'Individuals'
                        ],
                        [
                            'title' => 'Tax Deductions Guide',
                            'url' => $site_url . '/pages/individuals/deductions.php',
                            'description' => 'Comprehensive guide to available tax deductions and credits for individuals.',
                            'category' => 'Individuals'
                        ],
                        [
                            'title' => 'Business Tax Requirements',
                            'url' => $site_url . '/pages/businesses/corporate-tax.php',
                            'description' => 'Tax obligations and filing requirements for businesses and corporations.',
                            'category' => 'Businesses'
                        ],
                        [
                            'title' => 'Tax Forms & Publications',
                            'url' => $site_url . '/pages/forms/individual-forms.php',
                            'description' => 'Download current tax forms, instructions, and publications.',
                            'category' => 'Resources'
                        ],
                        [
                            'title' => 'Frequently Asked Questions',
                            'url' => $site_url . '/pages/help/faq.php',
                            'description' => 'Find answers to common tax questions and issues.',
                            'category' => 'Help'
                        ]
                    ];

                    $found_results = false;

                    foreach ($simulated_results as $result) {
                        // Simple text matching simulation
                        if (
                            stripos($result['title'], $search_term) !== false ||
                            stripos($result['description'], $search_term) !== false ||
                            stripos($result['category'], $search_term) !== false
                        ) {

                            if (!$found_results) {
                                echo '<div style="margin-top: 20px;">';
                                $found_results = true;
                            }

                            echo '<div style="background: white; padding: 20px; margin-bottom: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">';
                            echo '<h4 style="margin-bottom: 10px;"><a href="' . $result['url'] . '" style="color: var(--primary-blue); text-decoration: none;">' . $result['title'] . '</a></h4>';
                            echo '<p style="color: var(--text-gray); margin-bottom: 10px;">' . $result['description'] . '</p>';
                            echo '<div style="font-size: 0.9rem; color: #666;">Category: ' . $result['category'] . ' | <a href="' . $result['url'] . '" style="color: var(--primary-blue);">Learn More</a></div>';
                            echo '</div>';
                        }
                    }

                    if ($found_results) {
                        echo '</div>';
                    } else {
                        echo '<div style="text-align: center; padding: 40px; background: var(--light-gray); border-radius: 5px;">';
                        echo '<h4>No results found</h4>';
                        echo '<p>Try different keywords or browse our main categories:</p>';
                        echo '<div style="margin-top: 20px;">';
                        echo '<a href="' . $site_url . '/pages/individuals/file-return.php" class="btn" style="margin: 5px;">Individual Taxes</a>';
                        echo '<a href="' . $site_url . '/pages/businesses/corporate-tax.php" class="btn" style="margin: 5px;">Business Taxes</a>';
                        echo '<a href="' . $site_url . '/pages/help/faq.php" class="btn" style="margin: 5px;">Help & FAQ</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'footer.php';
?>
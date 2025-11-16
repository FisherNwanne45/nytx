<?php
// header.php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/x-icon" href="<?php echo $site_url; ?>/assets/images/logo.png">
    <title><?php echo $acronym; ?> - <?php echo $site_name; ?></title>
    <link rel="stylesheet" href="<?php echo $site_url; ?>/assets/css/style.css">
    <style>
        :root {
            --primary-blue: #0056b3;
            --secondary-blue: #007bff;
            --light-blue: #e9f0f7;
            --dark-blue: #262677;
            --header-gradient: linear-gradient(135deg, #262677 0%, #3844ca 100%);
            --topbar-blue: #1a1a5e;
            --footer-bg: #150925;
            --white: #ffffff;
            --light-gray: #f8f9fa;
            --dark-gray: #343a40;
            --text-gray: #555;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--white);
            color: var(--dark-gray);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Top Bar Styles */
        .top-bar {
            background-color: var(--topbar-blue);
            color: var(--white);
            padding: 8px 0;
            font-size: 0.9rem;
        }

        .top-bar-content {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .top-bar-links {
            display: flex;
            gap: 20px;
        }

        .top-bar-links a {
            color: var(--white);
            text-decoration: none;
            transition: opacity 0.3s;
            font-weight: 500;
        }

        .top-bar-links a:hover {
            opacity: 0.8;
        }

        .top-bar-links .mobile-only {
            display: none;
        }

        /* Header Styles */
        header {
            background: var(--header-gradient);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .header-main {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 0;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .logo {
            background-color: var(--white);
            color: var(--dark-blue);
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.5rem;
            border: 3px solid var(--white);
            flex-shrink: 0;
        }

        .logo img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .site-title {
            color: var(--white);
        }

        .site-name {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .site-tagline {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
            font-weight: 400;
        }

        /* Header Search */
        .header-search {
            flex-shrink: 0;
        }

        .search-form {
            display: flex;
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            min-width: 300px;
        }

        .search-form input {
            flex: 1;
            padding: 12px 20px;
            border: none;
            outline: none;
            font-size: 0.9rem;
            background: transparent;
        }

        .search-form button {
            padding: 12px 20px;
            background: var(--primary-blue);
            color: white;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
            font-weight: 600;
            white-space: nowrap;
        }

        .search-form button:hover {
            background: var(--secondary-blue);
        }

        /* Mobile Search Icon */
        .mobile-search-icon {
            display: none;
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.2rem;
            cursor: pointer;
            padding: 8px;
            margin-left: 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            align-items: center;
            justify-content: center;
        }

        .mobile-search-icon:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        /* Search Modal */
        .search-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 2000;
            align-items: center;
            justify-content: center;
        }

        .search-modal.active {
            display: flex;
        }

        .search-modal-content {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 90%;
            max-width: 500px;
            position: relative;
        }

        .search-modal-form {
            display: flex;
            gap: 10px;
        }

        .search-modal-form input {
            flex: 1;
            padding: 15px;
            border: 2px solid var(--primary-blue);
            border-radius: 5px;
            font-size: 1rem;
        }

        .search-modal-form button {
            padding: 15px 25px;
            background: var(--primary-blue);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
        }

        .close-search {
            position: absolute;
            top: 10px;
            right: 15px;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark-gray);
        }

        /* Header Actions */
        .header-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* Navigation - Reversed Colors */
        nav {
            background-color: var(--white);
            border-bottom: 3px solid var(--dark-blue);
        }

        nav ul li a {
            color: var(--dark-blue);
            text-decoration: none;
            padding: 15px 20px;
            display: block;
            transition: background-color 0.3s;
            font-weight: 500;
        }

        nav ul li a:hover {
            background-color: var(--dark-blue);
            color: var(--white);
        }

        /* Dropdown Menu */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: var(--white);
            min-width: 220px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            border: 1px solid var(--light-gray);
            border-radius: 0 0 5px 5px;
        }

        .dropdown-content a {
            color: var(--dark-gray);
            padding: 12px 16px;
            border-bottom: 1px solid #eee;
        }

        .dropdown-content a:hover {
            background-color: var(--dark-blue);
            color: var(--white);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Mobile Hamburger Icon */
        .hamburger-menu {
            display: none;
            cursor: pointer;
            padding: 10px;
            z-index: 1010;
            background: var(--white);
            border-radius: 5px;
            margin-left: 15px;
        }

        .hamburger-menu span {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px 0;
            background-color: var(--dark-blue);
            transition: all 0.3s ease-in-out;
        }

        .nav-wrapper {
            display: flex;
            justify-content: center;
        }

        nav ul {
            display: flex;
            list-style: none;
            justify-content: center;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            position: relative;
        }

        /* Main Content */
        main {
            min-height: 70vh;
            width: 100%;
            overflow-x: hidden;
        }

        .page-header {
            background: var(--header-gradient), url('<?php echo $site_url; ?>/assets/images/page-banner.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            text-align: center;
            margin-bottom: 40px;
        }

        .page-header h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .breadcrumb {
            color: rgba(255, 255, 255, 0.9);
        }

        .breadcrumb a {
            color: white;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .content-section {
            margin-bottom: 40px;
            width: 100%;
        }

        .content-section h3 {
            color: var(--dark-blue);
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
            font-size: 1.8rem;
        }

        /* Footer Styles */
        footer {
            background-color: var(--footer-bg);
            color: var(--white);
            padding: 50px 0 20px;
            border-top: 3px solid var(--primary-blue);
            width: 100%;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-logo {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .footer-logo .logo {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
            margin-bottom: 15px;
            background: var(--white);
        }

        .footer-logo .site-name {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--white);
        }

        .footer-logo p {
            color: rgba(255, 255, 255, 0.8);
        }

        .footer-section h3 {
            margin-bottom: 20px;
            font-size: 1.3rem;
            color: var(--white);
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: var(--white);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
        }

        .footer-bottom a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            margin: 0 10px;
        }

        .footer-bottom a:hover {
            color: var(--white);
        }

        /* Table Styles */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .data-table th {
            background-color: var(--primary-blue);
            color: white;
            text-align: left;
            padding: 12px 15px;
        }

        .data-table td {
            padding: 10px 15px;
            border-bottom: 1px solid #ddd;
        }

        .data-table tr:nth-child(even) {
            background-color: var(--light-gray);
        }

        .data-table tr:hover {
            background-color: var(--light-blue);
        }

        /* Card Layout */
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin: 30px 0;
        }

        .card {
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .card-img {
            height: 180px;
            background-color: var(--light-blue);
            background-size: cover;
            background-position: center;
        }

        .card-body {
            padding: 20px;
        }

        .card h4 {
            color: var(--dark-blue);
            margin-bottom: 10px;
            font-size: 1.3rem;
        }

        .card p {
            color: var(--text-gray);
            margin-bottom: 15px;
        }

        .card-link {
            color: var(--primary-blue);
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
        }

        .card-link:hover {
            text-decoration: underline;
        }

        /* Slider Styles */
        .slider {
            position: relative;
            height: 500px;
            overflow: hidden;
            margin-bottom: 40px;
            width: 100%;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
        }

        .slide.active {
            opacity: 1;
        }

        .slide-content {
            background: rgba(0, 84, 179, 0.85);
            color: white;
            padding: 40px;
            max-width: 600px;
            margin-left: 10%;
            border-radius: 5px;
        }

        .slide-content h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .slide-content p {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            background: white;
            color: var(--primary-blue);
            padding: 12px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn:hover {
            background: var(--light-blue);
            transform: translateY(-2px);
        }

        .slider-nav {
            position: absolute;
            bottom: 20px;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            margin: 0 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .slider-dot.active {
            background: white;
        }

        /* Mobile Responsive Styles */
        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .top-bar-content {
                justify-content: center;
            }

            .top-bar-links .desktop-only {
                display: flex;
            }

            .top-bar-links .mobile-only {
                display: none;
            }

            .header-main {
                flex-direction: row;
                justify-content: space-between;
                padding: 15px 0;
            }

            .logo-section {
                flex: 1;
            }

            .header-search {
                display: none;
            }

            .mobile-search-icon {
                display: flex;
            }

            .header-actions {
                gap: 10px;
            }

            .hamburger-menu {
                display: block;
                margin-left: 0;
            }

            nav {
                position: relative;
            }

            .nav-wrapper {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: var(--white);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                z-index: 999;
            }

            .nav-wrapper.active {
                display: flex;
            }

            nav ul {
                flex-direction: column;
                align-items: stretch;
                width: 100%;
            }

            nav ul li {
                width: 100%;
                border-bottom: 1px solid var(--light-gray);
            }

            nav ul li:last-child {
                border-bottom: none;
            }

            nav ul li a {
                padding: 12px 15px;
            }

            .dropdown-content {
                position: static;
                box-shadow: none;
                width: 100%;
                background-color: var(--light-blue);
                border-radius: 0;
            }

            .dropdown-content a {
                color: var(--dark-gray);
                padding-left: 30px;
                border-bottom: 1px solid var(--light-gray);
            }

            .dropdown:hover .dropdown-content {
                display: none;
            }

            .dropdown.open .dropdown-content {
                display: block;
            }

            .hamburger-menu.open span:nth-child(1) {
                transform: rotate(45deg) translate(5px, 5px);
            }

            .hamburger-menu.open span:nth-child(2) {
                opacity: 0;
            }

            .hamburger-menu.open span:nth-child(3) {
                transform: rotate(-45deg) translate(5px, -5px);
            }

            .slide-content {
                margin: 0 5%;
                padding: 20px;
                max-width: none;
            }

            .slide-content h2 {
                font-size: 1.8rem;
            }

            .slider {
                height: 400px;
            }

            .site-name {
                font-size: 1.5rem;
            }

            .site-tagline {
                font-size: 0.8rem;
            }

            .card-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 10px;
            }

            .top-bar-links {
                gap: 15px;
            }

            .slide-content h2 {
                font-size: 1.5rem;
            }

            .slide-content p {
                font-size: 1rem;
            }

            .btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }

            .content-section h3 {
                font-size: 1.5rem;
            }

            .logo {
                width: 60px;
                height: 60px;
            }

            .site-name {
                font-size: 1.3rem;
            }

            .site-tagline {
                font-size: 0.75rem;
            }

            .search-form input {
                padding: 10px 15px;
            }

            .search-form button {
                padding: 10px 15px;
            }

            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .footer-logo {
                align-items: center;
            }
        }
    </style>
</head>

<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="top-bar-links">
                    <a href="<?php echo $site_url; ?>/pages/services/online-filing.php" class="desktop-only">File
                        Online</a>
                    <a href="<?php echo $site_url; ?>/pages/services/payment-options.php" class="desktop-only">Make
                        a Payment</a>
                    <a href="<?php echo $site_url; ?>/pages/services/refund-status.php" class="desktop-only">Check
                        Clearance Status</a>
                    <a href="<?php echo $site_url; ?>/pages/services/refund-status.php" class="mobile-only">Check
                        Clearance Status</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Modal -->
    <div class="search-modal" id="searchModal">
        <div class="search-modal-content">
            <button class="close-search" id="closeSearch">&times;</button>
            <form method="GET" action="<?php echo $site_url; ?>/search.php" class="search-modal-form">
                <input type="text" name="q" placeholder="Search tax information..." required>
                <button type="submit">Search</button>
            </form>
        </div>
    </div>

    <header>
        <div class="container">
            <div class="header-main">
                <div class="logo-section">
                    <div class="logo-container">
                        <div class="logo">
                            <img src="<?php echo $site_url; ?>/assets/images/logo.png"
                                alt="<?php echo $acronym; ?> Logo" />
                        </div>
                        <div class="site-title">
                            <div class="site-name"><?php echo $site_name; ?></div>
                            <div class="site-tagline">Serving the Public with Integrity and Excellence</div>
                        </div>
                    </div>
                </div>

                <div class="header-actions">
                    <div class="header-search">
                        <form method="GET" action="<?php echo $site_url; ?>/search.php" class="search-form">
                            <input type="text" name="q" placeholder="Search tax information..." required>
                            <button type="submit">Search</button>
                        </form>
                    </div>

                    <button class="mobile-search-icon" id="mobileSearchIcon">
                        🔍
                    </button>

                    <div class="hamburger-menu" id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>

        <nav>
            <div class="container">
                <div class="nav-wrapper" id="nav-wrapper">
                    <ul>
                        <li><a href="<?php echo $site_url; ?>/index.php">Home</a></li>
                        <li class="dropdown" id="dropdown-about">
                            <a href="#">About</a>
                            <div class="dropdown-content">
                                <a href="<?php echo $site_url; ?>/pages/about/about-us.php">About NRA</a>
                                <!--<a href="<?php echo $site_url; ?>/pages/about/leadership.php">Leadership</a>-->
                                <a href="<?php echo $site_url; ?>/pages/about/careers.php">Careers</a>
                                <a href="<?php echo $site_url; ?>/pages/about/contact.php">Contact Offices</a>
                            </div>
                        </li>
                        <li class="dropdown" id="dropdown-individuals">
                            <a href="#">Individuals</a>
                            <div class="dropdown-content">
                                <a href="<?php echo $site_url; ?>/pages/individuals/file-return.php">File Your
                                    Return</a>
                                <a href="<?php echo $site_url; ?>/pages/individuals/tax-rates.php">Tax Rates &
                                    Brackets</a>
                                <a href="<?php echo $site_url; ?>/pages/individuals/deductions.php">Deductions &
                                    Credits</a>
                                <a href="<?php echo $site_url; ?>/pages/individuals/refunds.php">Refunds</a>
                            </div>
                        </li>
                        <li class="dropdown" id="dropdown-businesses">
                            <a href="#">Businesses</a>
                            <div class="dropdown-content">
                                <a href="<?php echo $site_url; ?>/pages/businesses/corporate-tax.php">Corporate
                                    Tax</a>
                                <a href="<?php echo $site_url; ?>/pages/businesses/payroll-taxes.php">Payroll
                                    Taxes</a>
                                <a href="<?php echo $site_url; ?>/pages/businesses/sales-tax.php">Sales Tax</a>
                                <a href="<?php echo $site_url; ?>/pages/businesses/business-deductions.php">Business
                                    Deductions</a>
                            </div>
                        </li>
                        <li class="dropdown" id="dropdown-forms">
                            <a href="#">Forms & Publications</a>
                            <div class="dropdown-content">
                                <a href="<?php echo $site_url; ?>/pages/forms/individual-forms.php">Individual
                                    Forms</a>
                                <a href="<?php echo $site_url; ?>/pages/forms/business-forms.php">Business Forms</a>
                                <a href="<?php echo $site_url; ?>/pages/forms/publications.php">Publications</a>
                                <a href="<?php echo $site_url; ?>/pages/forms/instructions.php">Instructions</a>
                            </div>
                        </li>
                        <li class="dropdown" id="dropdown-help">
                            <a href="#">Help & Resources</a>
                            <div class="dropdown-content">
                                <a href="<?php echo $site_url; ?>/pages/help/faq.php">FAQ</a>
                                <a href="<?php echo $site_url; ?>/pages/help/tax-tools.php">Tax Tools</a>
                                <a href="<?php echo $site_url; ?>/pages/help/tax-law.php">Tax Law Resources</a>
                                <a href="<?php echo $site_url; ?>/pages/help/workshops.php">Tax Workshops</a>
                            </div>
                        </li>
                        <li class="dropdown" id="dropdown-compliance">
                            <a href="#">Compliance</a>
                            <div class="dropdown-content">
                                <a href="<?php echo $site_url; ?>/pages/compliance/audits.php">Audits &
                                    Examinations</a>
                                <a href="<?php echo $site_url; ?>/pages/compliance/appeals.php">Appeals</a>
                                <a href="<?php echo $site_url; ?>/pages/compliance/collections.php">Collections</a>
                                <a href="<?php echo $site_url; ?>/pages/compliance/voluntary-disclosure.php">Voluntary
                                    Disclosure</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hamburger = document.getElementById('hamburger');
            const navWrapper = document.getElementById('nav-wrapper');
            const dropdowns = document.querySelectorAll('.dropdown');
            const mobileSearchIcon = document.getElementById('mobileSearchIcon');
            const searchModal = document.getElementById('searchModal');
            const closeSearch = document.getElementById('closeSearch');

            // 1. Toggle mobile menu
            hamburger.addEventListener('click', function() {
                navWrapper.classList.toggle('active');
                hamburger.classList.toggle('open');
            });

            // 2. Toggle mobile dropdown menus
            dropdowns.forEach(dropdown => {
                const link = dropdown.querySelector('a');
                // We only want to enable this for small screens (mobile)
                link.addEventListener('click', function(e) {
                    if (window.innerWidth <= 768) {
                        // Prevent the link from navigating if it's the dropdown toggle itself
                        if (link.getAttribute('href') === '#') {
                            e.preventDefault();
                        }

                        // Close other open dropdowns
                        dropdowns.forEach(otherDropdown => {
                            if (otherDropdown !== dropdown) {
                                otherDropdown.classList.remove('open');
                            }
                        });

                        // Toggle the clicked dropdown
                        dropdown.classList.toggle('open');
                    }
                });
            });

            // 3. Search modal functionality
            mobileSearchIcon.addEventListener('click', function() {
                searchModal.classList.add('active');
            });

            closeSearch.addEventListener('click', function() {
                searchModal.classList.remove('active');
            });

            // Close modal when clicking outside
            searchModal.addEventListener('click', function(e) {
                if (e.target === searchModal) {
                    searchModal.classList.remove('active');
                }
            });

            // Optional: Close menu when resizing back to desktop
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    navWrapper.classList.remove('active');
                    hamburger.classList.remove('open');
                    // Ensure all dropdowns are closed when returning to desktop view
                    dropdowns.forEach(dropdown => {
                        dropdown.classList.remove('open');
                    });
                }
            });
        });
    </script>
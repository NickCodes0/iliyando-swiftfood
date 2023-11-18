<!DOCTYPE html>
<html lang="de">
    
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- Custom Styles -->
<link href="/assets/css/sidebar.css" rel="stylesheet" crossorigin="anonymous">
<link href="/assets/css/main.css" rel="stylesheet" crossorigin="anonymous">

<!-- Dark Mode Styles -->
<link href="/assets/css/darkmode.css" rel="stylesheet" crossorigin="anonymous">

<body id="body-pd">

    <header class="header" id="header">
        <div class="header_toggle">
            <i class="fas fa-arrow-right fa-icon" style="color: black; font-size: 20px;" id="header-toggle"></i><span style="font-size: 18px; color: black; font-weight: bold;"></span>
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <i class="fa-solid fa-utensils" style="color: white; font-size: 20px;"></i><span class="nav_logo-name">Iliyando SwiftFood</span>
                </a>
                <div class="nav_list">
                    <a href="#food_list" class="nav_link active" onclick="loadContent('/assets/php/sites/user/food_list.php', 'food_list')">
                        <i class="fa-solid fa-bowl-food" style="color: white; font-size: 20px;"></i><span class="nav_name">Essen</span>
                    </a>
                    <a href="#discounts" class="nav_link" onclick="loadContent('/assets/php/sites/user/disconts_list.php', 'discounts')">
                        <i class="fa-solid fa-tags" style="color: white; font-size: 20px;"></i><span class="nav_name">Angebote</span>
                    </a>
                    <a href="#buy_history" class="nav_link" onclick="loadContent('/assets/php/sites/user/buy_history.php', 'buy_history')">
                        <i class="fa-solid fa-clock-rotate-left" style="color: white; font-size: 20px;"></i><span class="nav_name">Bestellverlauf</span>
                    </a>
                    <a href="#shopping_cart" class="nav_link" onclick="loadContent('/assets/php/sites/user/shopping_cart.php', 'shopping_cart')">
                        <i class="fa-solid fa-cart-shopping" style="color: white; font-size: 20px;"></i><span class="nav_name">Warenkorb</span>
                    </a>

                    <a href="#account_settings" class="nav_link" onclick="loadContent('/assets/php/sites/user/account_settings.php', 'account_settings')">
                        <i class="fa-solid fa-user" style="color: white; font-size: 20px;"></i><span class="nav_name">Konto</span>
                    </a>
                    <!-- Dark Mode Toggle Button -->
                    <a class="darkmode_a" id="dark-mode-toggle" onclick="toggleDarkMode()" style="cursor: pointer; align-items: center;">
                        <i id="dark-mode-icon" class="fa-solid fa-moon" style="color: white; font-size: 20px;"></i>
                        <span class="nav_name">Dark Mode</span>
                    </a>
                </div>
            </div>
            <a href="?logout" class="nav_link">
                <i class="fa-solid fa-right-from-bracket" style="color: white; font-size: 20px;"></i><span class="nav_name">Abmelden</span>
            </a>
        </nav>
    </div>

    <div id="content-container">
        <!-- Hier wird der dynamische Inhalt geladen -->
    </div>

    <!-- Optional: Lade-Spinner -->
    <div class="d-flex justify-content-center">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Lädt...</span>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/494837917c.js" crossorigin="anonymous"></script>
    <script src="/assets/js/sidebar.js"></script>
    <script src="/assets/js/main.js"></script>
</body>

</html>
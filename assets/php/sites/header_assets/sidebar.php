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
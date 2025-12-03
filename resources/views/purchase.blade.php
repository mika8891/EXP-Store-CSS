<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXP Game Store - Purchase</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/storefront.css">
    <link rel="stylesheet" href="css/purchase.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- HEADER (same as storefront) -->
    <header class="header">
        <h1 class="logo">
            <span class="logo-letter">E</span><span class="logo-x">X</span><span class="logo-letter">P</span>
            <span class="store-text"> GAME STORE</span>
        </h1>

        <div class="header-icons">
            <div class="cart-icon"></div>
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <button class="search-btn"></button>
            </div>
        </div>
    </header>

    <!-- PURCHASE PAGE HTML -->
<section class="purchase-page">
    <h2 class="section-title">YOUR CART</h2>

    <!-- Cart Item Panel -->
    <div class="cart-item">
        <div class="cart-item-panel">
            <!-- Game Poster -->
            <img src="css/assets/game1.jpg" alt="Game Poster" class="game-poster">

            <!-- Game Details -->
            <div class="game-details">
                <div class="title-row">
                    <h3 class="game-title">Game Title</h3>

                    <div class="platform-icons">
                        <img src="css/assets/windows.png" alt="Windows" class="platform">
                        <img src="css/assets/apple.png" alt="Apple" class="platform">
                    </div>
                </div>
            </div>
            <!-- Price and Remove Button -->
            <div class="price-controls">
                <p class="price">₱1,499</p>
                
                <div class="remove-controls">
                    <button class="remove">Remove</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Subtotal & Total -->
    <div class="totals">

        <div class="subtotal-row">
            <span>Subtotal:</span>
            <span>₱1,499</span>
        </div>

        <div class="totals-divider"></div>

        <div class="total-row">
            <span>Total (incl. VAT):</span>
            <span>₱1,649</span>
        </div>
        <!-- VAT note under the total, left aligned -->
        <div class="vat-note">All prices include VAT where applicable</div>
    </div>


    <!-- Purchase Button -->
    <button class="purchase-btn">Purchase</button>
</section>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXP Game Store</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/storefront.css">
</head>
<body>

    <!-- HEADER -->
    <header class="header">
        <h1 class="logo">
            <span class="logo-letter">E</span><span class="logo-x">X</span><span class="logo-letter">P</span>
            <span class="store-text"> GAME STORE</span>
        </h1>

        <!-- Icons on top right -->
        <div class="header-icons">
            <div class="cart-icon"></div>

            <div class="search-bar">
                <input type="text" placeholder="Find a game...">
                <button class="search-btn"></button>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="storefront">

        <section class="featured-section">

        <h2 class="featured-title">FEATURED GAMES</h2>

        <!-- MAIN GAME BANNER -->
        <div class="banner-container">
            <img id="banner-image" class="banner-img">

            <!-- Overlay Box -->
            <div class="banner-overlay">
                <img id="banner-poster" class="banner-poster">
                <h3 id="banner-title" class="banner-title"></h3>
            </div>
        </div>

        <!-- PREVIEW THUMBNAILS -->
        <div class="preview-row">

            <div class="preview-box" 
                 data-banner="css/assets/gamebanner_placeholder.jpg" 
                 data-poster="css/assets/game1.jpg" 
                 data-title="Game 1"></div>

            <div class="preview-box" 
                 data-banner="css/assets/gamebanner_placeholder2.jpg" 
                 data-poster="css/assets/game2.jpg" 
                 data-title="Game 2"></div>

            <div class="preview-box" 
                 data-banner="css/assets/gamebanner_placeholder3.webp" 
                 data-poster="css/assets/game3.jpg" 
                 data-title="Game 3"></div>

            <div class="preview-box"
                 data-banner="css/assets/gamebanner_placeholder4.webp" 
                 data-poster="css/assets/game4.jpg" 
                 data-title="Game 4"></div>

            <div class="preview-box" 
                 data-banner="css/assets/gamebanner_placeholder5.jpg" 
                 data-poster="css/assets/game5.png" 
                 data-title="Game 5"></div>

            </div>
        </section>


        <!-- Popular Games Section -->
        <section class="popular-games">
            <h2 class="section-title">POPULAR GAMES</h2>

            <div class="games-container">
                <div class="games-list">
                    <div class="game-card-wrapper">
                        <div class="game-card">
                            <img src="css/assets/game1.jpg" alt="Game 1">
                        </div>
                    </div>

                    <div class="game-card-wrapper">
                        <div class="game-card">
                            <img src="css/assets/game2.jpg" alt="Game 2">
                        </div>
                    </div>

                    <div class="game-card-wrapper">
                        <div class="game-card">
                            <img src="css/assets/game3.jpg" alt="Game 3">
                        </div>
                    </div>

                    <div class="game-card-wrapper">
                        <div class="game-card">
                            <img src="css/assets/game4.jpg" alt="Game 4">
                        </div>
                    </div>

                    <div class="game-card-wrapper">
                        <div class="game-card">
                            <img src="css/assets/game5.png" alt="Game 5">
                        </div>
                    </div>

                </div>
            </div>


        <!-- Browse by Category Section -->
        <section class="browse-category">
            <h2 class="section-title">BROWSE BY CATEGORY</h2>
            <div class="category-list">
                <div class="category-card"><span>Survival</span></div>
                <div class="category-card"><span>Role-Playing</span></div>
                <div class="category-card"><span>Action</span></div>
                <div class="category-card"><span>Casual</span></div>
                <div class="category-card"><span>Strategy</span></div>
            </div>
        </section>

        <!-- Games on Sale Section -->
        <section class="games-on-sale">
            <h2 class="section-title">GAMES ON SALE</h2>

            <div class="sale-game-list">
                
                <div class="sale-card-wrapper">
                    <div class="sale-game-card">
                        <img src="css/assets/game1.jpg" alt="Game 1" class="sale-game-poster">
                        <div class="sale-tag"></div>
                    </div>
                </div>

                <div class="sale-card-wrapper">
                    <div class="sale-game-card">
                        <img src="css/assets/game2.jpg" alt="Game 2" class="sale-game-poster">
                        <div class="sale-tag"></div>
                    </div>
                </div>

                <div class="sale-card-wrapper">
                    <div class="sale-game-card">
                        <img src="css/assets/game3.jpg" alt="Game 3" class="sale-game-poster">
                        <div class="sale-tag"></div>
                    </div>
                </div>
                
                <div class="sale-card-wrapper">
                    <div class="sale-game-card">
                        <img src="css/assets/game4.jpg" alt="Game 4" class="sale-game-poster">
                        <div class="sale-tag"></div>
                    </div>
                </div>

                <div class="sale-card-wrapper">
                    <div class="sale-game-card">
                        <img src="css/assets/game5.png" alt="Game 5" class="sale-game-poster">
                        <div class="sale-tag"></div>
                    </div>
                </div>    

            </div>
        </section>
    </main>

    <script>
    document.querySelectorAll('.preview-box').forEach(box => {
        box.addEventListener('mouseover', () => {
            // Get the banner, poster, and title elements
            const bannerImg = document.getElementById('banner-image');
            const bannerPoster = document.getElementById('banner-poster');
            const bannerTitle = document.getElementById('banner-title');

            // Replace them with the hovered box data
            bannerImg.src = box.getAttribute('data-banner');
            bannerPoster.src = box.getAttribute('data-poster');
            bannerTitle.textContent = box.getAttribute('data-title');
        });
    });

    const previews = document.querySelectorAll('.preview-box');
    const bannerImg = document.getElementById('banner-image');
    const bannerPoster = document.getElementById('banner-poster');
    const bannerTitle = document.getElementById('banner-title');
   
    // Function to set banner
    function setBanner(preview) {
        bannerImage.src = preview.dataset.banner;
        bannerPoster.src = preview.dataset.poster;
        bannerTitle.textContent = preview.dataset.title;
    }

    // Set default banner to the first preview dynamically
    if (previews.length > 0) {
        setBanner(previews[0]);
    }

    // Update banner on hover
    previews.forEach(preview => {
        preview.addEventListener('mouseenter', () => setBanner(preview));
    });

    
    // Add fade class initially
    [bannerImg, bannerPoster, bannerTitle].forEach(el => el.classList.add('fade', 'show'));

    document.querySelectorAll('.preview-box').forEach(box => {
        box.addEventListener('mouseover', () => {

            // Fade OUT
            [bannerImg, bannerPoster, bannerTitle].forEach(el => el.classList.remove('show'));

            setTimeout(() => {
                // Swap content once fade-out finishes
                bannerImg.src = box.getAttribute('data-banner');
                bannerPoster.src = box.getAttribute('data-poster');
                bannerTitle.textContent = box.getAttribute('data-title');

                // Fade IN
                [bannerImg, bannerPoster, bannerTitle].forEach(el => {
                setTimeout(() => el.classList.add('show'), 10);
            });

        }, 200); // match fade-out speed
    });
});
</script>
</body>
</html>

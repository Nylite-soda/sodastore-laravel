<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SODA Store</title>
    <link rel="icon" type="image" href="images/soda_logo.png">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="styles/all-shared.css" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./shop/styles/shop.css">
</head>
<body>
    <nav class="navbar flex js-navbar"></nav>

    <div class="shop-header js-shop-header flex"></div>

    <main>
        <section class="banner">
            <div class="carousel">
                <img class="banner-img" src="images/Drag-kitchen products.png" alt="">
                <img class="banner-img" src="images/Drag-washing products.png" alt="">
                <img class="banner-img" src="images/Drag-Girls products.png" alt="">
            </div>
            <button class="prev-btn">&lt;</button>
            <button class="next-btn">&gt;</button>
            <div class="indicators">
                <span class="dot active" data-index="0"></span>
                <span class="dot" data-index="1"></span>
                <span class="dot" data-index="2"></span>
            </div>
        </section>
        <section class="today-deals">
            <div class="header-strip">
                <h2 class="header-text">Today's Deals</h2>
                <a class="see-all-link" href="{{ route('shop') }}">See All</a>
            </div>
            <div class="today-deals-products flex">
                <div class="today-deals-products-grid js-today-deals-products-grid"></div>
            </div>
        </section>
        
        <section class="top-picks">
          <div class="header-strip">
            <h2 class="header-text">Top Picks for You</h2>
            <a class="see-all-link" href="{{ route('shop') }}">See All</a>
          </div>
          <div class="top-picks-products flex">
              <div class="top-picks-products-grid js-top-picks-products-grid"></div>
          </div>
        </section>
    </main>

    <footer class="flex js-footer"></footer>
    
    <script type="module" src="./shop/scripts/shop.js"></script>
</body>
</html>
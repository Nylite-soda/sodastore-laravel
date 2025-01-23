
import { products } from "../../data/products.js";
import { addToCart } from "../../data/cart.js";
import { renderNavBarandFooter, renderProducts, renderStoreHeader } from "./utils/rendering.js";


renderNavBarandFooter();
renderStoreHeader();

const todayDealsDisplayGrid = document.querySelector(".js-today-deals-products-grid");
if (todayDealsDisplayGrid){ renderProducts(8, todayDealsDisplayGrid);}

const topPicksDisplayGrid = document.querySelector(".js-top-picks-products-grid");
if (topPicksDisplayGrid){renderProducts(16, topPicksDisplayGrid);}

const allProductsDisplayGrid = document.querySelector(".js-shop-products-grid");
if (allProductsDisplayGrid){renderProducts(products.length, allProductsDisplayGrid);}

const popularProductsDisplayGrid = document.querySelector(".js-popular-products-grid");
if (popularProductsDisplayGrid){renderProducts(3, popularProductsDisplayGrid);}

const addToCartButtons = document.querySelectorAll(".js-add-to-cart-button");

addToCartButtons.forEach((button) => {
    button.addEventListener("click", () => {
        let timeOutId;
        if (timeOutId) {
            clearTimeout(timeOutId);
        };

        addToCart(button.dataset.productId);

        button.previousElementSibling.style.opacity = "1";
        timeOutId = setTimeout(() => {
            button.previousElementSibling.style.opacity = "0";
        }, 2000);
    });
});

const carouselInner = document.querySelector('.carousel');
const items = document.querySelectorAll('.banner-img');
const dots = document.querySelectorAll('.dot');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let currentIndex = 0;
const totalItems = items.length;
let autoSlideInterval;

function goToSlide(index) {
    currentIndex = (index + totalItems) % totalItems; // Handle circular indexing
    carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
  
    // Update active dot
    dots.forEach(dot => dot.classList.remove('active'));
    dots[currentIndex].classList.add('active');
}

function nextSlide() {
    goToSlide(currentIndex + 1);
}

function prevSlide() {
    goToSlide(currentIndex - 1);
}

function startAutoSlide() {
    autoSlideInterval = setInterval(nextSlide, 3000); // Change every 3 seconds
}

function stopAutoSlide() {
    clearInterval(autoSlideInterval);
}

nextBtn.addEventListener('click', () => {
    stopAutoSlide();
    nextSlide();
    startAutoSlide();
});
  
prevBtn.addEventListener('click', () => {
    stopAutoSlide();
    prevSlide();
    startAutoSlide();
});
  

dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      stopAutoSlide();
      goToSlide(index);
      startAutoSlide();
    });
});

items.forEach((item)=> {
    item.addEventListener('click', ()=>{
        stopAutoSlide();
        nextSlide();
        startAutoSlide();
    })
});

// Initialize carousel
goToSlide(currentIndex);
startAutoSlide();
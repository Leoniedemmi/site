document.addEventListener('DOMContentLoaded', function() {
    const carouselInner = document.querySelector('.carousel-inner');
    const productCards = document.querySelectorAll('.product-card');
    const totalCards = productCards.length;

    // Clone the first few cards to create the loop effect
    for (let i = 0; i < totalCards; i++) {
        const clone = productCards[i].cloneNode(true);
        carouselInner.appendChild(clone);
    }
});
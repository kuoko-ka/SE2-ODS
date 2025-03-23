
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const totalSlides = slides.length;
    

    const indicatorsContainer = document.querySelector('.carousel-indicators');
    for (let i = 0; i < totalSlides; i++) {
        const indicator = document.createElement('div');
        indicator.classList.add('indicator');
        if (i === 0) indicator.classList.add('active');
        indicator.onclick = () => goToSlide(i);
        indicatorsContainer.appendChild(indicator);
    }

    function updateCarousel() {
        document.querySelector('.carousel').style.transform = `translateX(-${currentSlide * 100}%)`;
        
    
        document.querySelectorAll('.indicator').forEach((indicator, index) => {
            if (index === currentSlide) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
        });
    }
    
 
    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        updateCarousel();
    }
    

    function moveSlide(step) {
        currentSlide = (currentSlide + step + totalSlides) % totalSlides;
        updateCarousel();
    }
    
    setInterval(() => {
        moveSlide(1);
    }, 5000);
    

    const loginModal = document.getElementById('loginModal');
    
    function openLoginModal() {
        loginModal.style.display = 'block';
    }
    
    function closeLoginModal() {
        loginModal.style.display = 'none';
    }
    
    window.onclick = function(event) {
        if (event.target === loginModal) {
            closeLoginModal();
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
    openLoginModal();
});

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODS WebApp - On-Demand Services</title>
    
    <!-- CSS Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: url('bg.png') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #333; 
            padding: 15px 50px;
        }

        .logo img {
            width: 150px;
            height: auto;
        }

        .nav-links {
            list-style: none;
            display: flex;
            align-items: center;
        }

        .nav-links li {
            margin: 0 15px;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            transition: color 0.3s ease-in-out;
        }

        .nav-links a:hover {
            color: orange;
        }

        /* Auth Buttons */
        .auth-buttons {
            display: flex;
            gap: 10px;
        }

        .login-btn, .signup-btn {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        .login-btn {
            background: #007bff;
            color: white;
        }

        .login-btn:hover {
            background: #0056b3;
        }

        .signup-btn {
            background: orange;
            color: white;
        }

        .signup-btn:hover {
            background: #e69500;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 80px 20px;
            background: rgb(207, 137, 31);
            color: white;
        }

        .hero h1 {
            margin-bottom: 15px;
        }

        .hero .btn {
            padding: 12px 25px;
            background: #555;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            display: inline-block;
            margin-top: 15px;
            transition: all 0.3s ease-in-out;
        }

        .hero .btn:hover {
            background: #0056b3;
            transform: scale(1.05);
        }

        /* Fixed Carousel */
        .carousel-container {
            width: 80%;
            max-width: 800px;
            margin: 30px auto;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .carousel {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-slide {
            min-width: 100%;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .carousel-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 20px;
            border-radius: 50%;
            z-index: 10;
            transition: background 0.3s ease;
        }

        .carousel-btn:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        /* Carousel indicators */
        .carousel-indicators {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
        }

        .indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .indicator.active {
            background: white;
        }

        /* Features Section */
        .features {
            text-align: center;
            padding: 50px;
           
            margin: 20px auto;
        }

        .features h2 {
            margin-bottom: 30px;
            color: #333;
        }

        .feature-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .feature {
            background: white;
            padding: 25px;
            width: 30%;
            min-width: 250px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-5px);
        }

        .feature h3 {
            margin-bottom: 15px;
            color: #007bff;
        }

        /* Login Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 100;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 400px;
            position: relative;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .login-form input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .login-form button {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background: #333;
            color: white;
            margin-top: auto;
        }

      
        @media (max-width: 768px) {
            .navbar {
                padding: 15px 20px;
                flex-direction: column;
                gap: 15px;
            }
            
            .feature-container {
                flex-direction: column;
                align-items: center;
            }
            
            .feature {
                width: 90%;
            }
            
            .carousel-container {
                width: 95%;
            }
        }

            .signup-link {
                margin-top: 15px;
                text-align: center;
                font-size: 14px;
            }

            .signup-text {
                color: #007bff;
                text-decoration: none;
                font-weight: bold;
                transition: color 0.3s ease;
            }

            .signup-text:hover {
                color: #0056b3;
                text-decoration: underline;
                cursor: pointer;
            }

    </style>
</head>
<body>

<!-- Header & Navigation -->
<header>
    <nav class="navbar">
        <div class="logo">
            <img src="placeholder-logo.png" alt="ODS WebApp">
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="auth-buttons">
            <button class="login-btn" onclick="openLoginModal()">Login</button>
            <button class="signup-btn">Sign Up</button>
        </div>
    </nav>
</header>

<div class="content">
    <!-- Hero Section -->
    <section class="hero">
        <h1>Find Trusted Home Service Providers Easily</h1>
        <p>Book professional plumbers, cleaners, electricians, and more with just a few clicks.</p>
        <a href="#" class="btn">Get Started</a>
    </section>

    <!-- Fixed Carousel -->
    <div class="carousel-container">
        <button class="carousel-btn prev" onclick="moveSlide(-1)">&#10094;</button>
        <div class="carousel">
            <div class="carousel-slide">
                <img src="world.png" alt="Service 1">
            </div>
            <div class="carousel-slide">
                <img src="logo.png" alt="Service 2">
            </div>
            <div class="carousel-slide">
                <img src="placeholder3.jpg" alt="Service 3">
            </div>
            <div class="carousel-slide">
                <img src="placeholder4.jpg" alt="Service 4">
            </div>
            <div class="carousel-slide">
                <img src="placeholder5.jpg" alt="Service 5">
            </div>
        </div>
        <button class="carousel-btn next" onclick="moveSlide(1)">&#10095;</button>
        <div class="carousel-indicators">
            <!-- Will be populated by JavaScript -->
        </div>
    </div>

    <!-- Features Section -->
    <section class="features">
        <h2>Why Choose ODS WebApp?</h2>
        <div class="feature-container">
            <div class="feature">
                <h3>Trusted Professionals</h3>
                <p>All service providers are verified and rated by customers.</p>
            </div>
            <div class="feature">
                <h3>Secure Payments</h3>
                <p>Pay easily and securely via GCash.</p>
            </div>
            <div class="feature">
                <h3>Fast & Reliable</h3>
                <p>Book services instantly with real-time communication.</p>
            </div>
        </div>
    </section>
</div>

<!-- Login Modal -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeLoginModal()">&times;</span>
        <h2>Login</h2>
        <form class="login-form">
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <p class="signup-link">Don't have an account? <a href="#" class="signup-text">Sign up now</a></p>
        </form>
    </div>
</div>

<!-- Footer -->
<footer>
    <p>&copy; <?php echo date("Y"); ?> ODS WebApp. All Rights Reserved.</p>
</footer>

<!-- JavaScript -->
<script>
  
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

</script>

</body>
</html>
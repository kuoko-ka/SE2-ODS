
<?php include 'sections/header.php'; ?>


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
<script src="jscript/script.js"></script>

<?php include 'sections/footer.php';?>
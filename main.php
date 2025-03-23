<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODS WebApp - On-Demand Services</title>
    
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f4f4;
        }

        
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
        }

        
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
        }

        .login-btn {
            background: #007bff;
            color: white;
        }

        .signup-btn {
            background: orange;
            color: white;
        }

        
        .hero {
            text-align: center;
            padding: 80px 20px;
            background: #007bff;
            color: white;
        }

        .hero h1 {
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .hero .btn {
            padding: 12px 25px;
            background: white;
            color: #007bff;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            display: inline-block;
            margin-top: 15px;
        }

        
        .features {
            text-align: center;
            padding: 50px;
        }

        .feature-container {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .feature {
            background: white;
            padding: 20px;
            width: 30%;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }

        
        footer {
            text-align: center;
            padding: 20px;
            background: #333;
            color: white;
            margin-top: 20px;
        }

        
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        
        .popup {
            background: white;
            padding: 20px;
            width: 300px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            text-align: center;
            position: relative;
            transform: scale(0.8);
            transition: transform 0.3s ease-in-out;
        }

        .popup h2 {
            margin-bottom: 15px;
        }

        .popup input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .popup button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup .signup-btn {
            background: #28a745; 
            margin-top: 5px;
        }

       
        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
            color: #555;
        }

        .close-btn:hover {
            color: #000;
        }

        .popup-overlay.show {
            display: flex;
            opacity: 1;
        }

        .popup-overlay.show .popup {
            transform: scale(1);
        }
    </style>
</head>
<body>

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
            <button class="login-btn" onclick="openPopup()">Login</button>
            <button class="signup-btn" onclick="alert('Signup Clicked')">Sign Up</button>
        </div>
    </nav>
</header>


<section class="hero">
    <h1>Find Trusted Home Service Providers Easily</h1>
    <p>Book professional plumbers, cleaners, electricians, and more with just a few clicks.</p>
    <a href="#" class="btn">Get Started</a>
</section>


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


<footer>
    <p>&copy; <?php echo date("Y"); ?> ODS WebApp. All Rights Reserved.</p>
</footer>


<div class="popup-overlay" id="loginPopup">
    <div class="popup">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <h2>Login</h2>
        <input type="text" id="username" placeholder="Username">
        <input type="password" id="password" placeholder="Password">
        <button onclick="closePopup()">Login</button>
        <button class="signup-btn" onclick="alert('Signup Clicked')">Sign Up</button>
    </div>
</div>


<script>
    function openPopup() {
        let popupOverlay = document.getElementById("loginPopup");
        popupOverlay.style.display = "flex";
        setTimeout(() => {
            popupOverlay.classList.add("show");
        }, 100);
    }

    function closePopup() {
        let popupOverlay = document.getElementById("loginPopup");
        popupOverlay.classList.remove("show");
        setTimeout(() => {
            popupOverlay.style.display = "none";
        }, 500);
    }
</script>

</body>
</html>

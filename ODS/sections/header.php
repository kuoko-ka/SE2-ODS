<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODS WebApp - On-Demand Services</title>
    <link rel="stylesheet" href="../css/headerstyle.css">	
</head>

<body>

<header>
    <nav class="navbar">
        <div class="logo">
            <img src="../ODS/imgs/placeholder-logo.png" alt="ODS WebApp">
        </div>
        <ul class="nav-links" id="nav-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="auth-buttons" id="auth-buttons">
           </div>
    </nav>
</header>

<script type="module">
    import { getAuth, onAuthStateChanged, signOut } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-auth.js";
    import { app } from "../jscript/firebaseconf.js"; // Ensure this path is correct
    
    // Add dropdown styles
    const style = document.createElement('style');
    style.textContent = `
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropdown-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 4px;
        }
        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
    `;
    document.head.appendChild(style);
    
    const auth = getAuth(app);
    onAuthStateChanged(auth, (user) => {
        const authButtons = document.getElementById("auth-buttons");
        if (user) {  
            // If user is logged in, show Account dropdown with options
            authButtons.innerHTML = `
                <div class="dropdown">
                    <button class="dropdown-btn">Account</button>
                    <div class="dropdown-content">
                        <a href="inner/account-settings.php">Account Settings</a>
                        <a href="#" id="logout-link">Logout</a>
                    </div>
                </div>
            `;
            document.getElementById("logout-link").addEventListener("click", (e) => {
                e.preventDefault();
                signOut(auth).then(() => {
                    window.location.href = "main.php"; // Redirect after logout
                }).catch((error) => {
                    console.error("Logout failed:", error);
                });
            });
        } else {
            // If no user, show login & signup  
            authButtons.innerHTML = `
                <button class="login-btn" onclick="location.href='inner/login.php'">Login</button>
                <button class="signup-btn" onclick="location.href='inner/signup.php'">Sign Up</button>
            `;
        }
    });
</script>

</body>
</html>

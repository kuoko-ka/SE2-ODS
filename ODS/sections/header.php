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
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="auth-buttons">
            <button class="login-btn" onclick="openLoginModal()">Login</button>
            <button class="signup-btn">Sign Up</button>
    </nav>
        </div>
</header>

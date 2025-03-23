<?php
session_start();
include '../sections/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - ODS WebApp</title>
    <link rel="stylesheet" href="../css/profile.css">  <!-- Your profile styles -->
</head>
<body>

<div class="profile-container">
    <!-- Left Sidebar (User Info + Ratings) -->
    <aside class="profile-sidebar">
    <img src="path-to-profile.jpg" alt="Profile Picture" class="profile-pic">
    <p class="profile-name">Vhencint G.</p>
    <p class="profile-location">📍 Taguig, Philippines</p>

    <div class="ratings">
        <h4>Ratings you made:</h4>
        <div class="rating-item"><i>⭐</i> On Time and Punctual</div>
        <div class="rating-item"><i>⭐</i> Good quality service</div>
        <div class="rating-item"><i>⭐</i> Quick response</div>
        <!-- Add more rating items -->
    </div>
</aside>

    <!-- Main Content (Listings) -->
	
   <section class="profile-content">
    <div class="profile-content-container">
        <h3>You have no listings currently. Try making one.</h3>
        <button class="create-task-btn">Create Task</button>
    </div>
</section>
</div>

<?php include '../sections/footer.php';?>
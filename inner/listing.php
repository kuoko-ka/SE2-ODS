<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>On-Demand Services</title>
    <link rel="icon" href="ods_img/odsicon.png" type="image/png">
    <link rel="stylesheet" href="../css/listing.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="ods_img/miniodsicon.png" alt="ODS WebApp">
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <button class="profile_btn">
            </button>
        </nav>
    </header>

    <div class="container">
        <a class="create" href="CreateList.php">Create Task</a>
        <div class="inner-cont">
            <div class="outercont">
                <div class="ratings">
                    <h2>Ratings You Made</h2>
                    <ul class="text">
                        <li>Rating: 4.5 <p class="stars">★★★★★</p></li>
                        <li>Rating: 4.2 <p class="stars">★★★★★</p></li>
                        <li>Rating: 3 <p class="stars">★★★★★</p></li>
                        <li>Rating: 2.8 <p class="stars">★★★★★</p></li>
                        <li>Rating: 5 <p class="stars">★★★★★</p></li>
                    </ul>   
                </div>
                <div class = "icons">
                    <button id="messagesbtn" onclick="message(event)">
                        <img src="../imgs/messages.png" alt="Messages">
                    </button>
                    <button class="mailsbtn" name="mails">
                        <img src="../imgs/mails.png" alt="Mails">
                    </button>
                    <button class="homebtn" name="home">
                        <img src="../imgs/home.png" alt="Home">
                    </button>
                </div>
            </div>
            <div class="view">
                <div class="task">
                    <p>You currently have no listing.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="chatwindow">
        <div class="outer-chatlist">
            <div class="chatlist">

            </div>
        </div>
        <div class="outer-chatmessages">
            <div class="chatmessages">
                <textarea id="chatinput" placeholder="Type Your Message..." oninput="autoExpand(this)"></textarea>
                <button id="sendmessage">
                    <img src="../imgs/sendicon.jpg" alt="send">
                </button>
            </div>
        </div>
    </div>

    <footer>
    <p>&copy; <?php echo date("Y"); ?> ODS WebApp. All Rights Reserved.</p>
    </footer>
    <script src="../jscript/client_chat.js"></script>
</body>
</html>
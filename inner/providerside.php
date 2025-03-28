<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ODS WebApp - On-Demand Services</title>
        <link rel="stylesheet" href="../css/providerside.css">
    </head>
    <body>
        <header class = "header">
            <div class="logo">
                <img src="../imgs/placeholder-logo.png" alt="ODS WebApp">
            </div>
                <ul>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Whats new</a></li>
                    <li><a href="#">About us </a></li>
                    <li><a href="#">Support</a></li>
                </ul>
        </header>
        <div class = "profilepic">
            <img src="../imgs/placeholder-logo.png" alt="Profile Picture">
            <div class = "pfploc-rev">
                <ul>
                    <li>PROFILE NAME</li>
                    <li>LOCATION</li>
                    <li>STARS</li>
                </ul>
            </div>
        </div>

        <div class = "bio">
            <h1>BIO:</h1>
            <p>Lorem ipsum tang ina nyo tinulugan nyo nanaman kami AAAAAAAAAAAAAAAAAAA</p>
        </div>
        <div class="outer-latereviews">
            <div class = "latest-reviews">

            </div>  
        </div>
        <div class = "joblist">
            <div class = "joblist-inner">
                <div class = "joblist-main">
                    <div class="search-bar">
                        <img src="../imgs/search-icon.png" alt="search-icon">
                        <input type="text" id="input" placeholder="Search for Jobs...">
                    </div>
                    <div class="job-list" id="job-list-container">
                        <div class="job">
                            <h4>Video Editing</h4>
                            <p><strong>Fixed-price - Expert - Est. Budget: $20</strong></p>
                            <p>Looking to hire a person to make 10 short videos for 65 to 80 seconds with background music...</p>
                        </div>
                        <div class="job">
                            <h4>Graphic Design</h4>
                            <p><strong>Fixed-price - Intermediate - Est. Budget: $50</strong></p>
                            <p>Need a graphic designer to create engaging thumbnails and social media content...</p>
                        </div>
                        <div class="job">
                            <h4>Web Development</h4>
                            <p><strong>Hourly - Expert - Est. Rate: $30/hr</strong></p>
                            <p>Looking for a front-end web developer to build a responsive website using React...</p>
                        </div>
                        <div class="job">
                            <h4>Content Writing</h4>
                            <p><strong>Fixed-price - Beginner - Est. Budget: $10</strong></p>
                            <p>Seeking a content writer for blog posts on technology and trends...</p>
                        </div>
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
        <script src="../jscript/search.js"></script>
    </body>
</html>

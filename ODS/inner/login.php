<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/inamo.css">
    <title>Log In</title>
</head>
<body>
    <div class="right">
        <div class="container">
            <h2>Log In</h2>
            <form>
                <label for="text">Email</label>
                <input type="email" placeholder="Email" id = "email" required>

                <label for="text">Password</label>
                <input type="password" placeholder="Password" id = "password" required>
                <a href="">Forget Password?</a>

                <div class="radio-group">
                    <input type="radio" id="client" name="role" value="client" required>
                    <label for="client">Client</label>
                    <input type="radio" id="provider" name="role" value="provider" required>
                    <label for="provider">Service Provider</label>
                </div>
                <button type="submit" class="signup-btn" id = "submit" >LOG IN</button>
            </form>

            <p class="or">or</p>

            <div class="button-container">
                <button class="social-btn google">
                    Google <img src="google-icon-logo-svgrepo-com.svg" alt="Google">
                </button>
                <button class="social-btn facebook">
                    Facebook <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png" alt="Facebook">
                </button>
            </div>
            <p class="login-link">Dont have an account? <a href="signup.html"> Sign Up</a></p>
        </div>
    </div>
    <div class="left"></div>
<script type = "module" src = "/jscript/login.js" defer></script>
</body>
</html>
</body>
</html>
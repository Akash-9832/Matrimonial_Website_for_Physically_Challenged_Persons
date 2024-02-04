<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Login Page</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        box-shadow: border-box;
    }

    @media screen and (max-width: 768px) {
        .container {
            flex-direction: column;
        }
    }

    header{
        font-family: sans-serif;
        width: 100%;
        height: 100vh;
        background: linear-gradient(rgba(58, 48, 48, 0.3), rgba(66, 82, 90, 0.625)), url("image1.jpg");
        background-size: cover;
        box-shadow: 0 0 4px #d8beff;
    }

    nav {
        width: 100%;
        height: 95px;
        padding: 0 20px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        justify-items: center;
        box-shadow: 0 0 5px #f392f5ac;
    }

    nav p a {
        width: 50px;
        color: #fef3fe;
    }

    nav span.logo {
        color: rgb(255, 66, 198);
        font-style: italic;
    }

    nav a {
        cursor: pointer;
        text-decoration: none;
    }

    .menu a {
        text-decoration: none;
        color: aliceblue;
        padding: 18px 10px;
        font-size: 20px;
        align-items: center;
        cursor: pointer;
    }

    .menu a:hover {
        color: rgb(4, 1, 55);
        border-radius: 8px;
        background-color: #e84393;
        box-shadow: 0 0 10px #3300ff;
    }


    .login-container {
        position: relative;
        height: 400px;
        width: 450px;
        margin-top: 25px;
        justify-content: center;
        margin-left: 490px;
        margin-right: 490px;
        padding: 20px;
        border: 2px solid rgba(137, 166, 253, 0.825);
        border-radius: 8px;
        background: transparent;
        background-color: rgba(202, 241, 255, 0.316);
        box-shadow: 0 2px 15px #8490ffd2;
    }

    .login-container label {
        color: #ffffff;
    }

    .login-container h2 {
        color: #000a59;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        margin-top: 55px;
    }

    form {
        text-align: center;
        flex-direction: column;
    }

    .input-container {
        position: relative;
        margin-bottom: 15px;
    }

    input {
        padding: 10px;
        border: 2px solid #ffef95;
        border-radius: 5px;
        outline: none;
        font-size: 20px;
    }

    input[type="text"],
    input[type="password"] {
        padding-left: 60px;
    }

    i {
        position: absolute;
        top: 15px;
        left: 85px;
        color: #2f2f2f;
    }

    .fas {
        font-size: 18px;
    }

    .forgot-password {
        margin-bottom: 20px;
        text-align: center;
        color: #09003b;
        text-decoration: none;
    }

    button {
        margin-top: 20px;
        width: 320px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 25px;
        padding: 12px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background-color: #00aa19;
    }

    .already {
        color: #fef3fe;
    }

    .already a {
        text-decoration: none;
        color: #110068;
    }
    .quote2{
        box-shadow: 0 0 25px #c9b531c9;
        border-radius: 10px;
        background: #cfbc5164;
        color: #f5fbff;
        margin-left: 450px;
        margin-right: 450px;
        font-style: italic;
    }
</style>

<body>
    <header>
        <div>
            <nav>
                <p>
                    <a href="index.php">
                        <big></big><big><span class="logo">
                                <big><big><big><big><b>A</b></big></big></big></big></span><big>lliance</big><br>
                            <span class="logo">
                                <big><big><big><b>W</b></big></big></big></span><big>eds.com</big></big></big><br>
                    </a>
                </p>
                <div class="menu">
                    <a href="index.php">Home</a>
                    <a href="index.php">About Us</a>
                    <a href="login.php">Login</a>
                    <a href="index.php">Search</a>
                    <!-- <a href="#">Membership</a> -->
                    <a href="index.php">Terms & Condition</a>
                </div>
            </nav>
        </div>
            <br>
            <div class="login-container">
                <h2>Login</h2>
                <form action="#" method="post">
                    <div class="input-container">
                        <!-- <label for="username"><b>Username:</b></label><br> -->
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <br>
                    <div class="input-container">
                        <!-- <label for="password"><b>Password:</b></label><br> -->
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <a href="#" class="forgot-password"><b>Forgot Password?</b></a><br>
                    <button type="submit">Login</button> <br> <br>
                    <span class="already">Don't have an account? <a href="register.php"> Register Now</a></span>
                </form>
            </div>
            <div class="quote2">
                <!-- <h2>"As you begin this new chapter, may your love be a source of inspiration to others, showing that love conquers all."</h2> -->
                <h2>#CountingDownTheDays</h2>
            </div>
    </header>
</body>

</html>
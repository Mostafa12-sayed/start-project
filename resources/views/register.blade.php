<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="./stylesheets/register.css">
    <title>H.A.M | Login</title>
</head>
<body>
    <!--        HEADER            -->
    <header class="header">
        <!--        LOGO            -->
        <header class="logo">
            <img src="./images/logo.png" alt="Dumbbell">
            <h2>H.A.M</h2>
        </header>
        <!--        NAV BAR            -->
        <nav class="navbar">
            <ul>
                <li id="home" class="home"><a href="./index.html">Home</a></li>
                <li id="login" class="login"><a href="login.blade.php">login</a></li>
            </ul>
        </nav>
    </header>
    <!--        MAIN BODY           -->
    <div class="mainBody">
        <form name="register" class="register" action="" method="POST">
            <div class="row1">
                <div class="col1">
                    <div>
                        <label for="name">Name <span>*</span></label>
                        <input type="text" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div>
                        <label for="username">Username <span>*</span></label>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div>
                        <label for="email">Email <span>*</span></label>
                        <input type="text" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div>
                        <label for="password">Password <span>*</span></label>
                        <div class="password">
                            <input type="password" id="password1" name="password" placeholder="Password" required/>
                            <div id="privacy1" class="privacy private" ></div>
                        </div>
                        <div class="confirmPassword">
                            <input type="password" id="password2" name="password" placeholder="Confirm Password" required/>
                            <div id="privacy2" class="privacy private" ></div>
                        </div>
                    </div>

                </div>
                <div class="col2">
                    <div>
                        <label for="birthday">Birthday</label>
                        <input type="date" id="birthday" name="birthday">
                    </div>
                    <div>
                        <label for="height">Height</label>
                        <input type="number" id="height" name="height" placeholder="Height 'cm'" min="80">
                    </div>
                    <div>
                        <label for="weight">Weight</label>
                        <input type="number" id="weight" name="weight" placeholder="Weight 'kg'" min="40">
                    </div>
                    <div>
                        <label for="gender">Gender <span>*</span></label><br>
                        <select id="gender" name="gender" required>
                            <option value="" disabled selected>Select your option</option>
                            <option label="Male" value="Male">Male</option>
                            <option label="Female"value="Female">Female</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row2">

            </div>

            <p>If you already have account, <a href="login.blade.php">Login</a></p>
            <input type="submit" value="Sign up">
        </form>
    </div>
    <!--        FOOTER           -->
    <footer>
        <!--        LOGO          -->
        <div class="logoCol">
            <img src="./images/logo.png" alt="Dumbbell">
        </div>
        <!--        SOCIAL MEDIA           -->
        <div class="followCol">
            <h2>Follow us</h2>
            <a href="#"><img src="./images/Social/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="./images/Social/instagram.png" alt="Instagram"></a>
            <a href="#"><img src="./images/Social/whatsapp.png" alt="Whatsapp"></a>
            <a href="#"><img src="./images/Social/twitter.png" alt="twitter"></a>
        </div>
        <!--        ABOUT US           -->
        <div class="aboutCol">
            <h2>About us</h2>
            <p>Phone Number: <span>01063985385</span> </p>
            <p>Contact us:<span>ehom@hotmail.com</span></p>
        </div>
    </footer>

    <script type="text/javascript" src="./scripts/register.js"></script>
</body>
</html>

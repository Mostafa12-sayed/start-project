<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="/stylesheets/signup.css">
    <title>H.O.M | Signup</title>
</head>
<body>

    <!--        HEADER            -->
    <header class="header">
        <!--        LOGO            -->
        <header class="logo">
            <img src="/images/logo.png" alt="Dumbbell">
            <h2>H.O.M</h2>
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
        <!--        BAR          -->
        <div class="bar">
            <span id="courseActive" class="tab course">Course</span>
            <svg height="42" width="20">
                <g stroke="white" fill="none" stroke-width="2">
                    <polygon id="courseActive" points="0,0 10,21 0,42" style="fill:#286DC1;stroke:none" />
                    <polygon id="planActive" points="10,0 20,21 10,42 20,42 20,0" style="fill:#286DC1;stroke:none" />
                    <polygon points="0,0 10,21 0,42 10,42 20,21 10,0" style="fill:#286DC1;stroke:none" />
                    <path d="M0 0 L10 21 L0 42"/>
                    <path d="M10 0 L20 21 L10 42"/>
                </g>
            </svg>
            <span id="planActive" class="tab plan">Plan</span>
            <svg height="42" width="20">
                <g stroke="white" fill="none" stroke-width="2">
                    <polygon id="planActive" points="0,0 10,21 0,42" style="fill:#286DC1;stroke:none" />
                    <polygon id="infoActive" points="10,0 20,21 10,42 20,42 20,0" style="fill:#286DC1;stroke:none" />
                    <polygon points="0,0 10,21 0,42 10,42 20,21 10,0" style="fill:#286DC1;stroke:none" />
                    <path d="M0 0 L10 21 L0 42"/>
                    <path d="M10 0 L20 21 L10 42"/>
                </g>
            </svg>
            <span class="tab info">Your Information</span>
            <svg height="42" width="20">
                <g stroke="white" fill="none" stroke-width="2">
                    <polygon id="infoActive" points="0,0 10,21 0,42" style="fill:#286DC1;stroke:none" />
                    <polygon id="paymentActive" points="10,0 20,21 10,42 20,42 20,0" style="fill:#286DC1;stroke:none" />
                    <polygon points="0,0 10,21 0,42 10,42 20,21 10,0" style="fill:#286DC1;stroke:none" />
                    <path d="M0 0 L10 21 L0 42"/>
                    <path d="M10 0 L20 21 L10 42"/>
                </g>
            </svg>
            <span id="paymentActive" class="tab payment">Payment</span>
        </div>
        <!--        FORM           -->
        <form class="form" >
            <!--        BODY           -->
            <div data-tabNo="2" id="tab" class="formBody changeable">
                <div class="month" data-month="1">
                    <header>1 Month</header>
                    <div class="course">
                        <div>
                            <label for="Fitness">Fitness</label>
                            <select id="Fitness" name="cars">
                                <option data-id="" value="3">3 Days aweek</option>
                                <option data-id="" value="5">5 Days aweek</option>
                                <option data-id="" value="7">7 Days aweek</option>
                            </select>
                        </div>
                    </div>
                    <p data-cost="1" class="cost">100</p>
                </div>
                <div class="month" data-month="3">
                    <header>1 Month</header>
                    <div class="course">
                        <div>
                            <label for="Fitness">Fitness</label>
                            <select id="Fitness" name="cars">
                                <option data-id="" value="3">3 Days aweek</option>
                                <option data-id="" value="5">5 Days aweek</option>
                                <option data-id="" value="7">7 Days aweek</option>
                            </select>
                        </div>
                    </div>
                    <p data-cost="3" class="cost">100</p>
                </div>
                <div class="month" data-month="6">
                    <header>1 Month</header>
                    <div class="course">
                        <div>
                            <label for="Fitness">Fitness</label>
                            <select id="Fitness" name="cars">
                                <option data-id="" value="3">3 Days aweek</option>
                                <option data-id="" value="5">5 Days aweek</option>
                                <option data-id="" value="7">7 Days aweek</option>
                            </select>
                        </div>
                        <div>
                            <label for="Fitness">Fitness</label>
                            <select id="Fitness" name="cars">
                                <option data-id="" value="3">3 Days aweek</option>
                                <option data-id="" value="5">5 Days aweek</option>
                                <option data-id="" value="7">7 Days aweek</option>
                            </select>
                        </div>
                    </div>
                    <p data-cost="6" class="cost">100</p>
                </div>
            </div>
            <!--        BUTTONS           -->
            <div class="buttons">
                <input id="previous" class="button" type="button" value="Previous">
                <input id="next" class="button" type="button" value="Next">
            </div>
        </form>
    </div>
    <!--        FOOTER           -->
    <footer>
        <!--        LOGO          -->
        <div class="logoCol">
            <img src="/images/logo.png" alt="Dumbbell">
        </div>
        <!--        SOCIAL MEDIA           -->
        <div class="followCol">
            <h2>Follow us</h2>
            <a href="#"><img src="/images/Social/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="/images/Social/instagram.png" alt="Instagram"></a>
            <a href="#"><img src="/images/Social/whatsapp.png" alt="Whatsapp"></a>
            <a href="#"><img src="/images/Social/twitter.png" alt="twitter"></a>
        </div>
        <!--        ABOUT US           -->
        <div class="aboutCol">
            <h2>About us</h2>
            <p>Phone Number: <span>01063985385</span> </p>
            <p>Contact us:<span>ehom@hotmail.com</span></p>
        </div>
    </footer>
    <script type="text/javascript" src="/scripts/signup.js"></script>
</body>
</html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="/stylesheets/plan.css">
    <title>H.A.M | Plan</title>
</head>
<body>

    <!--        HEADER            -->
    <header class="header">
        <!--        LOGO            -->
        <header class="logo">
            <img src="/images/logo.png" alt="Dumbbell">
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
    <div id="mainBody" class="mainBody">
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

            <div>
                <!--
                    Page One
                -->
                <div data-tab="1" id="tab" class="formBody display">
                    <div class="firstRow Row">
                        <div class="Pt">
                            <div>
                                <img src="/images/Courses/physiotherapy.png" alt="physiotherapy">
                                <p>Physiotherapy</p>
                            </div>
                            <input type="radio" id="Physiotherapy" name="main_course" value="Physiotherapy">
                        </div>
                        <div class="Bb">
                            <div>
                                <img src="/images/Courses/Bodybuilding.png" alt="Bodybuilding">
                                <p>Bodybuilding</p>
                            </div>
                            <input type="radio" id="Bodybuilding" name="main_course" value="Bodybuilding">
                        </div>
                        <div class="Ft">
                            <div>
                                <img src="/images/Courses/Fitness.png" alt="Fitness">
                                <p>Fitness</p>
                            </div>
                            <input type="radio" id="Fitness" name="main_course" value="Fitness">
                        </div>
                        <div class="vip">
                            <div>
                                <img src="/images/Courses/vip.png" alt="VIP">
                                <p>VIP</p>
                            </div>
                            <input type="radio" id="VIP" name="main_course" value="VIP">
                        </div>
                        <div class="Of">
                            <div>
                                <img src="/images/Courses/discount.png" alt="Offers">
                                <p>Offers</p>
                            </div>
                            <input type="radio" id="Offers" name="main_course" value="Offers">
                        </div>
                    </div>
                    <div class="secondRow Row">
                        <div class="Ma">
                            <div>
                                <img src="/images/Courses/massage.png" alt="massage">
                                <p>Massage</p>
                            </div>
                            <input type="checkbox" id="Massage" name="Massage" value="Massage">
                        </div>
                        <div class="Bx">
                            <div>
                                <img src="/images/Courses/Boxing.png" alt="Boxing">
                                <p>Boxing</p>
                            </div>
                            <input type="checkbox" id="Boxing" name="Boxing" value="Boxing">
                        </div>
                        <div class="Sa">
                            <div>
                                <img src="/images/Courses/Sauna.png" alt="Sauna">
                                <p>Sauna</p>
                            </div>
                            <input type="checkbox" id="Sauna" name="Sauna" value="Sauna">
                        </div>
                        <div class="Nt">
                            <div>
                                <img src="/images/Courses/Nutrition.png" alt="Nutrition">
                                <p>Nutrition</p>
                            </div>
                            <input type="checkbox" id="Nutrition" name="Nutrition" value="Nutrition">
                        </div>
                    </div>

                </div>
                <!--
                    Page One
                -->
                <div data-tab="2" id="tab" class="formBody">

                    <svg version="1.1" id="loader" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" class="show">
                        <circle fill="none" stroke="#030303" stroke-width="6" stroke-miterlimit="15" stroke-dasharray="14.2472,14.2472" cx="50" cy="50" r="47" >
                            <animateTransform
                                attributeName="transform"
                                attributeType="XML"
                                type="rotate"
                                dur="5s"
                                from="0 50 50"
                                to="360 50 50"
                                repeatCount="indefinite" />
                        </circle>
                        <circle fill="none" stroke="#030303" stroke-width="1" stroke-miterlimit="10" stroke-dasharray="10,10" cx="50" cy="50" r="39">
                            <animateTransform
                                attributeName="transform"
                                attributeType="XML"
                                type="rotate"
                                dur="5s"
                                from="0 50 50"
                                to="-360 50 50"
                                repeatCount="indefinite" />
                        </circle>
                        <g fill="#030303">
                            <rect x="30" y="35" width="5" height="30">
                                <animateTransform
                                attributeName="transform"
                                dur="1s"
                                type="translate"
                                values="0 5 ; 0 -5; 0 5"
                                repeatCount="indefinite"
                                begin="0.1"/>
                            </rect>
                            <rect x="40" y="35" width="5" height="30" >
                                <animateTransform
                                attributeName="transform"
                                dur="1s"
                                type="translate"
                                values="0 5 ; 0 -5; 0 5"
                                repeatCount="indefinite"
                                begin="0.2"/>
                            </rect>
                            <rect x="50" y="35" width="5" height="30" >
                                <animateTransform
                                attributeName="transform"
                                dur="1s"
                                type="translate"
                                values="0 5 ; 0 -5; 0 5"
                                repeatCount="indefinite"
                                begin="0.3"/>
                            </rect>
                            <rect x="60" y="35" width="5" height="30" >
                                <animateTransform
                                attributeName="transform"
                                dur="1s"
                                type="translate"
                                values="0 5 ; 0 -5; 0 5"
                                repeatCount="indefinite"
                                begin="0.4"/>
                            </rect>
                            <rect x="70" y="35" width="5" height="30" >
                                <animateTransform
                                attributeName="transform"
                                dur="1s"
                                type="translate"
                                values="0 5 ; 0 -5; 0 5"
                                repeatCount="indefinite"
                                begin="0.5"/>
                            </rect>
                        </g>
                    </svg>

                    <div id="planCard" class="hide planCard">
                        <div class="body">
                            <div class="buttonsCol previousCol">
                                <button type="button">
                                    <div></div>
                                </button>
                            </div>
                            <div id="plans" class="plans">


                            </div>
                            <div class="buttonsCol nextCol">
                                <button type="button">
                                    <div></div>
                                </button>
                            </div>
                        </div>

                        <p id="cost" class="cost">0</p>
                    </div>



                </div>

                <div data-tab="3" id="tab" class="formBody">
                    <div class="container">
                        <nav>
                            <ul>
                                <li class="selected">Cash</li>
                                <li>Visa</li>
                                <li>Credit Card</li>
                                <li>Paypal</li>
                            </ul>
                        </nav>
                        <div class="paymentForm">
                            You should go to the gym within 3 days to pay the cost and comfirm your account.
                        </div>
                    </div>
                </div>

            </div>


            <!--        BUTTONS           -->
            <div class="buttons">
                <input id="previous" class="button" type="button" value="Previous" disabled>
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
    <script type="text/javascript" src="/scripts/plan.js"></script>
</body>
</html>

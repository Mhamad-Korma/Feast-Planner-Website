<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <link rel="stylesheet" href="css-home-styles/home-style.css"/>
    <link rel="stylesheet" href="css-home-styles/image-scroller-styles.css"/>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>







<!--=======================================================================================================================-->
<!-- Navbar -->
<!--=======================================================================================================================-->

<div class="navbar-container">
    <div class="navbar-icon">
        <!--		<img style="height: 50px; width: 50px" src="navbar-images/AlphaBeta_Icon.png" alt="">-->
    </div>
    <div class="menu-open">
        <img style="height: 70px; width: 80px" src="navbar-images/icons8-menu1-64.png" alt="">
    </div>
</div>

<div class="nav-container">
    <div class="menu-close">
        <img style="height: 50px; width: 50px" src="navbar-images/icons8-close-128.png" alt="">
    </div>
    <nav class="menu">
        <div class="menu__item">
            <a href="index.php" class="menu__item-link">Home</a>
            <img class="menu__item-img" src="navbar-images/icons8-home-128.png" />
            <div class="marquee">
                <div class="marquee__inner">
                    <span>Home - Home - Home - Home - Home - Home - Home</span>
                </div>
            </div>
        </div>
        <div class="menu__item">
            <a href="menu.php" class="menu__item-link">Menu</a>
            <img class="menu__item-img" src="navbar-images/icons8-restaurant-menu-100.png" />
            <div class="marquee">
                <div class="marquee__inner">
					<span>Menu - Menu - Menu - Menu - Menu - Menu
						- Menu</span>
                </div>
            </div>
        </div>
        <div class="menu__item">
            <a href="user_profile.php" class="menu__item-link">Profile</a>
            <img class="menu__item-img" src="navbar-images/icons8-contact-us-100.png" />
            <div class="marquee">
                <div class="marquee__inner">
                    <span>Profile - Profile - Profile - Profile - Profile - Profile - Profile</span>
                </div>
            </div>
        </div>
        <div class="menu__item">
            <a href="login_page.php" class="menu__item-link">Login</a>
            <img class="menu__item-img" src="navbar-images/icons8-customer-100.png" />
            <div class="marquee">
                <div class="marquee__inner">
					<span>Login - Login - Login - Login - Login - Login -Login</span>
                </div>
            </div>
        </div>
    </nav>


</div>




<!--=======================================================================================================================-->
<!-- Home Page -->
<!--=======================================================================================================================-->

<section class="homePage-section">

    <div class="wrapper">
        <div class="left"></div>
        <div class="right"></div>


        <div class="content">
            <div class="img-wrapper">
                <div class="home-image"></div>
            </div>


            <div class="text">
                <h1>Feast&nbsp;&nbsp; Planner</h1>
                <p>Restaurant</p>
            </div>

            <div class="name">Feast Planner</div>

            <div class="bottomnav">
                <h1>A Taste You'll Never Forget!</h1>

            </div>
        </div>
    </div>

</section>








<!--=======================================================================================================================-->
<!-- image scroller -->
<!--=======================================================================================================================-->

<div class="all-container">

    <div class="left-part">

        <div class="left-part-row1">
            <h1>Taste that keeps you going ;)</h1>
        </div>
        <div class="left-part-row2">
            <p>We love to manage your food hunger with fun !</p>
        </div>
        <div class="left-part-row3">
            <button class="left-part-row3-button1">
                <a href="menu.php">Order Now</a>
            </button>
            <button class="left-part-row3-button2">
                <a href="menu.php">Explore Menu</a>
            </button>
        </div>

    </div>


    <div class="right-part">

        <div class="gallery">
            <div class="col">
                <div class="image">
                    <img src="food-images/food16.jpg" alt="">
                </div>
                <div class="image">
                    <img src="food-images/food17.jpg" alt="">
                </div>
                <div class="image">
                    <img src="food-images/food18.jpg" alt="">
                </div>
            </div>
            <div class="col col2">
                <div class="image">
                    <img src="food-images/food12.jpg" alt="">
                </div>
                <div class="image">
                    <img src="food-images/food14.jpg" alt="">
                </div>
                <div class="image">
                    <img src="food-images/food15.jpg" alt="">
                </div>
            </div>
        </div>

    </div>

</div>








<!--=======================================================================================================================-->
<!-- About Us -->
<!--=======================================================================================================================-->


<div class="about-us-section-container">


    <div class="left-part-about-us">
        <div class="about-us-image-container">
            <!--            <img class="about-us-image" src="images/checkout1.jpg" alt="" >-->
            <iframe style="height: 100%; border-radius: 15px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52992.4464156128!2d35.46469706563923!3d33.88893526330058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f17e25d278435%3A0xbbf455826576f5b!2sGia%20La%20Cucina%20d&#39;Amore!5e0!3m2!1sen!2slb!4v1715517071101!5m2!1sen!2slb" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="about-us-location-container">

            <div class="location-container-header">
                <h1>Visit Us</h1>
            </div>

            <div class="location-container-details">
                <div class="location-details-row">
                    <img src="location-icons/location.png" alt="">
                    <p>837 W. Marshall Lane Marshalltown, IA 50158, Los Angeles</p>
                </div>
                <div class="location-details-row">
                    <img src="location-icons/phone.png" alt="">
                    <p>(+961) 76 126 125</p>
                </div>
                <div class="location-details-row">
                    <img src="location-icons/mail.png" alt="">
                    <p>professionalEmail@gmail.com</p>
                </div>
            </div>


        </div>
    </div>

    <div class="right-part-about-us">
        <div class="right-part-all-items">
            <div class="header-right-part">
                <h1>About Us</h1>
            </div>
            <div class="content-about-us">
                <p>Welcome to our culinary haven, where every dish tells a story and every bite is a journey of flavors. At our restaurant, we are passionate about crafting unforgettable dining experiences that transcend the ordinary. <br><br>Our dedication to culinary excellence is reflected in every aspect of our menu, from the carefully curated ingredients to the artful presentation of each dish. Our team of skilled chefs and attentive staff are here to ensure that every visit is a memorable one, whether you're joining us for a casual meal or a special celebration.</p>
            </div>
            <div class="buttons-about-us">
                <button class="button1-about-us">Join Our Team</button>
                <button class="button2-about-us">More About Us</button>
            </div>
        </div>
    </div>

</div>










<!---->
<!--<footer>-->
<!---->
<!--    <div class="footer-container">-->
<!---->
<!--        <div class="column-1">-->
<!--            <h1>Restaurant</h1>-->
<!--            <br>-->
<!--            <p>Our dedication to culinary excellence is reflected in every aspect of our menu,-->
<!--                from the carefully curated ingredients to the artful presentation of each dish.-->
<!--                Our team of skilled chefs and attentive staff are here to ensure that every visit is a memorable one,-->
<!--                whether you're joining us for a casual meal or a special celebration.-->
<!--            </p>-->
<!--        </div>-->
<!---->
<!--        <div class="column-2">-->
<!--            <h1>Pages</h1>-->
<!--            <br><br>-->
<!--            <h4><a href="">Home</a></h4><br>-->
<!--            <h4><a href="">Menu</a></h4><br>-->
<!--            <h4><a href="">Contact</a></h4><br>-->
<!--            <h4><a href="">Profile</a></h4><br>-->
<!--            <h4><a href="">Order</a></h4><br>-->
<!--            <h4><a href="">Delivery</a></h4><br>-->
<!--        </div>-->
<!---->
<!--        <div class="column-3">-->
<!--            <h1>Follow Us </h1>-->
<!--            <br><br>-->
<!--            <div class="footer-image-container">-->
<!--                <div class="footer-img1">-->
<!--                    <img src="img/small1.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="footer-img2">-->
<!--                    <img src="img/small2.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="footer-img3">-->
<!--                    <img src="img/small3.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="footer-img4">-->
<!--                    <img src="img/small4.jpg" alt="">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!---->
<!--</footer>-->





<footer class="footer">
<!--    <video class="footer_video" muted="" loop="" autoplay src="//cdn.shopify.com/s/files/1/0526/6905/5172/t/5/assets/footer.mp4?v=29581141968431347981633714450" type="video/mp4">-->
<!--    </video>-->

    <div class="footer_video">

    </div>

    <div class="container">
        <div class="footer_inner">
            <div class="c-footer">
                <div class="layout">
                    <div class="layout_item w-50">
                        <div class="newsletter">
                            <h3 class="newsletter_title">Get updates on our latest dishes you probably want to know about in your inbox.</h3>
                            <form action="">
                                <input type="text" placeholder="Email Address">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="layout_item w-25">
                        <nav class="c-nav-tool">
                            <h4 class="c-nav-tool_title">Menu</h4>
                            <ul class="c-nav-tool_list">
                                <li>
                                    <a href="/collections/all" class="c-link">Shop All</a>
                                </li>

                                <li>
                                    <a href="/pages/about-us" class="c-link">About Us</a>
                                </li>

                                <li>
                                    <a href="/blogs/community" class="c-link">Community</a>
                                </li>
                                <li>
                                    <a href="#" class="c-link">Vibes</a>
                                </li>
                            </ul>
                        </nav>

                    </div>

                    <div class="layout_item w-25">
                        <nav class="c-nav-tool">
                            <h4 class="c-nav-tool_title">Support</h4>
                            <ul class="c-nav-tool_list">

                                <li class="c-nav-tool_item">
                                    <a href="/pages/shipping-returns" class="c-link">Shipping &amp; Returns</a>
                                </li>

                                <li class="c-nav-tool_item">
                                    <a href="/pages/help" class="c-link">Help &amp; FAQ</a>
                                </li>

                                <li class="c-nav-tool_item">
                                    <a href="/pages/terms-conditions" class="c-link">Terms &amp; Conditions</a>
                                </li>

                                <li class="c-nav-tool_item">
                                    <a href="/pages/privacy-policy" class="c-link">Privacy Policy</a>
                                </li>

                                <li class="c-nav-tool_item">
                                    <a href="/pages/contact" class="c-link">Contact</a>
                                </li>

                                <li class="c-nav-tool_item">
                                    <a href="/account/login" class="c-link">
                                        Login
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
                <div class="layout c-2">
                    <div class="layout_item w-50">
                        <ul class="flex">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M12 6.654a6.786 6.786 0 0 1 2.596 5.344A6.786 6.786 0 0 1 12 17.34a6.786 6.786 0 0 1-2.596-5.343A6.786 6.786 0 0 1 12 6.654zm-.87-.582A7.783 7.783 0 0 0 8.4 12a7.783 7.783 0 0 0 2.728 5.926 6.798 6.798 0 1 1 .003-11.854zm1.742 11.854A7.783 7.783 0 0 0 15.6 12a7.783 7.783 0 0 0-2.73-5.928 6.798 6.798 0 1 1 .003 11.854z" />
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M1 4h22v2H1V4zm0 14h22v2H1v-2zm18.622-3.086l-.174-.87h-1.949l-.31.863-1.562.003c1.005-2.406 1.75-4.19 2.236-5.348.127-.303.353-.457.685-.455.254.002.669.002 1.245 0L21 14.912l-1.378.003zm-1.684-2.062h1.256l-.47-2.18-.786 2.18zM7.872 9.106l1.57.002-2.427 5.806-1.59-.001c-.537-2.07-.932-3.606-1.184-4.605-.077-.307-.23-.521-.526-.622-.263-.09-.701-.23-1.315-.419v-.16h2.509c.434 0 .687.21.769.64l.62 3.289 1.574-3.93zm3.727.002l-1.24 5.805-1.495-.002 1.24-5.805 1.495.002zM14.631 9c.446 0 1.01.138 1.334.267l-.262 1.204c-.293-.118-.775-.277-1.18-.27-.59.009-.954.256-.954.493 0 .384.632.578 1.284.999.743.48.84.91.831 1.378-.01.971-.831 1.929-2.564 1.929-.791-.012-1.076-.078-1.72-.306l.272-1.256c.656.274.935.361 1.495.361.515 0 .956-.207.96-.568.002-.257-.155-.384-.732-.702-.577-.317-1.385-.756-1.375-1.64C12.033 9.759 13.107 9 14.63 9z" />
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M15 17a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zM2 2h4v20H2V2z" />
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1-6v2h2v-2h1a2.5 2.5 0 0 0 2-4 2.5 2.5 0 0 0-2-4h-1V6h-2v2H8v8h3zm-1-3h4a.5.5 0 1 1 0 1h-4v-1zm0-3h4a.5.5 0 1 1 0 1h-4v-1z" />
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M20.067 8.478c.492.88.556 2.014.3 3.327-.74 3.806-3.276 5.12-6.514 5.12h-.5a.805.805 0 0 0-.794.68l-.04.22-.63 3.993-.032.17a.804.804 0 0 1-.794.679H7.72a.483.483 0 0 1-.477-.558L7.418 21h1.518l.95-6.02h1.385c4.678 0 7.75-2.203 8.796-6.502zm-2.96-5.09c.762.868.983 1.81.752 3.285-.019.123-.04.24-.062.36-.735 3.773-3.089 5.446-6.956 5.446H8.957c-.63 0-1.174.414-1.354 1.002l-.014-.002-.93 5.894H3.121a.051.051 0 0 1-.05-.06l2.598-16.51A.95.95 0 0 1 6.607 2h5.976c2.183 0 3.716.469 4.523 1.388z" />
                                </svg>
                            </li>
                        </ul>
                    </div>
                    <div class="layout_item w-25">
                        <ul class="flex">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="layout_item w-25" style="display:flex;justify-content: end;align-items: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm1 10h3l-4-4-4 4h3v4h2v-4z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_copyright">
            <p>&copy; 2024 Feast Planner</p>
        </div>
    </div>
</footer>




<!--==================================================================================================================-->
<!-- home page -->
<!--==================================================================================================================-->

<script>

    TweenMax.to('.left', 2, {
        delay: .8,
        width: '50%',
        ease: Power2.easeInOut
    })

    TweenMax.to('.right', 2, {
        delay: .6,
        width: '50%',
        ease: Power3.easeInOut
    })

    TweenMax.from('.text h1', 2, {
        delay: .6,
        x: 1000,
        ease: Circ.easeInOut
    })

    TweenMax.from('.text p', 2, {
        delay: .7,
        x: 1000,
        ease: Circ.easeInOut
    })

    TweenMax.to('.home-image', 2, {
        delay: 1.5,
        width: '1000px',
        ease: Power2.easeInOut
    })

    TweenMax.staggerFrom('.bottomnav h1', 2, {
        delay: 1,
        x: 1000,
        ease: Circ.easeInOut
    }, 0.08)

    TweenMax.from('.name', 2, {
        delay: 1.5,
        x: -600,
        ease: Circ.easeInOut
    })

</script>


<!--==================================================================================================================-->
<!-- navbar -->
<!--==================================================================================================================-->
<script>
    var t1 = new TimelineMax({ paused: true });

    t1.to(".nav-container", 1, {
        left: 0,
        ease: Expo.easeInOut,
    });

    t1.staggerFrom(
        ".menu > div",
        0.8,
        { y: 100, opacity: 0, ease: Expo.easeOut },
        "0.1",
        "-=0.4"
    );

    t1.reverse();
    $(document).on("click", ".menu-open", function () {
        t1.reversed(!t1.reversed());
    });
    $(document).on("click", ".menu-close", function () {
        t1.reversed(!t1.reversed());
    });
</script>





<!--==================================================================================================================-->
<!-- image Scroller -->
<!--==================================================================================================================-->
<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>

<script>

    console.clear();

    gsap.registerPlugin(ScrollTrigger);

    const additionalY = { val: 0 };
    let additionalYAnim;
    let offset = 0;
    const cols = gsap.utils.toArray(".col");

    cols.forEach((col, i) => {
        const images = col.childNodes;

        // DUPLICATE IMAGES FOR LOOP
        images.forEach((image) => {
            var clone = image.cloneNode(true);
            col.appendChild(clone);
        });

        // BALLESH L ANIMATION
        images.forEach((item) => {
            let columnHeight = item.parentElement.clientHeight;
            let direction = i % 2 !== 0 ? "+=" : "-=";

            gsap.to(item, {
                y: direction + Number(columnHeight / 2),
                duration: 20,
                repeat: -1,
                ease: "none",
                modifiers: {
                    y: gsap.utils.unitize((y) => {
                        if (direction == "+=") {
                            offset += additionalY.val;
                            y = (parseFloat(y) - offset) % (columnHeight * 0.5);
                        } else {
                            offset += additionalY.val;
                            y = (parseFloat(y) + offset) % -Number(columnHeight * 0.5);
                        }

                        return y;
                    })
                }
            });
        });
    });

    const imagesScrollerTrigger = ScrollTrigger.create({
        trigger: "section",
        start: "top 50%",
        end: "bottom 50%",
        onUpdate: function (self) {
            const velocity = self.getVelocity();
            if (velocity > 0) {
                if (additionalYAnim) additionalYAnim.kill();
                additionalY.val = -velocity / 2000;
                additionalYAnim = gsap.to(additionalY, { val: 0 });
            }
            if (velocity < 0) {
                if (additionalYAnim) additionalYAnim.kill();
                additionalY.val = -velocity / 3000;
                additionalYAnim = gsap.to(additionalY, { val: 0 });
            }
        }
    });



</script>








<!--==================================================================================================================-->
<!-- About Us section -->
<!--==================================================================================================================-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<script>

    gsap.registerPlugin(ScrollTrigger);


    gsap.from(".about-us-image-container", {
        opacity: 0,
        x: -100,
        duration: 1,
        scrollTrigger: {
            trigger: ".about-us-image-container",
            start: "top 70%",
            // end: "top 10%",
            scrub: false,
            toggleActions: "play none none none", //7ot last reset 2eza badde yeha t3id
            markers: false,
        }
    })

    gsap.from(".about-us-location-container", {
        opacity: 0,
        y: 100,
        duration: 1,
        scrollTrigger: {
            trigger: ".about-us-location-container",
            start: "top 80%",
            // end: "top 10%",
            scrub: false,
            toggleActions: "play none none none",
            markers: false,
        }
    })


    gsap.from(".header-right-part", {
        opacity: 0,
        x: 100,
        duration: 1,
        scrollTrigger: {
            trigger: ".header-right-part",
            start: "top 80%",
            // end: "top 10%",
            scrub: false,
            toggleActions: "play none none none",
            markers: false,
        }
    })

    gsap.from(".content-about-us", {
        opacity: 0,
        x: 100,
        duration: 1,
        scrollTrigger: {
            trigger: ".content-about-us",
            start: "top 80%",
            // end: "top 10%",
            scrub: false,
            toggleActions: "play none none none",
            markers: false,
        }
    })

    gsap.from(".buttons-about-us", {
        opacity: 0,
        y: 100,
        duration: 1,
        scrollTrigger: {
            trigger: ".buttons-about-us",
            start: "top 80%",
            // end: "top 10%",
            scrub: false,
            toggleActions: "play none none none",
            markers: false,
        }
    })




</script>







</body>
</html>

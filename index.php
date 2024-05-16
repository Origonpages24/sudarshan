<!DOCTYPE .php>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Assets\Images\logo.png" type="image/x-icon">
    <title>SUDARSHAN | Explore Beyond Borders: Your Passport to Adventure!</title>



</head>

<body>
   <?php
    include 'navbar.php';
   ?>
    <!-- ending nav -->

    <!-- banner  -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Assets\Images\munnar.jpg" class="d-block w-100" alt="...">
                <div class="image-overlay"></div>
                <div class="carousel-caption">
                    <h1>Welcome to Sudarshan Holidays</h1>
                    <h6>Your Gateway to Unforgettable Journeys!</h6>
                    <p>At Sudarshan Holidays, we believe every journey is a story waiting to be told. Whether you're
                        dreaming of a sun-kissed beach retreat, a thrilling adventure in the mountains, an enriching
                        cultural immersion, or a destination wedding of your dreams we're here to turn your aspirations
                        into reality.
                    </p>
                    <a href="aboutus.php" class="btn">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Assets\Images\banner_2.jpg" class="d-block w-100" alt="...">
                <div class="image-overlay"></div>
                <div class="carousel-caption">
                    <h1>Explore With Sudarshan Holidays</h1>
                    <p>From the snow-capped peaks of Jammu & Kashmir to the pristine backwaters of Kerala, Sudarshan
                        Holidays brings you an unparalleled selection of destinations to discover. Our meticulously
                        crafted itineraries cater to every traveller's desires, ensuring a seamless and unforgettable
                        experience from start to finish.
                    </p>
                    <a href="aboutu.php" class="btn">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Assets\Images\banner_3.jpg" class="d-block w-100" alt="...">
                <div class="image-overlay"></div>
                <div class="carousel-caption">
                    <h1>Endless Possibilities, Impeccable Service</h1>
                    <p>With Sudarshan Holidays, the world is your oyster. From exhilarating wildlife safaris to serene
                        beach escapes, from historic cultural tours to adrenaline-pumping outdoor adventures, we offer a
                        diverse range of experiences to suit every taste and budget. Rest assured, our commitment to
                        excellence means you can expect nothing less than impeccable service, attention to detail, and
                        unwavering support throughout your journey.
                    </p>
                    <a href="aboutus..php" class="btn">Read More</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="Assets\Images\banner_4.jpg" class="d-block w-100" alt="...">
                <div class="image-overlay"></div>
                <div class="carousel-caption">
                    <h1>Your Adventure Begins Here</h1>
                    <p>Whether you're embarking on your first solo trip, celebrating a milestone occasion, or simply
                        craving a change of scenery, Sudarshan Holidays is here to make your travel dreams come true. So
                        why wait? Join us and embark on the adventure of a lifetime. Your journey starts now with
                        Sudarshan Holidays.

                    </p>
                    <a href="aboutus.php" class="btn">Read More</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- end of banner -->

    <!-- number types -->
    <div class="number-view">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="counter" data-target="4000">0</h1>
                    <p>Guest Served</p>
                </div>
                <div class="col">
                    <h1 class="counter" data-target="25">0</h1>
                    <p>Years of Experience</p>
                </div>
                <div class="col">
                    <h1 class="counter" data-target="90">0</h1>
                    <p>Countries Locations</p>
                </div>
                <div class="col">
                    <h1 class="counter" data-target="5000">0</h1>
                    <p>Tourist Destinations</p>
                </div>
            </div>
        </div>
    </div>

    <!-- end of number view -->

    <!-- about us -->

    <div class="about-us">
        <div class="container about">
            <div class="row about-flex-box">
                <div class="col about-image">
                    <img src="Assets\Images\about.jpg" alt="about img">
                </div>
                <div class="col about-us-content">
                    <div class="about-content-header">
                        <h1>ABOUT</h1>
                    </div>
                    <div class="about-content-para">
                        <p>Welcome to Sudarshan Holidays, your premier travel partner for unforgettable travel
                            experiences.
                            At Sudarshan Holidays, we understand that travel is not just about reaching a destination;
                            it's about the journey itself. With a passion for exploration and a commitment to providing
                            exceptional service, we strive to create personalized itineraries that cater to each
                            traveller's unique interests and preferences. Explore the world easily through our
                            comprehensive services, including international and domestic travel arrangements. Embark on
                            a romantic escape with our bespoke honeymoon packages, designed to create cherished memories
                            for you and your partner. Experience the spiritual essence with our pilgrimages, offering a
                            transformative journey
                        </p>
                        <a href="aboutus..php" class="about-btn btn">Read More <i class="bi bi-arrow-right" style="padding-left:8px"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- end about us  -->

    <!-- Serives -->
    <div class="service-main">
        <div class="service-header">
            <h1>Our Service</h1>
        </div>
        <div class="service-container container">
            <div class="service-card-wrapper">
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="Assets/Images/domestic&international.jpg" alt="domestic& international">
                    </div>
                    <div class="service-card-gradient"></div>
                    <div class="service-card-details">
                        <h4>Domestic & International <br> Packages</h4>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-card-image">
                        <img src="Assets/Images/Honey Moon.jpg" alt="domestic& international">
                    </div>
                    <div class="service-card-gradient"></div>
                    <div class="service-card-details">
                        <h4> Honeymoon Packages</h4>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-card-image">
                        <img src="Assets/Images/pilgrim.jpg" alt="domestic& international">
                    </div>
                    <div class="service-card-gradient"></div>
                    <div class="service-card-details">
                        <h4>Pilgrimage Packages
                        </h4>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-card-image">
                        <img src="Assets/Images/destinationwedding.jpg" alt="domestic& international">
                    </div>
                    <div class="service-card-gradient"></div>
                    <div class="service-card-details">
                        <h4>Destination Wedding Packages</h4>
                    </div>
                </div>

            </div>
        </div>
        <div class="service-card-btn">
            <a href="">View More <i class="bi bi-arrow-right" style="padding-left:8px"></i></a>
        </div>
    </div>


    <!-- end of service -->

    <!-- gallery section -->

    <section class="gallery-container">
        <div class="flex-container container">

            <div class="item1">
                <h1>GALLERY</h1>
            </div>
            <div class="item2">
                <div class="row">
                    <div class="col col-mb-4 box">
                        <img src="Assets\Images/destinationwedding(2).jpg" alt="">
                    </div>
                    <div class="col col-mb-4 box" >
                        <img src="Assets\Images\pilgrim.jpg" alt="">
                    </div>
                </div>
                <div class="row row-2">
                    <div class="col col-mb-4 box" >
                        <img src="Assets\Images\paris.jpg" alt="">
                    </div>
                    <div class="col col-mb-4 box" >
                        <img src="Assets\Images\kashmirad.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    <div class="gallery-btn">
        <a href="gallery.php">View More <i class="bi bi-arrow-right" style="padding-left:8px"></i></a>
    </div>
    </section>
    <!-- gallery ending -->

    <!-- testimonial -->
    <section class="testimonial-main">
        <div class="testimonial-container container">
            <div class="testimonial-header">
                <p>Testimonials</p>
                <h4> We Care About Our Customers Experience Too</h4>
            </div>

            <div class="container testimonial-cards">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <div class="card-profile">
                    <img src="Assets/Images/client1saju.jpeg" alt="clent_1">
                </div>
                <div class="card-details">
                    <h6 class="card-subtitle mb-2 text-muted">Saju K.P</h6>
                    <p class="card-text">"I can't thank Sudarshan Holidays enough for the incredible journey they provided. From the breathtaking landscapes to the immersive cultural experiences, every aspect of our trip was carefully curated to perfection. Their passion for travel shines through in everything they do, and I'm already planning my next adventure with Sudarshan Holidays!"</p>
                </div>
                <div class="review-star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-profile">
                    <img src="Assets/Images/client3Anusree.jpg" alt="">
                </div>
                <div class="card-details">
                    <h6 class="card-subtitle mb-2 text-muted">Anusree Dinesh</h6>
                    <p class="card-text">"Sudarshan Holidays exceeded all of our expectations! From the moment we arrived, we were greeted with warmth and hospitality. Their knowledgeable guides provided fascinating insights into each destination, and the seamless logistics made our trip stress-free. Without a doubt, Sudarshan Holidays is the only company I'll trust with my travel plans."</p>
                </div>
                <div class="review-star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-profile">
                    <img src="Assets/Images/client2Venkatesh.jpeg" alt="">
                </div>
                <div class="card-details">
                    <h6 class="card-subtitle mb-2 text-muted">Venkatesh Thyagarajan</h6>
                    <p class="card-text">"Sudarshan Holidays truly made our vacation unforgettable! Every detail was meticulously planned from the seamless booking process to the expertly crafted itinerary. Their personalized approach ensured that our trip exceeded all expectations. We can't wait to book our next adventure with Sudarshan Holidays!"</p>
                </div>
                <div class="review-star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>
        </div>
    </div>
</div>
            <div class="testimonial-btn" style="margin-top: 50px;">
                <a href="testimonial..php"> Read More <i class="bi bi-arrow-right" style="padding-left:8px"></i></a>
            </div>
        </div>
    </section>

    <!-- footer -->
  <?php
    include 'footer.php';
    include 'footerscript.php';
  ?>

   
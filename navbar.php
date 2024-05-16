<div class="contactpop_hover">
    <span class="helper"></span>
    <div>
        <div class="contactpop_close"><i class="bi bi-x"></i></div>
        <form method="POST" action="">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <h4>Contact Us</h4>
                            <br>
                            <form class="needs-validation" novalidate>
                                <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Enter your Name..." name="name"
                                        required>
                                    <div class="invalid-feedback">Please enter your name.</div>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="email" placeholder="Enter your email..."
                                        name="email" required>
                                    <div class="invalid-feedback">Please enter a valid email address.</div>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="tel" placeholder="Enter your Phone Number..."
                                        name="phone" required>
                                    <div class="invalid-feedback">Please enter a valid phone number.</div>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Please enter your message..."
                                        name="message" required></textarea>
                                    <div class="invalid-feedback">Please enter your message.</div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container navbar-elements">
        <a class="navbar-brand me-auto scrolled-logo" href="index.php"><img src="Assets\Images\logo.png" alt="logo"></a>
        <a class="navbar-brand me-auto default-logo" href="index.php"><img src="Assets\Images\logowhite.png"
                alt="logo"></a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> <a class="navbar-brand me-auto" href="index.php"><img
                            src="Assets\Images\logowhite.png" alt="logo"></a></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="packages.php" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Packages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="packages.php">Domestic & International</a></li>
                            <li><a class="dropdown-item" href="packages.php">Honeymoon</a></li>

                            <li><a class="dropdown-item" href="packages.php">Pilgrimage</a></li>
                            <li><a class="dropdown-item" href="packages.php">Destination Wedding</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="testimonial.php">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Button to trigger the modal -->
        <div class="contact-search">
            <button type="button" class="contactpop">Contact Us <i class="bi bi-arrow-right"></i></button>
        </div>
        <div class="contact-overlay">
            <div class="contact-overlay-content">
                <!-- Button trigger modal -->

                <!-- <div class="contact-overlay-form">
                    <input type="email" name="" placeholder="Enter Email" id="">
                    <br><br>
                    <input type="text" placeholder="Phone Number" id="">
                    <br>
                    <br>
                    <textarea name="" id="" cols="23" rows="5" placeholder="Message"></textarea>
                    <br> <br>
                    <input type="button" style="background-color: var(--primary-color);
                                    font-size: 15px;
                                    color: white;
                                    border: none;
                                    outline: none;
                                    width: 100px;
                                    text-align: center;
                                    " value="Submit" id="submitContact">
                </div> -->
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
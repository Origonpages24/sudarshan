<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container navbar-elements">
        <a class="navbar-brand me-auto scrolled-logo" href="#"><img src="Assets\Images\logo.png" alt="logo"></a>
        <a class="navbar-brand me-auto default-logo" href="#"><img src="Assets\Images\logowhite.png" alt="logo"></a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> <a class="navbar-brand me-auto" href="#"><img
                            src="Assets\Images\logo.png" alt="logo"></a></h5>
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
                    <li class="nav-item">
                        <a class="nav-link" href="service.php">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="testimonial.php">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Button to trigger the modal -->
        <div class="contact-search">
            <button type="button" id="openContact">Contact Us <i class="bi bi-arrow-right"></i></button>
        </div>
        <div class="contact-overlay" id="contactOverlay">
            <div class="contact-overlay-content">
                <div class="contact-overlay-header">
                    <h4>Contact Us</h4>
                </div>
                <div class="contact-overlay-form">
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
                </div>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<!DOCTYPE html>
<html lang="en">

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
    <!-- gallery header -->

    <section class="gallery-banner">
        <div class="gallery-banner-container">
            <div class="gallery-banner-main">
                <div class="gallery-banner-image">
                    <h1>Our Gallery</h1>

                </div>
            </div>
        </div>
    </section>

    <div class="gallery-container container">
        <div class="gallery-main">
            <!-- <div class="gallery-navbar">
                <div class="gallery-navlist nav-link active" >Domestice & International</div>
                <div class="gallery-navlist nav-link">Honeymoon</div>
                <div class="gallery-navlist nav-link">Pilgrimage</div>
                <div class="gallery-navlist nav-link">Destination Wedding</div>
            </div> -->

            <div class="gallery-navbar nav nav-tabs " id="galleryNav" role="tablist">
                 <div class="nav-item gallery-navbar-items" role="presentation">
                        <div class="nav-link  gallery-navbar-items active" id="domestic-international-tab" data-bs-toggle="tab" data-bs-target="#domestic-international" role="tab" aria-controls="domestic-international" aria-selected="true">Domestic & International</div>
                         </div>
                                <div class="nav-item gallery-navbar-items" role="presentation">
                                    <div class="nav-link gallery-navbar-items" id="honeymoon-tab" data-bs-toggle="tab" data-bs-target="#honeymoon" role="tab" aria-controls="honeymoon" aria-selected="false">Honeymoon</div>
                                </div>
                    <div class="nav-item gallery-navbar-items" role="presentation">
                        <div class="nav-link gallery-navbar-items" id="pilgrimage-tab" data-bs-toggle="tab" data-bs-target="#pilgrimage" role="tab" aria-controls="pilgrimage" aria-selected="false">Pilgrimage</div>
                    </div>
                    <div class="nav-item gallery-navbar-items" role="presentation">
                        <div class="nav-link gallery-navbar-items" id="destination-wedding-tab" data-bs-toggle="tab" data-bs-target="#destination-wedding" role="tab" aria-controls="destination-wedding" aria-selected="false">Destination Wedding</div>
                    </div>
                </div>
        </div>
   


    <!-- dommestic international -->

    <div class="gallery-images-flex-box container tab-content" id="domestic-international" style="margin-bottom: 100px;">
        <div class="gallery-images-domestic gallery-images">
            <img src="Assets\Images\Domestic&international(1).jpg" alt="international & Domestic">
        </div>
        <div class="gallery-images-domestic gallery-images">
            <img src="Assets\Images\domestic&international(2).jpg" alt="international & Domestic">
        </div>
        <div class="gallery-images-domestic gallery-images">
            <img src="Assets\Images\domestic&international(3).jpg" alt="international & Domestic">
        </div>
        <div class="gallery-images-domestic gallery-images">
            <img src="Assets\Images\domestic&international(4).jpg" alt="international & Domestic">
        </div>
        <div class="gallery-images-domestic gallery-images">
            <img src="Assets\Images\domestic&international(5).jpg" alt="international & Domestic">
        </div>
        <div class="gallery-images-domestic gallery-images">
            <img src="Assets\Images\domestic&international(6).jpg" alt="international & Domestic">
        </div>
        <div class="gallery-images-domestic gallery-images">
            <img src="Assets\Images\domestic&international(7).jpg" alt="international & Domestic">
        </div>
        <div class="gallery-images-domestic gallery-images">
            <img src="Assets\Images\domestic&international(8).jpg" alt="international & Domestic">
        </div>
        <div class="gallery-images-domestic gallery-images">
            <img src="Assets\Images\domestic&international(9).jpg" alt="international & Domestic">
        </div>
        <div class="gallery-images-domestic gallery-images">
            <img src="Assets\Images\domestic&international(10).jpg" alt="international & Domestic">
        </div>
        <div class="gallery-images-domestic gallery-images">
            <img src="Assets\Images\domestic&international(11).jpg" alt="international & Domestic">
        </div>

    </div>

    

    <!-- honeymoon packages -->

    <div class="honeymoon-container tab-content" id="honeymoon">
        <div class="gallery-images-flex-box container">
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\honeymoonpackages(2).jpg" alt="honeymoon ">
            </div>
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\honeymoonpackages(3).jpg" alt="honeymoon ">
            </div>
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\honeymoonpackages(4).jpg" alt="honeymoon ">
            </div>
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\honeymoonpackages(5).jpg" alt="honeymoon ">
            </div>
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\honeymoonpackages(6).jpg" alt="honeymoon ">
            </div>
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\honeymoonpackages(7).jpg" alt="honeymoon ">
            </div>
        </div>
    </div>

    <div class="pilgrimage-container tab-content" id="pilgrimage">
        <div class="gallery-images-flex-box container">
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\pilgrimage(1).jpg" alt="honeymoon ">
            </div>
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\pilgrimage(2).jpg" alt="pilgrimage ">
            </div>
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\pilgrimage(3).jpg" alt="pilgrimage ">
            </div>
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\pilgrimage(4).jpg" alt="pilgrimage ">
            </div>
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\pilgrimpackages(5).jpg" alt="pilgrimage ">
            </div>
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\pilgrimage(6).jpg" alt="pilgrimage ">
            </div>
        </div>
    </div>

    <div class="destination-wedding-container tab-content" id="destination-wedding">
        <div class="gallery-images-flex-box container">
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\destinationwedding(1).jpg" alt="destination-wedding ">
            </div>
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\destinationwedding(2).jpg" alt="destination-wedding ">
            </div>
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\destinationwedding(3).jpg" alt="destination-wedding ">
            </div>
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\destinationwedding(4).jpg" alt="destination-wedding ">
            </div>
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\destinationwedding(5).jpg" alt="destination-wedding ">
            </div>
            <div class="gallery-images-honeymoon gallery-images">
                <img src="Assets\Images\destinationwedding(6).jpg" alt="destination-wedding ">
            </div>
        </div>
    </div>

    </div>
    <!-- footer -->
    <?php
    include 'footer.php';
    include 'footerscript.php';
  ?>

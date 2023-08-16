<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./imgs/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">



    <link rel="stylesheet" href="./style/style.css">
    <title>HOME</title>
</head>

<body transition-style="in:wipe:bottom-right">

    <?php
    
    include "header.php";

    ?>




    <section class="hero-main page-width">

        <div class="hero-main-text">

<img src="./imgs/Group 21111111111111111111111111.png" class="ractangle-1" alt="">
            <h4>Welcome to Signagekart </h4>
            <h1>Best Innovative Product Providers</h1>
            <p>Comprehensive, client-centric and affordable import and export solutions for electronic display and other
                products.</p>
            <a class="get-consult-home btn-ani" href="./contact-us.php">Get Quote >></a>
        </div>

        <img class="side-img-hero" src="./imgs/HEROMAIN-IMG-1111111.png" alt="">



    </section>



    <?php
    
    include "features.php";

    ?>

    <?php
    
    include "about-section.php";

    ?>



    <?php
    
    include "quality-section.php";

    ?>





    <?php
    
    include "product-section.php";

    ?>










    <?php
    
    include "testimonial.php";

    ?>








    <?php
    
    include "contact-section.php";

    ?>





    <?php
    
    include "footer.php";

    ?>
    </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
        integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>

            gsap.from(".side-img-hero", {
                delay: 0.4,
                opacity: 0,
                duration: 1,
                x: 60
            })
        
            
            gsap.from(".hero-main-text", {
                delay: 0.4,
                opacity: 0,
                duration: 1,
                x: -60
            })
        
        
        </script>
</body>

</html> 
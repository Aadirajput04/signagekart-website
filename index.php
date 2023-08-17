<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./imgs/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

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

        <div class="swiper mySwiper">
            
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./imgs/HEROMAIN-IMG-1111111.png" alt=""></div>
                <div class="swiper-slide"><img src="./imgs/0000000000000000000000000000000000.png" alt=""></div>
                <div class="swiper-slide"><img src="./imgs/HEROMAIN-IMG-1111111.png" alt=""></div>
                <div class="swiper-slide"><img src="./imgs/0000000000000000000000000000000000.png" alt=""></div>
                <div class="swiper-slide"><img src="./imgs/HEROMAIN-IMG-1111111.png" alt=""></div>
               
            </div>
            <div class="swiper-pagination"></div>
        </div>



    </section>



    <?php
    
    include "features.php";

    ?>

    <?php
    
    include "about-section.php";

    ?>

    <section class="hologram-main side-padding page-width">
        <div class="left-holo-info">


            <div class="holo-first">

                <img src="./imgs/holo-icon-1.png" alt="">
                <h4>Holograms</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus.</p>
                <a class="bg-blue" href="#"> explore >></a>




            </div>
            <div class="holo-second"> <img src="./imgs/holo-icon-2.png" alt="">
                <h4>Media Player</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus.</p>
                <a href="#">explore >></a>
            </div>
            <div class="holo-third"> <img src="./imgs/holo-icon-3.png" alt="">
                <h4>Signage Board</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus.</p>
                <a href="#">explore >></a>
            </div>
        </div>
        <div class="right-holo-img">

            <img src="./imgs/hologram-img.png" alt="products" class="holo-main-img">
            <a class="view-more-btn" href="#">View more<svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"
                    viewBox="0 0 46 46" fill="none">
                    <g clip-path="url(#clip0_422_402)">
                        <path
                            d="M32.9606 10.9159L32.9589 10.9158L23.7708 10.938C23.0825 10.9397 22.5258 11.499 22.5274 12.1874C22.529 12.8758 23.0884 13.4325 23.7767 13.4309L29.9456 13.4159L11.2807 32.0808C10.7939 32.5675 10.7939 33.3567 11.2807 33.8434C11.7675 34.3302 12.5566 34.3302 13.0434 33.8434L31.7082 15.1786L31.6933 21.3474C31.6917 22.0357 32.2484 22.5951 32.9367 22.5967C33.6252 22.5984 34.1845 22.0415 34.1862 21.3533L34.2084 12.1651L34.2083 12.1635C34.209 11.4738 33.6481 10.9151 32.9606 10.9159Z"
                            fill="#035AA6" stroke="#035AA6" />
                    </g>
                    <defs>
                        <clipPath id="clip0_422_402">
                            <rect width="31.9078" height="31.9078" fill="white"
                                transform="translate(0 22.5623) rotate(-45)" />
                        </clipPath>
                    </defs>
                </svg></a>


        </div>


    </section>








    <?php
    
    include "quality-section.php";

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
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
        integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>


        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 0,
            loop:true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

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
<section class="about-main-box page-width side-padding">


    <div class="about-text-box">

<img src="./imgs/Group 1000002224.png" alt="">








        <div class="left-about-text-box">
            <h3>Who We Are</h3>
            <img class="blue-line-dot" src="./imgs/blue-left-line.png" alt="">

            <h2>About Us</h2>
            <p>We are known as pioneer in terms of 3D Holographic Fan. During our service offerings, we have always
                ensured
                that the services rendered are extremely affordable and bring value to our patrons.
                This client-first approach that we have interwovento the very fundamental service philosophies havehelps
                us
                keep our client happy, satisfied and caredfor with each transaction</p>


            <a class="know-more-btn" href="#"> Know More >></a>


        </div>



    </div>



</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"
    integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

    gsap.from(".about-text-box", {
        scrollTrigger: {
            trigger: ".play-btn",
            scroller: "body"
        },
        delay: 0.4,
        opacity: 0,
        duration: 1,
        x: -80
    })
    
    gsap.from(".play-btn", {
        scrollTrigger: {
            trigger: ".play-btn",
            scroller: "body"
        },
        delay: 0.4,
        opacity: 0,
        duration: 1,
        x: 90
    })

</script>
<div class="caraousal-box page-width">
    <h5>What People Says</h5>
    <img class="middle-line-dot" src="./imgs/blue-middle-linedot.png" alt="">
    <h4>Testimonial</h4>
    <p>Although we don't want to brag about ourselves, we don't mind when our clients  <br> do it for us. See what some of our
        most prosperous clients have to say about their interactions with us.</p>

    <div class="swiper-container">  
        <div class="swiper-wrapper">
            <div class="swiper-slide yellow-slide">
                <div class="about-first-line">
                    <img src="./imgs/testi-1.png" alt="">
                    <div class="about-dev-info">
                        <h3>Aaditya rajput</h3>
                        <span>Web Devloper</span>
                    </div>
                    <img class="comma" src="./imgs/comma.png" alt="">

                </div>
                <div class="about-info-detail">
                    <p>The quality of a company's output determines its value. So, we'll let the finished products speak
                        for themselves. Here are some of our prize-winning projects that turned our clients become
                        household names:</p>
                </div>

            </div>
            <div class="swiper-slide green-slide">
                <div class="about-first-line">
                    <img src="./imgs/testi-1.png" alt="">
                    <div class="about-dev-info">
                        <h3>Aaditya rajput</h3>
                        <span>Web Devloper</span>
                    </div>
                    <img class="comma" src="./imgs/comma.png" alt="">

                </div>
                <div class="about-info-detail">
                    <p>The quality of a company's output determines its value. So, we'll let the finished products speak
                        for themselves. Here are some of our prize-winning projects that turned our clients become
                        household names:</p>
                </div>

            </div>
            <div class="swiper-slide red-slide">
                <div class="about-first-line">
                    <img src="./imgs/testi-1.png" alt="">
                    <div class="about-dev-info">
                        <h3>Aaditya rajput</h3>
                        <span>Web Devloper</span>
                    </div>
                    <img class="comma" src="./imgs/comma.png" alt="">

                </div>
                <div class="about-info-detail">
                    <p>The quality of a company's output determines its value. So, we'll let the finished products speak
                        for themselves. Here are some of our prize-winning projects that turned our clients become
                        household names:</p>
                </div>
            </div>
            <div class="swiper-slide red-slide">
                <div class="about-first-line">
                    <img src="./imgs/testi-1.png" alt="">
                    <div class="about-dev-info">
                        <h3>Aaditya rajput</h3>
                        <span>Web Devloper</span>
                    </div>
                    <img class="comma" src="./imgs/comma.png" alt="">
                </div>
                <div class="about-info-detail">
                    <p>The quality of a company's output determines its value. So, we'll let the finished products speak
                        for themselves. Here are some of our prize-winning projects that turned our clients become
                        household names:</p>
                </div>
            </div>

            <div class="swiper-slide yellow-slide">
                <div class="about-first-line">
                    <img src="./imgs/testi-1.png" alt="">
                    <div class="about-dev-info">
                        <h3>Aaditya rajput</h3>
                        <span>Web Devloper</span>
                    </div>
                    <img class="comma" src="./imgs/comma.png" alt="">
                </div>
                <div class="about-info-detail">
                    <p>The quality of a company's output determines its value. So, we'll let the finished products speak
                        for themselves. Here are some of our prize-winning projects that turned our clients become
                        household names:</p>
                </div>
            </div>
            <div class="swiper-slide green-slide">
                <div class="about-first-line">
                    <img src="./imgs/testi-1.png" alt="">
                    <div class="about-dev-info">
                        <h3>Aaditya rajput</h3>
                        <span>Web Devloper</span>
                    </div>
                    <img class="comma" src="./imgs/comma.png" alt="">
                </div>
                <div class="about-info-detail">
                    <p>The quality of a company's output determines its value. So, we'll let the finished products speak
                        for themselves. Here are some of our prize-winning projects that turned our clients become
                        household names:</p>
                </div>
            </div>
            <div class="swiper-slide red-slide">
                <div class="about-first-line">
                    <img src="./imgs/testi-1.png" alt="">
                    <div class="about-dev-info">
                        <h3>Aaditya rajput</h3>
                        <span>Web Devloper</span>
                    </div>
                    <img class="comma" src="./imgs/comma.png" alt="">
                </div>
                <div class="about-info-detail">
                    <p>The quality of a company's output determines its value. So, we'll let the finished products speak
                        for themselves. Here are some of our prize-winning projects that turned our clients become
                        household names:</p>
                </div>
            </div>
            <div class="swiper-slide red-slide">
                <div class="about-first-line">
                    <img src="./imgs/testi-1.png" alt="">
                    <div class="about-dev-info">
                        <h3>Aaditya rajput</h3>
                        <span>Web Devloper</span>
                    </div>
                    <img class="comma" src="./imgs/comma.png" alt="">
                </div>
                <div class="about-info-detail">
                    <p>The quality of a company's output determines its value. So, we'll let the finished products speak
                        for themselves. Here are some of our prize-winning projects that turned our clients become
                        household names:</p>
                </div>
            </div>

            <!-- Add more slides as needed -->
        </div>

    </div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        slidesPerView: 3,
        centeredSlides: true,

        // If you want navigation buttons
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // When window width is >= 400px
            350: {
                slidesPerView: 1,

                slideChangeTransitionStart: function () {
                const activeSlide = document.querySelector('.swiper-slide-active');
                const prevSlide = activeSlide.previousElementSibling || activeSlide.nextElementSibling;
                const nextSlide = activeSlide.nextElementSibling || activeSlide.previousElementSibling;

                activeSlide.style.transform = 'scale(1.1)';
                prevSlide.style.transform = 'scale(0.7)';
                nextSlide.style.transform = 'scale(0.7)';
            },
                
            },
            // When window width is >= 768px
            768: {
                slidesPerView: 3,
            },
        },

        on: {
            slideChangeTransitionStart: function () {
                const activeSlide = document.querySelector('.swiper-slide-active');
                const prevSlide = activeSlide.previousElementSibling || activeSlide.nextElementSibling;
                const nextSlide = activeSlide.nextElementSibling || activeSlide.previousElementSibling;

                activeSlide.style.transform = 'scale(1.2)';
                prevSlide.style.transform = 'scale(0.8)';
                nextSlide.style.transform = 'scale(0.8)';
            },
        },
    });
    function autoChangeSlide() {
        swiper.slideNext();
        setTimeout(autoChangeSlide, 4000); // Repeat the function after 4 seconds
    }

    // Automatically start the autoChangeSlide function after 0.2 seconds (happens only once)
    setTimeout(autoChangeSlide, 100);
</script>
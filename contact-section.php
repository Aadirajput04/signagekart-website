<section class="contact-us-main side-padding page-width">


    <div class="head-text">
        <h3>Contact Us</h3>
    </div>
    <div class="contact-box">
        <img class="contact-img-side" src="./imgs/contact-left-img.png" alt="">
        <div class="contact-forms-1">

            <div class="contact-form">

                <form action="submit.php" method="post">

                    <input type="text" id="name" placeholder="name" name="name" required>


                    <input type="email" id="email" placeholder="Email" name="email" required>


                    <input type="tel" id="phone" placeholder="Phone number" name="phone" required>


                    <textarea id="message" name="message" placeholder="Message" rows="5" required></textarea>

                    <button type="submit">Submit >></button>
                </form>
            </div>



        </div>





    </div>

</section>

<script>
    gsap.from(".contact-img-side", {
        scrollTrigger: {
            trigger: "#message",
            scroller: "body"

        },
        delay: 0.3,
        opacity: 0,
        duration: 1,
        y: -80



    })

    gsap.from(".contact-form", {
        scrollTrigger: {
            trigger: "#message",
            scroller: "body"

        },
        delay: 0.3,
        opacity: 0,
        duration: 1,
        y: 80

    })
</script>
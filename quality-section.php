<section class="quality-main-box page-width side-padding hide-scroll">


    <div class="quality-child-box">

        <div class="quality-box">
            <div class="q-layer">

                <img src="./imgs/q1.png" alt="">
                <h4>Quality Assurance</h4>
            </div>

            <p>A unique and operation-specific quality system to ensure impeccable service offerings to all our clients.
                Team of quality professionals to monitors all transactions & to warrant top-notch service deliver to all
                of
                our clients at all times.</p>
        </div>

        <div class="quality-box">
            <div class="q-layer">

                <img src="./imgs/q2.png" alt="">
                <h4>Client Satisfaction</h4>
            </div>

            <p>A unique and operation-specific quality system to ensure impeccable service offerings to all our clients.
                Team of quality professionals to monitors all transactions & to warrant top-notch service deliver to all
                of
                our clients at all times.</p>
        </div>

        <div class="quality-box">
            <div class="q-layer">

                <img src="./imgs/q3.png" alt="">
                <h4>Affordable Pricing</h4>
            </div>

            <p>A unique and operation-specific quality system to ensure impeccable service offerings to all our clients.
                Team of quality professionals to monitors all transactions & to warrant top-notch service deliver to all
                of
                our clients at all times.</p>
        </div>

        <div class="quality-box">
            <div class="q-layer">

                <img src="./imgs/q4.png" alt="">
                <h4>Industry Exposure & Knowledge</h4>
            </div>

            <p>A unique and operation-specific quality system to ensure impeccable service offerings to all our clients.
                Team of quality professionals to monitors all transactions & to warrant top-notch service deliver to all
                of
                our clients at all times.</p>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"
    integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

    gsap.from(".quality-box", {
        scrollTrigger: {
            trigger: ".quality-box",
            scroller: "body"
        },
        delay: 0.5,
        opacity: 0,
        duration: 1,
        x: 70
    })

</script>
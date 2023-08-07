<div class="features-main-box page-width side-padding hide-scroll">


    <div class="features-child-box section">


        <div class="featur-box">
            <div class="f-img">
                <img src="./imgs/f-img.png" alt="">
            </div>

            <h4>Procurement of Products</h4>
            <p>Ensures Quality Benchmarks & wide plethora of techniques</p>


        </div>


        <div class="featur-box">
            <div class="f-img">
                <img src="./imgs/shipping-f-img.png" alt="">
            </div>

            <h4>Shipping</h4>
            <p>Consignments Always are on Scheduls</p>


        </div>

        <div class="featur-box">
            <div class="f-img">
                <img src="./imgs/customer-f-img.png" alt="">
            </div>

            <h4>Customer & Services</h4>
            <p>Endowead with the requied tools paid semples and quality cheks.</p>


        </div>

    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
    integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"
    integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

gsap.from(".features-child-box", {
    scrollTrigger:{
        trigger:".featur-box",
        scroller:"body"
    },
                delay: 0.5,
                opacity: 0,
                duration: 1,
                y: 70
            })
        
        
    </script>
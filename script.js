
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


gsap.from(".caraousal-box", {
    scrollTrigger: {
        trigger: ".swiper-container",
        scroller: "body"   

    },
    delay: 1,
    opacity: 0,
    duration: 1,
    y: 80
})


gsap.from(".quality-box", {
    scrollTrigger: {
        trigger: ".quality-box",
        scroller: "body"
    },
    delay: 0.5,
    opacity: 0,
    duration: 1,
    x: 80
})


gsap.from(".product-head-text", {
    scrollTrigger: {
        trigger: ".product-head-text",
        scroller: "body"
      
    },
    delay: 0.5,
    opacity: 0,
    duration: 1,
    x: -80
   
})

gsap.from(".product-boxes-child", {
    scrollTrigger: {
        trigger: ".product-boxes-child",
        scroller: "body"
      
    },
    delay: 0.5,
    opacity: 0,
    duration: 1,
    x: 80
   
})


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
        
    gsap.from(".contact-img-side", {
        scrollTrigger: {
            trigger: ".head-text",
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
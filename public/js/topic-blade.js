const swiperEl = document.querySelector('swiper-container')

    Object.assign(swiperEl, {
        slidesPerView: 3,
        spaceBetween: 20,
        breakpoints: {
            320: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            375: {
                slidesPerView: 1.7,
                spaceBetween: 20,
            },
            525: {
                slidesPerView: 2.3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3.2,
                spaceBetween: 20,
            },
        },
    })
swiperEl.initialize();
const swiperEl = document.querySelector('.topBannerSwiper')

    const params = {
        injectStyles: [
            `   .swiper{
                position:static;
                }
                .swiper-button-next.swiper-button-disabled, .swiper-button-prev.swiper-button-disabled{
                    opacity:0;
                }
                .swiper-button-next, .swiper-button-prev{
                    width:40px;
                    height:40px;
                    border-radius: 50%;
                    background: #ffffff; 
                    box-shadow: 0 3px 6px #999999
                }
                .swiper-button-next svg, .swiper-button-prev svg{
                    width:10px;
                    height:18px;
                    color:#9b9b9b;
                    stroke: #9b9b9b;
                    stroke-width: 1.5px
                }
                .swiper-button-prev{
                    left:-20px;
                }
                .swiper-button-next{
                    right:-20px;
                }
                @media (max-width: 1024px) {
                    .swiper-button-next, .swiper-button-prev{
                        display:none;
                    }
                }
            `
        ],
    }
    Object.assign(swiperEl, params, {
        slidesPerView: 3,
        spaceBetween: 20,
        breakpoints: {
            320: {
                slidesPerView: 1.4,
                spaceBetween: 20,
            },
            375: {
                slidesPerView: 1.2,
                spaceBetween: 20,
            },
            525: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2.5,
                spaceBetween: 20,
            },
            1025: {
                slidesPerView: 2.7,
                spaceBetween: 20,
            },
            1440: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
    })

swiperEl.initialize();
const swiperEl = document.querySelector('swiper-container')

    const params = {
        injectStyles: [`
        .swiper{
        border-radius:20px 20px 0 0;
        }
        .swiper-pagination{
        bottom:70px!important;
        }
        .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        text-align: center;
        color: #ffffff;
        opacity: .5;
        background: #ffffff;
        }

        .swiper-pagination-bullet-active {
        color: #fff;
        background: #fff;
        opacity: 1;
        width:18px;
        border-radius:4px;
        }
        `],
        pagination: {
            clickable: true,
            renderBullet: function(index, className) {
                return '<span class="' + className + '">' + "</span>";
            },
        },
    }

    Object.assign(swiperEl, params, {
        slidesPerView: 1,
        pagination: false,
        breakpoints: {
            320: {
                slidesPerView: 1.3,
                spaceBetween: 20,
            },
            375: {
                slidesPerView: 1.5,
                pagination: false,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                pagination: false,
                spaceBetween: 20,
            },
            1025: {
                slidesPerView: 1,
            },
        },
    })
swiperEl.initialize();
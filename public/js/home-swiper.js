const swiperEl = document.querySelector('swiper-container')
        const swiper2 = document.querySelector('.recommendSwiper')

        const params = {
            injectStyles: [`
          .swiper{
            border-radius:20px;
          }
          .swiper-pagination{
            right:27px;
            left:unset!important;
            width:15%!important;
            bottom:20px!important;
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
            @media (max-width: 767px) {
                .swiper{
                    border-radius:0px;
                }
                .swiper-pagination-bullet {
                    width: 0.571rem;
                    height: 0.571rem;
                }
                .swiper-pagination-bullet-active {
                    width:1.286rem;
                }
                .swiper-pagination{
                    width:17%!important;
                    bottom:1.929rem!important;
                    right:1.429rem;
                }   
                .swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet, .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet{
                    margin: 0 0.286rem;
                }
            }
          `],
            pagination: {
                clickable: true,
                renderBullet: function(index, className) {
                    return '<span class="' + className + '">' + "</span>";
                },
            },
        }

        Object.assign(swiperEl, params)

        const recommendSwiper2 = {
            injectStyles: [`
          .swiper{
            position:static;
          }
          .swiper-button-next, .swiper-button-prev{
            top: 0;
            width:30px;
            height:30px;
            margin-top: -57px;
            border-radius: 10px;
            background: #efefef; 
          }
          .swiper-button-next svg, .swiper-button-prev svg{
            width:8px;
            height:15px;
            color:#aa9ea9;
          }
          .swiper-button-prev{
            right:40px;
            left:unset;
          }
          .swiper-button-next{
            right:0;
          }
          .swiper-button-next.swiper-button-disabled, .swiper-button-prev.swiper-button-disabled{
            opacity:1;
          }
         .swiper-button-next.swiper-button-disabled svg, .swiper-button-prev.swiper-button-disabled svg{
            opacity: .5;
          }
        @media (max-width: 767px) {
            .swiper-button-next, .swiper-button-prev{
                display:none
            }
        }
          `],
        }
        Object.assign(swiper2, recommendSwiper2, {
            slidesPerView: 8,
            spaceBetween: 40,
            breakpoints: {
                320: {
                    slidesPerView: 3.2,
                    spaceBetween: 10,
                },
                375: {
                    slidesPerView: 3.5,
                    spaceBetween: 20,
                },
                525: {
                    slidesPerView: 4.3,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 6,
                    spaceBetween: 30,
                },
                1025: {
                    slidesPerView: 7,
                    spaceBetween: 25,
                },
                1440: {
                    slidesPerView: 8,
                    spaceBetween: 40,
                },
            },
        })
        swiperEl.initialize();
        swiper2.initialize();

        const swiper3 = document.querySelector('.top-game-swiper')
        Object.assign(swiper3, {
            slidesPerView: 3.3,
            spaceBetween: 10,
            breakpoints: {
                320: {
                    slidesPerView: 2.8,
                    spaceBetween: 10,
                },
                375: {
                    slidesPerView: 3.5,
                    spaceBetween: 10,
                },
                525: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                },
                1025: {
                    slidesPerView: 2.5,
                    spaceBetween: 10,
                },
                1200: {
                    slidesPerView: 3.3,
                    spaceBetween: 10,
                },
            },
        });
        swiper3.initialize();
        const swiper4 = document.querySelector('.top-applications-swiper')
        Object.assign(swiper4, {
            slidesPerView: 3.3,
            spaceBetween: 10,
            breakpoints: {
                320: {
                    slidesPerView: 2.8,
                    spaceBetween: 10,
                },
                375: {
                    slidesPerView: 3.5,
                    spaceBetween: 10,
                },
                525: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                },
                1025: {
                    slidesPerView: 2.5,
                    spaceBetween: 10,
                },
                1200: {
                    slidesPerView: 3.3,
                    spaceBetween: 10,
                },
            },
        });
        swiper4.initialize();
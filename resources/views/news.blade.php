<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('imgs/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <script src="{{ asset('js/main.js') }}"></script>
    <script> var assetBaseUrl = "{{ asset('') }}"; </script>
    <script src="{{ asset('js/news.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>攻略教程</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="yes" name="apple-touch-fullscreen"/>
    <link rel="canonical" href=""/>
    <link rel="shortcut icon" href="{{ asset('imgs/favicon.ico') }}" type="image/x-icon"/>
  </head>
  <body>
    <header>
        <div class="container">
            <a href="{{ url('/pages/index') }}"><img src="{{ asset('imgs/logo.png') }}" class="logo-image" alt="世界蓝 Logo"/></a>
            <ul>
                <li>
                    <a href="{{ url('/pages/index') }}"><img src="{{ asset('imgs/header/home_icon.png') }}" alt="Home Icon" /><p>首页</p></a>
                </li>
                <li>
                    <a href="{{ url('/pages/games') }}"><img src="{{ asset('imgs/header/game_icon.png') }}" alt="Game Icon" /><p>手机游戏</p></a>
                </li>
                <li>
                    <a href="{{ url('/pages/applications') }}"><img src="{{ asset('imgs/header/app_icon.png') }}" alt="App Icon" /><p>软件应用</p></a>
                </li>
                <li class="active">
                    <a href="{{ url('/pages/news') }}"><img src="{{ asset('imgs/header/news_icon.png') }}" alt="News Icon" /><p>攻略教程</p></a>
                </li>
                <li>
                    <a href="{{ url('/pages/topics') }}"><img src="{{ asset('imgs/header/topic_icon.png') }}" alt="Topic Icon" /><p>专题合集</p></a>
                </li>
                <li>
                    <a href="{{ url('/pages/top') }}"><img src="{{ asset('imgs/header/top_icon.png') }}" alt="Top Icon" /><p>排行榜</p></a>
                </li>
            </ul>
        </div>
    </header>

    <div class="news-page">
        <h1>攻略教程</h1>
        <div class="container">
            <div class="top-breadcrumb">
                <p>当前位置：<a href="{{ url('/pages/index') }}">首页</a> 
                    <svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="4px" height="8px">
                   <path fill-rule="evenodd"  fill="rgb(210, 210, 210)"
                    d="M-0.000,-0.000 L3.1000,3.1000 L-0.000,7.1000 L-0.000,-0.000 Z"/>
                   </svg> 攻略教程</p>
            </div>
            <div class="news-top-panel">
                <swiper-container class="mySwiper latestNewsSwiper" space-between="24" slides-per-view="3" pagination="true" init="false">
                </swiper-container>
            </div>

            <div class="news-main-panel">
                <div class="all-news-panel">
                    <div class="title-panel">
                        <h2>全部资讯</h2>
                        <div class="news-tab">
                            <div class="all-news">
                                <img src="{{ asset('imgs/news/all-news-icon.png') }}" alt="All News Button" />
                                <p>全部资讯</p>
                            </div>
                            <div class="game-news">
                                <div class="imgBg">
                                  <img src="{{ asset('imgs/news/game-news-icon.png') }}" alt="Game News Button" />
                                </div>
                                <p>手游资讯</p>
                            </div>
                            <div class="app-news">
                                <div class="imgBg">
                                  <img src="{{ asset('imgs/news/app-news-icon.png') }}" alt="App News Button" />
                                </div>
                                <p>应用资讯</p>
                            </div>
                        </div>
                    </div>
                    <div class="news-list"></div>
                    <div class="pagination"></div>
                </div>
                <div class="hot-news-panel">
                    <div class="title-panel">
                        <img src="{{ asset('imgs/news/hotNewsIcon.png') }}"  alt="Hot News Icon"/>
                        <h2>热门资讯</h2>
                    </div>
                    <div class="hot-news-list"></div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-link-panel">
                <h2>友情链接</h2>
                <div class="link-list">
                    <div>东方手游网</div>
                    <div>东方手游网</div>
                    <div>东方手游网</div>
                </div>
            </div>
            <div class="logo">
                <a href="{{ url('/pages/index') }}"><img src="{{ asset('imgs/logo_footer.png') }}" class="logo-image" alt="世界蓝 Logo"/></a>
            </div>
            <p class="copyright">Copyright © 2017-2024 leduse.com All Rights Reserved. 恒爱下载站 版权所有 鄂ICP备19015743号-3</p>
        </div>
    </footer>

    <script>
        const swiperEl = document.querySelector('.latestNewsSwiper')

        const params = {
            injectStyles: [`
            .swiper{
                padding-bottom:2.63rem;
            }
            .swiper-pagination{
                bottom:0.75rem!important;
            }
            .swiper-pagination-bullet {
                width: 12px;
                height: 8px;
                background: #ffffff;
                border-radius:4px;
                opacity:1;
                margin:0 0.38rem!important;
            }
            .swiper-pagination-bullet-active {
                background: linear-gradient(45deg, rgb(74,171,255) 0%, rgb(56,196,232) 100%);
                width:22px;
            }
            `],
            pagination: {
                clickable: true,
                renderBullet: function (index, className) {
                    return `<span class="${className}"></span>`;
                }
            }
        };

        // Assign Swiper parameters
        Object.assign(swiperEl, params);
        swiperEl.initialize();

    </script>
    
  </body>
</html>
@extends('layouts.app')

@section('title', __('auth.info_title'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/info.css') }}">
@endsection

@section('content')

    <body style="background: #f9f9f9;">
        <div class="nav-list">
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">{{ __('auth.homepage') }}</a>
            <a href="{{ url('/games') }}" class="{{ request()->is('games') ? 'active' : '' }}">{{ __('auth.game') }}</a>
            <a href="{{ url('/application') }}"
                class="{{ request()->is('application') ? 'active' : '' }}">{{ __('auth.app') }}</a>
            <a href="{{ url('/info') }}" class="{{ request()->is('info') ? 'active' : '' }}">{{ __('auth.info') }}</a>
            <a href="{{ url('/topic') }}" class="{{ request()->is('topic') ? 'active' : '' }}">{{ __('auth.topic') }}</a>
            <a href="{{ url('/rank') }}"
                class="{{ request()->is('rank') ? 'active' : '' }}">{{ __('auth.ranking') }}</a>
        </div>

        <div class="shadow"></div>
        <div class="info-page">
            <div class="container">
                <h1>资讯页</h1>
                <div class="top-breadcrumb">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12"
                        height="14" viewBox="0 0 12 14">
                        <image id="dingweixiao" width="12" height="14" opacity="0.702"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAOCAYAAAAbvf3sAAAABHNCSVQICAgIfAhkiAAAARFJREFUKFNj/P//PwMIpKencwCpACC2BmIZsCADwxMgPgTEm2fOnPkDJMAI0gBULAtk1wOxOFQhOvUCKNAE1PSYMS0tjRvImQzEojgUw4RfAxm5IA2xQEYYAcUw6VUgDbOAPEkkDU+B7Ckg5wJxNhBLI8k9B2nYBJWEibcD3XoMxAH6zQpIVSJp+AfSsBYowIYkOAeoYSNUQyCQTkKS+wXS0AYU0EUS/A1k74by3YA0C5LcJZAGdGvx+b8NFg9FQFWOBEJqH9Cp/TANIGsLgNgeh6aDQPE+oIZ/YA1QDzIB6UIgdkDTtA/InwhSDBKHa4BqAoV9JhB7QjVtB9LTgYohpqJrQNKUCmSDTJyLrBgkDwDB7GB2TMfutQAAAABJRU5ErkJggg==" />
                    </svg>
                    <p><a href="{{ url('/') }}">{{ __('auth.homepage') }}</a> <span>></span>
                        {{ __('auth.news_info') }}</p>
                </div>

                <div class="info-banner-section">
                    <div class="bannerWrap">
                        <div class="slider-banner">
                            <swiper-container class="mySwiper" init="false">
                                <swiper-slide>
                                    <div class="hotIconWrap">
                                        <img src="{{ asset('images/home/hotIcon.png') }}" alt="Hot Icon" />
                                        <p>HOT</p>
                                    </div>
                                    <img src="{{ asset('images/info/banner.png') }}" alt="Info Banner" />
                                    <div class="titleWrap">
                                        <h2>Rotaeno 旋转音律电脑版PC端下载安装教程 电脑版怎么玩Rotaeno 旋转音律攻略</h2>
                                        <p>发布于 2023-12-18 10:02</p>
                                    </div>
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="{{ asset('images/info/banner.png') }}" alt="Info Banner" />
                                    <div class="titleWrap">
                                        <h2>Rotaeno 旋转音律电脑版PC端下载安装教程 电脑版怎么玩Rotaeno 旋转音律攻略</h2>
                                        <p>发布于 2023-12-18 10:02</p>
                                    </div>
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="{{ asset('images/info/banner.png') }}" alt="Info Banner" />
                                    <div class="titleWrap">
                                        <h2>Rotaeno 旋转音律电脑版PC端下载安装教程 电脑版怎么玩Rotaeno 旋转音律攻略</h2>
                                        <p>发布于 2023-12-18 10:02</p>
                                    </div>
                                </swiper-slide>
                                <swiper-slide>
                                    <img src="{{ asset('images/info/banner.png') }}" alt="Info Banner" />
                                    <div class="titleWrap">
                                        <h2>Rotaeno 旋转音律电脑版PC端下载安装教程 电脑版怎么玩Rotaeno 旋转音律攻略</h2>
                                        <p>发布于 2023-12-18 10:02</p>
                                    </div>
                                </swiper-slide>
                            </swiper-container>
                        </div>
                    </div>
                    <div class="new-info-list">
                        <div class="newIconWrap">
                            <img src="{{ asset('images/home/newIcon.png') }}" alt="New Icon" />
                            <p>NEW</p>
                        </div>
                        <div class="infoWrap">
                            <div class="infoNumber">01</div>
                            <div class="infoContent">
                                <h2>麦吉大改造电脑版PC端下载安装 教程 电脑版怎么玩麦吉大改造</h2>
                                <p>发布于 2023-12-11 10:02</p>
                            </div>
                            <img src="{{ asset('images/info/newinfo1.png') }}" alt="Info Image" />
                        </div>
                        <div class="infoWrap">
                            <div class="infoNumber">02</div>
                            <div class="infoContent">
                                <h2>九畿：岐风之旅桌面版PC端下载 安装教程 桌面版怎么玩九畿岐</h2>
                                <p>发布于 2023-12-11 10:02</p>
                            </div>
                            <img src="{{ asset('images/info/newinfo2.png') }}" alt="Info Image" />
                        </div>
                        <div class="infoWrap">
                            <div class="infoNumber">03</div>
                            <div class="infoContent">
                                <h2>逆水寒手游：镜天阁地图百家技 能全攻略</h2>
                                <p>发布于 2023-12-11 10:02</p>
                            </div>
                            <img src="{{ asset('images/info/newinfo3.png') }}" alt="Info Image" />
                        </div>
                        <div class="infoWrap">
                            <div class="infoNumber">04</div>
                            <div class="infoContent">
                                <h2>指挥部攻略丨《雷电：觉醒》挂 载属性盘点</h2>
                                <p>发布于 2023-12-11 10:02</p>
                            </div>
                            <img src="{{ asset('images/info/newinfo4.png') }}" alt="Info Image" />
                        </div>
                        <div class="infoWrap">
                            <div class="infoNumber">05</div>
                            <div class="infoContent">
                                <h2>矩阵临界：失控边缘电脑版PC端 下载安装教程电脑版怎么玩矩阵</h2>
                                <p>发布于 2023-12-11 10:02</p>
                            </div>
                            <img src="{{ asset('images/info/newinfo5.png') }}" alt="Info Image" />
                        </div>
                    </div>
                </div>

                <div class="news-tab-list">
                    <div class="tab">
                        @php
                            $tabs = [
                                1 => __('auth.game_info'),
                                2 => __('auth.text_guide'),
                                3 => __('auth.software_tutorial'),
                                4 => __('auth.video_guide'),
                            ];
                        @endphp

                        @foreach ($tabs as $index => $label)
                            <button class="newsTab tablinks {{ $index == 1 ? 'active' : '' }}"
                                data-tab="{{ $index }}">{{ $label }}</button>
                        @endforeach
                    </div>
                </div>

                <!-- Tab Content -->
                <div class="news-listing">
                    @foreach ($tabs as $index => $label)
                        <div id="tab-{{ $index }}" class="newsTabContent {{ $index == 1 ? 'active' : '' }}">
                            <div class="newsWrap">
                                <h3>{{ $label }}</h3>
                                <p>这里是{{ $label }}的内容。</p>
                            </div>
                            <div class="pagination"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
@endsection

@section('scripts')
    <script src="{{ asset('js/info.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script>
        window.translations = {
            firstPage: "{{ __('pagination.first_page') }}",
            prevPage: "{{ __('pagination.prev_page') }}",
            nextPage: "{{ __('pagination.next_page') }}",
            lastPage: "{{ __('pagination.last_page') }}",
            home: "{{ __('pagination.home') }}",
            previous: "{{ __('pagination.previous') }}",
            next: "{{ __('pagination.next') }}",
            end: "{{ __('pagination.end') }}"
        };
    </script>
    <script>
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
    </script>
@endsection

@extends('layouts.app')

@section('title', $game->name)
@section('styles')
    <style>
        .appIntro>p:first-of-type,
        .appIntro>p:nth-of-type(2) {
            text-align: left !important;
        }

        .appIntro>p {
            text-align: left !important;
            line-height: 35px;
        }

        .custom-link {
            color: white !important;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/appDownload.css') }}">
@endsection

@section('content')
    <div class="nav-list">
        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">{{ __('auth.homepage') }}</a>
        <a href="{{ url('/games') }}" class="{{ request()->is('games*') ? 'active' : '' }}">{{ __('auth.game') }}</a>
        <a href="{{ url('/application') }}"
            class="{{ request()->is('application') ? 'active' : '' }}">{{ __('auth.app') }}</a>
        <a href="{{ url('/info') }}" class="{{ request()->is('info') ? 'active' : '' }}">{{ __('auth.info') }}</a>
        <a href="{{ url('/topic') }}" class="{{ request()->is('topic') ? 'active' : '' }}">{{ __('auth.topic') }}</a>
        <a href="{{ url('/rank') }}" class="{{ request()->is('rank') ? 'active' : '' }}">{{ __('auth.ranking') }}</a>
    </div>

    <div class="shadow"></div>
    <div class="downloadPage">
        <div class="container">
            <div class="top-breadcrumb">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12"
                    height="14" viewBox="0 0 12 14">
                    <image id="dingweixiao" width="12" height="14" opacity="0.702"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAOCAYAAAAbvf3sAAAABHNCSVQICAgIfAhkiAAAARFJREFUKFNj/P//PwMIpKencwCpACC2BmIZsCADwxMgPgTEm2fOnPkDJMAI0gBULAtk1wOxOFQhOvUCKNAE1PSYMS0tjRvImQzEojgUw4RfAxm5IA2xQEYYAcUw6VUgDbOAPEkkDU+B7Ckg5wJxNhBLI8k9B2nYBJWEibcD3XoMxAH6zQpIVSJp+AfSsBYowIYkOAeoYSNUQyCQTkKS+wXS0AYU0EUS/A1k74by3YA0C5LcJZAGdGvx+b8NFg9FQFWOBEJqH9Cp/TANIGsLgNgeh6aDQPE+oIZ/YA1QDzIB6UIgdkDTtA/InwhSDBKHa4BqAoV9JhB7QjVtB9LTgYohpqJrQNKUCmSDTJyLrBgkDwDB7GB2TMfutQAAAABJRU5ErkJggg==" />

                </svg>
                <p><a href="{{ url('/') }}">{{ __('auth.homepage') }}</a> <span>></span>
                    {{ __('auth.mobile_game') }}
                    <span>></span> {{ __('auth.details') }}
                </p>


            </div>
            <div class="banner-download">
                <img class="appImage"
                    src="{{ Str::startsWith($game->icon, ['http://', 'https://']) ? $game->icon : config('app.img_db') . $game->icon }}"
                    alt="Game Image" />
                <div class="detailWrap">
                    <div class="name">{{ $game->name }}</div>
                    <div class="detail">
                        <p>{{ $game->seo_description }}</p>
                    </div>
                </div>
                <div class="downloadButtonWrap">
                    <div class="ratingWrap">
                        <p class="rating-score">{{ $game->game_score ?? 0 }}</p>
                        <div class="starWrap">
                            <div class="stars">
                            </div>
                        </div>
                    </div>
                    <div class="buttonWrap" style="display: flex; gap: 10px;">
                        <div>
                            <a href="{{ $game->android_url ?? '#' }}" target="_blank"
                                class="row d-flex justify-content-center align-items-center w-100 custom-link"
                                style="display: flex; align-items: center; text-decoration: none; width: 40%; height: 100%;">
                                <img src="{{ asset('images/download/xiazai.png') }}" alt="Download Icon"
                                    style="margin-right: 5px;" />
                                <p style="margin-left: 5px; margin-bottom: 0;">免费安装</p>
                            </a>
                        </div>
                        <div>
                            <a href="{{ $game->pc_url ?? '#' }}" target="_blank"
                                class="row d-flex justify-content-center align-items-center custom-link"
                                style="display: flex; align-items: center; text-decoration: none; width: 60%; height: 100%;">
                                <img src="{{ asset('images/download/xiazai.png') }}" alt="Download Icon"
                                    style="margin-right: 5px;" />
                                <p style="margin-left: 5px; margin-bottom: 0;">Download APK</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-download-mobile">
                <div class="topWrap">
                    <img class="appImage"
                        src="{{ Str::startsWith($game->icon, ['http://', 'https://']) ? $game->icon : config('app.img_db') . $game->icon }}"
                        alt="Game Image" />
                    <div class="detailWrap">
                        <div class="name">{{ $game->name }}</div>
                        <div class="dateUpdate">2024-01-02 13:10:26更新</div>
                    </div>
                </div>
                <div class="bottomWrap">
                    <div class="ratingWrapMobile">
                        <p class="ratingScore">
                            9.0
                            <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                        </p>
                        <p>{{ rand(1000, 1000000) }}条评价</p>
                    </div>
                    <div class="downloadTimeWrap">
                        <p>50亿+</p>
                        <p>次下载</p>
                    </div>
                    <div class="ageLimitWrap">
                        <img src="{{ asset('images/download/age.png') }}" alt="Age Limit" />
                        <p>16岁以上</p>
                    </div>
                </div>
            </div>
            <div class="downloadButtonMobile">
                <img src="{{ asset('images/download/xiazai.png') }}" alt="Download Icon" />
                <p>免费安装</p>
            </div>
            <div class="downloadInfo">
                <div class="content-left">
                    <div class="screenshot-slider">
                        <h2>{{ __('auth.screenshot_preview') }}</h2>
                        <swiper-container class="mySwiper screenshotSwiper" space-between="15" slides-per-view="1.7"
                            navigation="true" init="false">

                            @foreach ($game->screenshots as $screenshot)
                                <swiper-slide>
                                    <img src="{{ Str::startsWith($screenshot, ['http://', 'https://']) ? $screenshot : config('app.img_db') . $screenshot }}"
                                        alt="Game Screenshot" />
                                </swiper-slide>
                            @endforeach
                        </swiper-container>
                    </div>

                    <div class="app-info">
                        <div class="appIntro">{!! $game->introduce !!}</div>
                        <br>
                        <div class="update-info">
                            <div class="titleWrap">
                                <h2>{{ __('auth.update_info') }}</h2>
                                <p class="toggle-content">{{ __('auth.check_log_history') }}</p>
                            </div>
                            <div class="update-content">
                                <h2>{{ __('auth.game_overview') }}</h2>
                                <p>{!! $game->description !!}</p>
                                <h2>{{ __('auth.game_version_advantage') }}</h2>
                                <p>{!! $game->seo_description !!}</p>
                                <p class="collapse-btn">{{ __('auth.close') }}</p>
                            </div>
                            <p class="appVersion">{!! $game->app_version !!} / {!! $game->uptime !!}</p>
                            <p class="appUpdateInfo">{{ __('categories.' . $game['category']) }}</p>
                        </div>
                        <div class="related-history-version">
                            <h2>{{ __('auth.related_history_version') }}</h2>
                            <div class="downloadList">
                                <div class="downloadWrap">
                                    <div class="titleWrap">
                                        <p>{!! $game->name !!} {!! $game->app_version !!}</p>
                                        <div class="dateMemory">
                                            <p>{!! $game->size !!} MB</p>
                                            <p>{{ date('Y-m-d', strtotime($game->uptime)) }}</p>
                                        </div>
                                    </div>
                                    <div class="downloadButton" style="display: flex; align-items: center;">
                                        <a href="{{ $game->android_url ?? '#' }}" target="_blank"
                                            style="display: flex; align-items: center;">
                                            <img src="{{ asset('images/download/xiazai.png') }}" alt="Download Icon"
                                                style="margin-right: 5px;" />
                                            <p style="margin: 0;">{{ __('auth.download') }}</p>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="similar-app-list">
                        <div class="titleWrap">
                            <h2>{{ __('auth.similar_games') }}</h2>
                            <a href="{{ route('game.category', ['category' => $game->category]) }}" target="_blank"
                                class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                                    alt="More Icon" /></a>
                        </div>
                        <div class="appList">
                            @foreach ($similarGames as $similarGame)
                                <div class="appWrap">
                                    <a href="{{ route('game.show', ['union_id' => $similarGame['union_id']]) }}">
                                        <img src="{{ Str::startsWith($similarGame['icon'], ['http://', 'https://']) ? $similarGame['icon'] : config('app.img_db') . $similarGame['icon'] }}"
                                            alt="Game Image" />
                                    </a>
                                    <p class="name">{{ $similarGame['name'] }}</p>
                                    <p class="dateUpdate">{{ date('Y-m-d', $similarGame['uptime']) }}更新</p>
                                    <div class="mobileStarWrap">
                                        <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                                        <p>{{ $similarGame['game_score'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="related-topic-mobile">
                        <div class="titleWrap">
                            <h2>相关专题</h2>
                            <p class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                                    alt="More Icon" /></p>
                        </div>
                        <div class="topicWrap">
                            <div class="imgWrap">
                                <img src="{{ asset('images/download/relatedtopic.png') }}" alt="Topic Image" />
                                <p>更新于 2023-06-25 16:02:36</p>
                            </div>
                            <p class="topicTitle">黑猫奇闻社所有版本游戏</p>
                            <div class="arrowWrap">
                                <p class="amountGame">共 <span>851203</span> 款游戏</p>
                                <img class="arrowLeft" src="{{ asset('images/rank/arrowLeft.png') }}"
                                    alt="Arrow Right" />
                            </div>
                        </div>
                    </div>

                    <div class="related-info">
                        <div class="titleWrap">
                            <h2>{{ __('auth.related_info') }}</h2>
                            <a href="{{ url('/info') }}" target="_blank" class="more">{{ __('auth.more') }}<img
                                    src="{{ asset('images/home/jiantou3.png') }}" alt="More Icon" /></a>
                        </div>
                        <div class="infoList">
                            <div class="infoWrap">
                                <div class="imgWrap">
                                    <img src="{{ asset('images/download/info1.png') }}" alt="Info Image" />
                                    <p class="datePost">发布于 2023-12-11 10:02</p>
                                </div>
                                <div class="leftWrap">
                                    <div class="postTitle">万华弧光电脑版PC端下载安装教程电脑版怎么玩万华弧光攻略</div>
                                    <p class="datePostMobile">发布于 2023-12-11 10:02</p>
                                </div>
                            </div>
                            <div class="infoWrap">
                                <div class="imgWrap">
                                    <img src="{{ asset('images/download/info2.png') }}" alt="Info Image" />
                                    <p class="datePost">发布于 2023-12-11 10:02</p>
                                </div>
                                <div class="leftWrap">
                                    <div class="postTitle">Rotaeno 旋转音律电脑版PC端下载安装教程电脑版怎么玩Rotaeno 旋转音律攻略</div>
                                    <p class="datePostMobile">发布于 2023-12-11 10:02</p>
                                </div>
                            </div>
                            <div class="infoWrap">
                                <div class="imgWrap">
                                    <img src="{{ asset('images/download/info3.png') }}" alt="Info Image" />
                                    <p class="datePost">发布于 2023-12-11 10:02</p>
                                </div>
                                <div class="leftWrap">
                                    <div class="postTitle">《元气骑士前传》键位方案征集</div>
                                    <p class="datePostMobile">发布于 2023-12-11 10:02</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="good-app-recommend">
                        <div class="titleWrap">
                            <h2>{{ __('auth.recommended_game') }}</h2>
                            <a href="{{ route('game.category', ['category' => $game->category]) }}" target="_blank"
                                class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                                    alt="More Icon" /></a>
                            {{-- <a href="{{ url('/games') }}" target="_blank" class="more">{{ __('auth.more') }}<img
                                    src="{{ asset('images/home/jiantou3.png') }}" alt="More Icon" /></a> --}}
                        </div>
                        <div class="appList">

                            @foreach ($recommendedGames as $recommendGame)
                                <div class="appWrap">
                                    <a href="{{ route('game.show', ['union_id' => $recommendGame['union_id']]) }}">
                                        <img src="{{ Str::startsWith($recommendGame['icon'], ['http://', 'https://']) ? $recommendGame['icon'] : config('app.img_db') . $recommendGame['icon'] }}"
                                            alt="Game Image" />
                                    </a>
                                    <p class="name">{{ $recommendGame['name'] }}</p>
                                    <p class="dateUpdate">{{ date('Y-m-d', $recommendGame['uptime']) }}更新</p>
                                    <div class="mobileStarWrap">
                                        <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                                        <p>{{ $recommendGame['game_score'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="content-right">
                    {{-- can't find related topic in db, hide first --}}
                    <div class="related-topic">
                        <h2>{{ __('auth.related_topic') }}</h2>
                        <div class="imgWrap">
                            <img src="{{ asset('images/download/relatedtopic.png') }}" alt="Topic Image" />
                            <p>升级快不花钱的传奇游戏</p>
                        </div>
                    </div>

                    <div class="hot-app">
                        <div class="titleWrap">
                            <h2>{{ __('auth.hot_game') }}</h2>
                            <a href="{{ url('/games') }}" target="_blank" class="more">{{ __('auth.more') }}<img
                                    src="{{ asset('images/home/jiantou3.png') }}" alt="More Icon" /></a>
                        </div>
                        <div class="app-list">
                            @foreach ($hotGames as $hotGame)
                                <div class="appWrap">
                                    <img
                                        src="{{ Str::startsWith($hotGame['icon'], ['http://', 'https://']) ? $hotGame['icon'] : config('app.img_db') . $hotGame['icon'] }}" />
                                    <div class="appDetailWrap">
                                        <p class="appName">{{ $hotGame['name'] }}</p>
                                        <p class="appType">
                                            {{ __('categories.' . $hotGame['catalog']) }}
                                        </p>
                                        <p class="dateUpdate">{{ date('Y-m-d', $hotGame['uptime']) }}更新</p>
                                    </div>
                                    <a href="{{ route('game.show', ['union_id' => $hotGame['union_id']]) }}"
                                        class="viewNow">{{ __('auth.view_now') }}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="creator-other-game">
                        <div class="titleWrap">
                            <h2>{{ __('auth.developer_other_games') }}</h2>
                            <a href="{{ url('/games') }}" target="_blank" class="more">{{ __('auth.more') }}<img
                                    src="{{ asset('images/home/jiantou3.png') }}" alt="More Icon" /></a>
                        </div>
                        <div class="app-list">
                            <div class="appWrap">
                                <img src="{{ asset('images/home/game8.png') }}" />
                                <div class="appDetailWrap">
                                    <p class="appName">凡人修仙传：人界篇</p>
                                    <p class="appType">益智休闲</p>
                                    <p class="dateUpdate">2023-06-06更新</p>
                                </div>
                                <div class="viewNow">{{ __('auth.view_now') }}</div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/home/game9.png') }}" />
                                <div class="appDetailWrap">
                                    <p class="appName">异度神剑2</p>
                                    <p class="appType">战斗策略</p>
                                    <p class="dateUpdate">2023-06-06更新</p>
                                </div>
                                <div class="viewNow">{{ __('auth.view_now') }}</div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/home/game10.png') }}" />
                                <div class="appDetailWrap">
                                    <p class="appName">斗破苍穹：斗帝</p>
                                    <p class="appType">战斗策略</p>
                                    <p class="dateUpdate">2023-06-06更新</p>
                                </div>
                                <div class="viewNow">{{ __('auth.view_now') }}</div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/home/game11.png') }}" />
                                <div class="appDetailWrap">
                                    <p class="appName">凡人修仙传：人界篇</p>
                                    <p class="appType">益智休闲</p>
                                    <p class="dateUpdate">2023-06-06更新</p>
                                </div>
                                <div class="viewNow">{{ __('auth.view_now') }}</div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/home/game12.png') }}" />
                                <div class="appDetailWrap">
                                    <p class="appName">异度神剑2</p>
                                    <p class="appType">益智休闲</p>
                                    <p class="dateUpdate">2023-06-06更新</p>
                                </div>
                                <div class="viewNow">{{ __('auth.view_now') }}</div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/home/gamecat1.png') }}" />
                                <div class="appDetailWrap">
                                    <p class="appName">斗破苍穹：斗帝</p>
                                    <p class="appType">益智休闲</p>
                                    <p class="dateUpdate">2023-06-06更新</p>
                                </div>
                                <div class="viewNow">{{ __('auth.view_now') }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="hot-topic-section">
                        <div class="titleWrap">
                            <h2>{{ __('auth.hot_label') }}</h2>
                            <a href="{{ url('/games') }}" target="_blank" class="more">{{ __('auth.more') }}<img
                                    src="{{ asset('images/home/jiantou3.png') }}" alt="More Icon" /></a>
                        </div>
                        <div class="hot-topic-listing">
                            @foreach ($gameCategories as $category)
                                <div onclick="document.querySelectorAll('.hot-topic-listing div').forEach(el => el.classList.remove('active')); this.classList.add('active'); window.location.href='{{ route('game.category', ['category' => $category['catalog']]) }}';"
                                    class="{{ $category['catalog'] == $game->category ? 'active' : '' }}"
                                    style="cursor: pointer;">
                                    {{ __('categories.' . $category['catalog']) }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script>
        const swiperEl = document.querySelector('.screenshotSwiper')

        const params = {
            injectStyles: [`
            .swiper{
            position:static;
            }
            .swiper-button-next.swiper-button-disabled, .swiper-button-prev.swiper-button-disabled{
            opacity:0;
            }
            .swiper-button-next, .swiper-button-prev{
            width:20px;
            height:146px;
            border-radius: 10px 0 0 10px;
            background: #eaecee; 
            top:50%;
            transform:translateY(-50%);
            opacity:0.9;
            }
            .swiper-button-next svg, .swiper-button-prev svg{
            width:8px;
            height:12px;
            color:#5d616b;
            stroke: #5d616b;
            stroke-width: 1.5px
            }
            .swiper-button-prev{
            left:0;
            border-radius: 0 10px 10px 0;
            }
            .swiper-button-next{
            right:0;
            }
            @media (max-width: 767px) {
            .swiper-button-next, .swiper-button-prev{
                display:none
            }
            }
            @media (max-width: 1024px) {
            .swiper-pagination-progressbar{
                bottom: -1.43rem;
                top:unset!important;
                height:3px!important;
            }
            .swiper-pagination-progressbar .swiper-pagination-progressbar-fill{
                background:#15df96;
            }
            }
            `],
        }
        Object.assign(swiperEl, params, {
            slidesPerView: 1.7,
            spaceBetween: 15,
            pagination: {
                type: 'progressbar', // Use progressbar type
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1.2,
                    spaceBetween: 20,
                    pagination: {
                        enabled: true, // Enable pagination only for 320px
                    },
                },
                375: {
                    slidesPerView: 1.7,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1025: {
                    slidesPerView: 1.7,
                    spaceBetween: 15,
                    pagination: {
                        enabled: false, // Disable pagination for larger breakpoints
                    }
                },
            },
        })
        swiperEl.initialize();

        function updateStars(ratingWrap) {
            const rating = parseFloat(ratingWrap.querySelector('.rating-score').textContent);
            const starsContainer = ratingWrap.querySelector('.stars');
            starsContainer.innerHTML = ''; // Clear existing stars

            const starsEquivalent = rating / 2; // Convert rating to star equivalent
            const fullStars = Math.floor(starsEquivalent); // Number of fully filled stars
            const halfStar = starsEquivalent % 1 >= 0.5 ? 1 : 0; // Check if there's a half-filled star
            const emptyStars = 5 - fullStars - halfStar; // Remaining empty stars

            // Add full stars
            for (let i = 0; i < fullStars; i++) {
                const star = document.createElement('div');
                star.className = 'star star-fill';
                starsContainer.appendChild(star);
            }

            // Add half star
            if (halfStar) {
                const star = document.createElement('div');
                star.className = 'star star-half-fill';
                starsContainer.appendChild(star);
            }

            // Add empty stars
            for (let i = 0; i < emptyStars; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                starsContainer.appendChild(star);
            }
        }

        // Apply the function to all .ratingWrap elements
        document.querySelectorAll('.ratingWrap').forEach(updateStars);

        // const inputField = document.getElementById('commentField');
        // const sendButton = document.getElementById('sendComment');

        // // Add an event listener for the "keydown" event
        // inputField.addEventListener('keydown', function(event) {
        //     if (event.key === 'Enter') { // Check if the Enter key is pressed
        //         sendMessage();
        //     }
        // });

        // // Add click listener for the button (optional)
        // sendButton.addEventListener('click', sendMessage);

        // // Function to handle the action
        // function sendMessage() {
        //     const value = inputField.value.trim();
        //     if (value) {
        //         console.log('Message sent:', value);
        //         inputField.value = ''; // Clear the input field after sending
        //     } else {
        //         console.log('Input is empty');
        //     }
        // }

        // document.querySelector('.loadAllButton').addEventListener('click', function() {
        //     const allComments = document.querySelectorAll('.commentList .commentWrap');

        //     allComments.forEach(comment => {
        //         comment.style.display = 'flex'; // Show all comments
        //     });

        //     // Hide the "加载全部评论" button after showing all comments
        //     this.style.display = 'none';
        // });

        document.addEventListener('DOMContentLoaded', () => {
            const toggleButton = document.querySelector('.toggle-content');
            const updateContent = document.querySelector('.update-content');
            const collapseButton = document.querySelector('.collapse-btn');

            // Expand the content when "{{ __('auth.view_now') }}历史日志" is clicked
            toggleButton.addEventListener('click', () => {
                updateContent.classList.add('open');
                toggleButton.style.display = 'none'; // Hide "{{ __('auth.view_now') }}历史日志"
            });

            // Collapse the content when "收起" is clicked
            collapseButton.addEventListener('click', () => {
                updateContent.classList.remove('open');
                toggleButton.style.display = 'inline'; // Show "{{ __('auth.view_now') }}历史日志"
            });
        });
    </script>
@endsection

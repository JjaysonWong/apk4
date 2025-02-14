@extends('layouts.app')

@section('title', __('auth.homepage'))

@section('content')
    <img src="{{ asset('images/topbg.png') }}" class="topbg" alt="Background Color Image" />

    <!-- navigation list for mobile  -->
    <div class="nav-list">
        <a class="active" href="{{ url('/') }}">{{ __('auth.homepage') }}</a>
        <a href="./games">{{ __('auth.game') }}</a>
        <a href="./application">{{ __('auth.application') }}</a>
        <a href="./info">{{ __('auth.info') }}</a>
        <a href="./topic">{{ __('auth.topic') }}</a>
        <a href="./rank">{{ __('auth.ranking') }}</a>
    </div>

    <div class="container">
        <div class="top-banner-section">
            <div class="row">
                <div class="slider-banner col-8">
                    <!-- top slide banner -->
                    <swiper-container class="mySwiper" init="false">
                        @for ($i = 1; $i <= 5; $i++)
                            <swiper-slide>
                                <img src="{{ asset('images/home/banner1.png') }}" alt="Home Banner" />
                                <p>{{ __('auth.top_banner_section') }}{{ $i }}</p>
                            </swiper-slide>
                        @endfor
                    </swiper-container>
                </div>

                <div class="banner-right col-4">
                    <div class="topic-info">
                        <div class="topic-redirect">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="102" height="35" viewBox="0 0 102 35">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="0.363" y1="0.25" x2="0.637"
                                        y2="0.75" gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#0091ff" />
                                        <stop offset="0.281" stop-color="#0091ff" />
                                        <stop offset="1" stop-color="#7fc8ff" />
                                    </linearGradient>
                                </defs>
                                <g id="精选推荐标签" transform="translate(-1252 -91)">
                                    <path id="圆角矩形_4" data-name="圆角矩形 4"
                                        d="M1267,91h72a15,15,0,0,1,0,30h-66.329c-1.391,0-6.75,5-6.75,5l1.079-5a15,15,0,0,1,0-30Z"
                                        fill="url(#linear-gradient)" />
                                    <text id="精选推荐" transform="translate(1273.546 110)" fill="#fff" font-size="14"
                                        font-family="MicrosoftYaHei, Microsoft YaHei">
                                        <tspan x="0" y="0">{{ __('auth.selected_recommendations') }}</tspan>
                                    </text>
                                </g>
                            </svg>

                            <h2>SPECIAL</h2>
                            <h3>{{ __('auth.popular_topics') }}</h3>
                            <p>{{ __('auth.discover_more_fun') }}</p>
                        </div>
                        <div class="info-redirect">
                            <h2>NEWS</h2>
                            <h3>{{ __('auth.hotspot_news') }}</h3>
                            <p>{{ __('auth.learn_game_news') }}</p>
                        </div>
                    </div>

                    <div class="top-applications">
                        <div class="tab">
                            <button class="topTab tablinks active" onclick="switchTab(event, 'topGame')">TOP 最佳游戏</button>
                            <button class="topTab tablinks" onclick="switchTab(event, 'topApp')">TOP 热门应用</button>
                        </div>
                        <!-- top 最佳游戏 -->
                        <div id="topGame" class="topTabcontent">
                            <swiper-container class="mySwiper top-game-swiper" space-between="10" slides-per-view="3.3">
                                @foreach ($topGameList as $index => $game)
                                    <swiper-slide>
                                        <a href="{{ route('game.show', ['union_id' => $game['union_id']]) }}">

                                            @if ($index < 4)
                                                <div class="crownWrap">
                                                    <img src="{{ asset('images/home/' . ($index + 1) . '.png') }}"
                                                        alt="Crown Image" />
                                                    <p>{{ $index + 1 }}</p>
                                                </div>
                                            @endif

                                            <img src="{{ Str::startsWith($game['icon'], ['http://', 'https://']) ? $game['icon'] : env('IMG_DB') . $game['icon'] }}"
                                                alt="Game Image" />
                                            <p>{{ $game['name'] }}</p>
                                        </a>
                                    </swiper-slide>
                                @endforeach
                            </swiper-container>
                        </div>
                        <!-- top 热门应用 -->
                        <div id="topApp" class="topTabcontent">
                            <swiper-container class="mySwiper top-applications-swiper" space-between="10"
                                slides-per-view="3.3">
                                @foreach ($topAppList as $index => $app)
                                    <swiper-slide>
                                        <a href="{{ route('app.show', ['union_id' => $app['union_id']]) }}">
                                            @if ($index < 4)
                                                <div class="crownWrap">
                                                    <img src="{{ asset('images/home/' . ($index + 1) . '.png') }}"
                                                        alt="Crown Image" />
                                                    <p>{{ $index + 1 }}</p>
                                                </div>
                                            @endif

                                            <img src="{{ Str::startsWith($app['icon'], ['http://', 'https://']) ? $app['icon'] : env('IMG_DB') . $app['icon'] }}"
                                                alt="App Image" />
                                            <p>{{ $app['name'] }}</p>
                                        </a>
                                    </swiper-slide>
                                @endforeach
                            </swiper-container>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="recommend-section">
            <div class="titleWrap">
                <h2>{{ __('auth.personalized_recommendation') }}</h2>
                <img src="{{ asset('images/home/HOT.png') }}" alt="Hot Icon" />
            </div>
            <swiper-container class="mySwiper recommendSwiper" space-between="40" slides-per-view="8" navigation="true"
                init="false">
                @foreach ($personalizedRecommendation as $game)
                    <swiper-slide>
                        <a href="{{ route('game.show', ['union_id' => $game->union_id]) }}">
                            <img src="{{ Str::startsWith($game->icon, ['http://', 'https://']) ? $game->icon : env('IMG_DB') . $game->icon }}"
                                alt="Game Image" />
                            <p class="gamename">{{ $game->name }}</p>
                            {{-- <p class="updatedTime">{{ date('Y-m-d', strtotime($game->uptime)) }} {{ __('auth.update') }} --}}
                            </p>
                            <div class="rating">
                                <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                                <p>{{ number_format($game->game_score, 1) }}</p>
                            </div>
                        </a>
                    </swiper-slide>
                @endforeach

            </swiper-container>

            <div class="new-update-section">
                <div class="titleWrap">
                    <h2>{{ __('auth.new_online_update') }}</h2>
                    <p class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                            alt="More Icon" /></p>
                </div>
                <div class="new-update-game-list">
                    @foreach ($newUpdateGameList as $i => $game)
                        <!-- use carbon to generate random dates -->
                        @php
                            $randomDate = \Carbon\Carbon::createFromTimestamp(
                                rand(strtotime('2020-01-01'), strtotime('2025-12-31')),
                            )->toDateString();
                        @endphp
                        <div class="new-update-game-wrap">
                            <img class="banner-image" src="{{ asset('images/home/newUpdateGame' . $i . '.png') }}"
                                alt="Game Image" />
                            <div class="new-update-small-wrap">
                                <img src="{{ asset('images/home/newUpdateSmall' . $i . '.png') }}" alt="Game Image" />
                                <div class="new-update-small-detail">
                                    <h4>{{ $game }}</h4>
                                    <p class="dateUpdate">{{ $randomDate }} {{ __('auth.update') }}</p>
                                    <p>现代战舰，炫酷的海上战争，激进的</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="game-category-list">
                <div class="titleWrap">
                    <h2>{{ __('auth.game_list') }}</h2>
                    <p class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                            alt="More Icon" /></p>
                </div>

                <div class="category-tab">
                    <div class="tab">
                        @foreach ($categories as $key => $name)
                            <button class="catTab tablinks {{ $loop->first ? 'active' : '' }}"
                                onclick="switchCatTab(event, '{{ $key }}')">
                                {{ $name }}
                            </button>
                        @endforeach
                    </div>

                    @foreach ($categories as $key => $name)
                        @php
                            $shuffledGames = $games;

                            shuffle($shuffledGames); // Randomize the order for this category
                        @endphp
                        <div id="{{ $key }}" class="catTabContent"
                            style="{{ $loop->first ? '' : 'display:none;' }}">
                            @foreach ($shuffledGames as $game)
                                <div class="gameWrap">
                                    <img src="{{ asset('images/home/' . $game['image']) }}" alt="Game Image" />
                                    <p class="gameName">{{ $game['name'] }}</p>
                                    <p class="gameUpdate">{{ now()->subDays(rand(1, 365))->toDateString() }} 更新</p>
                                </div>
                            @endforeach
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="topic-share-section">
                <div class="titleWrap">
                    <h2>{{ __('auth.topic_sharing') }}</h2>
                    <p class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                            alt="More Icon" /></p>
                </div>

                <div class="topic-share-list">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="topic-share-img-wrap">
                            <img src="{{ asset('images/home/topicshare' . $i . '.png') }}" alt="Topic Image" />
                            <div class="topicNumber">0{{ $i }}</div>
                            <div class="topicTitle">{{ __('auth.action_attack') }}</div>
                            <div class="topicDate">2023-12-08{{ __('auth.update') }}</div>
                        </div>
                    @endfor
                </div>
            </div>

            <div class="hot-game-rank">
                <div class="titleWrap">
                    <h2>{{ __('auth.hot_ranking') }}</h2>
                    <p class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                            alt="More Icon" /></p>
                </div>
                <div class="hot-game-rank-tab">
                    <div class="tab">
                        <button class="hot-game-tab tablinks active"
                            onclick="switchHotGameTab(event, 'remenmianfei', '1')">{{ __('auth.hot_free') }}</button>
                        <button class="hot-game-tab tablinks"
                            onclick="switchHotGameTab(event, 'zuisouqidai', '2')">{{ __('auth.most_anticipated') }}</button>
                        <button class="hot-game-tab tablinks"
                            onclick="switchHotGameTab(event, 'xiazaizuiduo', '3')">{{ __('auth.most_downloaded') }}</button>
                    </div>
                    @foreach ($hotRank as $hotRankKey => $hotRankName)
                        <div id="{{ $hotRankKey }}" class="hotGameTabContent">
                            @for ($i = 1; $i <= 9; $i++)
                                <div class="gameWrap">
                                    <div class="gameNumber">{{ $i }}</div>
                                    <div class="gameDetailWrap">
                                        <img src="{{ asset('images/home/hotrank' . $i . '.png') }}" alt="Game Image" />
                                        <div class="details">
                                            <p class="gameName">游戏名称 {{ $hotRankName }} {{ $i }}</p>
                                            <p class="gameCategory">游戏类别</p>
                                            <p class="gameUpdate">2023-06-06更新</p>
                                        </div>
                                    </div>
                                    <div class="viewNowButton">查看</div>
                                </div>
                            @endfor
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="useful-application-section">
                <div class="titleWrap">
                    <h2>{{ __('auth.application_tab') }}</h2>
                    <p class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                            alt="More Icon" /></p>
                </div>
                <div class="useful-application-tab">
                    <div class="tab">
                        @foreach ($applicationCategories as $key => $name)
                            <button class="usefulAppTab tablinks {{ $loop->first ? 'active' : '' }}"
                                onclick="switchUsefulAppTab(event, '{{ $key }}')">
                                {{ $name }}
                            </button>
                        @endforeach
                    </div>
                    @foreach ($applicationCategories as $key => $name)
                        @php
                            $shuffledGames = $games;

                            shuffle($shuffledGames); // Randomize the order for this category
                        @endphp
                        <div id="{{ $key }}" class="usefulAppTabContent"
                            style="{{ $loop->first ? '' : 'display:none;' }}">
                            @foreach ($shuffledGames as $game)
                                <div class="gameWrap">
                                    <img src="{{ asset('images/home/' . $game['image']) }}" alt="Game Image" />
                                    <p class="gameName">{{ $game['name'] }}</p>
                                    <p class="gameUpdate">{{ now()->subDays(rand(1, 365))->toDateString() }} 更新</p>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- 软件合集 --}}
            <div class="application-mix-section">
                <h2>{{ __('auth.software_collection') }}</h2>
                <div class="application-mix-list">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="application-mix-img-wrap">
                            <img src="{{ asset('images/home/appMix' . $i . '.png') }}" alt="App Image" />
                            <div class="topicNumber">0{{ $i }}</div>
                            <div class="topicTitle">升级快不花钱的传奇游戏</div>
                            <div class="topicDate">2023-12-08{{ __('auth.update') }}</div>
                        </div>
                    @endfor
                </div>
            </div>
            应用排行榜
            <div class="hot-app-rank">
                <div class="titleWrap">
                    <h2>{{ __('auth.app_ranking') }}</h2>
                    <p class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                            alt="More Icon" /></p>
                </div>
                <div class="hot-app-rank-tab">
                    <div class="tab">
                        <button class="hot-app-tab tablinks active"
                            onclick="switchHotAppTab(event, 'remenmianfei1', '1')">{{ __('categories.remenmianfei') }}</button>
                        <button class="hot-app-tab tablinks"
                            onclick="switchHotAppTab(event, 'zuisouqidai1', '2')">{{ __('categories.zuisouqidai') }}</button>
                        <button class="hot-app-tab tablinks"
                            onclick="switchHotAppTab(event, 'xiazaizuiduo1', '3')">{{ __('categories.xiazaizuiduo') }}</button>
                    </div>
                    @foreach ($hotAppRank as $hotAppRankKey => $hotAppRankName)
                        <div id="{{ $hotAppRankKey }}" class="hotAppTabContent">
                            @for ($i = 1; $i <= 9; $i++)
                                <div class="gameWrap">
                                    <div class="gameNumber">{{ $i }}</div>
                                    <div class="gameDetailWrap">
                                        <img src="{{ asset('images/home/app' . $i . '.png') }}" alt="Game Image" />
                                        <div class="details">
                                            <p class="gameName">{{ __('auth.game_name') }} {{ $hotAppRankName }}
                                                {{ $i }}</p>
                                            <p class="gameCategory">{{ __('auth.game_category') }}</p>
                                            <p class="gameUpdate">2023-06-06{{ __('auth.update') }}</p>
                                        </div>
                                    </div>
                                    <div class="viewNowButton">{{ __('auth.more') }}</div>
                                </div>
                            @endfor
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="news-section">
                <div class="titleWrap">
                    <h2>{{ __('auth.news_update') }}</h2>
                    <p class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                            alt="More Icon" /></p>
                </div>
                <div class="newsWrap">
                    <div class="news-left col-7">
                        <div class="news-top-left">
                            <div class="imgWrap">
                                <div class="hotIconWrap">
                                    <img src="{{ asset('images/home/hotIcon.png') }}" alt="Hot Icon" />
                                    <p>HOT</p>
                                </div>
                                <img class="newsImage" src="{{ asset('images/home/news1.png') }}" alt="News Image" />
                                <p class="postDate">发布于 2023-12-11 10:02</p>
                            </div>
                            <div class="newsDetail">
                                <h3 class="newsTitle">龙神万相神战手游什么时候公测？有PC电脑版 吗？教你如何下载安装</h3>
                                <p class="newsContent">《龙神万相：神战》是一款策略卡牌手游，由热血国漫 预热第五季内容。玩家将加入西行小队，玩家可尝试跨
                                    越阴阳、巅峰竞技、龙神八部等多种玩法。游戏突出挂 机收益，强调策略搭配，带来无限可能。此外，游戏…</p>
                            </div>
                        </div>
                        <div class="news-bottom-left">
                            <div class="news-bottom-inner-left">
                                <div class="imgWrap">
                                    <img src="{{ asset('images/home/newsBottomLeft.png') }}" alt="News Image" />
                                    <p class="postDate">发布于 2023-12-11 10:02</p>
                                </div>
                                <h3>万华弧光电脑版PC端下载安装教程 电脑版怎么 玩万华弧光攻略</h3>
                            </div>
                            <div class="news-bottom-inner-right">
                                <div class="imgWrap">
                                    <img src="{{ asset('images/home/newsBottomRight.png') }}" alt="News Image" />
                                    <p class="postDate">发布于 2023-12-11 10:02</p>
                                </div>
                                <h3>PC端下载安装教程 电脑版怎么玩万华弧光</h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-right col-5">
                        <div class="imgWrap">
                            <div class="newIconWrap">
                                <img src="{{ asset('images/home/newIcon.png') }}" alt="New Icon" />
                                <p>NEW</p>
                            </div>
                            <img class="newsImage" src="{{ asset('images/home/newsRight.png') }}" alt="News Image" />
                            <p class="postTitle">帽子先生大冒险电脑版按键设置教程-百度经验</p>
                        </div>
                        <div class="newsList">
                            <div class="newsDetailWrap">
                                <div class="newsNumber">
                                    01
                                </div>
                                <p class="newsDetailTitle">帝国雄师电脑版PC端下载安装教程 电脑版怎么玩帝国雄师 攻略</p>
                            </div>
                            <div class="newsDetailWrap">
                                <div class="newsNumber">
                                    02
                                </div>
                                <p class="newsDetailTitle">斗罗大陆：史莱克学院手游什么时候公测？有PC电脑版吗？ 教你如何下载安装</p>
                            </div>
                            <div class="newsDetailWrap">
                                <div class="newsNumber">
                                    03
                                </div>
                                <p class="newsDetailTitle"> 《宿命回响：弦上的叹息》公测今日开启，多重活动迎接指挥 家的到来！</p>
                            </div>
                            <div class="newsDetailWrap">
                                <div class="newsNumber">
                                    04
                                </div>
                                <p class="newsDetailTitle">斗罗大陆：史莱克学院电脑版怎么玩？ 斗罗大陆：史莱克学 院性能优化240高帧 游戏多开 后台挂机 按键设置教程</p>
                            </div>
                            <div class="newsDetailWrap">
                                <div class="newsNumber">
                                    05
                                </div>
                                <p class="newsDetailTitle">刘慈欣献声！ 《流浪地球》手游预约正式开启</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="newsWrapMobile">
                    <div class="newsMobileWrap">
                        <div class="imgWrap">
                            <div class="hotIconWrap">
                                <img src="{{ asset('images/home/hotIcon.png') }}" alt="Hot Icon" />
                                <p>HOT</p>
                            </div>
                            <img class="newsImage" src="{{ asset('images/home/mobileNews1.png') }}" alt="News Image" />
                        </div>
                        <div class="detailWrap">
                            <p class="title">全明星街球派对电脑版PC端下载安装教程电脑版怎么玩全明星街</p>
                            <p class="datePost">发布于 2023-12-27 10:12:56</p>
                        </div>
                    </div>
                    <div class="newsMobileWrap">
                        <div class="imgWrap">
                            <div class="newIconWrap">
                                <img src="{{ asset('images/home/newIcon.png') }}" alt="New Icon" />
                                <p>NEW</p>
                            </div>
                            <img class="newsImage" src="{{ asset('images/home/mobileNews2.png') }}" alt="News Image" />
                        </div>
                        <div class="detailWrap">
                            <p class="title">暴雪社区经理澄清《守望先锋2》 将在 2023年发布是谣言</p>
                            <p class="datePost">发布于 2023-12-27 10:12:56</p>
                        </div>
                    </div>
                    <div class="newsMobileWrap">
                        <div class="imgWrap">
                            <img class="newsImage" src="{{ asset('images/home/mobileNews3.png') }}" alt="News Image" />
                        </div>
                        <div class="detailWrap">
                            <p class="title">隐藏在可爱外表下的暴力心王者荣耀强势射手李元芳参上 </p>
                            <p class="datePost">发布于 2023-12-27 10:12:56</p>
                        </div>
                    </div>
                    <div class="newsMobileWrap">
                        <div class="imgWrap">
                            <img class="newsImage" src="{{ asset('images/home/mobileNews4.png') }}" alt="News Image" />
                        </div>
                        <div class="detailWrap">
                            <p class="title">国外爆料称索尼或将于明天公布发布会时间</p>
                            <p class="datePost">发布于 2023-12-27 10:12:56</p>
                        </div>
                    </div>
                    <div class="newsMobileWrap">
                        <div class="imgWrap">
                            <img class="newsImage" src="{{ asset('images/home/mobileNews5.png') }}" alt="News Image" />
                        </div>
                        <div class="detailWrap">
                            <p class="title">关于元旦假期未成年人游戏限时的通知</p>
                            <p class="datePost">发布于 2023-12-27 10:12:56</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/language.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    <script>
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
    </script>
@endsection

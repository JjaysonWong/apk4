@extends('layouts.app')

@section('title', '应用页')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/applications.css') }}">
@endsection
@section('content')

    <div class="nav-list">
        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">{{ __('auth.homepage') }}</a>
        <a href="{{ url('/games') }}" class="{{ request()->is('games') ? 'active' : '' }}">{{ __('auth.game') }}</a>
        <a href="{{ url('/application') }}"
            class="{{ request()->is('application') ? 'active' : '' }}">{{ __('auth.app') }}</a>
        <a href="{{ url('/info') }}" class="{{ request()->is('info') ? 'active' : '' }}">{{ __('auth.info') }}</a>
        <a href="{{ url('/topic') }}" class="{{ request()->is('topic') ? 'active' : '' }}">{{ __('auth.topic') }}</a>
        <a href="{{ url('/rank') }}" class="{{ request()->is('rank') ? 'active' : '' }}">{{ __('auth.ranking') }}</a>
    </div>

    <div class="shadow"></div>

    <div class="container">
        <h1>应用页</h1>
        <div class="top-breadcrumb">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="14"
                viewBox="0 0 12 14">
                <image id="dingweixiao" width="12" height="14" opacity="0.702"
                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAOCAYAAAAbvf3sAAAABHNCSVQICAgIfAhkiAAAARFJREFUKFNj/P//PwMIpKencwCpACC2BmIZsCADwxMgPgTEm2fOnPkDJMAI0gBULAtk1wOxOFQhOvUCKNAE1PSYMS0tjRvImQzEojgUw4RfAxm5IA2xQEYYAcUw6VUgDbOAPEkkDU+B7Ckg5wJxNhBLI8k9B2nYBJWEibcD3XoMxAH6zQpIVSJp+AfSsBYowIYkOAeoYSNUQyCQTkKS+wXS0AYU0EUS/A1k74by3YA0C5LcJZAGdGvx+b8NFg9FQFWOBEJqH9Cp/TANIGsLgNgeh6aDQPE+oIZ/YA1QDzIB6UIgdkDTtA/InwhSDBKHa4BqAoV9JhB7QjVtB9LTgYohpqJrQNKUCmSDTJyLrBgkDwDB7GB2TMfutQAAAABJRU5ErkJggg==" />
            </svg>
            <p><a href="./index">{{ __('auth.homepage') }}</a> <span>></span> {{ __('auth.application') }}</p>
        </div>

        <div class="top-banner-slider">
            <swiper-container class="mySwiper topBannerSwiper" space-between="20" slides-per-view="3" navigation="true"
                init="false">
                <swiper-slide>
                    <div class="imgWrap">
                        <div class="newIconWrap">
                            <img src="{{ asset('images/home/newIcon.png') }}" alt="New Icon" />
                            <p>NEW</p>
                        </div>
                        <div class="overlayImage">
                            <div class="overlay"></div>
                            <img class="bannerImage"
                                src="{{ asset('images/applications/topBanner1.png') }}"alt="App Banner" />
                        </div>
                        <p class="bannerTitle">凡人修仙传：人界篇</p>
                        <div class="viewButton">{{ __('auth.view_now') }}</div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="imgWrap">
                        <div class="overlayImage">
                            <div class="overlay"></div>
                            <img class="bannerImage"
                                src="{{ asset('images/applications/topBanner2.png') }}"alt="App Banner" />
                        </div>
                        <p class="bannerTitle">凡人修仙传：人界篇</p>
                        <div class="viewButton">{{ __('auth.view_now') }}</div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="imgWrap">
                        <div class="overlayImage">
                            <div class="overlay"></div>
                            <img class="bannerImage"
                                src="{{ asset('images/applications/topBanner3.png') }}"alt="App Banner" />
                        </div>
                        <p class="bannerTitle">凡人修仙传：人界篇</p>
                        <div class="viewButton">{{ __('auth.view_now') }}</div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="imgWrap">
                        <div class="overlayImage">
                            <div class="overlay"></div>
                            <img class="bannerImage"
                                src="{{ asset('images/applications/topBanner1.png') }}"alt="App Banner" />
                        </div>
                        <p class="bannerTitle">凡人修仙传：人界篇</p>
                        <div class="viewButton">{{ __('auth.view_now') }}</div>
                    </div>
                </swiper-slide>
            </swiper-container>
        </div>

        <div class="app-recommend-section">
            <h2>{{ __('auth.selected_app_recommend') }}</h2>
            <div class="recommend-app-list">
                <div class="appWrap">
                    <div class="appDetailWrap">
                        <img src="{{ asset('images/applications/app1.png') }}" alt="App Image" />
                        <div class="details">
                            <p class="appName">异度神剑2</p>
                            <p class="appCategory">战斗策略</p>
                            <p class="appUpdate">2023-06-06更新</p>
                        </div>
                    </div>
                    <div class="viewNowButton">{{ __('auth.view_now') }}</div>
                </div>
                <div class="appWrap">
                    <div class="appDetailWrap">
                        <img src="{{ asset('images/applications/app2.png') }}" alt="App Image" />
                        <div class="details">
                            <p class="appName">仓鼠点心工厂</p>
                            <p class="appCategory">战斗策略</p>
                            <p class="appUpdate">2023-06-06更新</p>
                        </div>
                    </div>
                    <div class="viewNowButton">{{ __('auth.view_now') }}</div>
                </div>
                <div class="appWrap">
                    <div class="appDetailWrap">
                        <img src="{{ asset('images/applications/app3.png') }}" alt="App Image" />
                        <div class="details">
                            <p class="appName">哒哒嗒哒</p>
                            <p class="appCategory">战斗策略</p>
                            <p class="appUpdate">2023-06-06更新</p>
                        </div>
                    </div>
                    <div class="viewNowButton">{{ __('auth.view_now') }}</div>
                </div>
                <div class="appWrap">
                    <div class="appDetailWrap">
                        <img src="{{ asset('images/applications/app4.png') }}" alt="App Image" />
                        <div class="details">
                            <p class="appName">斗破苍穹：斗帝</p>
                            <p class="appCategory">战斗策略</p>
                            <p class="appUpdate">2023-06-06更新</p>
                        </div>
                    </div>
                    <div class="viewNowButton">{{ __('auth.view_now') }}</div>
                </div>
                <div class="appWrap">
                    <div class="appDetailWrap">
                        <img src="{{ asset('images/applications/app5.png') }}" alt="App Image" />
                        <div class="details">
                            <p class="appName">镇魂街：武神觉醒</p>
                            <p class="appCategory">战斗策略</p>
                            <p class="appUpdate">2023-06-06更新</p>
                        </div>
                    </div>
                    <div class="viewNowButton">{{ __('auth.view_now') }}</div>
                </div>
                <div class="appWrap">
                    <div class="appDetailWrap">
                        <img src="{{ asset('images/applications/app6.png') }}" alt="App Image" />
                        <div class="details">
                            <p class="appName">侏罗纪军团</p>
                            <p class="appCategory">战斗策略</p>
                            <p class="appUpdate">2023-06-06更新</p>
                        </div>
                    </div>
                    <div class="viewNowButton">{{ __('auth.view_now') }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="category-tab-section">
        <div class="container">
            <div class="category-tab">
                <div class="tab">
                    {{-- <button class="catTab tablinks active" onclick="switchTab(event, 'quanbu')">全部分类</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'jiaose')">角色扮演</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'guanka')">关卡塔防</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'dongzuo')">动作竞技</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'xiuxian')">休闲益智</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'zhanzheng')">战争策略</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'tiyu')">体育竞技</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'feixing')">飞行射击</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'maoxian')">冒险解谜</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'shengcun')">生存冒险</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'kapai')">卡牌对战</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'yinyue')">音乐舞蹈</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'chuanqi')">传奇手游</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'jingying')">模拟经营</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'jieji')">街机格斗</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'chongwu')">宠物养成</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'saiche')">赛车竞赛</button>
                    <button class="catTab tablinks" onclick="switchTab(event, 'qita')">其他游戏</button> --}}
                    @php
                        $categories = [
                            'quanbu' => __('categories.all_categories'),
                            'jiaose' => __('categories.role_playing'),
                            'guanka' => __('categories.tower_defense'),
                            'dongzuo' => __('categories.action_competition'),
                            'xiuxian' => __('categories.casual_puzzle'),
                            'zhanzheng' => __('categories.war_strategy'),
                            'tiyu' => __('categories.sports_competition'),
                            'feixing' => __('categories.flight_shooting'),
                            'maoxian' => __('categories.adventure_puzzle'),
                            'shengcun' => __('categories.survival_adventure'),
                            'kapai' => __('categories.card_battle'),
                            'yinyue' => __('categories.music_dance'),
                            'chuanqi' => __('categories.legend_mobile'),
                            'jingying' => __('categories.simulation_management'),
                            'jieji' => __('categories.arcade_fighting'),
                            'chongwu' => __('categories.pet_cultivation'),
                            'saiche' => __('categories.racing_competition'),
                            'qita' => __('categories.other_games'),
                        ];
                    @endphp

                    @foreach ($categories as $key => $value)
                        <button class="catTab tablinks {{ $loop->first ? 'active' : '' }}"
                            onclick="switchTab(event, '{{ $key }}')">{{ $value }}</button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="category-game-list">
        <div class="container">
            <div id="quanbu" class="catTabcontent">
            </div>
            <div id="jiaose" class="catTabcontent">
            </div>
            <div id="guanka" class="catTabcontent">
            </div>
            <div id="dongzuo" class="catTabcontent">
            </div>
            <div id="xiuxian" class="catTabcontent">
            </div>
            <div id="zhanzheng" class="catTabcontent">
            </div>
            <div id="tiyu" class="catTabcontent">
            </div>
            <div id="feixing" class="catTabcontent">
            </div>
            <div id="maoxian" class="catTabcontent">
            </div>
            <div id="shengcun" class="catTabcontent">
            </div>
            <div id="kapai" class="catTabcontent">
            </div>
            <div id="yinyue" class="catTabcontent">
            </div>
            <div id="chuanqi" class="catTabcontent">
            </div>
            <div id="jingying" class="catTabcontent">
            </div>
            <div id="jieji" class="catTabcontent">
            </div>
            <div id="chongwu" class="catTabcontent">
            </div>
            <div id="saiche" class="catTabcontent">
            </div>
            <div id="qita" class="catTabcontent">
            </div>
            <div id="pagination" class="pagination"></div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('js/applications.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script>
        const swiperEl = document.querySelector('.topBannerSwiper')

        const params = {
            injectStyles: [`
        .swiper{
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
        `],
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
    </script>
@endsection

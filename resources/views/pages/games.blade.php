@extends('layouts.app')

@section('title', __('auth.game_title'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/games.css') }}">
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
        <h1>游戏页</h1>
        <div class="top-breadcrumb">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="14"
                viewBox="0 0 12 14">
                <image id="dingweixiao" width="12" height="14" opacity="0.702"
                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAOCAYAAAAbvf3sAAAABHNCSVQICAgIfAhkiAAAARFJREFUKFNj/P//PwMIpKencwCpACC2BmIZsCADwxMgPgTEm2fOnPkDJMAI0gBULAtk1wOxOFQhOvUCKNAE1PSYMS0tjRvImQzEojgUw4RfAxm5IA2xQEYYAcUw6VUgDbOAPEkkDU+B7Ckg5wJxNhBLI8k9B2nYBJWEibcD3XoMxAH6zQpIVSJp+AfSsBYowIYkOAeoYSNUQyCQTkKS+wXS0AYU0EUS/A1k74by3YA0C5LcJZAGdGvx+b8NFg9FQFWOBEJqH9Cp/TANIGsLgNgeh6aDQPE+oIZ/YA1QDzIB6UIgdkDTtA/InwhSDBKHa4BqAoV9JhB7QjVtB9LTgYohpqJrQNKUCmSDTJyLrBgkDwDB7GB2TMfutQAAAABJRU5ErkJggg==" />
            </svg>
            <p><a href="{{ url('/') }}">{{ __('auth.homepage') }}</a> <span>></span> {{ __('auth.mobile_game') }}
            </p>
        </div>

        <div class="top-banner-slider">
            <swiper-container class="mySwiper topBannerSwiper" space-between="20" slides-per-view="3" navigation="true"
                init="false">
                @for ($i = 1; $i < 5; $i++)
                    @php
                        $imageIndex = $i == 4 ? 1 : $i;
                    @endphp
                    <swiper-slide>
                        <div class="imgWrap">
                            @if ($i === 1)
                                <div class="newIconWrap">
                                    <img src="{{ asset('images/home/newIcon.png') }}" alt="New Icon" />
                                    <p>{{ __('auth.new') }}</p>
                                </div>
                            @endif
                            <div class="overlayImage">
                                <div class="overlay"></div>
                                <img class="bannerImage" src="{{ asset('images/games/topBanner' . $imageIndex . '.png') }}"
                                    alt="App Banner" />
                            </div>
                            <p class="bannerTitle">凡人修仙传：人界篇</p>
                            <div class="viewButton">{{ __('auth.view_now') }}</div>
                        </div>
                    </swiper-slide>
                @endfor
            </swiper-container>
        </div>

        <div class="game-recommend-section">
            <h2>{{ __('auth.selected_game_recommend') }}</h2>
            <div class="recommend-game-list">
                <div class="gameWrap">
                    <div class="gameDetailWrap">
                        <img src="{{ asset('images/home/hotrank2.png') }}" alt="Game Image" />
                        <div class="details">
                            <p class="gameName">异度神剑2</p>
                            <p class="gameCategory">战斗策略</p>
                            <p class="gameUpdate">2023-06-06更新</p>
                        </div>
                    </div>
                    <div class="viewNowButton">{{ __('auth.view_now') }}</div>
                </div>
                <div class="gameWrap">
                    <div class="gameDetailWrap">
                        <img src="{{ asset('images/home/hotrank5.png') }}" alt="Game Image" />
                        <div class="details">
                            <p class="gameName">仓鼠点心工厂</p>
                            <p class="gameCategory">战斗策略</p>
                            <p class="gameUpdate">2023-06-06更新</p>
                        </div>
                    </div>
                    <div class="viewNowButton">{{ __('auth.view_now') }}</div>
                </div>
                <div class="gameWrap">
                    <div class="gameDetailWrap">
                        <img src="{{ asset('images/home/hotrank8.png') }}" alt="Game Image" />
                        <div class="details">
                            <p class="gameName">哒哒嗒哒</p>
                            <p class="gameCategory">战斗策略</p>
                            <p class="gameUpdate">2023-06-06更新</p>
                        </div>
                    </div>
                    <div class="viewNowButton">{{ __('auth.view_now') }}</div>
                </div>
                <div class="gameWrap">
                    <div class="gameDetailWrap">
                        <img src="{{ asset('images/home/hotrank3.png') }}" alt="Game Image" />
                        <div class="details">
                            <p class="gameName">斗破苍穹：斗帝</p>
                            <p class="gameCategory">战斗策略</p>
                            <p class="gameUpdate">2023-06-06更新</p>
                        </div>
                    </div>
                    <div class="viewNowButton">{{ __('auth.view_now') }}</div>
                </div>
                <div class="gameWrap">
                    <div class="gameDetailWrap">
                        <img src="{{ asset('images/home/hotrank6.png') }}" alt="Game Image" />
                        <div class="details">
                            <p class="gameName">镇魂街：武神觉醒</p>
                            <p class="gameCategory">战斗策略</p>
                            <p class="gameUpdate">2023-06-06更新</p>
                        </div>
                    </div>
                    <div class="viewNowButton">{{ __('auth.view_now') }}</div>
                </div>
                <div class="gameWrap">
                    <div class="gameDetailWrap">
                        <img src="{{ asset('images/home/hotrank9.png') }}" alt="Game Image" />
                        <div class="details">
                            <p class="gameName">侏罗纪军团</p>
                            <p class="gameCategory">战斗策略</p>
                            <p class="gameUpdate">2023-06-06更新</p>
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
                    @php
                        $categories = [
                            'all' => __('categories.all_categories'),
                            'rpg' => __('categories.role_playing'),
                            'tower_defense' => __('categories.tower_defense'),
                            'action' => __('categories.action_competition'),
                            'puzzle' => __('categories.casual_puzzle'),
                            'war' => __('categories.war_strategy'),
                            'sport' => __('categories.sports_competition'),
                            'shoot' => __('categories.flight_shooting'),
                            'adventure' => __('categories.adventure_puzzle'),
                            'survival' => __('categories.survival_adventure'),
                            'card' => __('categories.card_battle'),
                            'music' => __('categories.music_dance'),
                            'mobile' => __('categories.legend_mobile'),
                            'simulation' => __('categories.simulation_management'),
                            'arcade' => __('categories.arcade_fighting'),
                            'pet' => __('categories.pet_cultivation'),
                            'race' => __('categories.racing_competition'),
                            'other' => __('categories.other_games'),
                        ];
                        $activeCategory = $gameCategories ?? 'all';
                    @endphp

                    {{-- @foreach ($categories as $key => $value)
                        <button class="catTab tablinks {{ $key == $activeCategory ? 'active' : '' }}"
                            onclick="switchTab(event, '{{ $key }}')">{{ $value }}</button>
                    @endforeach --}}

                    @foreach ($categories as $key => $value)
                        <a href="{{ route('game.category', ['category' => $key]) }}"
                            class="catTab tablinks {{ $key == $activeCategory ? 'active' : '' }}">
                            {{ $value }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="category-game-list">
        <div class="container">
            <div id="all" class="catTabcontent">
                <!-- Content for 全部分类 -->
            </div>
            <div id="rpg" class="catTabcontent">
                <!-- Content for 角色扮演 -->
            </div>
            <div id="tower_defense" class="catTabcontent">
                <!-- Content for 关卡塔防 -->
            </div>
            <div id="action" class="catTabcontent">
                <!-- Content for 动作竞技 -->
            </div>
            <div id="puzzle" class="catTabcontent">
                <!-- Content for 休闲益智 -->
            </div>
            <div id="war" class="catTabcontent">
                <!-- Content for 战争策略 -->
            </div>
            <div id="sport" class="catTabcontent">
                <!-- Content for 体育竞技 -->
            </div>
            <div id="shoot" class="catTabcontent">
                <!-- Content for 飞行射击 -->
            </div>
            <div id="adventure" class="catTabcontent">
                <!-- Content for 冒险解谜 -->
            </div>
            <div id="survival" class="catTabcontent">
                <!-- Content for 生存冒险 -->
            </div>
            <div id="card" class="catTabcontent">
                <!-- Content for 卡牌对战 -->
            </div>
            <div id="music" class="catTabcontent">
                <!-- Content for 音乐舞蹈 -->
            </div>
            <div id="mobile" class="catTabcontent">
                <!-- Content for 传奇手游 -->
            </div>
            <div id="simulation" class="catTabcontent">
                <!-- Content for 模拟经营 -->
            </div>
            <div id="arcade" class="catTabcontent">
                <!-- Content for 街机格斗 -->
            </div>
            <div id="pet" class="catTabcontent">
                <!-- Content for 宠物养成 -->
            </div>
            <div id="race" class="catTabcontent">
                <!-- Content for 赛车竞赛 -->
            </div>
            <div id="other" class="catTabcontent">
                <!-- Content for 其他游戏 -->
            </div>
            <div id="pagination" class="pagination"></div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/games.js') }}"></script>
    <div id="translation-container" data-view-now="{{ __('auth.view_now') }}"></div>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/games-blade.js') }}"></script>

@endsection

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

                @foreach ($topFourGames as $topGame)
                    <swiper-slide>
                        <div class="imgWrap">
                            @if ($loop->first)
                                <div class="newIconWrap">
                                    <img src="{{ asset('images/home/newIcon.png') }}" alt="New Icon" />
                                    <p>{{ __('auth.new') }}</p>
                                </div>
                            @endif
                            <div class="overlayImage">
                                <div class="overlay"></div>
                                <img class="bannerImage" src="{{ $topGame['icon'] }}" alt="App Banner" />
                            </div>
                            <p class="bannerTitle">{{ $topGame['name'] }}</p>
                            <a href="{{ route('game.show', ['union_id' => $topGame['union_id']]) }}"
                                class="viewButton">{{ __('auth.view_now') }}</a>
                        </div>
                    </swiper-slide>
                @endforeach
            </swiper-container>
        </div>

        {{-- 精选游戏推荐 --}}
        <div class="game-recommend-section">
            <h2>{{ __('auth.selected_game_recommend') }}</h2>
            <div class="recommend-game-list">
                @foreach ($recommendedGames as $reGame)
                    <div class="gameWrap">
                        <div class="gameDetailWrap">
                            <img src="{{ $reGame['icon'] }}" alt="{{ $reGame['name'] }}" />
                            <div class="details">
                                <p class="gameName">{{ $reGame['name'] }}</p>
                                <p class="gameCategory">{{ __('categories.' . $categories) }}</p>
                                <p class="gameUpdate">{{ date('Y-m-d', $reGame['uptime']) }}</p>
                            </div>
                        </div>
                        <div class="viewNowButton">
                            <a
                                href="{{ route('game.show', ['union_id' => $reGame['union_id']]) }}">{{ __('auth.view_now') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="category-tab-section">
        <div class="container">
            <div class="category-tab">
                <div class="tab">
                    @foreach ($gameCategories as $index => $category)
                        <a href="{{ route('game.category', ['category' => $category]) }}"
                            class="catTab tablinks {{ $category == $categories || ($categories == null && $category == 'all') ? 'active' : '' }}">
                            {{ __('categories.' . $category) }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="category-game-list">
        <div class="container">
            <div id="{{ $categories }}" class="catTabcontent">
                <!-- Content for {{ $categories }} -->
                @foreach ($fullGameList[$categories] as $game)
                    <div class="gameWrap">
                        <a href="{{ route('game.show', ['union_id' => $game['union_id']]) }}">
                            <img src="{{ $game['icon'] }}" alt="{{ $game['name'] }}">
                        </a>
                        <div class="gameDetailWrap">
                            <p class="gameName">{{ $game['name'] }}</p>
                            <p class="gameType">{{ $game['type'] }}</p>
                            <p class="gameUpdate">{{ date('Y-m-d', $game['uptime']) }}</p>
                        </div>
                        <div class="viewNow">
                            <a href="{{ route('game.show', ['union_id' => $game['union_id']]) }}">{{ __('auth.view_now') }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="pagination" class="pagination"></div>
        </div>
    </div>

@endsection

@section('scripts')
    {{-- <script src="{{ asset('js/games.js') }}"></script> --}}
    <div id="translation-container" data-view-now="{{ __('auth.view_now') }}"></div>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/games-blade.js') }}"></script>

@endsection

@extends('layouts.app')

@section('title', __('auth.app_title'))
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

                @foreach ($topFourApps as $topApp)
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

                                <img class="bannerImage"
                                    src="{{ Str::startsWith($topApp['icon'], ['http://', 'https://']) ? $topApp['icon'] : config('app.img_db') . $topApp['icon'] }}"
                                    alt="App Banner" />

                            </div>
                            <p class="bannerTitle">{{ $topApp['name'] }}</p>
                            <a href="{{ route('app.show', ['union_id' => $topApp['union_id']]) }}"
                                class="viewButton">{{ __('auth.view_now') }}</a>
                        </div>
                    </swiper-slide>
                @endforeach
            </swiper-container>
        </div>

        {{-- 精选推荐 --}}
        <div class="app-recommend-section">
            <h2>{{ __('auth.selected_app_recommend') }}</h2>
            <div class="recommend-app-list">
                @foreach ($recommendedApps as $reApp)
                    <div class="appWrap">
                        <div class="appDetailWrap">
                            <img src="{{ Str::startsWith($reApp['icon'], ['http://', 'https://']) ? $reApp['icon'] : config('app.img_db') . $reApp['icon'] }}"
                                alt="{{ $reApp['name'] }}" />
                            <div class="details">
                                <p class="appName">{{ $reApp['name'] }}</p>
                                <p class="appCategory">{{ __('categories.' . $categories) }}</p>
                                <p class="appUpdate">{{ date('Y-m-d', $reApp['uptime']) }}</p>
                            </div>
                        </div>
                        <div class="viewNowButton">
                            <a
                                href="{{ route('app.show', ['union_id' => $reApp['union_id']]) }}">{{ __('auth.view_now') }}</a>
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
                    @foreach ($appCategories as $index => $category)
                        <a href="{{ route('app.category', ['category' => $category]) }}"
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
            <div id="all" class="catTabcontent">
                <!-- Content for 全部分类 -->
            </div>
            <div id="{{ $categories }}" class="catTabcontent">
                <!-- Content for {{ $categories }} -->
                @foreach ($fullAppList[$categories] as $app)
                    <div class="gameWrap">
                        <a href="{{ route('app.show', ['union_id' => $app['union_id']]) }}">
                            <img src="{{ Str::startsWith($app['icon'], ['http://', 'https://']) ? $app['icon'] : config('app.img_db') . $app['icon'] }}"
                                alt="{{ $app['name'] }}">
                        </a>
                        <div class="gameDetailWrap">
                            <p class="gameName">{{ $app['name'] }}</p>
                            <p class="gameType">{{ $app['type'] }}</p>
                            <p class="gameUpdate">{{ date('Y-m-d', $app['uptime']) }}</p>
                        </div>
                        <div class="viewNow">
                            <a href="{{ route('app.show', ['union_id' => $app['union_id']]) }}">{{ __('auth.view_now') }}
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
    {{-- <script src="{{ asset('js/applications.js') }}"></script> --}}
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/application-blade.js') }}"></script>
@endsection

@extends('layouts.app')

@section('title', __('auth.topic_title'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/topic.css') }}">
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

    <div class="topic-page">
        <div class="topBackground">
            <div class="container">
                <h1>{{ __('auth.topic_title') }}</h1>
                <div class="top-breadcrumb">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12"
                        height="14" viewBox="0 0 12 14">
                        <image id="dingweixiao" width="12" height="14" opacity="0.702"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAOCAYAAAAbvf3sAAAABHNCSVQICAgIfAhkiAAAARFJREFUKFNj/P//PwMIpKencwCpACC2BmIZsCADwxMgPgTEm2fOnPkDJMAI0gBULAtk1wOxOFQhOvUCKNAE1PSYMS0tjRvImQzEojgUw4RfAxm5IA2xQEYYAcUw6VUgDbOAPEkkDU+B7Ckg5wJxNhBLI8k9B2nYBJWEibcD3XoMxAH6zQpIVSJp+AfSsBYowIYkOAeoYSNUQyCQTkKS+wXS0AYU0EUS/A1k74by3YA0C5LcJZAGdGvx+b8NFg9FQFWOBEJqH9Cp/TANIGsLgNgeh6aDQPE+oIZ/YA1QDzIB6UIgdkDTtA/InwhSDBKHa4BqAoV9JhB7QjVtB9LTgYohpqJrQNKUCmSDTJyLrBgkDwDB7GB2TMfutQAAAABJRU5ErkJggg==" />
                    </svg>
                    <p><a href="{{ url('/') }}">{{ __('auth.homepage') }}</a> <span>></span> {{ __('auth.topics') }}
                    </p>
                </div>

                <div class="top-banner-section">
                    <div class="bannerWrap">
                        <div class="hotIconWrap">
                            <img src="{{ asset('images/home/hotIcon.png') }}" alt="Hot Icon" />
                            <p>HOT</p>
                        </div>
                        <img class="banner" src="{{ asset('images/topic/banner1.png') }}" alt="Banner Image" />
                        <div class="contentWrap">
                            <p class="topicTitle">升级快不花钱的传奇游戏</p>
                            <p class="topicUpdate">2023-11-03更新</p>
                        </div>
                    </div>
                    <div class="bannerWrap">
                        <img class="banner" src="{{ asset('images/topic/banner2.png') }}" alt="Banner Image" />
                        <div class="contentWrap">
                            <p class="topicTitle">出击速度很快的动作</p>
                            <p class="topicUpdate">2023-12-08更新</p>
                        </div>
                    </div>
                    <div class="bannerWrap">
                        <img class="banner" src="{{ asset('images/topic/banner3.png') }}" alt="Banner Image" />
                        <div class="contentWrap">
                            <p class="topicTitle">黑猫奇闻社所有版本</p>
                            <p class="topicUpdate">2023-12-08更新</p>
                        </div>
                    </div>
                    <div class="bannerWrap">
                        <img class="banner" src="{{ asset('images/topic/banner4.png') }}" alt="Banner Image" />
                        <div class="contentWrap">
                            <p class="topicTitle">出击速度很快的动作</p>
                            <p class="topicUpdate">2023-12-08更新</p>
                        </div>
                    </div>
                </div>
                <div class="top-banner-section mobile">
                    <swiper-container class="mySwiper good-app-swiper" init="false">
                        <swiper-slide>
                            <div class="bannerWrap">
                                <div class="hotIconWrap">
                                    <img src="{{ asset('images/home/hotIcon.png') }}" alt="Hot Icon" />
                                    <p>HOT</p>
                                </div>
                                <img class="banner" src="{{ asset('images/topic/mobileBanner1.png') }}"
                                    alt="Banner Image" />
                                <div class="contentWrap">
                                    <p class="topicTitle">升级快不花钱的传奇游戏</p>
                                    <p class="topicUpdate">2023-11-03更新</p>
                                </div>
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="bannerWrap">
                                <img class="banner" src="{{ asset('images/topic/mobileBanner2.png') }}"
                                    alt="Banner Image" />
                                <div class="contentWrap">
                                    <p class="topicTitle">出击速度很快的动作</p>
                                    <p class="topicUpdate">2023-12-08更新</p>
                                </div>
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="bannerWrap">
                                <img class="banner" src="{{ asset('images/topic/mobileBanner1.png') }}"
                                    alt="Banner Image" />
                                <div class="contentWrap">
                                    <p class="topicTitle">黑猫奇闻社所有版本</p>
                                    <p class="topicUpdate">2023-12-08更新</p>
                                </div>
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="bannerWrap">
                                <img class="banner" src="{{ asset('images/topic/mobileBanner2.png') }}"
                                    alt="Banner Image" />
                                <div class="contentWrap">
                                    <p class="topicTitle">出击速度很快的动作</p>
                                    <p class="topicUpdate">2023-12-08更新</p>
                                </div>
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="bannerWrap">
                                <img class="banner" src="{{ asset('images/topic/mobileBanner2.png') }}"
                                    alt="Banner Image" />
                                <div class="contentWrap">
                                    <p class="topicTitle">出击速度很快的动作</p>
                                    <p class="topicUpdate">2023-12-08更新</p>
                                </div>
                            </div>
                        </swiper-slide>
                    </swiper-container>
                </div>
            </div>
        </div>


        <div class="topic-content-list">
            <div class="container">
                <div class="topic-tab-list">
                    <div class="tab">
                        @php
                            $tabs = [
                                1 => __('auth.all_collections'),
                                2 => __('auth.game_topics'),
                                3 => __('auth.app_topics'),
                            ];
                        @endphp

                        @foreach ($tabs as $index => $label)
                            <button class="topicTab tablinks {{ $index == 1 ? 'active' : '' }}"
                                data-tab="{{ $index }}">{{ $label }}</button>
                        @endforeach
                    </div>
                </div>

                <div class="topic-listing">
                    @foreach ($tabs as $index => $label)
                        <div id="tab-{{ $index }}" class="topicTabContent {{ $index == 1 ? 'active' : '' }}">
                            <div class="topicWrap">
                                <h3>{{ $label }}</h3>
                                <p>这里是{{ $label }}的内容。</p>
                            </div>
                            <div class="pagination"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/topic.js') }}"></script>
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
    <script src="{{ asset('js/topic-blade.js') }}"></script>
@endsection

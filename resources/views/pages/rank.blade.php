@extends('layouts.app')

@section('title', __('auth.ranking'))

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/rank.css') }}">
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

    <div class="shadow" style="background: #f9fafc;"></div>
    <h1>排行榜</h1>

    <div class="topContainer">
        <div class="container">
            <div class="top-breadcrumb">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12"
                    height="14" viewBox="0 0 12 14">
                    <image id="dingweixiao" width="12" height="14" opacity="0.702"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAOCAYAAAAbvf3sAAAABHNCSVQICAgIfAhkiAAAARFJREFUKFNj/P//PwMIpKencwCpACC2BmIZsCADwxMgPgTEm2fOnPkDJMAI0gBULAtk1wOxOFQhOvUCKNAE1PSYMS0tjRvImQzEojgUw4RfAxm5IA2xQEYYAcUw6VUgDbOAPEkkDU+B7Ckg5wJxNhBLI8k9B2nYBJWEibcD3XoMxAH6zQpIVSJp+AfSsBYowIYkOAeoYSNUQyCQTkKS+wXS0AYU0EUS/A1k74by3YA0C5LcJZAGdGvx+b8NFg9FQFWOBEJqH9Cp/TANIGsLgNgeh6aDQPE+oIZ/YA1QDzIB6UIgdkDTtA/InwhSDBKHa4BqAoV9JhB7QjVtB9LTgYohpqJrQNKUCmSDTJyLrBgkDwDB7GB2TMfutQAAAABJRU5ErkJggg==" />
                </svg>
                <p><a href="{{ url('/') }}">{{ __('auth.homepage') }}</a> <span>></span> {{ __('auth.ranking') }}
                </p>
            </div>

            <div class="top-tab-banner">
                <div class="titleWrap">
                    <h2>TOP{{ __('auth.ranking') }}</h2>
                    <img src="{{ asset('images/rank/titleSide.png') }}" alt="Title Icon" />
                </div>
                <h2>{{ __('auth.hottest_latest_best') }}</h2>
                <div class="mobile-application-rank-tab">
                    <div class="tab">
                        <button class="topTab tablinks active" onclick="switchTab(event, 'gameRank')">手游排行榜</button>
                        <button class="topTab tablinks" onclick="switchTab(event, 'appRank')">应用排行榜</button>
                    </div>
                </div>
                <img class="crownImg" src="{{ asset('images/rank/crown.png') }}" alt="Crown Image" />
                <img class="crownBottomImg" src="{{ asset('images/rank/crownBotton.png') }}" alt="Crown Shadow" />
            </div>

            <div class="tabInnerContent">
                <div id="gameRank" class="topTabcontent">
                    <div class="middle-banner">
                        <div class="middle-banner-wrap">
                            <div class="imgWrap">
                                <img class="innerImage" src="{{ asset('images/rank/middlebanner1.png') }}"
                                    alt="Banner Image" />
                                <div class="innerImgWrap">
                                    <img src="{{ asset('images/rank/innersmall1.png') }}" alt="App Image" />
                                    <img src="{{ asset('images/rank/innersmall2.png') }}" alt="App Image" />
                                    <img src="{{ asset('images/rank/innersmall3.png') }}" alt="App Image" />
                                    <div class="innerLastWrap">
                                        <img src="{{ asset('images/rank/innersmall4.png') }}" alt="App Image" />
                                        <p>TOP10</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bannerTitleWrap">
                                <img class="hotIcon" src="{{ asset('images/home/HOT.png') }}" alt="Hot Icon" />
                                <p class="bannerTitle">传奇打金游戏排行榜</p>
                            </div>
                        </div>
                        <div class="middle-banner-wrap">
                            <div class="imgWrap">
                                <img class="innerImage" src="{{ asset('images/rank/middlebanner2.png') }}"
                                    alt="Banner Image" />
                                <div class="innerImgWrap">
                                    <img src="{{ asset('images/rank/innersmall1.png') }}" alt="App Image" />
                                    <img src="{{ asset('images/rank/innersmall2.png') }}" alt="App Image" />
                                    <img src="{{ asset('images/rank/innersmall3.png') }}" alt="App Image" />
                                    <div class="innerLastWrap">
                                        <img src="{{ asset('images/rank/innersmall4.png') }}" alt="App Image" />
                                        <p>TOP10</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bannerTitleWrap">
                                <img class="hotIcon" src="{{ asset('images/home/HOT.png') }}" alt="Hot Icon" />
                                <p class="bannerTitle">升级快不花钱的传奇游戏</p>
                            </div>
                        </div>
                        <div class="middle-banner-wrap">
                            <div class="imgWrap">
                                <img class="innerImage" src="{{ asset('images/rank/middlebanner3.png') }}"
                                    alt="Banner Image" />
                                <div class="innerImgWrap">
                                    <img src="{{ asset('images/rank/innersmall1.png') }}" alt="App Image" />
                                    <img src="{{ asset('images/rank/innersmall2.png') }}" alt="App Image" />
                                    <img src="{{ asset('images/rank/innersmall3.png') }}" alt="App Image" />
                                    <div class="innerLastWrap">
                                        <img src="{{ asset('images/rank/innersmall4.png') }}" alt="App Image" />
                                        <p>TOP10</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bannerTitleWrap">
                                <img class="hotIcon" src="{{ asset('images/home/HOT.png') }}" alt="Hot Icon" />
                                <p class="bannerTitle">传奇打金游戏排行榜</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="appRank" class="topTabcontent">
                    <div class="middle-banner">
                        <div class="middle-banner-wrap">
                            <div class="imgWrap">
                                <img class="innerImage" src="{{ asset('images/rank/middlebanner3.png') }}"
                                    alt="Banner Image" />
                                <div class="innerImgWrap">
                                    <img src="{{ asset('images/rank/innersmall1.png') }}" alt="App Image" />
                                    <img src="{{ asset('images/rank/innersmall2.png') }}" alt="App Image" />
                                    <img src="{{ asset('images/rank/innersmall3.png') }}" alt="App Image" />
                                    <div class="innerLastWrap">
                                        <img src="{{ asset('images/rank/innersmall4.png') }}" alt="App Image" />
                                        <p>TOP10</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bannerTitleWrap">
                                <img class="hotIcon" src="{{ asset('images/home/HOT.png') }}" alt="Hot Icon" />
                                <p class="bannerTitle">传奇打金游戏排行榜</p>
                            </div>
                        </div>
                        <div class="middle-banner-wrap">
                            <div class="imgWrap">
                                <img class="innerImage" src="{{ asset('images/rank/middlebanner2.png') }}"
                                    alt="Banner Image" />
                                <div class="innerImgWrap">
                                    <img src="{{ asset('images/rank/innersmall1.png') }}" alt="App Image" />
                                    <img src="{{ asset('images/rank/innersmall2.png') }}" alt="App Image" />
                                    <img src="{{ asset('images/rank/innersmall3.png') }}" alt="App Image" />
                                    <div class="innerLastWrap">
                                        <img src="{{ asset('images/rank/innersmall4.png') }}" alt="App Image" />
                                        <p>TOP10</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bannerTitleWrap">
                                <img class="hotIcon" src="{{ asset('images/home/HOT.png') }}" alt="Hot Icon" />
                                <p class="bannerTitle">升级快不花钱的传奇游戏</p>
                            </div>
                        </div>
                        <div class="middle-banner-wrap">
                            <div class="imgWrap">
                                <img class="innerImage" src="{{ asset('images/rank/middlebanner1.png') }}"
                                    alt="Banner Image" />
                                <div class="innerImgWrap">
                                    <img src="{{ asset('images/rank/innersmall1.png') }}" alt="App Image" />
                                    <img src="{{ asset('images/rank/innersmall2.png') }}" alt="App Image" />
                                    <img src="{{ asset('images/rank/innersmall3.png') }}" alt="App Image" />
                                    <div class="innerLastWrap">
                                        <img src="{{ asset('images/rank/innersmall4.png') }}" alt="App Image" />
                                        <p>TOP10</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bannerTitleWrap">
                                <img class="hotIcon" src="{{ asset('images/home/HOT.png') }}" alt="Hot Icon" />
                                <p class="bannerTitle">传奇打金游戏排行榜</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottomContainer">
        <div class="container">
            <div class="tabInnerContent">
                <div id="gameRank" class="topTabcontent">
                    <div class="category-rank-tab">
                        <div class="tab">
                            @foreach (['guaji' => '挂机游戏排行榜', 'xiaoyuan' => '校园游戏排行榜', 'fangzhi' => '放置游戏排行榜', 'celue' => '策略游戏排行榜', 'sanguo' => '三国游戏排行榜', 'chuanqi' => '传奇打金游戏排行榜', 'gedou' => '格斗手游排行榜', 'pinguo' => '苹果游戏排行榜'] as $category => $title)
                                <button class="gameCatRankTab catRankTab tablinks {{ $loop->first ? 'active' : '' }}"
                                    onclick="switchGameCatRankTab(event, '{{ $category }}')">{{ $title }}</button>
                            @endforeach
                        </div>
                    </div>

                    @foreach (['guaji', 'xiaoyuan', 'fangzhi', 'celue', 'sanguo', 'chuanqi', 'gedou', 'pinguo'] as $category)
                        <div id="{{ $category }}" class="catRankTabContent gameCatRankTabContent"></div>
                    @endforeach
                </div>
                <div id="appRank" class="topTabcontent">
                    <div class="category-rank-tab">
                        <div class="tab">
                            @foreach (['guaji1' => '挂机游戏排行榜', 'xiaoyuan1' => '校园游戏排行榜', 'fangzhi1' => '放置游戏排行榜', 'celue1' => '策略游戏排行榜', 'sanguo1' => '三国游戏排行榜', 'chuanqi1' => '传奇打金游戏排行榜', 'gedou1' => '格斗手游排行榜', 'pinguo1' => '苹果游戏排行榜'] as $category => $title)
                                <button class="appCatRankTab catRankTab tablinks {{ $loop->first ? 'active' : '' }}"
                                    onclick="switchAppCatRankTab(event, '{{ $category }}')">{{ $title }}</button>
                            @endforeach
                        </div>
                    </div>
                    @foreach (['guaji1', 'xiaoyuan1', 'fangzhi1', 'celue1', 'sanguo1', 'chuanqi1', 'gedou1', 'pinguo1'] as $category)
                        <div id="{{ $category }}" class="catRankTabContent appCatRankTabContent"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/rank.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script>
        function createGameList(games) {
            return games.map((game, index) => {
                const isSmallScreen = window.matchMedia('(max-width: 1024px)').matches;
                let gameClass = ''; // Default class
                if (index === 0) {
                    gameClass = 'first';
                } else if (index === 1) {
                    gameClass = 'second';
                } else if (index === 2) {
                    gameClass = 'third';
                }
                let crownImg = ''; // Default crown image
                if (index === 0) {
                    crownImg = '<img class="crown" src="images/home/1.png" alt="Crown Image" />';
                } else if (index === 1) {
                    crownImg = '<img class="crown" src="images/home/2.png" alt="Crown Image" />';
                } else if (index === 2) {
                    crownImg = '<img class="crown" src="images/home/3.png" alt="Crown Image" />';
                }
                return `
                    <div class="gameWrap">
                        <div class="gameNumber ${gameClass}">${index + 1}</div>
                        <div class="gameImgWrap">
                            ${crownImg}
                            <img class="gameImage" src="${game.image}" alt="Game Image" />
                        </div>
                        <div class="gameDetailWrap">
                            <h3 class="gameName">${game.name}</h3>
                            <div class="gameDetail">
                                <p>${game.gameCat}</p>
                                <p>${game.memory}</p>
                                <p>${isSmallScreen ? game.dateMobile + ' 更新' : game.date}</p>
                            </div>
                            <p class="gameContent">${game.content}</p>
                            <div class="gameCategoryType">
                                ${game.types.map(type => `<p>${type}</p>`).join('')}
                            </div>   
                        </div>
                        ${isSmallScreen ? '<div class="viewButton">查看</div>' : ''}
                        <img class="arrowLeft" src="images/rank/arrowLeft.png" alt="Arrow Right" />
                    </div>
                `;
            }).join('');
        }

        // Function to load the games into the appropriate category
        function loadGames() {
            const categories = ['guaji', 'xiaoyuan', 'fangzhi', 'celue', 'sanguo', 'chuanqi', 'gedou', 'pinguo'];

            categories.forEach(category => {
                const categoryGames = mobileGames.filter(game => game.rankcategory === category);
                document.getElementById(category).innerHTML = createGameList(categoryGames);
            });
        }

        function createAppList(games) {
            return games.map((game, index) => {
                const isSmallScreen = window.matchMedia('(max-width: 1024px)').matches;
                let gameClass = ''; // Default class
                if (index === 0) {
                    gameClass = 'first';
                } else if (index === 1) {
                    gameClass = 'second';
                } else if (index === 2) {
                    gameClass = 'third';
                }
                let crownImg = ''; // Default crown image
                if (index === 0) {
                    crownImg = '<img class="crown" src="./assets/images/home/1.png" alt="Crown Image" />';
                } else if (index === 1) {
                    crownImg = '<img class="crown" src="./assets/images/home/2.png" alt="Crown Image" />';
                } else if (index === 2) {
                    crownImg = '<img class="crown" src="./assets/images/home/3.png" alt="Crown Image" />';
                }
                return `
                    <div class="gameWrap">
                        <div class="gameNumber ${gameClass}">${index + 1}</div>
                        <div class="gameImgWrap">
                            ${crownImg}
                            <img class="gameImage" src="${game.image}" alt="Game Image" />
                        </div>
                        <div class="gameDetailWrap">
                            <h3 class="gameName">${game.name}</h3>
                            <div class="gameDetail">
                                <p>${game.gameCat}</p>
                                <p>${game.memory}</p>
                                <p>${isSmallScreen ? game.dateMobile + ' 更新' : game.date}</p>
                            </div>
                            <p class="gameContent">${game.content}</p>
                            <div class="gameCategoryType">
                                ${game.types.map(type => `<p>${type}</p>`).join('')}
                            </div>   
                        </div>
                        ${isSmallScreen ? '<div class="viewButton">查看</div>' : ''}
                        <img class="arrowLeft" src="./assets/images/rank/arrowLeft.png" alt="Arrow Right" />
                    </div>
                `;
            }).join('');
        }

        // Function to load the games into the appropriate category
        function loadApps() {
            const categories = ['guaji1', 'xiaoyuan1', 'fangzhi1', 'celue1', 'sanguo1', 'chuanqi1', 'gedou1', 'pinguo1'];

            categories.forEach(category => {
                const categoryApps = applications.filter(app => app.rankcategory === category);
                document.getElementById(category).innerHTML = createGameList(categoryApps);
            });
        }


        document.addEventListener('DOMContentLoaded', () => {
            loadGames();
            loadApps();

            // Listen for screen resize to handle responsive logic
            window.addEventListener('resize', () => {
                loadGames();
                loadApps();
            });
        });
    </script>
@endsection

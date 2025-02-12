@extends('layouts.app')

@section('title', '游戏页')

@section('content')
    <div class="nav-list">
        <a href="{{ url('/') }}">首页</a>
        <a class="active" href="./games">游戏</a>
        <a href="./application">应用</a>
        <a href="./info">攻略</a>
        <a href="./topic">专题</a>
        <a href="./rank">排行榜</a>
    </div>

    <div class="shadow"></div>

    <div class="container">
        <h1>游戏页</h1>
        <div class="top-breadcrumb">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="14" viewBox="0 0 12 14">
                <image id="dingweixiao" width="12" height="14" opacity="0.702" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAOCAYAAAAbvf3sAAAABHNCSVQICAgIfAhkiAAAARFJREFUKFNj/P//PwMIpKencwCpACC2BmIZsCADwxMgPgTEm2fOnPkDJMAI0gBULAtk1wOxOFQhOvUCKNAE1PSYMS0tjRvImQzEojgUw4RfAxm5IA2xQEYYAcUw6VUgDbOAPEkkDU+B7Ckg5wJxNhBLI8k9B2nYBJWEibcD3XoMxAH6zQpIVSJp+AfSsBYowIYkOAeoYSNUQyCQTkKS+wXS0AYU0EUS/A1k74by3YA0C5LcJZAGdGvx+b8NFg9FQFWOBEJqH9Cp/TANIGsLgNgeh6aDQPE+oIZ/YA1QDzIB6UIgdkDTtA/InwhSDBKHa4BqAoV9JhB7QjVtB9LTgYohpqJrQNKUCmSDTJyLrBgkDwDB7GB2TMfutQAAAABJRU5ErkJggg=="/>
            </svg>
            <p><a href="{{ url('/') }}">首页</a> <span>></span> 手机游戏</p>
        </div>

        <div class="top-banner-slider">
            <swiper-container class="mySwiper topBannerSwiper" space-between="20" slides-per-view="3" navigation="true" init="false">
                <swiper-slide>
                    <div class="imgWrap">
                        <div class="newIconWrap">
                        <img src="{{ asset('images/home/newIcon.png') }}" alt="New Icon" />
                        <p>NEW</p>
                        </div>
                        <div class="overlayImage">
                            <div class="overlay"></div>
                            <img class="bannerImage" src="{{ asset('images/games/topBanner1.png') }}" alt="App Banner" />
                        </div>
                        <p class="bannerTitle">凡人修仙传：人界篇</p>
                        <div class="viewButton">查看</div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="imgWrap">
                        <div class="overlayImage">
                            <div class="overlay"></div>
                            <img class="bannerImage" src="{{ asset('images/games/topBanner2.png') }}" alt="App Banner" />
                        </div>
                        <p class="bannerTitle">凡人修仙传：人界篇</p>
                        <div class="viewButton">查看</div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="imgWrap">
                        <div class="overlayImage">
                            <div class="overlay"></div>
                            <img class="bannerImage" src="{{ asset('images/games/topBanner3.png') }}" alt="App Banner" />
                        </div>
                        <p class="bannerTitle">凡人修仙传：人界篇</p>
                        <div class="viewButton">查看</div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="imgWrap">
                        <div class="overlayImage">
                            <div class="overlay"></div>
                            <img class="bannerImage" src="{{ asset('images/games/topBanner1.png') }}" alt="App Banner" />
                        </div>
                        <p class="bannerTitle">凡人修仙传：人界篇</p>
                        <div class="viewButton">查看</div>
                    </div>
                </swiper-slide>
            </swiper-container>
        </div>

        <div class="game-recommend-section">
            <h2>精选游戏推荐</h2>
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
                    <div class="viewNowButton">查看</div>        
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
                    <div class="viewNowButton">查看</div>        
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
                    <div class="viewNowButton">查看</div>        
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
                    <div class="viewNowButton">查看</div>        
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
                    <div class="viewNowButton">查看</div>        
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
                    <div class="viewNowButton">查看</div>        
                </div>
            </div>
        </div>  
    </div>

    <div class="category-tab-section">
        <div class="container">
            <div class="category-tab">
                <div class="tab">
                    <button class="catTab tablinks active" onclick="switchTab(event, 'quanbu')">全部分类</button>
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
                    <button class="catTab tablinks" onclick="switchTab(event, 'qita')">其他游戏</button>
                </div>
            </div>
            <!-- <div class="category-tab mobile">
                <div class="tab">
                    <button class="catTab tablinks active" data-tab="1">全部分类</button>
                    <button class="catTab tablinks" data-tab="2">角色扮演</button>
                    <button class="catTab tablinks" data-tab="3">关卡塔防</button>
                    <button class="catTab tablinks" data-tab="4">动作竞技</button>
                    <button class="catTab tablinks" data-tab="5">休闲益智</button>
                    <button class="catTab tablinks" data-tab="6">战争策略</button>
                    <button class="catTab tablinks" data-tab="7">体育竞技</button>
                    <button class="catTab tablinks" data-tab="8">飞行射击</button>
                    <button class="catTab tablinks" data-tab="9">冒险解谜</button>
                    <button class="catTab tablinks" data-tab="10">生存冒险</button>
                    <button class="catTab tablinks" data-tab="11">卡牌对战</button>
                    <button class="catTab tablinks" data-tab="12">音乐舞蹈</button>
                    <button class="catTab tablinks" data-tab="13">传奇手游</button>
                    <button class="catTab tablinks" data-tab="14">模拟经营</button>
                    <button class="catTab tablinks" data-tab="15">街机格斗</button>
                    <button class="catTab tablinks" data-tab="16">宠物养成</button>
                    <button class="catTab tablinks" data-tab="17">赛车竞赛</button>
                    <button class="catTab tablinks" data-tab="18">其他游戏</button>
                </div>
            </div> -->
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
<script src="{{ asset('js/games.js') }}"></script>
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
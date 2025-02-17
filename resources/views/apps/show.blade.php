@extends('layouts.app')

@section('title', $app->name)
@section('styles')
    <style>
        .testing>p {
            text-align: left;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/appDownload.css') }}">
@endsection

@section('content')
    <div class="nav-list">
        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">{{ __('auth.homepage') }}</a>
        <a href="{{ url('/games') }}" class="{{ request()->is('games') ? 'active' : '' }}">{{ __('auth.game') }}</a>
        <a href="{{ url('/application') }}"
            class="{{ request()->is('application*') ? 'active' : '' }}">{{ __('auth.app') }}</a>
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
                    {{ __('auth.application') }}
                    <span>></span> {{ __('auth.details') }}
                </p>


            </div>
            <div class="banner-download">
                <img class="appImage"
                    src="{{ Str::startsWith($app->icon, ['http://', 'https://']) ? $app->icon : env('IMG_DB') . $app->icon }}"
                    alt="App Image" />
                <div class="detailWrap">
                    <div class="name">{{ $app->name }}</div>
                    <div class="detail">
                        {{-- <p>角色扮演</p>
                        <p>V1.2.0.5</p>
                        <p>2023-12-12 10:58:06</p> --}}
                        <p>{{ $app->title }}</p>
                    </div>
                    <div class="typeWrap">
                        <p>赛博朋克</p>
                        <p>科幻</p>
                        <p>角色扮演</p>
                        <p>主体加强</p>
                    </div>
                </div>
                <div class="downloadButtonWrap">
                    <div class="ratingWrap">
                        <p class="rating-score">{{ $app->game_score }}</p>
                        <div class="starWrap">
                            <div class="stars">
                            </div>
                            <p>4,063万条评价</p>
                        </div>
                    </div>
                    <div class="buttonWrap">
                        <div>
                            <img src="{{ asset('images/download/xiazai.png') }}" alt="Download Icon" />
                            <p>免费安装</p>
                        </div>
                        <div>
                            <img src="{{ asset('images/download/xiazai.png') }}" alt="Download Icon" />
                            <p>Download APK</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-download-mobile">
                <div class="topWrap">
                    <img class="appImage"
                        src="{{ Str::startsWith($app->icon, ['http://', 'https://']) ? $app->icon : env('IMG_DB') . $app->icon }}"
                        alt="App Image" />
                    <div class="detailWrap">
                        <div class="name">{{ $app->name }}</div>
                        <div class="dateUpdate">2024-01-02 13:10:26更新</div>
                    </div>
                </div>
                <div class="bottomWrap">
                    <div class="ratingWrapMobile">
                        <p class="ratingScore">
                            9.0
                            <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                        </p>
                        <p>4,063万条评价</p>
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
                        <h2>截图预览</h2>
                        <swiper-container class="mySwiper screenshotSwiper" space-between="15" slides-per-view="1.7"
                            navigation="true" init="false">
                            <swiper-slide>
                                <img src="{{ asset('images/download/screenshot1.png') }}" alt="App Screenshot" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="{{ asset('images/download/screenshot1.png') }}" alt="App Screenshot" />
                            </swiper-slide>
                            <swiper-slide>
                                <img src="{{ asset('images/download/screenshot1.png') }}" alt="App Screenshot" />
                            </swiper-slide>
                        </swiper-container>
                    </div>

                    <div class="app-info">
                        <div class="testing">{!! $app->introduce !!}</div>
                        <br>

                        <h2>游戏简介</h2>
                        <p>独具特色的NPC立绘，欧美魔幻风格的英雄原画——一袭红衣的精灵族酒馆老板娘，手持火枪的美女海盗头目，龇牙咧 嘴的狼人劫匪....还原欧美卡通独特的魔幻画风，带你翻开这场奇幻的冒险篇章</p>
                        <p>创造的含义是丰富的，可以是创造专属家园、自己的角色外观、DIY载具；可以是创造“想怎么玩就怎么玩”的个性化
                            游戏体验，没有“策划教你玩”，没有繁琐的课程表和巨大的数值压力；可以是和朋友们一起自然融入并逐渐享受奇妙 世界不应该只有战斗和生存，这些关乎“创造”的驱动，是星球这款产品，一直在做的努力和尝试
                        </p>
                        <p>在地下城与王国的世界中，跑图将会成为一件趣事。关卡，九大地图各具特色，考验脑力的密码锁，惊险刺激的玻璃桥，趣味横生的拼图和跑魂... 在这里的每一场冒险，都将充满奇趣与新鲜</p>
                        <h2>游戏版本优势</h2>
                        <p>正因如此，游戏正式改名为《创造吧！我们的星球》，这代表着我们研发努力的方向，也代表着我们希望和大家共同创造、共
                            同成长的初心。游戏正式改名为《创造吧！我们的星球》，这代表着我们研发努力的方向，也代表着我们希望和大家共同创造 共同成长的初心</p>

                        <div class="update-info">
                            <div class="titleWrap">
                                <h2>更新资料</h2>
                                <p class="toggle-content">查看历史日志</p>
                            </div>
                            <div class="update-content">
                                <h2>游戏简介</h2>
                                <p>独具特色的NPC立绘，欧美魔幻风格的英雄原画——一袭红衣的精灵族酒馆老板娘，手持火枪的美女海盗头目，龇牙咧
                                    嘴的狼人劫匪....还原欧美卡通独特的魔幻画风，带你翻开这场奇幻的冒险篇章</p>
                                <p>创造的含义是丰富的，可以是创造专属家园、自己的角色外观、DIY载具；可以是创造“想怎么玩就怎么玩”的个性化
                                    游戏体验，没有“策划教你玩”，没有繁琐的课程表和巨大的数值压力；可以是和朋友们一起自然融入并逐渐享受奇妙
                                    世界不应该只有战斗和生存，这些关乎“创造”的驱动，是星球这款产品，一直在做的努力和尝试</p>
                                <p>在地下城与王国的世界中，跑图将会成为一件趣事。关卡，九大地图各具特色，考验脑力的密码锁，惊险刺激的玻璃桥，趣味横生的拼图和跑魂... 在这里的每一场冒险，都将充满奇趣与新鲜
                                </p>
                                <h2>游戏版本优势</h2>
                                <p>正因如此，游戏正式改名为《创造吧！我们的星球》，这代表着我们研发努力的方向，也代表着我们希望和大家共同创造、共
                                    同成长的初心。游戏正式改名为《创造吧！我们的星球》，这代表着我们研发努力的方向，也代表着我们希望和大家共同创造 共同成长的初心</p>
                                <p class="collapse-btn">收起</p>
                            </div>
                            <p class="appVersion">版本1.0.9 / 2023-12-12 16:05:02</p>
                            <p class="appUpdateInfo">千套牌组搭配，五大职业，十二种族，50+英雄为你带来无限套路！</p>
                        </div>

                        <div class="detail-info">
                            <h2>详细信息</h2>
                            <div class="detailWrap">
                                <div>
                                    <h2>游戏大小</h2>
                                    <p>306.1MB </p>
                                </div>
                                <div>
                                    <h2>系统要求</h2>
                                    <p>苹果系统4.3以上</p>
                                </div>
                                <div>
                                    <h2>是否收费 </h2>
                                    <p>免费 (游戏内购买项目)</p>
                                </div>
                                <div>
                                    <h2>游戏语言</h2>
                                    <p>中文</p>
                                </div>
                                <div>
                                    <h2>包名</h2>
                                    <p>com.honghusaas.huoli.driver</p>
                                </div>
                                <div>
                                    <h2>MD5值</h2>
                                    <p>78A5DC9CF747FQ0E62D116EA BE598BO7</p>
                                </div>
                                <div>
                                    <h2>开发商</h2>
                                    <p>安徽雷虎网络科技有限公司</p>
                                </div>
                            </div>
                        </div>

                        <div class="related-history-version">
                            <h2>相关历史版本</h2>
                            <div class="downloadList">
                                <div class="downloadWrap">
                                    <div class="titleWrap">
                                        <p>矩阵临界：失控边缘最新版本 116.0.5993.48</p>
                                        <div class="dateMemory">
                                            <p>20.7MB</p>
                                            <p>2023年12月15日</p>
                                        </div>
                                    </div>
                                    <div class="downloadButton">
                                        <img src="{{ asset('images/download/xiazai.png') }}" alt="Download Icon" />
                                        <p>Download</p>
                                    </div>
                                </div>
                                <div class="downloadWrap">
                                    <div class="titleWrap">
                                        <p>矩阵临界：失控边缘最新版本 118.0.5993.48</p>
                                        <div class="dateMemory">
                                            <p>56.3MB</p>
                                            <p>2023年12月15日</p>
                                        </div>
                                    </div>
                                    <div class="downloadButton">
                                        <img src="{{ asset('images/download/xiazai.png') }}" alt="Download Icon" />
                                        <p>安装</p>
                                    </div>
                                </div>
                                <div class="downloadWrap">
                                    <div class="titleWrap">
                                        <p>矩阵临界：失控边缘最新版本 118.0.5993.48</p>
                                        <div class="dateMemory">
                                            <p>20.7MB</p>
                                            <p>2023年12月15日</p>
                                        </div>
                                    </div>
                                    <div class="downloadButton">
                                        <img src="{{ asset('images/download/xiazai.png') }}" alt="Download Icon" />
                                        <p>安装</p>
                                    </div>
                                </div>
                                <div class="downloadWrap">
                                    <div class="titleWrap">
                                        <p>矩阵临界：失控边缘最新版本 118.0.5993.48</p>
                                        <div class="dateMemory">
                                            <p>20.7MB</p>
                                            <p>2023年12月15日</p>
                                        </div>
                                    </div>
                                    <div class="downloadButton">
                                        <img src="{{ asset('images/download/xiazai.png') }}" alt="Download Icon" />
                                        <p>安装</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="similar-app-list">
                        <div class="titleWrap">
                            <h2>类似游戏</h2>
                            <p class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                                    alt="More Icon" /></p>
                        </div>
                        <div class="appList">
                            <div class="appWrap">
                                <img src="{{ asset('images/games/game24.png') }}" alt="App Image" />
                                <p class="name">仙剑奇侠传</p>
                                <p class="dateUpdate">2023-12-06更新</p>
                                <div class="mobileStarWrap">
                                    <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                                    <p>9.7</p>
                                </div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/games/game19.png') }}" alt="App Image" />
                                <p class="name">哆啦A梦飞车</p>
                                <p class="dateUpdate">2023-12-06更新</p>
                                <div class="mobileStarWrap">
                                    <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                                    <p>8.9</p>
                                </div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/games/game20.png') }}" alt="App Image" />
                                <p class="name">不朽家族</p>
                                <p class="dateUpdate">2023-02-07更新</p>
                                <div class="mobileStarWrap">
                                    <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                                    <p>7.8</p>
                                </div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/games/game21.png') }}" alt="App Image" />
                                <p class="name">异界深渊：大灵</p>
                                <p class="dateUpdate">2022-08-16更新</p>
                                <div class="mobileStarWrap">
                                    <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                                    <p>9.0</p>
                                </div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/games/game22.png') }}" alt="App Image" />
                                <p class="name">最强祖师</p>
                                <p class="dateUpdate">2023-02-07更新</p>
                                <div class="mobileStarWrap">
                                    <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                                    <p>9.7</p>
                                </div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/games/game23.png') }}" alt="App Image" />
                                <p class="name">奥拉星2</p>
                                <p class="dateUpdate">2022-08-16更新</p>
                                <div class="mobileStarWrap">
                                    <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                                    <p>9.7</p>
                                </div>
                            </div>
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
                            <h2>相关资讯</h2>
                            <p class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                                    alt="More Icon" /></p>
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
                            <h2>好游安利</h2>
                            <p class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                                    alt="More Icon" /></p>
                        </div>
                        <div class="appList">
                            <div class="appWrap">
                                <img src="{{ asset('images/games/game1.png') }}" alt="App Image" />
                                <p class="name">仙剑奇侠传</p>
                                <p class="dateUpdate">2023-12-06更新</p>
                                <div class="mobileStarWrap">
                                    <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                                    <p>9.7</p>
                                </div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/games/game2.png') }}" alt="App Image" />
                                <p class="name">哆啦A梦飞车</p>
                                <p class="dateUpdate">2023-12-06更新</p>
                                <div class="mobileStarWrap">
                                    <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                                    <p>8.9</p>
                                </div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/games/game3.png') }}" alt="App Image" />
                                <p class="name">不朽家族</p>
                                <p class="dateUpdate">2023-02-07更新</p>
                                <div class="mobileStarWrap">
                                    <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                                    <p>7.8</p>
                                </div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/games/game4.png') }}" alt="App Image" />
                                <p class="name">异界深渊：大灵</p>
                                <p class="dateUpdate">2022-08-16更新</p>
                                <div class="mobileStarWrap">
                                    <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                                    <p>9.0</p>
                                </div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/games/game5.png') }}" alt="App Image" />
                                <p class="name">最强祖师</p>
                                <p class="dateUpdate">2023-02-07更新</p>
                                <div class="mobileStarWrap">
                                    <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                                    <p>9.0</p>
                                </div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/games/game6.png') }}" alt="App Image" />
                                <p class="name">奥拉星2</p>
                                <p class="dateUpdate">2022-08-16更新</p>
                                <div class="mobileStarWrap">
                                    <img src="{{ asset('images/download/star-fill.png') }}" alt="Star Fill" />
                                    <p>9.0</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reviewComment">
                        <h2>评分和评价</h2>
                        <div class="commentBoxMobile">
                            <div class="wantToComment">
                                <img src="{{ asset('images/download/commentIcon.png') }}" alt="Comment Icon" />
                                <p>我要评价</p>
                            </div>
                            <div class="mobileStarWrap">
                                <div class="mobileStar"></div>
                                <div class="mobileStar"></div>
                                <div class="mobileStar"></div>
                                <div class="mobileStar"></div>
                                <div class="mobileStar"></div>
                            </div>
                            <p>(轻触星星发布你的评论)</p>
                        </div>
                        <div class="titleWrapMobile">
                            <h2>全部评论</h2>
                            <div class="commentSortBy">
                                <p class="active">推荐</p>
                                <p>最新</p>
                                <p>最热</p>
                            </div>
                        </div>
                        <div class="reviewWrap">
                            <div class="ratingWrap">
                                <p class="rating-score">{{ $app->game_score }}</p>
                                <div class="starWrap">
                                    <div class="stars"> </div>
                                </div>
                                <p>4,063万条评价</p>
                            </div>
                            <div class="rateBarWrap">
                                <div class="barWrap">
                                    <p>5星</p>
                                    <div class="rateBar">
                                        <div class="bar" style="width: 80%;"></div>
                                    </div>
                                </div>
                                <div class="barWrap">
                                    <p>4星</p>
                                    <div class="rateBar">
                                        <div class="bar" style="width: 22%;"></div>
                                    </div>
                                </div>
                                <div class="barWrap">
                                    <p>3星</p>
                                    <div class="rateBar">
                                        <div class="bar" style="width: 20%;"></div>
                                    </div>
                                </div>
                                <div class="barWrap">
                                    <p>2星</p>
                                    <div class="rateBar">
                                        <div class="bar" style="width: 15%;"></div>
                                    </div>
                                </div>
                                <div class="barWrap">
                                    <p>1星</p>
                                    <div class="rateBar">
                                        <div class="bar" style="width: 17%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-section">
                            <div class="titleWrap">
                                <h2>全部评论</h2>
                                <div class="commentSortBy">
                                    <p class="active">推荐</p>
                                    <p>最新</p>
                                    <p>最热</p>
                                </div>
                            </div>
                            <div class="inputWrap">
                                <input id="commentField" class="commentField" type="text"
                                    placeholder="善语结善缘，恶言伤人心~" />
                                <button id="sendComment">发送</button>
                            </div>
                            <div class="commentList">
                                <div class="commentWrap">
                                    <img class="profileIcon" src="{{ asset('images/download/profile1.png') }}"
                                        alt="User Profile" />
                                    <div class="commentDetailWrap">
                                        <div class="commentName">加啊蔡作园</div>
                                        <div class="ratingWrap">
                                            <p class="rating-score">8.0</p>
                                            <div class="starWrap">
                                                <div class="stars"> </div>
                                            </div>
                                            <p class="commentDate">2023-12-14 13:58:20</p>
                                        </div>
                                        <div class="comment">
                                            <p>这赛季的棋子做得有点意思，主要是我觉得这赛季的棋子布局有了很多的变化</p>
                                            <div class="likeReplyWrap">
                                                <img src="{{ asset('images/download/like.png') }}" alt="Like Icon" />
                                                <p>0回复</p>
                                            </div>
                                        </div>
                                        <div class="replyWrap">
                                            <img class="profileIcon"
                                                src="{{ asset('images/download/profilesmall1.png') }}"
                                                alt="User Profile" />
                                            <div class="replyDetailWrap">
                                                <div class="replyName">九尾狐</div>
                                                <div class="ratingWrap">
                                                    <p class="rating-score">8.0</p>
                                                    <div class="starWrap">
                                                        <div class="stars"> </div>
                                                    </div>
                                                    <p class="replyDate">2023-12-14 13:58:20</p>
                                                </div>
                                                <div class="reply">
                                                    <p>谢你的认可，感兴趣的话可以试玩一下哦</p>
                                                    <div class="likeReplyWrap">
                                                        <img src="{{ asset('images/download/like.png') }}"
                                                            alt="Like Icon" />
                                                        <p>1回复</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="commentWrap">
                                    <img class="profileIcon" src="{{ asset('images/download/profile2.png') }}"
                                        alt="User Profile" />
                                    <div class="commentDetailWrap">
                                        <div class="commentName">国风容华</div>
                                        <div class="ratingWrap">
                                            <p class="rating-score">4.0</p>
                                            <div class="starWrap">
                                                <div class="stars"> </div>
                                            </div>
                                            <p class="commentDate">2023-12-14 13:58:20</p>
                                        </div>
                                        <div class="comment">
                                            <p>这赛季的棋子做得有点意思，主要是我觉得这赛季的棋子布局有了很多的变化</p>
                                            <div class="likeReplyWrap">
                                                <img src="{{ asset('images/download/like.png') }}" alt="Like Icon" />
                                                <p>1回复</p>
                                            </div>
                                        </div>
                                        <div class="replyWrap">
                                            <img class="profileIcon"
                                                src="{{ asset('images/download/profilesmall2.png') }}"
                                                alt="User Profile" />
                                            <div class="replyDetailWrap">
                                                <div class="replyName">南冥星垂曜八荒</div>
                                                <div class="ratingWrap">
                                                    <p class="rating-score">8.0</p>
                                                    <div class="starWrap">
                                                        <div class="stars"> </div>
                                                    </div>
                                                    <p class="replyDate">2023-12-14 13:58:20</p>
                                                </div>
                                                <div class="reply">
                                                    <p>谢你的认可，感兴趣的话可以试玩一下哦</p>
                                                    <div class="likeReplyWrap">
                                                        <img src="{{ asset('images/download/like.png') }}"
                                                            alt="Like Icon" />
                                                        <p>0回复</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="commentWrap">
                                    <img class="profileIcon" src="{{ asset('images/download/profile3.png') }}"
                                        alt="User Profile" />
                                    <div class="commentDetailWrap">
                                        <div class="commentName">巧克力</div>
                                        <div class="ratingWrap">
                                            <p class="rating-score">10.0</p>
                                            <div class="starWrap">
                                                <div class="stars"> </div>
                                            </div>
                                            <p class="commentDate">2023-12-14 13:58:20</p>
                                        </div>
                                        <div class="comment">
                                            <p>这赛季的棋子做得有点意思，主要是我觉得这赛季的棋子布局有了很多的变化</p>
                                            <div class="likeReplyWrap">
                                                <img src="{{ asset('images/download/like.png') }}" alt="Like Icon" />
                                                <p>1回复</p>
                                            </div>
                                        </div>
                                        <div class="replyWrap">
                                            <img class="profileIcon"
                                                src="{{ asset('images/download/profilesmall3.png') }}"
                                                alt="User Profile" />
                                            <div class="replyDetailWrap">
                                                <div class="replyName">LoRA</div>
                                                <div class="ratingWrap">
                                                    <p class="rating-score">6.0</p>
                                                    <div class="starWrap">
                                                        <div class="stars"> </div>
                                                    </div>
                                                    <p class="replyDate">2023-12-14 13:58:20</p>
                                                </div>
                                                <div class="reply">
                                                    <p>谢你的认可，感兴趣的话可以试玩一下哦</p>
                                                    <div class="likeReplyWrap">
                                                        <img src="{{ asset('images/download/like.png') }}"
                                                            alt="Like Icon" />
                                                        <p>0回复</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="commentWrap">
                                    <img class="profileIcon" src="{{ asset('images/download/profile4.png') }}"
                                        alt="User Profile" />
                                    <div class="commentDetailWrap">
                                        <div class="commentName">机甲lora</div>
                                        <div class="ratingWrap">
                                            <p class="rating-score">8.0</p>
                                            <div class="starWrap">
                                                <div class="stars"> </div>
                                            </div>
                                            <p class="commentDate">2023-12-14 13:58:20</p>
                                        </div>
                                        <div class="comment">
                                            <p>这赛季的棋子做得有点意思，主要是我觉得这赛季的棋子布局有了很多的变化</p>
                                            <div class="likeReplyWrap">
                                                <img src="{{ asset('images/download/like.png') }}" alt="Like Icon" />
                                                <p>1回复</p>
                                            </div>
                                        </div>
                                        <div class="replyWrap">
                                            <img class="profileIcon"
                                                src="{{ asset('images/download/profilesmall4.png') }}"
                                                alt="User Profile" />
                                            <div class="replyDetailWrap">
                                                <div class="replyName">barren</div>
                                                <div class="ratingWrap">
                                                    <p class="rating-score">2.0</p>
                                                    <div class="starWrap">
                                                        <div class="stars"> </div>
                                                    </div>
                                                    <p class="replyDate">2023-12-14 13:58:20</p>
                                                </div>
                                                <div class="reply">
                                                    <p>谢你的认可，感兴趣的话可以试玩一下哦</p>
                                                    <div class="likeReplyWrap">
                                                        <img src="{{ asset('images/download/like.png') }}"
                                                            alt="Like Icon" />
                                                        <p>0回复</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="commentWrap">
                                    <img class="profileIcon" src="{{ asset('images/download/profile1.png') }}"
                                        alt="User Profile" />
                                    <div class="commentDetailWrap">
                                        <div class="commentName">加啊蔡作园</div>
                                        <div class="ratingWrap">
                                            <p class="rating-score">8.0</p>
                                            <div class="starWrap">
                                                <div class="stars"> </div>
                                            </div>
                                            <p class="commentDate">2023-12-14 13:58:20</p>
                                        </div>
                                        <div class="comment">
                                            <p>这赛季的棋子做得有点意思，主要是我觉得这赛季的棋子布局有了很多的变化</p>
                                            <div class="likeReplyWrap">
                                                <img src="{{ asset('images/download/like.png') }}" alt="Like Icon" />
                                                <p>0回复</p>
                                            </div>
                                        </div>
                                        <div class="replyWrap">
                                            <img class="profileIcon"
                                                src="{{ asset('images/download/profilesmall1.png') }}"
                                                alt="User Profile" />
                                            <div class="replyDetailWrap">
                                                <div class="replyName">九尾狐</div>
                                                <div class="ratingWrap">
                                                    <p class="rating-score">8.0</p>
                                                    <div class="starWrap">
                                                        <div class="stars"> </div>
                                                    </div>
                                                    <p class="replyDate">2023-12-14 13:58:20</p>
                                                </div>
                                                <div class="reply">
                                                    <p>谢你的认可，感兴趣的话可以试玩一下哦</p>
                                                    <div class="likeReplyWrap">
                                                        <img src="{{ asset('images/download/like.png') }}"
                                                            alt="Like Icon" />
                                                        <p>1回复</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="commentWrap">
                                    <img class="profileIcon" src="{{ asset('images/download/profile1.png') }}"
                                        alt="User Profile" />
                                    <div class="commentDetailWrap">
                                        <div class="commentName">加啊蔡作园</div>
                                        <div class="ratingWrap">
                                            <p class="rating-score">8.0</p>
                                            <div class="starWrap">
                                                <div class="stars"> </div>
                                            </div>
                                            <p class="commentDate">2023-12-14 13:58:20</p>
                                        </div>
                                        <div class="comment">
                                            <p>这赛季的棋子做得有点意思，主要是我觉得这赛季的棋子布局有了很多的变化</p>
                                            <div class="likeReplyWrap">
                                                <img src="{{ asset('images/download/like.png') }}" alt="Like Icon" />
                                                <p>0回复</p>
                                            </div>
                                        </div>
                                        <div class="replyWrap">
                                            <img class="profileIcon"
                                                src="{{ asset('images/download/profilesmall1.png') }}"
                                                alt="User Profile" />
                                            <div class="replyDetailWrap">
                                                <div class="replyName">九尾狐</div>
                                                <div class="ratingWrap">
                                                    <p class="rating-score">8.0</p>
                                                    <div class="starWrap">
                                                        <div class="stars"> </div>
                                                    </div>
                                                    <p class="replyDate">2023-12-14 13:58:20</p>
                                                </div>
                                                <div class="reply">
                                                    <p>谢你的认可，感兴趣的话可以试玩一下哦</p>
                                                    <div class="likeReplyWrap">
                                                        <img src="{{ asset('images/download/like.png') }}"
                                                            alt="Like Icon" />
                                                        <p>1回复</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="commentWrap">
                                    <img class="profileIcon" src="{{ asset('images/download/profile1.png') }}"
                                        alt="User Profile" />
                                    <div class="commentDetailWrap">
                                        <div class="commentName">加啊蔡作园</div>
                                        <div class="ratingWrap">
                                            <p class="rating-score">8.0</p>
                                            <div class="starWrap">
                                                <div class="stars"> </div>
                                            </div>
                                            <p class="commentDate">2023-12-14 13:58:20</p>
                                        </div>
                                        <div class="comment">
                                            <p>这赛季的棋子做得有点意思，主要是我觉得这赛季的棋子布局有了很多的变化</p>
                                            <div class="likeReplyWrap">
                                                <img src="{{ asset('images/download/like.png') }}" alt="Like Icon" />
                                                <p>0回复</p>
                                            </div>
                                        </div>
                                        <div class="replyWrap">
                                            <img class="profileIcon"
                                                src="{{ asset('images/download/profilesmall1.png') }}"
                                                alt="User Profile" />
                                            <div class="replyDetailWrap">
                                                <div class="replyName">九尾狐</div>
                                                <div class="ratingWrap">
                                                    <p class="rating-score">8.0</p>
                                                    <div class="starWrap">
                                                        <div class="stars"> </div>
                                                    </div>
                                                    <p class="replyDate">2023-12-14 13:58:20</p>
                                                </div>
                                                <div class="reply">
                                                    <p>谢你的认可，感兴趣的话可以试玩一下哦</p>
                                                    <div class="likeReplyWrap">
                                                        <img src="{{ asset('images/download/like.png') }}"
                                                            alt="Like Icon" />
                                                        <p>1回复</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="loadAllButton">
                                加载全部评论
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-right">
                    <div class="related-topic">
                        <h2>相关专题</h2>
                        <div class="imgWrap">
                            <img src="{{ asset('images/download/relatedtopic.png') }}" alt="Topic Image" />
                            <p>升级快不花钱的传奇游戏</p>
                        </div>
                    </div>

                    <div class="hot-app">
                        <div class="titleWrap">
                            <h2>热门游戏</h2>
                            <p class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                                    alt="More Icon" /></p>
                        </div>
                        <div class="app-list">
                            <div class="appWrap">
                                <img src="{{ asset('images/home/game3.png') }}" />
                                <div class="appDetailWrap">
                                    <p class="appName">凡人修仙传：人界篇</p>
                                    <p class="appType">益智休闲</p>
                                    <p class="dateUpdate">2023-06-06更新</p>
                                </div>
                                <div class="viewNow">{{ __('auth.view_now') }}</div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/home/game1.png') }}" />
                                <div class="appDetailWrap">
                                    <p class="appName">异度神剑2</p>
                                    <p class="appType">战斗策略</p>
                                    <p class="dateUpdate">2023-06-06更新</p>
                                </div>
                                <div class="viewNow">{{ __('auth.view_now') }}</div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/home/game4.png') }}" />
                                <div class="appDetailWrap">
                                    <p class="appName">斗破苍穹：斗帝</p>
                                    <p class="appType">战斗策略</p>
                                    <p class="dateUpdate">2023-06-06更新</p>
                                </div>
                                <div class="viewNow">{{ __('auth.view_now') }}</div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/home/game5.png') }}" />
                                <div class="appDetailWrap">
                                    <p class="appName">凡人修仙传：人界篇</p>
                                    <p class="appType">益智休闲</p>
                                    <p class="dateUpdate">2023-06-06更新</p>
                                </div>
                                <div class="viewNow">{{ __('auth.view_now') }}</div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/home/game6.png') }}" />
                                <div class="appDetailWrap">
                                    <p class="appName">异度神剑2</p>
                                    <p class="appType">益智休闲</p>
                                    <p class="dateUpdate">2023-06-06更新</p>
                                </div>
                                <div class="viewNow">{{ __('auth.view_now') }}</div>
                            </div>
                            <div class="appWrap">
                                <img src="{{ asset('images/home/game7.png') }}" />
                                <div class="appDetailWrap">
                                    <p class="appName">斗破苍穹：斗帝</p>
                                    <p class="appType">益智休闲</p>
                                    <p class="dateUpdate">2023-06-06更新</p>
                                </div>
                                <div class="viewNow">{{ __('auth.view_now') }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="creator-other-game">
                        <div class="titleWrap">
                            <h2>开发者其他游戏</h2>
                            <p class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                                    alt="More Icon" /></p>
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
                            <h2>热门标签</h2>
                            <p class="more">{{ __('auth.more') }}<img src="{{ asset('images/home/jiantou3.png') }}"
                                    alt="More Icon" /></p>
                        </div>
                        <div class="hot-topic-listing">
                            <div class="active">战争策略</div>
                            <div>赛博朋克</div>
                            <div>角色扮演</div>
                            <div>卡牌对战</div>
                            <div>传奇游戏</div>
                            <div>枪战射击</div>
                            <div>音乐舞蹈</div>
                            <div>休闲益智</div>
                            <div>冒险解谜</div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <br>
            <p>{{ $game->description ?? 'No description available' }}</p>



            <p><strong>Category:</strong> {{ $game->category ?? 'Unknown' }}</p>
            <p><strong>Version:</strong> {{ $game->version ?? 'Unknown' }}</p>
            <p><strong>Updated on:</strong>
                {{ isset($game->updated_at) ? \Carbon\Carbon::parse($game->updated_at)->format('Y-m-d H:i:s') : 'Unknown' }}
            </p> --}}

            {{-- <p><strong>Introduce:</strong> {{ $game->introduce ?? 'Unknown' }}</p> --}}

            {{-- <div class="testing">{!! $game->introduce !!}</div> --}}

            {{-- <a href="{{ asset('apk/' . ($game->apk_file ?? '')) }}" class="btn btn-success">Download APK</a> --}}
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

        const inputField = document.getElementById('commentField');
        const sendButton = document.getElementById('sendComment');

        // Add an event listener for the "keydown" event
        inputField.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') { // Check if the Enter key is pressed
                sendMessage();
            }
        });

        // Add click listener for the button (optional)
        sendButton.addEventListener('click', sendMessage);

        // Function to handle the action
        function sendMessage() {
            const value = inputField.value.trim();
            if (value) {
                console.log('Message sent:', value);
                inputField.value = ''; // Clear the input field after sending
            } else {
                console.log('Input is empty');
            }
        }

        document.querySelector('.loadAllButton').addEventListener('click', function() {
            const allComments = document.querySelectorAll('.commentList .commentWrap');

            allComments.forEach(comment => {
                comment.style.display = 'flex'; // Show all comments
            });

            // Hide the "加载全部评论" button after showing all comments
            this.style.display = 'none';
        });

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

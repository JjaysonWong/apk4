<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('imgs/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        var assetBaseUrl = "{{ asset('') }}"; 
    </script>
    <script src="{{ asset('js/post.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>植物大战僵尸</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="yes" name="apple-touch-fullscreen"/>
    <link rel="canonical" href=""/>
    <link rel="shortcut icon" href="{{ asset('imgs/favicon.ico') }}" type="image/x-icon"/>
  </head>
  <body>
    <header>
        <div class="container">
            <a href="{{ url('/pages/index') }}"><img src="{{ asset('imgs/logo.png') }}" class="logo-image" alt="世界蓝 Logo"/></a>
            <ul>
                <li>
                    <a href="{{ url('/pages/index') }}"><img src="{{ asset('imgs/header/home_icon.png') }}" alt="Home Icon" /><p>首页</p></a>
                </li>
                <li>
                    <a href="{{ url('/pages/games') }}"><img src="{{ asset('imgs/header/game_icon.png') }}" alt="Game Icon" /><p>手机游戏</p></a>
                </li>
                <li>
                    <a href="{{ url('/pages/applications') }}"><img src="{{ asset('imgs/header/app_icon.png') }}" alt="App Icon" /><p>软件应用</p></a>
                </li>
                <li class="active">
                    <a href="{{ url('/pages/news') }}"><img src="{{ asset('imgs/header/news_icon.png') }}" alt="News Icon" /><p>攻略教程</p></a>
                </li>
                <li>
                    <a href="{{ url('/pages/topics') }}"><img src="{{ asset('imgs/header/topic_icon.png') }}" alt="Topic Icon" /><p>专题合集</p></a>
                </li>
                <li>
                    <a href="{{ url('/pages/top') }}"><img src="{{ asset('imgs/header/top_icon.png') }}" alt="Top Icon" /><p>排行榜</p></a>
                </li>
            </ul>
        </div>
    </header>

    <div class="mobile-game-page">
        <h1>植物大战僵尸</h1>
        <div class="container">
            <div class="top-breadcrumb">
                <p>当前位置：<a href="{{ url('/pages/index') }}">首页</a> 
                    <svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="4px" height="8px">
                   <path fill-rule="evenodd"  fill="rgb(210, 210, 210)"
                    d="M-0.000,-0.000 L3.1000,3.1000 L-0.000,7.1000 L-0.000,-0.000 Z"/>
                   </svg> 
                   <a href="{{ url('/pages/news') }}">攻略教程</a> 
                   <svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="4px" height="8px">
                   <path fill-rule="evenodd"  fill="rgb(210, 210, 210)"
                    d="M-0.000,-0.000 L3.1000,3.1000 L-0.000,7.1000 L-0.000,-0.000 Z"/>
                   </svg> 植物大战僵尸</p>
            </div>

            <div class="posts-page">
                <div class="post-main-panel">
                    <div class="post-left-panel">
                        <div class="post-content-panel">
                            <h2>Altium Designer图文安装教程</h2>
                            <div class="post-detail">
                                <p>更新：2024-11-14</p>
                                <p>浏览：57次</p>
                                <p>编辑：Lsk</p>
                            </div>
                            <p class="post-content">
                                Altium Designer，简称AD，它是一款综合性的电子设计自动化(EDA)软件。它集原理图设计、PCB(印刷电路板)布放布线、仿真、设计验证、规则检查、制造文档输出和团队协作于一体，可为电子工程师和设计人员提供完整的设计解决方案！许多小伙伴得到了Altium Designer安装包却不知如何正确安装使用，小编整理了Altium Designer图文安装教程供用户参考，包括Altium Designer怎么设置中文语言，及激活步骤，一起来看看吧！
                            </p>
                            <div class="install-guide">
                                <h3>Altium Designer图文安装教程</h3>
                                <p>提示：小编以Altium Designer 25安装包为例，Altium Designer等历史版本均可通用！ 根据您的需求，点击此处下载适合您自己的版本！</p>
                                <p>1、双击运行Installer.Exe程序文件。</p>
                                <img src="{{ asset('imgs/post/install-guide.png') }}"  alt="Install Guide"/>
                                <p>2、进入软件安装向导，点击Next。</p>
                            </div>
                        </div>

                        <div class="navigate-post-panel">
                            <div class="prev-post">
                                <p><span>前一篇：</span> 袈裟拿出来数数，《黑神话：悟空》10月</p>
                            </div>
                            <div class="next-post">
                                <p><span>后一篇：</span> 袈裟拿出来数数，《黑神话：悟空》10月</p>
                            </div>
                        </div>

                        <div class="download-panel">
                            <div class="app-detail-panel">
                                <img src="{{ asset('imgs/post/game-download.png') }}" alt="鬼谷八荒" />
                                <div class="app-detail">
                                    <h3>鬼谷八荒</h3>
                                    <div class="app-inner-detail">
                                        <p>类型：<span>角色扮演</span></p>
                                        <p>时间：<span>2024-12-18</span></p>
                                        <p>标签：<span>假期必备、冒险王国</span></p>
                                    </div>
                                    <p>标签：《鬼谷八荒》是一款开放世界的沙盒修仙游戏。</p>
                                </div>
                                <button class="download-button">
                                    <img src="{{ asset('imgs/post/download_icon.png') }}" alt="Download Icon" />
                                    立即下载
                                </button>
                            </div>
                            <div class="related-verson-panel">
                                <h3>相关版本</h3>
                                <div class="related-list">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>名称</th>
                                            <th>大小</th>
                                            <th>版本号</th>
                                            <th>更新日期</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="{{ asset('imgs/post/related-game1.png') }}" alt="Releated App" /><p>鬼谷八荒</p></td>
                                            <td>角色扮演</td>
                                            <td>v.2.3.100</td>
                                            <td>2024-12-25</td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{ asset('imgs/post/related-game2.png') }}" alt="Releated App" /><p>重构：阿塔提斯</p></td>
                                            <td>角色扮演</td>
                                            <td>v.2.3.100</td>
                                            <td>2024-12-25</td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{ asset('imgs/post/related-game3.png') }}" alt="Releated App" /><p>召唤与合成</p></td>
                                            <td>角色扮演</td>
                                            <td>v.2.3.100</td>
                                            <td>2024-12-25</td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{ asset('imgs/post/related-game4.png') }}" alt="Releated App" /><p>刃境</p></td>
                                            <td>角色扮演</td>
                                            <td>v.2.3.100</td>
                                            <td>2024-12-25</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>

                        <div class="new-game-panel">
                            <div class="title-panel">
                                <img src="{{ asset('imgs/post/new_icon.png') }}" alt="New Icon" />
                                <h2>最新游戏</h2>
                            </div>
                            <swiper-container class="mySwiper new-game-list" space-between="27" slides-per-view="6.5" init="false">
                            </swiper-container>
                        </div>

                        <div class="related-recommend-panel">
                            <div class="title-panel">
                                <img src="{{ asset('imgs/post/recommend_icon.png') }}" alt="Recommend Icon" />
                                <h2>相关推荐</h2>
                            </div>
                            <div class="related-news-list">
                                <div class="news-item">
                                    <img src="{{ asset('imgs/news/hotNews1.png') }}"  alt="燕云十六声朱八碗怎么结交 朱八碗对话攻略一览"/>
                                    <div class="news-detail">
                                        <h3>燕云十六声朱八碗怎么结交 朱八碗对话攻略一览</h3>
                                        <p>2024-01-02</p>
                                    </div>
                                </div>
                                <div class="news-item">
                                    <img src="{{ asset('imgs/news/hotNews2.png') }}"  alt="PUBG MOBILE全新鎏金套装梦幻上线！与糖心雪宝一起穿越冬日童话，编织"/>
                                    <div class="news-detail">
                                        <h3>PUBG MOBILE全新鎏金套装梦幻上线！与糖心雪宝一起穿越冬日童话，编织</h3>
                                        <p>2024-01-02</p>
                                    </div>
                                </div>
                                <div class="news-item">
                                    <img src="{{ asset('imgs/news/hotNews3.png') }}"  alt="PUBG Mobile 极地生存指南（上）丨吹响冰龙号角!使用全新主题道具，掌握"/>
                                    <div class="news-detail">
                                        <h3>PUBG Mobile 极地生存指南（上）丨吹响冰龙号角!使用全新主题道具，掌握</h3>
                                        <p>2024-01-02</p>
                                    </div>
                                </div>
                                <div class="news-item">
                                    <img src="{{ asset('imgs/news/hotNews4.png') }}"  alt="李跳跳导入规则教学(文内附李跳跳最新规则下载地址)"/>
                                    <div class="news-detail">
                                        <h3>李跳跳导入规则教学(文内附李跳跳最新规则下载地址)</h3>
                                        <p>2024-01-02</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-right-panel">
                        <div class="recent-hot-post">
                            <div class="title-panel">
                                <img src="{{ asset('imgs/news/hotNewsIcon.png') }}" alt="Hot Icon" />
                                <h2>近期热点</h2>
                            </div>
                            <div class="recent-hot-post-list"></div>
                        </div>
                        <div class="hot-post-rank">
                            <div class="title-panel">
                                <img src="{{ asset('imgs/post/hotRank_icon.png') }}" alt="Hot Rank Icon" />
                                <h2>本类热点排行</h2>
                            </div>
                            <div class="hot-post-rank-list">
                                <div class="hot-post first">
                                    <p class="rank-number">1</p>
                                    <p class="post-title">photoshop插件安装方法</p>
                                </div>
                                <div class="hot-post second">
                                    <p class="rank-number">2</p>
                                    <p class="post-title">360浏览器下载不了文件的解决办</p>
                                </div>
                                <div class="hot-post third">
                                    <p class="rank-number">3</p>
                                    <p class="post-title">悟空分身怎么修改王者荣耀战区</p>
                                </div>
                                <div class="hot-post">
                                    <p class="rank-number">4</p>
                                    <p class="post-title">最详细的谷歌账号注册方法</p>
                                </div>
                                <div class="hot-post">
                                    <p class="rank-number">5</p>
                                    <p class="post-title">《搜书大师》书源导入教程</p>
                                </div>
                                <div class="hot-post">
                                    <p class="rank-number">6</p>
                                    <p class="post-title">百度网盘下载的文件在哪</p>
                                </div>
                                <div class="hot-post">
                                    <p class="rank-number">7</p>
                                    <p class="post-title">李跳跳导入规则教学(文内附李跳)</p>
                                </div>
                                <div class="hot-post">
                                    <p class="rank-number">8</p>
                                    <p class="post-title">《搜书大师》书源导入教程</p>
                                </div>
                                <div class="hot-post">
                                    <p class="rank-number">9</p>
                                    <p class="post-title">12306积分怎么兑换车票</p>
                                </div>
                                <div class="hot-post">
                                    <p class="rank-number">10</p>
                                    <p class="post-title">高德地图怎么看实时街景</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-link-panel">
                <h2>友情链接</h2>
                <div class="link-list">
                    <div>东方手游网</div>
                    <div>东方手游网</div>
                    <div>东方手游网</div>
                </div>
            </div>
            <div class="logo">
                <a href="{{ url('/pages/index') }}"><img src="{{ asset('imgs/logo_footer.png') }}" class="logo-image" alt="世界蓝 Logo"/></a>
            </div>
            <p class="copyright">Copyright © 2017-2024 leduse.com All Rights Reserved. 恒爱下载站 版权所有 鄂ICP备19015743号-3</p>
        </div>
    </footer>

  </body>
</html>
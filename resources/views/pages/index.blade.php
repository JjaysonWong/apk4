<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="../imgs/favicon.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/home.css">
    <script src="../js/main.js"></script>
    <script src="../js/home.js"></script>
    <script src="../js/swiper-bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首页</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="yes" name="apple-touch-fullscreen"/>
    <link rel="canonical" href=""/>
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon"/>
  </head>
  <body>
    <header>
        <div class="container">
            <a href="./index"><img src="../imgs/logo.png" class="logo-image" alt="世界蓝 Logo"/></a>
            <ul>
                <li class="active">
                    <a href="./index"><img src="../imgs/header/home_icon.png" alt="Home Icon" /><p>首页</p></a>
                </li>
                <li>
                    <a href="./games"><img src="../imgs/header/game_icon.png" alt="Game Icon" /><p>手机游戏</p></a>
                </li>
                <li>
                    <a href="./applications"><img src="../imgs/header/app_icon.png" alt="App Icon" /><p>软件应用</p></a>
                </li>
                <li>
                    <a href="./news"><img src="../imgs/header/news_icon.png" alt="News Icon" /><p>攻略教程</p></a>
                </li>
                <li>
                    <a href="./topics"><img src="../imgs/header/topic_icon.png" alt="Topic Icon" /><p>专题合集</p></a>
                </li>
                <li>
                    <a href="./top"><img src="../imgs/header/top_icon.png" alt="Top Icon" /><p>排行榜</p></a>
                </li>
            </ul>
        </div>
    </header>

    <div class="home-page">
        <h1>首页</h1>
        <div class="container">
            <div class="hotapp-panel">
                <div class="hot-tab-list">
                    <div class="tab">
                      <div class="hotTab active" onclick="switchTab(event, 'hotApp')"><span>人气手游</span></div>
                      <div class="hotTab" onclick="switchTab(event, 'commonApp')"><span>常用软件</span></div>
                    </div>
                  </div>
                <div id="hotApp" class="hotAppContent">
                    <div class="hot-app"></div>
                </div>
            
                <div id="commonApp" class="hotAppContent">
                    <div class="common-app"></div>
                </div>
            </div>
            <div class="newapp-panel">
                <div class="panel-header">
                    <h2>最新软件</h2>
                    <a class="more">
                        <p>更多</p>
                        <img src="../imgs/home/more.png"  alt="More Icon"/>
                    </a>
                </div>
                <div class="newapp-list">
                </div>
            </div>

            <div class="newgame-panel">
                <div class="panel-header">
                    <h2>最新游戏</h2>
                    <a class="more">
                        <p>更多</p>
                        <img src="../imgs/home/more.png"  alt="More Icon"/>
                    </a>
                </div>
                <div class="newgame-list">
                </div>
            </div>

            <div class="latest-news-panel">
                <div class="panel-header">
                    <h2>最新攻略</h2>
                    <a class="more">
                        <p>更多</p>
                        <img src="../imgs/home/more.png"  alt="More Icon"/>
                    </a>
                </div>
                <div class="main-panel">
                    <div class="left-panel">
                        <div class="news-list"></div>
                    </div>
                    <div class="right-panel">
                        <div class="recommend-news">
                            <h4>攻略推荐</h4>
                            <div class="recommend-news-list"></div>
                        </div>
                        <div class="news-bottom-banner"></div>
                    </div>
                </div>
            </div>

            <div class="latest-topic-panel">
                <div class="panel-header">
                    <h2>最新专题</h2>
                    <a class="more">
                        <p>更多</p>
                        <img src="../imgs/home/more.png"  alt="More Icon"/>
                    </a>
                </div> 
                <div class="topic-tab-panel">
                    <div class="topic-tab-list">
                        <div class="tab">
                          <div class="topicTab active" onclick="switchTopicTab(event, 'games')"><img src="../imgs/home/game_tab_icon.png"  alt="Game Tab Icon"/><span>手游</span></div>
                          <div class="topicTab" onclick="switchTopicTab(event, 'apps')"><img src="../imgs/home/app_tab_icon.png"  alt="App Tab Icon"/><span>应用</span></div>
                        </div>
                      </div>
                    <div id="games" class="topicContent">
                        <div class="game-topic-categories"></div>
                        <div class="game-topic-list"></div>
                    </div>
                
                    <div id="apps" class="topicContent">
                        <div class="app-topic-categories"></div>
                        <div class="app-topic-list"></div>
                    </div>
                </div>
            </div>

            <div class="app-list-panel">
                <div class="app-tab-list">
                    <div class="tab">
                      <div class="appTab active" onclick="switchAppTab(event, 'mobileGame')">手游推荐</div>
                      <div class="appTab" onclick="switchAppTab(event, 'essentialApp')">必备应用</div>
                    </div>
                  </div>
                <div id="mobileGame" class="appContent">
                    <div class="mobile-game-list"></div>
                </div>
            
                <div id="essentialApp" class="appContent">
                    <div class="essential-app-list"></div>
                </div>
            </div>

            <div class="download-and-rank-panel">
                <div class="left-panel">
                    <div class="top-download-panel">
                        <div class="hot-game-download-panel">
                            <img class="title-img" src="../imgs/home/game-hot-title.png"  alt="Hot Game Download Title"/>
                            <div class="hot-game-top-download-list"></div>
                        </div>
                        <div class="player-hot-game-download-panel">
                            <img class="title-img" src="../imgs/home/player-hot-title.png"  alt="PLayer Hot Game Download Title"/>
                            <div class="player-hot-game-top-download-list"></div>
                        </div>
                    </div>
                </div>
                <div class="right-panel">
                    <div class="topic-and-app-panel">
                        <div class="topic-rank-panel">
                            <div class="panel-header">
                                <h2>专题排行</h2>
                                <a class="more">
                                    <p>更多</p>
                                    <img src="../imgs/home/more.png"  alt="More Icon"/>
                                </a>
                            </div>
                            <div class="topic-rank-list"></div>
                        </div>

                        <div class="app-combination-panel">
                            <div class="panel-header">
                                <h2>应用合集</h2>
                                <a class="more">
                                    <p>更多</p>
                                    <img src="../imgs/home/more.png"  alt="More Icon"/>
                                </a>
                            </div>
                            <div class="app-combination-list"></div>
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
                <a href="./index"><img src="../imgs/logo_footer.png" class="logo-image" alt="世界蓝 Logo"/></a>
            </div>
            <p class="copyright">Copyright © 2017-2024 leduse.com All Rights Reserved. 恒爱下载站 版权所有 鄂ICP备19015743号-3</p>
        </div>
    </footer>

  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="../imgs/favicon.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/game.css">
    <script src="../js/main.js"></script>
    <script src="../js/game.js"></script>
    <script src="../js/swiper-bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>手机游戏</title>
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
                <li>
                    <a href="./index"><img src="../imgs/header/home_icon.png" alt="Home Icon" /><p>首页</p></a>
                </li>
                <li class="active">
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

    <div class="mobile-game-page">
        <h1>手机游戏</h1>
        <div class="container">
            <div class="top-breadcrumb">
                <p>当前位置：<a href="./index">首页</a> 
                    <svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="4px" height="8px">
                   <path fill-rule="evenodd"  fill="rgb(210, 210, 210)"
                    d="M-0.000,-0.000 L3.1000,3.1000 L-0.000,7.1000 L-0.000,-0.000 Z"/>
                   </svg> 手机游戏</p>
            </div>

            <div class="game-categories-panel">
                <div class="search-panel">
                    <img src="../imgs/game/star_explore.png" class="explore-text" alt="Explore Text" />
                    <h3>手机游戏</h3>
                    <img src="../imgs/game/explore_bottom.png" class="explore-img" alt="Explore Image" />
                </div>
                <div class="categories-panel">
                    <div class="categories-list"></div>
                </div>
            </div>

            <div class="game-main-panel">
                <div class="game-list-panel">
                    <div class="game-tab-list">
                        <div class="tab">
                          <div class="gameTab active" onclick="switchTab(event, 'newGame')"><span>最新入库</span></div>
                          <div class="gameTab" onclick="switchTab(event, 'newUpdate')"><span>最新更新</span></div>
                        </div>
                      </div>
                    <div class=""></div>
                </div>
                <div class="game-right-panel">

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
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首页</title>
    <meta name="keywords" content="APK4游戏网,APK4"/>
    <meta name="description" content="APK4游戏网立足于手机游戏行业，致力于成为玩家“最值得玩家信赖的游戏媒体，最值得行业尊敬的游戏媒体”，全年365天不间断为玩家推荐好玩的手机游戏下载、丰富的游戏攻略教程和排行榜游戏。"/>
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="yes" name="apple-touch-fullscreen"/>
    <link rel="canonical" href="https://www.APK4.com/"/>
    <link rel="shortcut icon" href="https://m.APK4.com/public/favicon.ico" type="image/x-icon"/>
</head>
<body>
    <img src="{{ asset('images/topbg.png') }}" class="topbg" alt="Background Color Image" />
    <header>
        <div class="container">
            <ul class="nav navbar-nav">
                <img onclick="window.location.href='./landingpage';" src="{{ asset('images/header/logo.png') }}" class="logo" alt="Logo" />
                <li class="active menu-item"><a href="">首页</a></li>
                <li class="menu-item"><a href="./games.html">游戏</a></li>
                <li class="menu-item"><a href="./application.html">应用</a></li>
                <li class="menu-item"><a href="./info.html">资讯</a></li>
                <li class="menu-item"><a href="./topic.html">专题</a></li>
                <li class="menu-item"><a href="./rank.html">排行榜</a></li>

                <div class="menu-right">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" viewBox="0 0 15 15">
                            <image id="搜索_2_" data-name="搜索 (2)" width="15" height="15" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABHNCSVQICAgIfAhkiAAAAU5JREFUKFONkk0oRFEUx42UlLKYErGRWIyPnWxH2LGQ5RQ1KyyQnaTMrCx8ZKG8LCaNvZIdsZsVhVlJKSsphIVmIeb3r3PrdZtp3q1f59x7zv/c9+45sSAI6ryVYJ+CEfiDS8jDo58Y88SnJExa0gO2AbptrwIz4QJh8T2BAZiDQ7tVuU2wCJtwAeOugBOfczAGbfDqf57t+7FFyEFaZxJ3YZ9gHg6qCN3xNs4KxOFD4l2cJaivIXThf5xl2JP4DkcP0xdR/EXeGaQkvsZpgZ6I4m/yTmBW4izOuv4/griRnJI9WE5ivfALbECmRoEj4uq12ldyrTrWP8AgqB2VVpLDK1C/V5UQHhINwKgFt7DvVqETuwYaHq0bmIZnfzz3OVywpE+sutBs+x3sBPTCGwz7YuVpAKZgCH6hAHrdH2iFW2hXrJLYLqpqOohoNuJldPVUERKexTkAAAAASUVORK5CYII="/>
                        </svg>
                    </li>
                    <li class="loginButton"><a href="">登录</a></li>
                    <li class="registerButton"><a href="">注册</a></li>
                    <div class="languageDropdown">
                        <li class="dropdown top_lang_select" id="languageDropdown">
                            <a class="dropdown-toggle" onclick="toggleLangDropdown(event)">
                                <img src="{{ asset('images/header/china_flag.png') }}" alt="Chinese Language" />
                                <i class="dev_top_lang_icon"></i>中文 <b class="minicaret"></b>
                            </a>
                            <ul class="dropdownList">
                                <li class="chosen" onclick="changeLanguage('chs', this)">
                                    <a>中文</a>
                                </li>
                                <li onclick="changeLanguage('en', this)">
                                    <a>英文</a>
                                </li>
                            </ul>
                        </li>
                    </div>
                </div>
            </ul>
        </div>
        <div class="menu-mobile">
            <img onclick="window.location.href='./landingpage';" src="{{ asset('images/header/logo.png') }}" class="logo" alt="Logo" />
            <div class="mobile-header-right">
                <div class="searchIcon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="35" viewBox="0 0 35 35">
                        <g id="搜索" transform="translate(-599 -27)">
                          <image id="搜索_2_" data-name="搜索 (2)" width="35" height="35" transform="translate(599 27)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAABHNCSVQICAgIfAhkiAAAA6NJREFUWEfFl3moTkEYxu9NlDV71lxlD2UpuvYQkULKUpb8YQkRKUuILJGyi0SWRPxjKSKKskSUnUvZs0QoConr+WnmNmecc77vu85x33qa5cw85zlzZt553/zi4uK8HK2+xncRmglVhW/CO+G2cCVHrsDw/CzFNNesUUIvoYdQIeKlT9R/QjgunMpVWCYxNUQ4V5ifK7HGHxGWCjeynRsnZrBI9gi1PDJ+yX3hrfBVqCxUF1oKjUJevFB9K7MRFCVmuiZv8gguqr1VOCz8iCAfqP6ZAqVrO9SYlElQmJgZmrTRmfjMEJ3OROY876z6eqGb03dI9ZFxHL4YvuikM4HV6Cn8ykGIO3S7tyLL1F4SxeWK4ZiyDyqawZe8Lyulnj+rzGpba6fKnTAyVwx7hL2CfRaqlfbtIfMuq6+r6eeD68WJwYE9cgb0U/1sgmIaiuulw9df9TM+v10Z/MFi85Bj2yZBIZZqrSpzTOOqSrx4wKwYNmqheTJa5cEUxNQVJ7/IWk1VPrrvQQyO6oXp/KDSd3JJ6uK6KDCE3VWyCCWGmBFq4cgwfMmAJN/ucW1Te7Lpm6KSox8Qw92zxvQcUDkmRTGuZ1+l9yzwxbibl7toQopixot7t+HH/3B1BFZmnlqoxNi4bOC0bJqINxvy1Sp5d0DMWLX2mh6ugkFpKRHvOmGW4eeXbfHFtFIHvgV7LTRIUcxNcbc3/ARpF3wxtO8Jrc2DPirPpSCIuOeLw1tH9fdhYrju7WY6r3rvFMS4oQnRXwf/HdYDd9KDa85DVulBgoIqieuTUN5wDlV5NEoM/ceEIWZAkUr2UlK2X0TWf5FN2DAlwO+GEKQgr5yn+1Qfl4Aa19ERMxNK3Arj9SM9blVuV2scxdn/IGiq5hI3W2PDEsv8zEYMY3YKE53B5EFcGZy4bI0bepFggzV3Hnuno8ClGbCo7ABP7AfPK9SHc3wYo4gIYLjA2Cox44gkSQzdkCIvLm8i31keQnhXfVz9/HdCDqI4IkUygbYh49+oLyzMZC5ZRMkKZcooOeKchL98QsxX20fPVRlmRD81ov1pOMEWAp4/dmXciX3V4JIjlQk9lmYwyR3BNxsfV2FTHKK660JByEeQoXLCHmdaGX8uaWwTgRi5qcBGJXQk2Oa3sQKQhxmOj/3Gb/WNPdQpVzER78m6mxXiKmgcMmPD/xaDBvIxBLGyru0qCzEIqC2QrlhB31UvLCsxCCKdJlIoJ+DXin4DqqkETimS6e4AAAAASUVORK5CYII="/>
                        </g>
                    </svg>                  
                </div>
                <div class="hamburgerMenu" onclick="toggleMenu(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
            <div class="mobile-menu-dropdown">
                <div class="dropdown-list">
                    <a href="./index.html">首页 <img class="arrowLeft" src="{{ asset('images/rank/arrowLeft.png') }}"  alt="Arrow Right" /></a>
                    <a href="./games.html">手机游戏 <img class="arrowLeft" src="{{ asset('images/rank/arrowLeft.png') }}"  alt="Arrow Right" /></a>
                    <a href="./application.html">应用软件 <img class="arrowLeft" src="{{ asset('images/rank/arrowLeft.png') }}"  alt="Arrow Right" /></a>
                    <a href="./info.html">新闻资讯 <img class="arrowLeft" src="{{ asset('images/rank/arrowLeft.png') }}"  alt="Arrow Right" /></a>
                    <a href="./topic.html">专题合集 <img class="arrowLeft" src="{{ asset('images/rank/arrowLeft.png') }}" alt="Arrow Right"  /></a>
                    <a href="./rank.html">排行榜 <img class="arrowLeft" src="{{ asset('images/rank/arrowLeft.png') }}"  alt="Arrow Right" /></a>
                </div>
                <div class="languageDropdown">
                    <div class="dropdown top_lang_select" id="languageMobileDropdown">
                        <a class="dropdown-toggle" onclick="toggleMobileLangDropdown(event)">
                            <img src="{{ asset('images/header/china_flag.png') }}" alt="Chinese Language" />
                            <i class="dev_top_lang_icon"></i>简体中文 <b class="minicaret"></b>
                        </a>
                        <ul class="dropdownList">
                            <li class="chosen" onclick="changeLanguage('chs', this)">
                                <a>中文</a>
                            </li>
                            <li onclick="changeLanguage('en', this)">
                                <a>英文</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-overlay"></div>
        </div>
    </header>
    <main>
        
    </main>
    <footer>
       
    </footer>
</body>
</html>
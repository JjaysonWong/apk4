document.addEventListener("DOMContentLoaded", function () {
    const latestNews = [
        { title: '浅析游戏氛围塑造中的环境叙事与场景道具', image: assetBaseUrl + 'imgs/news/latestNews1.png' },
        { title: 'XGP2025年要起飞？《神鬼寓言》《明末》等', image: assetBaseUrl + 'imgs/news/latestNews2.png' },
        { title: '《鸣潮》PS5版国际服上线 玩家评分高达4.8...', image: assetBaseUrl + 'imgs/news/latestNews3.png' },
        { title: '浅析游戏氛围塑造中的环境叙事与场景道具', image: assetBaseUrl + 'imgs/news/latestNews1.png' },
        { title: 'XGP2025年要起飞？《神鬼寓言》《明末》等', image: assetBaseUrl + 'imgs/news/latestNews2.png' },
        { title: '《鸣潮》PS5版国际服上线 玩家评分高达4.8...', image: assetBaseUrl + 'imgs/news/latestNews3.png' },
        { title: '浅析游戏氛围塑造中的环境叙事与场景道具', image: assetBaseUrl + 'imgs/news/latestNews1.png' },
        { title: 'XGP2025年要起飞？《神鬼寓言》《明末》等', image: assetBaseUrl + 'imgs/news/latestNews2.png' },
        { title: '《鸣潮》PS5版国际服上线 玩家评分高达4.8...', image: assetBaseUrl + 'imgs/news/latestNews3.png' },
        { title: '浅析游戏氛围塑造中的环境叙事与场景道具', image: assetBaseUrl + 'imgs/news/latestNews1.png' },
        { title: 'XGP2025年要起飞？《神鬼寓言》《明末》等', image: assetBaseUrl + 'imgs/news/latestNews2.png' },
        { title: '《鸣潮》PS5版国际服上线 玩家评分高达4.8...', image: assetBaseUrl + 'imgs/news/latestNews3.png' },
    ]

    const hotNews = [
        { title: '燕云十六声朱八碗怎么结交 朱八碗对话攻略一览', image: assetBaseUrl + 'imgs/news/hotNews1.png', date:'2024-01-02' },
        { title: '《主宰世界》仙器玄元斩灵剑强度测评', image: assetBaseUrl + 'imgs/news/hotNews2.png', date:'2024-01-02' },
        { title: '《长梦花岚》全结局介绍', image: assetBaseUrl + 'imgs/news/hotNews3.png', date:'2024-01-02' },
        { title: '死神vs火影全人物技能出招表', image: assetBaseUrl + 'imgs/news/hotNews4.png', date:'2024-01-02' },
        { title: '原神5.3火榴果可不只是好看而已怎么达成', image: assetBaseUrl + 'imgs/news/hotNews5.png', date:'2024-01-02' },
        { title: '燕云十六声朱八碗怎么结交 朱八碗对话攻略一览', image: assetBaseUrl + 'imgs/news/hotNews1.png', date:'2024-01-02' },
        { title: '《主宰世界》仙器玄元斩灵剑强度测评', image: assetBaseUrl + 'imgs/news/hotNews2.png', date:'2024-01-02' },
        { title: '《长梦花岚》全结局介绍', image: assetBaseUrl + 'imgs/news/hotNews3.png', date:'2024-01-02' },
        { title: '死神vs火影全人物技能出招表', image: assetBaseUrl + 'imgs/news/hotNews4.png', date:'2024-01-02' },
        { title: '原神5.3火榴果可不只是好看而已怎么达成', image: assetBaseUrl + 'imgs/news/hotNews5.png', date:'2024-01-02' },
        { title: '燕云十六声朱八碗怎么结交 朱八碗对话攻略一览', image: assetBaseUrl + 'imgs/news/hotNews1.png', date:'2024-01-02' },
        { title: '《主宰世界》仙器玄元斩灵剑强度测评', image: assetBaseUrl + 'imgs/news/hotNews2.png', date:'2024-01-02' },
        { title: '《长梦花岚》全结局介绍', image: assetBaseUrl + 'imgs/news/hotNews3.png', date:'2024-01-02' },
        { title: '死神vs火影全人物技能出招表', image: assetBaseUrl + 'imgs/news/hotNews4.png', date:'2024-01-02' },
        { title: '原神5.3火榴果可不只是好看而已怎么达成', image: assetBaseUrl + 'imgs/news/hotNews5.png', date:'2024-01-02' },
        { title: '燕云十六声朱八碗怎么结交 朱八碗对话攻略一览', image: assetBaseUrl + 'imgs/news/hotNews1.png', date:'2024-01-02' },
        { title: '《主宰世界》仙器玄元斩灵剑强度测评', image: assetBaseUrl + 'imgs/news/hotNews2.png', date:'2024-01-02' },
        { title: '《长梦花岚》全结局介绍', image: assetBaseUrl + 'imgs/news/hotNews3.png', date:'2024-01-02' },
        { title: '死神vs火影全人物技能出招表', image: assetBaseUrl + 'imgs/news/hotNews4.png', date:'2024-01-02' },
        { title: '原神5.3火榴果可不只是好看而已怎么达成', image: assetBaseUrl + 'imgs/news/hotNews5.png', date:'2024-01-02' },
    ]

    function renderLatestNews() {
        const newsSwiper = document.querySelector(".latestNewsSwiper");
        const limitedNews = latestNews.slice(0, 6);
        limitedNews.forEach(news => {
            const slide = document.createElement("swiper-slide");
            slide.innerHTML = `
                <div class="news-item">
                    <div class="overlay"></div>
                    <img src="${news.image}" alt="${news.title}">
                    <h3>${news.title}</h3>
                </div>
            `;
            newsSwiper.appendChild(slide);
        });

        // Initialize Swiper Web Component
        newsSwiper.initialize();
    }

    function renderHotNews() {
        const newsSwiper = document.querySelector(".hot-news-list");
        const limitedNews = hotNews.slice(0, 15);
        limitedNews.forEach(news => {
            const newsDiv = document.createElement("div");
            newsDiv.classList.add("news-item");
            newsDiv.innerHTML = `
                <div class="img-block">
                    <img src="${news.image}" alt="${news.title}">
                </div>
                <div class="news-detail">  
                    <h3>${news.title}</h3>
                    <p>${news.date}</p>
                </div>
            `;
            newsSwiper.appendChild(newsDiv);
        });
    }

    const allNews = [
        { title: '又遥遥领先了，理想汽车官宣定制游戏手柄，电车秒变电竞房？', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news1.png', content:'理想汽车宣布推出新款定制游戏手柄，适用于理想MEGA和L系列车型。这款手柄主打“专属定制外观、车内智能连接、多平台兼容”。它支持蓝牙、接收器和数据线三种连接方式，可以轻松与电脑、NS主机、手机和电视等设备配对。手柄两侧配备了非对称震动马达，提供丰富的震动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
        { title: '网易《漫威争锋》第一赛季即将开启！“神奇四侠”即将在游戏中登场', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news2.png', content:'网易自研、漫威正版授权的超级英雄PVP团队射击游戏《漫威争锋》自上线以来，便赢得了玩家们的热烈追捧，短时间内玩家数量迅速突破2000万大关，并荣获多项全球性“年度十佳”殊荣。'},
        { title: '新一届游戏速通大会AGDQ 2025将于1月5日至12日举办', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news3.png', content:'游戏速通大会 Games Done Quick 的举办方日前宣布，一年一度的最大活动 Awesome Games Done Quick 2025 将与本周末的 1 月 5 日开始举办，持续一周时间至 12 日。'},
        { title: '魔兽世界地心之战酒仙武僧用什么饰品 地心之战酒仙武僧饰品推荐', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news4.png', content:'《魔兽世界》地心之战版本中，酒仙武僧饰品选择中，主动饰品可以选欧维纳克斯的嬗变之卵与统群者的权威，被动饰品可以选择艾拉-卡拉卵囊和亡眼望远镜等。'},
        { title: '崩坏星穹铁道星期日台词文本汇总 崩铁星期日剧情文本内容一览', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news5.png', content:'崩坏星穹铁道星期日是一个热度非常高的五星限定角色，将会在2.7版本中上线，他在剧情和战斗中有很多对话台词，非常有内涵，还不知道的小伙伴一起来看看吧。 动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
        { title: '又遥遥领先了，理想汽车官宣定制游戏手柄，电车秒变电竞房？', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news1.png', content:'理想汽车宣布推出新款定制游戏手柄，适用于理想MEGA和L系列车型。这款手柄主打“专属定制外观、车内智能连接、多平台兼容”。它支持蓝牙、接收器和数据线三种连接方式，可以轻松与电脑、NS主机、手机和电视等设备配对。手柄两侧配备了非对称震动马达，提供丰富的震动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
        { title: '网易《漫威争锋》第一赛季即将开启！“神奇四侠”即将在游戏中登场', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news2.png', content:'网易自研、漫威正版授权的超级英雄PVP团队射击游戏《漫威争锋》自上线以来，便赢得了玩家们的热烈追捧，短时间内玩家数量迅速突破2000万大关，并荣获多项全球性“年度十佳”殊荣。'},
        { title: '新一届游戏速通大会AGDQ 2025将于1月5日至12日举办', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news3.png', content:'游戏速通大会 Games Done Quick 的举办方日前宣布，一年一度的最大活动 Awesome Games Done Quick 2025 将与本周末的 1 月 5 日开始举办，持续一周时间至 12 日。'},
        { title: '魔兽世界地心之战酒仙武僧用什么饰品 地心之战酒仙武僧饰品推荐', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news4.png', content:'《魔兽世界》地心之战版本中，酒仙武僧饰品选择中，主动饰品可以选欧维纳克斯的嬗变之卵与统群者的权威，被动饰品可以选择艾拉-卡拉卵囊和亡眼望远镜等。'},
        { title: '崩坏星穹铁道星期日台词文本汇总 崩铁星期日剧情文本内容一览', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news5.png', content:'崩坏星穹铁道星期日是一个热度非常高的五星限定角色，将会在2.7版本中上线，他在剧情和战斗中有很多对话台词，非常有内涵，还不知道的小伙伴一起来看看吧。 动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
        { title: '又遥遥领先了，理想汽车官宣定制游戏手柄，电车秒变电竞房？', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news1.png', content:'理想汽车宣布推出新款定制游戏手柄，适用于理想MEGA和L系列车型。这款手柄主打“专属定制外观、车内智能连接、多平台兼容”。它支持蓝牙、接收器和数据线三种连接方式，可以轻松与电脑、NS主机、手机和电视等设备配对。手柄两侧配备了非对称震动马达，提供丰富的震动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
        { title: '网易《漫威争锋》第一赛季即将开启！“神奇四侠”即将在游戏中登场', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news2.png', content:'网易自研、漫威正版授权的超级英雄PVP团队射击游戏《漫威争锋》自上线以来，便赢得了玩家们的热烈追捧，短时间内玩家数量迅速突破2000万大关，并荣获多项全球性“年度十佳”殊荣。'},
        { title: '新一届游戏速通大会AGDQ 2025将于1月5日至12日举办', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news3.png', content:'游戏速通大会 Games Done Quick 的举办方日前宣布，一年一度的最大活动 Awesome Games Done Quick 2025 将与本周末的 1 月 5 日开始举办，持续一周时间至 12 日。'},
        { title: '魔兽世界地心之战酒仙武僧用什么饰品 地心之战酒仙武僧饰品推荐', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news4.png', content:'《魔兽世界》地心之战版本中，酒仙武僧饰品选择中，主动饰品可以选欧维纳克斯的嬗变之卵与统群者的权威，被动饰品可以选择艾拉-卡拉卵囊和亡眼望远镜等。'},
        { title: '崩坏星穹铁道星期日台词文本汇总 崩铁星期日剧情文本内容一览', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news5.png', content:'崩坏星穹铁道星期日是一个热度非常高的五星限定角色，将会在2.7版本中上线，他在剧情和战斗中有很多对话台词，非常有内涵，还不知道的小伙伴一起来看看吧。 动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
        { title: '又遥遥领先了，理想汽车官宣定制游戏手柄，电车秒变电竞房？', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news1.png', content:'理想汽车宣布推出新款定制游戏手柄，适用于理想MEGA和L系列车型。这款手柄主打“专属定制外观、车内智能连接、多平台兼容”。它支持蓝牙、接收器和数据线三种连接方式，可以轻松与电脑、NS主机、手机和电视等设备配对。手柄两侧配备了非对称震动马达，提供丰富的震动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
        { title: '网易《漫威争锋》第一赛季即将开启！“神奇四侠”即将在游戏中登场', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news2.png', content:'网易自研、漫威正版授权的超级英雄PVP团队射击游戏《漫威争锋》自上线以来，便赢得了玩家们的热烈追捧，短时间内玩家数量迅速突破2000万大关，并荣获多项全球性“年度十佳”殊荣。'},
        { title: '新一届游戏速通大会AGDQ 2025将于1月5日至12日举办', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news3.png', content:'游戏速通大会 Games Done Quick 的举办方日前宣布，一年一度的最大活动 Awesome Games Done Quick 2025 将与本周末的 1 月 5 日开始举办，持续一周时间至 12 日。'},
        { title: '魔兽世界地心之战酒仙武僧用什么饰品 地心之战酒仙武僧饰品推荐', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news4.png', content:'《魔兽世界》地心之战版本中，酒仙武僧饰品选择中，主动饰品可以选欧维纳克斯的嬗变之卵与统群者的权威，被动饰品可以选择艾拉-卡拉卵囊和亡眼望远镜等。'},
        { title: '崩坏星穹铁道星期日台词文本汇总 崩铁星期日剧情文本内容一览', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news5.png', content:'崩坏星穹铁道星期日是一个热度非常高的五星限定角色，将会在2.7版本中上线，他在剧情和战斗中有很多对话台词，非常有内涵，还不知道的小伙伴一起来看看吧。 动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
        { title: '又遥遥领先了，理想汽车官宣定制游戏手柄，电车秒变电竞房？', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news1.png', content:'理想汽车宣布推出新款定制游戏手柄，适用于理想MEGA和L系列车型。这款手柄主打“专属定制外观、车内智能连接、多平台兼容”。它支持蓝牙、接收器和数据线三种连接方式，可以轻松与电脑、NS主机、手机和电视等设备配对。手柄两侧配备了非对称震动马达，提供丰富的震动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
        { title: '网易《漫威争锋》第一赛季即将开启！“神奇四侠”即将在游戏中登场', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news2.png', content:'网易自研、漫威正版授权的超级英雄PVP团队射击游戏《漫威争锋》自上线以来，便赢得了玩家们的热烈追捧，短时间内玩家数量迅速突破2000万大关，并荣获多项全球性“年度十佳”殊荣。'},
        { title: '新一届游戏速通大会AGDQ 2025将于1月5日至12日举办', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news3.png', content:'游戏速通大会 Games Done Quick 的举办方日前宣布，一年一度的最大活动 Awesome Games Done Quick 2025 将与本周末的 1 月 5 日开始举办，持续一周时间至 12 日。'},
        { title: '魔兽世界地心之战酒仙武僧用什么饰品 地心之战酒仙武僧饰品推荐', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news4.png', content:'《魔兽世界》地心之战版本中，酒仙武僧饰品选择中，主动饰品可以选欧维纳克斯的嬗变之卵与统群者的权威，被动饰品可以选择艾拉-卡拉卵囊和亡眼望远镜等。'},
        { title: '崩坏星穹铁道星期日台词文本汇总 崩铁星期日剧情文本内容一览', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news5.png', content:'崩坏星穹铁道星期日是一个热度非常高的五星限定角色，将会在2.7版本中上线，他在剧情和战斗中有很多对话台词，非常有内涵，还不知道的小伙伴一起来看看吧。 动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
        { title: '又遥遥领先了，理想汽车官宣定制游戏手柄，电车秒变电竞房？', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news1.png', content:'理想汽车宣布推出新款定制游戏手柄，适用于理想MEGA和L系列车型。这款手柄主打“专属定制外观、车内智能连接、多平台兼容”。它支持蓝牙、接收器和数据线三种连接方式，可以轻松与电脑、NS主机、手机和电视等设备配对。手柄两侧配备了非对称震动马达，提供丰富的震动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
        { title: '网易《漫威争锋》第一赛季即将开启！“神奇四侠”即将在游戏中登场', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news2.png', content:'网易自研、漫威正版授权的超级英雄PVP团队射击游戏《漫威争锋》自上线以来，便赢得了玩家们的热烈追捧，短时间内玩家数量迅速突破2000万大关，并荣获多项全球性“年度十佳”殊荣。'},
        { title: '新一届游戏速通大会AGDQ 2025将于1月5日至12日举办', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news3.png', content:'游戏速通大会 Games Done Quick 的举办方日前宣布，一年一度的最大活动 Awesome Games Done Quick 2025 将与本周末的 1 月 5 日开始举办，持续一周时间至 12 日。'},
        { title: '魔兽世界地心之战酒仙武僧用什么饰品 地心之战酒仙武僧饰品推荐', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news4.png', content:'《魔兽世界》地心之战版本中，酒仙武僧饰品选择中，主动饰品可以选欧维纳克斯的嬗变之卵与统群者的权威，被动饰品可以选择艾拉-卡拉卵囊和亡眼望远镜等。'},
        { title: '崩坏星穹铁道星期日台词文本汇总 崩铁星期日剧情文本内容一览', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news5.png', content:'崩坏星穹铁道星期日是一个热度非常高的五星限定角色，将会在2.7版本中上线，他在剧情和战斗中有很多对话台词，非常有内涵，还不知道的小伙伴一起来看看吧。 动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
        { title: '又遥遥领先了，理想汽车官宣定制游戏手柄，电车秒变电竞房？', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news1.png', content:'理想汽车宣布推出新款定制游戏手柄，适用于理想MEGA和L系列车型。这款手柄主打“专属定制外观、车内智能连接、多平台兼容”。它支持蓝牙、接收器和数据线三种连接方式，可以轻松与电脑、NS主机、手机和电视等设备配对。手柄两侧配备了非对称震动马达，提供丰富的震动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
        { title: '网易《漫威争锋》第一赛季即将开启！“神奇四侠”即将在游戏中登场', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news2.png', content:'网易自研、漫威正版授权的超级英雄PVP团队射击游戏《漫威争锋》自上线以来，便赢得了玩家们的热烈追捧，短时间内玩家数量迅速突破2000万大关，并荣获多项全球性“年度十佳”殊荣。'},
        { title: '新一届游戏速通大会AGDQ 2025将于1月5日至12日举办', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news3.png', content:'游戏速通大会 Games Done Quick 的举办方日前宣布，一年一度的最大活动 Awesome Games Done Quick 2025 将与本周末的 1 月 5 日开始举办，持续一周时间至 12 日。'},
        { title: '魔兽世界地心之战酒仙武僧用什么饰品 地心之战酒仙武僧饰品推荐', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news4.png', content:'《魔兽世界》地心之战版本中，酒仙武僧饰品选择中，主动饰品可以选欧维纳克斯的嬗变之卵与统群者的权威，被动饰品可以选择艾拉-卡拉卵囊和亡眼望远镜等。'},
        { title: '崩坏星穹铁道星期日台词文本汇总 崩铁星期日剧情文本内容一览', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news5.png', content:'崩坏星穹铁道星期日是一个热度非常高的五星限定角色，将会在2.7版本中上线，他在剧情和战斗中有很多对话台词，非常有内涵，还不知道的小伙伴一起来看看吧。 动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
        { title: '又遥遥领先了，理想汽车官宣定制游戏手柄，电车秒变电竞房？', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news1.png', content:'理想汽车宣布推出新款定制游戏手柄，适用于理想MEGA和L系列车型。这款手柄主打“专属定制外观、车内智能连接、多平台兼容”。它支持蓝牙、接收器和数据线三种连接方式，可以轻松与电脑、NS主机、手机和电视等设备配对。手柄两侧配备了非对称震动马达，提供丰富的震动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
        { title: '网易《漫威争锋》第一赛季即将开启！“神奇四侠”即将在游戏中登场', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news2.png', content:'网易自研、漫威正版授权的超级英雄PVP团队射击游戏《漫威争锋》自上线以来，便赢得了玩家们的热烈追捧，短时间内玩家数量迅速突破2000万大关，并荣获多项全球性“年度十佳”殊荣。'},
        { title: '新一届游戏速通大会AGDQ 2025将于1月5日至12日举办', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news3.png', content:'游戏速通大会 Games Done Quick 的举办方日前宣布，一年一度的最大活动 Awesome Games Done Quick 2025 将与本周末的 1 月 5 日开始举办，持续一周时间至 12 日。'},
        { title: '魔兽世界地心之战酒仙武僧用什么饰品 地心之战酒仙武僧饰品推荐', type:'game', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news4.png', content:'《魔兽世界》地心之战版本中，酒仙武僧饰品选择中，主动饰品可以选欧维纳克斯的嬗变之卵与统群者的权威，被动饰品可以选择艾拉-卡拉卵囊和亡眼望远镜等。'},
        { title: '崩坏星穹铁道星期日台词文本汇总 崩铁星期日剧情文本内容一览', type:'app', date: '2024-12-28', time:'10:00:00', image: assetBaseUrl + 'imgs/news/news5.png', content:'崩坏星穹铁道星期日是一个热度非常高的五星限定角色，将会在2.7版本中上线，他在剧情和战斗中有很多对话台词，非常有内涵，还不知道的小伙伴一起来看看吧。 动反馈，大尺寸摇杆操作精准顺滑，霍尔线性扳机则能捕捉细微动作，带来真实的操控体验。'},
    ]

    let currentPage = 1;
    let selectedCategory = 'all'; // Default to "全部资讯" (All News)
    const itemsPerPage = 10; // Adjust based on your layout
    
    // Function to read category and page number from the URL
    function getCategoryFromURL() {
        const urlParts = window.location.pathname.split("/");
        const lastPart = urlParts[urlParts.length - 1]; // Last part of URL
        const secondLastPart = urlParts[urlParts.length - 2]; // Might be category
    
        const pageMatch = lastPart.match(/^(\d+)$/); // Check if last part is a number
    
        if (["game", "app"].includes(secondLastPart)) {
            selectedCategory = secondLastPart; // Set category from URL
        } else {
            selectedCategory = "all"; // Default to "All News"
        }
    
        if (pageMatch) {
            currentPage = parseInt(pageMatch[1]); // Get page number
        } else {
            currentPage = 1; // Default to page 1
        }
    
        updateActiveTab(); // Call function to update active tab
    }

    function updateActiveTab() {
        document.querySelectorAll(".news-tab > div").forEach(tab => {
            tab.classList.remove("active"); // Remove active from all
    
            if (
                (selectedCategory === "all" && tab.classList.contains("all-news")) ||
                (selectedCategory === "game" && tab.classList.contains("game-news")) ||
                (selectedCategory === "app" && tab.classList.contains("app-news"))
            ) {
                tab.classList.add("active"); // Add active to the correct tab
            }
        });
    }
    
    // Function to update URL and reload page
    function updateURLAndReload(category, page = 1) {
        let newUrl = category === "all"
            ? `${window.location.origin}/pages/news/${page}`  // Ensure page number in URL
            : `${window.location.origin}/pages/news/${category}/${page}`;
        
        window.location.href = newUrl;
    }
    
    // Function to handle category selection from HTML
    function setupCategoryClickHandlers() {
        const tabs = document.querySelectorAll(".news-tab > div");
    
        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                // Remove active class from all tabs
                tabs.forEach(t => t.classList.remove("active"));
    
                // Add active class to the clicked tab
                tab.classList.add("active");
    
                // Determine category
                let category = "all";
                if (tab.classList.contains("game-news")) category = "game";
                if (tab.classList.contains("app-news")) category = "app";
    
                updateURLAndReload(category);
            });
        });
    }
    
    // Function to render news articles
    function renderNews() {
        const newsListDiv = document.querySelector(".news-list"); // Ensure you have this div in HTML
        newsListDiv.innerHTML = "";
    
        // Filter news based on category
        const filteredNews = selectedCategory === "all"
            ? allNews // Show all news
            : allNews.filter(news => news.type === selectedCategory);
    
        // Get paginated news
        const start = (currentPage - 1) * itemsPerPage;
        const paginatedNews = filteredNews.slice(start, start + itemsPerPage);
    
        paginatedNews.forEach(news => {
            const newsElement = document.createElement("div");
            newsElement.classList.add("news-item");
            newsElement.innerHTML = `
                <h3>${news.title}</h3>
                <div class="news-bottom">
                    <div class="img-block">
                        <img src="${news.image}" alt="${news.title}">
                    </div>
                    <div class="news-detail">
                        <p>${news.content}</p>
                        <p><img src="${assetBaseUrl + 'imgs/news/dateIcon.png'}" alt="Clock Icon">更新：${news.date}</p>
                    </div>
                </div>
            `;
            newsListDiv.appendChild(newsElement);
        });
    
        renderPagination(filteredNews.length);
    }
    
    // Function to render pagination
    function renderPagination(totalItems) {
        const paginationDiv = document.querySelector(".pagination");
        paginationDiv.innerHTML = "";
    
        const totalPages = Math.ceil(totalItems / itemsPerPage);
        if (totalPages <= 1) return;
    
        let pageNumbers = [];
    
        if (totalPages <= 3) {
            for (let i = 1; i <= totalPages; i++) {
                pageNumbers.push(
                    `<button class="page-number ${i === currentPage ? 'active' : ''}" data-page="${i}">${i}</button>`
                );
            }
        } else {
            if (currentPage === 1 || currentPage === 2) {
                for (let i = 1; i <= 3; i++) {
                    pageNumbers.push(
                        `<button class="page-number ${i === currentPage ? 'active' : ''}" data-page="${i}">${i}</button>`
                    );
                }
                pageNumbers.push('<span class="dots">...</span>');
                pageNumbers.push(`<button class="page-number" data-page="${totalPages}">${totalPages}</button>`);
            } else if (currentPage === totalPages || currentPage === totalPages - 1) {
                pageNumbers.push(`<button class="page-number" data-page="1">1</button>`);
                pageNumbers.push('<span class="dots">...</span>');
                for (let i = totalPages - 2; i <= totalPages; i++) {
                    pageNumbers.push(
                        `<button class="page-number ${i === currentPage ? 'active' : ''}" data-page="${i}">${i}</button>`
                    );
                }
            } else {
                pageNumbers.push(`<button class="page-number" data-page="1">1</button>`);
                pageNumbers.push('<span class="dots">...</span>');
                for (let i = currentPage - 1; i <= currentPage + 1; i++) {
                    pageNumbers.push(
                        `<button class="page-number ${i === currentPage ? 'active' : ''}" data-page="${i}">${i}</button>`
                    );
                }
                pageNumbers.push('<span class="dots">...</span>');
                pageNumbers.push(`<button class="page-number" data-page="${totalPages}">${totalPages}</button>`);
            }
        }
    
        paginationDiv.innerHTML = `
            <button class="first-page" ${currentPage === 1 ? 'disabled' : ''} data-page="1">首页</button>
            <button class="prev-page pagination-button" ${currentPage === 1 ? 'disabled' : ''} data-page="${currentPage - 1}">
                <
            </button>
            ${pageNumbers.join('')}
            <button class="next-page pagination-button" ${currentPage === totalPages ? 'disabled' : ''} data-page="${currentPage + 1}">
                >
            </button>
            <button class="last-page" ${currentPage === totalPages ? 'disabled' : ''} data-page="${totalPages}">尾页</button>
        `;
    
        // Add event listeners to pagination buttons
        document.querySelectorAll(".page-number, .pagination-button, .first-page, .last-page").forEach(button => {
            button.addEventListener("click", (e) => {
                const newPage = parseInt(e.target.dataset.page);
                updateURLAndReload(selectedCategory, newPage);
            });
        });
    }
    
// Initialize everything on page load
    getCategoryFromURL();
    setupCategoryClickHandlers();
    renderNews();
    renderLatestNews();
    renderHotNews();
});
function switchTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("hotAppContent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("hotTab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "flex";
    evt.currentTarget.className += " active";
}

function switchTopicTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("topicContent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("topicTab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

function switchAppTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("appContent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("appTab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "flex";
    evt.currentTarget.className += " active";
}

document.addEventListener("DOMContentLoaded", function () {
    const hotapps = [
        { name: '游戏名称', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app1.png', category: 'hotApp' },
        { name: '航海王壮志雄心', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app2.png', category: 'hotApp' },
        { name: '心动小镇', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app3.png', category: 'hotApp' },
        { name: '绝尘飘逸', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app4.png', category: 'hotApp' },
        { name: '包围向日葵', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app5.png', category: 'hotApp' },
        { name: ' 我的卡牌商店', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app6.png', category: 'hotApp' },
        { name: '秩序：新曙光', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app7.png', category: 'hotApp' },
        { name: '三角洲行动', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app8.png', category: 'hotApp' },
        { name: '蛋仔派对', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app9.png', category: 'hotApp' },
        { name: '绝区零', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app10.png', category: 'hotApp' },
        { name: '我的卡牌商店', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app6.png', category: 'commonApp' },
        { name: '包围向日葵', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app5.png', category: 'commonApp' },
        { name: '绝尘飘逸', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app4.png', category: 'commonApp' },
        { name: '心动小镇', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app3.png', category: 'commonApp' },
        { name: '航海王壮志雄心', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app2.png', category: 'commonApp' },
        { name: '游戏名称', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app1.png', category: 'commonApp' },
        { name: '秩序：新曙光', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app7.png', category: 'commonApp' },
        { name: '三角洲行动', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app8.png', category: 'commonApp' },
        { name: '蛋仔派对', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app9.png', category: 'commonApp' },
        { name: '绝区零', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/app10.png', category: 'commonApp' }
    ]

    const newapps = [
        { name: '高德地图', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newapp1.png' },
        { name: '快手', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newapp2.png' },
        { name: '12123', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newapp3.png' },
        { name: '微信分身版', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newapp4.png' },
        { name: '京东', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newapp5.png' },
        { name: '高德地图', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newapp1.png' },
        { name: '快手', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newapp2.png' },
        { name: '12123', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newapp3.png' },
        { name: '微信分身版', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newapp4.png' },
        { name: '京东', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newapp5.png' },
        { name: '高德地图', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newapp1.png' },
        { name: '快手', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newapp2.png' },
        { name: '12123', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newapp3.png' },
        { name: '微信分身版', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newapp4.png' },
        { name: '京东', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newapp5.png' },
    ]

    const newgames = [
        { name: '神之亵渎', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newgame1.png' },
        { name: '遨游城市遨游中国卡车模', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newgame2.png' },
        { name: '异界原点传说：史莱姆不哭', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newgame3.png' },
        { name: '黑神话像素版', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newgame4.png' },
        { name: '缤纷乐园', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newgame5.png' },
        { name: '神之亵渎', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newgame1.png' },
        { name: '遨游城市遨游中国卡车模', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newgame2.png' },
        { name: '异界原点传说：史莱姆不哭', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newgame3.png' },
        { name: '黑神话像素版', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newgame4.png' },
        { name: '缤纷乐园', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newgame5.png' },
        { name: '神之亵渎', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newgame1.png' },
        { name: '遨游城市遨游中国卡车模', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newgame2.png' },
        { name: '异界原点传说：史莱姆不哭', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newgame3.png' },
        { name: '黑神话像素版', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newgame4.png' },
        { name: '缤纷乐园', date: '2024-12-10', size: '4.8MB', image: '../imgs/home/newgame5.png' },
    ]

    const news = [
        { title: '《天启行动》实测体验：英雄技能与射击碰撞出的网易压箱底之作 ', date: '2024-06-20', content: '近期网易一款5V5多英雄技能射击手游——«天启行动»就引起了不少人的注意，放出的第一个实机视频就收获大量关注。在视频展示中，这款手游与市面上的刚枪竞技模式不同，将重心聚焦在以经典的爆破模式为核心的战场中，结合各具特色的英雄技能，带给玩家更多样、更纯粹、更畅爽的射击竞技快感。', image: '../imgs/home/news1.png' },
        { title: '该裁的是决策层！《自杀小队》开发商因游戏表现不佳而裁员 ', date: '2024-06-20', content: '据外媒Eurogamer报道，《自杀小队：消灭正义联盟》工作室Rocksteady的员工向该媒体透露，由于游戏的表现不佳，工作室将进行裁员。涉及的员工大部分为初级员工，也包括几名工作了5年以上的核心成员。为核心的战场中，结合各具特色的英雄技能，带给玩家更多样、更纯粹、更畅爽的射击竞技快感。', image: '../imgs/home/news2.png' },
        { title: '国产游戏《黑神话：悟空》大热，预示将开启国产3A大作新纪元！ ', date: '2024-06-20', content: '国产游戏《黑神话：悟空》凭借其卓越的品质与国际化的制作水准，赢得了国内外玩家的广泛赞誉，其成功不仅为国产游戏市场注入了强劲动力，更预示着国产3A级游戏大作的春天即将到来。该游戏不仅在画面、音效、剧情等方面达到了国际顶尖水平，更在玩法和叙事上展现了高度的创新性和深度，为国产游戏树立了新的标杆。为核心的战场中，结合各具特色的英雄技能，带给玩家更多样、更纯粹、更畅爽的射击竞技快感。', image: '../imgs/home/news3.png' },
        { title: '像素风塔防《公主守不了》双平台开服 ', date: '2024-06-20', content: '近期网易一款5V5多英雄技能射击手游——«天启行动»就引起了不少人的注意，放出的第一个实机视频就收获大量关注。在视频展示中，这款手游与市面上的刚枪竞技模式不同，将重心聚焦在以经典的爆破模式为核心的战场中，结合各具特色的英雄技能，带给玩家更多样、更纯粹、更畅爽的射击竞技快感。', image: '../imgs/home/news4.png' },
        { title: 'Steam《黑神话：悟空》更新表情包、徽章等社区物品 ', date: '2024-06-20', content: '国产3A单机游戏《黑神话：悟空》在Steam平台迎来了更新，为玩家带来了全新的社区物品奖励。 通过游玩游戏，玩家可以解锁以下Steam社区物品：', image: '../imgs/home/news5.png' },
    ]

    const recommendNews = [
        { title: '自然万物 古老力量：《螺旋勇士》', image: '../imgs/home/news_recommend_banner.png' },
        { title: '万界神妖入图中 《神都夜行录》全新妖灵悬念揭晓！', image: '../imgs/home/news_small1.png' },
        { title: '英雄联盟手游狗头怎么叠被动', image: '../imgs/home/news_small2.png' },
        { title: '蛋壳特攻队宠物怎么选揭晓！', image: '../imgs/home/news_small3.png' },
    ]

    const recommendNewsBanner = [
        { image: '../imgs/home/news_banner1.png' },
        { image: '../imgs/home/news_banner2.png' },
        { image: '../imgs/home/news_banner3.png' },
        { image: '../imgs/home/news_banner4.png' },
    ]

    const gameTopicCategories = [
        { title: '角色扮演专题', image: '../imgs/home/game-topic-category1.png' },
        { title: '模拟经营专题', image: '../imgs/home/game-topic-category2.png' },
        { title: '角色扮演专题', image: '../imgs/home/game-topic-category1.png' },
        { title: '角色扮演专题', image: '../imgs/home/game-topic-category1.png' },
    ]

    const appTopicCategories = [
        { title: '模拟经营专题', image: '../imgs/home/game-topic-category2.png' },
        { title: '模拟经营专题', image: '../imgs/home/game-topic-category2.png' },
        { title: '角色扮演专题', image: '../imgs/home/game-topic-category1.png' },
        { title: '角色扮演专题', image: '../imgs/home/game-topic-category1.png' },
    ]

    const gameTopicLists = [
        { title: '【手游专辑】平民回合制手游专题', date: '2024-06-10' },
        { title: '【手游专辑】回合手游专题', date: '2024-06-10' },
        { title: '【手游专辑】回合手游专题', date: '2024-06-10' },
        { title: '【手游专辑】回合手游专题', date: '2024-06-10' },
        { title: '【手游专辑】回合手游专题', date: '2024-06-10' },
        { title: '【手游专辑】回合手游专题', date: '2024-06-10' },
        { title: '【手游专辑】回合手游专题', date: '2024-06-10' },
        { title: '【手游专辑】回合手游专题', date: '2024-06-10' },
        { title: '【手游专辑】回合手游专题', date: '2024-06-10' },
        { title: '【手游专辑】回合手游专题', date: '2024-06-10' },
    ]

    const appTopicLists = [
        { title: '【手游专辑】回合手游专题', date: '2024-06-10' },
        { title: '【手游专辑】平民回合制手游专题', date: '2024-06-10' },
        { title: '【手游专辑】平民回合制手游专题', date: '2024-06-10' },
        { title: '【手游专辑】平民回合制手游专题', date: '2024-06-10' },
        { title: '【手游专辑】平民回合制手游专题', date: '2024-06-10' },
        { title: '【手游专辑】平民回合制手游专题', date: '2024-06-10' },
        { title: '【手游专辑】平民回合制手游专题', date: '2024-06-10' },
        { title: '【手游专辑】平民回合制手游专题', date: '2024-06-10' },
        { title: '【手游专辑】平民回合制手游专题', date: '2024-06-10' },
        { title: '【手游专辑】平民回合制手游专题', date: '2024-06-10' },
    ]

    const mobileApps = [
        { name: '天龙八部：归来', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame1.png'},
        { name: '暗影低语', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame3.png'},
        { name: '弹力果冻', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame1.png'},
        { name: '暗影低语', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame3.png'},
        { name: '弹力果冻', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame1.png'},
        { name: '暗影低语', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame3.png'},
        { name: '弹力果冻', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame6.png'},
        { name: '暗影低语', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame3.png'},
        { name: '弹力果冻', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', date: '2024-10-10', size: '400.8MB', image: '../imgs/home/mobilegame6.png'},
    ]

    const essentialApps = [
        { name: '高德地图', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp1.png' },
        { name: '快手', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp2.png' },
        { name: '12123', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp3.png' },
        { name: '微信分身版', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp4.png' },
        { name: '京东', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp5.png' },
        { name: '高德地图', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp1.png' },
        { name: '快手', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp2.png' },
        { name: '12123', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp3.png' },
        { name: '微信分身版', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp4.png' },
        { name: '京东', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp5.png' },
        { name: '高德地图', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp1.png' },
        { name: '快手', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp2.png' },
        { name: '12123', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp3.png' },
        { name: '微信分身版', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp4.png' },
        { name: '京东', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp5.png' },
        { name: '12123', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp3.png' },
        { name: '微信分身版', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp4.png' },
        { name: '京东', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp5.png' },
        { name: '京东', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp5.png' },
        { name: '12123', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp3.png' },
        { name: '微信分身版', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp4.png' },
        { name: '京东', date: '2024-12-10', size: '400.8MB', image: '../imgs/home/newapp5.png' },
    ]

    const mobileGameTopDownload = [
        { name: '天龙八部：归来', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame1.png'},
        { name: '暗影低语', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame3.png'},
        { name: '弹力果冻', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame1.png'},
        { name: '暗影低语', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame3.png'},
        { name: '弹力果冻', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame1.png'},
        { name: '暗影低语', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame3.png'},
        { name: '弹力果冻', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame6.png'},
        { name: '暗影低语', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame3.png'},
        { name: '弹力果冻', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame6.png'},
    ]

    const playerHotGameTopDownload = [
        { name: '天龙八部：归来', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame1.png'},
        { name: '暗影低语', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame3.png'},
        { name: '弹力果冻', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame1.png'},
        { name: '暗影低语', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame3.png'},
        { name: '弹力果冻', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame1.png'},
        { name: '暗影低语', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame3.png'},
        { name: '弹力果冻', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame6.png'},
        { name: '暗影低语', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame3.png'},
        { name: '弹力果冻', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', type: '策略塔防', size: '200MB', image: '../imgs/home/mobilegame6.png'},
    ]

    const topicRankList = [
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
    ]

    const appCombination = [
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
        { title: '金融理财类app推荐合集', date: '12-10' },
    ]


    function renderHotApps() {
        const hotAppDiv = document.querySelector("#hotApp");
        const commonAppDiv = document.querySelector("#commonApp");
    
        // Clear previous content
        hotAppDiv.innerHTML = "";
        commonAppDiv.innerHTML = "";
    
        // Filter and limit to 10 items for each category
        const hotApps = hotapps.filter(app => app.category === "hotApp").slice(0, 10);
        const commonApps = hotapps.filter(app => app.category === "commonApp").slice(0, 10);
    
        // Function to render apps
        function renderApps(apps, container) {
            apps.forEach(app => {
                const appElement = document.createElement("div");
                appElement.classList.add("app-item");
                appElement.innerHTML = `
                    <img src="${app.image}" alt="${app.name}">
                    <div class="details">
                        <h3>${app.name}</h3>
                        <div class="dateSizeWrap">
                            <p class="size">${app.size}</p>
                            <p class="date">${app.date}</p>
                        </div>
                    </div>
                `;
                container.appendChild(appElement);
            });
        }
    
        // Render only 10 items for each category
        renderApps(hotApps, hotAppDiv);
        renderApps(commonApps, commonAppDiv);
    }

    function renderNewApps() {
        const newAppDiv = document.querySelector(".newapp-list");
    
        // Clear previous content
        newAppDiv.innerHTML = "";
    
        const limitedApps = newapps.slice(0, 15);
    
        // Loop through the limited array and create elements
        limitedApps.forEach(app => {
            const appElement = document.createElement("div");
            appElement.classList.add("app");
            appElement.innerHTML = `
                <div class="app-item">
                    <img src="${app.image}" alt="${app.name}">
                    <div class="details">
                        <h3>${app.name}</h3>
                        <div class="dateSizeWrap">
                            <p class="size">${app.size}</p>
                            <p class="date">${app.date}</p>
                        </div>
                    </div>
                </div>
                <div class="download-btn">
                    <img src="../imgs/home/download_icon.png"  alt="Download Icon"/>
                    <p>立即下载</p>
                </div>
            `;
            newAppDiv.appendChild(appElement);
        });
    }

    function renderNewGames() {
        const newGameDiv = document.querySelector(".newgame-list");
    
        // Clear previous content
        newGameDiv.innerHTML = "";
    
        // Limit to maximum 15 items
        const limitedGames = newgames.slice(0, 15);
    
        // Loop through the limited array and create elements
        limitedGames.forEach(game => {
            const gameElement = document.createElement("div");
            gameElement.classList.add("game");
            gameElement.innerHTML = `
                <div class="game-item">
                    <img src="${game.image}" alt="${game.name}">
                    <div class="details">
                        <h3>${game.name}</h3>
                        <div class="dateSizeWrap">
                            <p class="size">${game.size}</p>
                            <p class="date">${game.date}</p>
                        </div>
                    </div>
                </div>
                <div class="download-btn">
                    <img src="../imgs/home/download_icon.png"  alt="Download Icon"/>
                    <p>立即下载</p>
                </div>
            `;
            newGameDiv.appendChild(gameElement);
        });
    }

    function renderNews() {
        const newsDiv = document.querySelector(".news-list");
    
        // Clear previous content
        newsDiv.innerHTML = "";
    
        const limitedNews = news.slice(0, 5);
    
        // Loop through the limited array and create elements
        limitedNews.forEach(news => {
            const newsElement = document.createElement("div");
            newsElement.classList.add("news");
            newsElement.innerHTML = `
                <div class="news-item">
                    <img src="${news.image}" alt="${news.title}">
                    <div class="details">
                        <h3>${news.title}</h3>
                        <p class="content">${news.content}</p>
                        <p class="date"><span>更新: </span>${news.date}</p>
                    </div>
                </div>
            `;
            newsDiv.appendChild(newsElement);
        });
    }

    function renderRecommendNews() {
        const newsDiv = document.querySelector(".recommend-news-list");
    
        // Clear previous content
        newsDiv.innerHTML = "";
    
        const limitedNews = recommendNews.slice(0, 4);
    
        // Loop through the limited array and create elements
        limitedNews.forEach(news => {
            const newsElement = document.createElement("div");
            newsElement.classList.add("news");
            newsElement.innerHTML = `
                <div class="news-item">
                    <h4>${news.title}</h4>
                    <img src="${news.image}" alt="${news.title}">
                </div>
            `;
            newsDiv.appendChild(newsElement);
        });
    }

    function renderRecommendNewsBanner() {
        const newsDiv = document.querySelector(".news-bottom-banner");
    
        // Clear previous content
        newsDiv.innerHTML = "";
    
        const limitedNews = recommendNewsBanner.slice(0, 4);
    
        // Loop through the limited array and create elements
        limitedNews.forEach(news => {
            const newsElement = document.createElement("div");
            newsElement.classList.add("news-banner");
            newsElement.innerHTML = `
                <img src="${news.image}" alt="News Banner">
            `;
            newsDiv.appendChild(newsElement);
        });
    }

    function renderGameTopicCategories() {
        const topicsDiv = document.querySelector(".game-topic-categories");
    
        // Clear previous content
        topicsDiv.innerHTML = "";
    
        const limitedTopics = gameTopicCategories.slice(0, 4);
    
        // Loop through the limited array and create elements
        limitedTopics.forEach(topic => {
            const topicsElement = document.createElement("div");
            topicsElement.classList.add("topic");
            topicsElement.innerHTML = `
                <div class="topic-item">
                    <h4>${topic.title}</h4>
                    <img src="${topic.image}" alt="${topic.title}">
                </div>
            `;
            topicsDiv.appendChild(topicsElement);
        });
    }

    function renderAppTopicCategories() {
        const topicsDiv = document.querySelector(".app-topic-categories");
    
        // Clear previous content
        topicsDiv.innerHTML = "";
    
        const limitedTopics = appTopicCategories.slice(0, 4);
    
        // Loop through the limited array and create elements
        limitedTopics.forEach(topic => {
            const topicsElement = document.createElement("div");
            topicsElement.classList.add("topic");
            topicsElement.innerHTML = `
                <div class="topic-item">
                    <h4>${topic.title}</h4>
                    <img src="${topic.image}" alt="${topic.title}">
                </div>
            `;
            topicsDiv.appendChild(topicsElement);
        });
    }

    function renderGameTopicLists() {
        const topicsDiv = document.querySelector(".game-topic-list");
    
        // Clear previous content
        topicsDiv.innerHTML = "";
    
        const limitedTopics = gameTopicLists.slice(0, 9);
    
        // Loop through the limited array and create elements
        limitedTopics.forEach(topic => {
            const topicsElement = document.createElement("div");
            topicsElement.classList.add("topic-item");
            topicsElement.innerHTML = `
                <div class="topic">
                    <h4>${topic.title}</h4>
                    <p>${topic.date}</p>
                </div>
            `;
            topicsDiv.appendChild(topicsElement);
        });
    }

    function renderAppTopicLists() {
        const topicsDiv = document.querySelector(".app-topic-list");
    
        // Clear previous content
        topicsDiv.innerHTML = "";
    
        const limitedTopics = appTopicLists.slice(0, 9);
    
        // Loop through the limited array and create elements
        limitedTopics.forEach(topic => {
            const topicsElement = document.createElement("div");
            topicsElement.classList.add("topic-item");
            topicsElement.innerHTML = `
                <div class="topic">
                    <h4>${topic.title}</h4>
                    <p>${topic.date}</p>
                </div>
            `;
            topicsDiv.appendChild(topicsElement);
        });
    }

    function renderMobileAppLists() {
        const mobileAppDiv = document.querySelector(".mobile-game-list");
    
        // Clear previous content
        mobileAppDiv.innerHTML = "";
    
        const limitedMobileGames = mobileApps.slice(0, 18);
    
        // Loop through the limited array and create elements
        limitedMobileGames.forEach(game => {
            const mobileGamesElement = document.createElement("div");
            mobileGamesElement.classList.add("mobileGame-item");
            mobileGamesElement.innerHTML = `
                <div class="game-item">
                    <img src="${game.image}" alt="${game.name}">
                    <div class="details">
                        <h3>${game.name}</h3>
                        <div class="dateSizeWrap">
                            <p class="size">${game.size}</p>
                            <p class="date">${game.date}</p>
                        </div>
                    </div>
                </div>
            `;
            mobileAppDiv.appendChild(mobileGamesElement);
        });
    }

    function renderEssentialAppLists() {
        const essentialAppDiv = document.querySelector(".essential-app-list");
    
        // Clear previous content
        essentialAppDiv.innerHTML = "";
    
        const limitedEssentialGames = essentialApps.slice(0, 18);
    
        // Loop through the limited array and create elements
        limitedEssentialGames.forEach(app => {
            const essentialGamesElement = document.createElement("div");
            essentialGamesElement.classList.add("essentialGame-item");
            essentialGamesElement.innerHTML = `
                <div class="game-item">
                    <img src="${app.image}" alt="${app.name}">
                    <div class="details">
                        <h3>${app.name}</h3>
                        <div class="dateSizeWrap">
                            <p class="size">${app.size}</p>
                            <p class="date">${app.date}</p>
                        </div>
                    </div>
                </div>
            `;
            essentialAppDiv.appendChild(essentialGamesElement);
        });
    }

    function renderMobileGameHotDownloadList() {
        const mobileHotDownload = document.querySelector(".hot-game-top-download-list");
    
        // Clear previous content
        mobileHotDownload.innerHTML = "";
    
        // Limit the array to the first 10 items
        const limitedGames = mobileGameTopDownload.slice(0, 10);
    
        // Create div for the first 3 games (show only image and name)
        const topThreeDiv = document.createElement("div");
        topThreeDiv.classList.add("top-three-games");

        const topClasses = ["first", "second", "third"];
    
        limitedGames.slice(0, 3).forEach((game, index) => {
            const gameElement = document.createElement("div");
            gameElement.classList.add("game-item-block", topClasses[index]);
            gameElement.innerHTML = `
                <div class="game-item">
                    <img src="${game.image}" alt="${game.name}">
                    <h3>${game.name}</h3>
                </div>
            `;
            topThreeDiv.appendChild(gameElement);
        });
    
        // Create div for the remaining 7 games (show index, name, size, type)
        const remainingGamesDiv = document.createElement("div");
        remainingGamesDiv.classList.add("remaining-games");
    
        limitedGames.slice(3).forEach((game, index) => {
            const gameElement = document.createElement("div");
            gameElement.classList.add("game-item");
            gameElement.innerHTML = `
                <span class="game-index">${index + 4}</span>
                <div class="details">
                    <h3>${game.name}</h3>
                    <p class="size">${game.size}</p>
                    <p class="type">${game.type}</p>
                </div>
            `;
            remainingGamesDiv.appendChild(gameElement);
        });
    
        // Append both sections to the container
        mobileHotDownload.appendChild(topThreeDiv);
        mobileHotDownload.appendChild(remainingGamesDiv);
    }

    function renderPlayerGameHotDownloadList() {
        const mobileHotDownload = document.querySelector(".player-hot-game-top-download-list");
    
        // Clear previous content
        mobileHotDownload.innerHTML = "";
    
        // Limit the array to the first 10 items
        const limitedGames = playerHotGameTopDownload.slice(0, 10);
    
        // Create div for the first 3 games (show only image and name)
        const topThreeDiv = document.createElement("div");
        topThreeDiv.classList.add("top-three-games");

        const topClasses = ["first", "second", "third"];
    
        limitedGames.slice(0, 3).forEach((game, index) => {
            const gameElement = document.createElement("div");
            gameElement.classList.add("game-item-block", topClasses[index]);
            gameElement.innerHTML = `
                <div class="game-item">
                    <img src="${game.image}" alt="${game.name}">
                    <h3>${game.name}</h3>
                </div>
            `;
            topThreeDiv.appendChild(gameElement);
        });
    
        // Create div for the remaining 7 games (show index, name, size, type)
        const remainingGamesDiv = document.createElement("div");
        remainingGamesDiv.classList.add("remaining-games");
    
        limitedGames.slice(3).forEach((game, index) => {
            const gameElement = document.createElement("div");
            gameElement.classList.add("game-item");
            gameElement.innerHTML = `
                <span class="game-index">${index + 4}</span>
                <div class="details">
                    <h3>${game.name}</h3>
                    <p class="size">${game.size}</p>
                    <p class="type">${game.type}</p>
                </div>
            `;
            remainingGamesDiv.appendChild(gameElement);
        });
    
        // Append both sections to the container
        mobileHotDownload.appendChild(topThreeDiv);
        mobileHotDownload.appendChild(remainingGamesDiv);
    }

    function renderTopicRankList() {
        const topicRankDiv = document.querySelector(".topic-rank-list");
    
        // Clear previous content
        topicRankDiv.innerHTML = "";
    
        const limitedTopic = topicRankList.slice(0, 7);

        const topClasses = ["first", "second", "third"];
    
        // Loop through the limited array and create elements
        limitedTopic.forEach((topic, index) => {
            const topicElement = document.createElement("div");
            topicElement.classList.add("topic-item");
            if (index < 3) {
                topicElement.classList.add(topClasses[index]);
            }
            topicElement.innerHTML = `
                <div class="topic-index">${index + 1}</div>
                <h3>${topic.title}</h3>
                <p class="date">${topic.date}</p>
            `;
            topicRankDiv.appendChild(topicElement);
        });
    }

    function renderAppCombinationList() {
        const appDiv = document.querySelector(".app-combination-list");
    
        // Clear previous content
        appDiv.innerHTML = "";
    
        const limitedApp = appCombination.slice(0, 7);

        const topClasses = ["first", "second", "third"];
    
        // Loop through the limited array and create elements
        limitedApp.forEach((app, index) => {
            const appElement = document.createElement("div");
            appElement.classList.add("app-item");
            if (index < 3) {
                appElement.classList.add(topClasses[index]);
            }
            appElement.innerHTML = `
                <div class="app-index">${index + 1}</div>
                <h3>${app.title}</h3>
                <p class="date">${app.date}</p>
            `;
            appDiv.appendChild(appElement);
        });
    }

    renderNewApps();
    renderHotApps();
    renderNewGames();
    renderNews();
    renderRecommendNews();
    renderRecommendNewsBanner();
    renderGameTopicCategories();
    renderAppTopicCategories();
    renderGameTopicLists();
    renderAppTopicLists();
    renderMobileAppLists();
    renderEssentialAppLists();
    renderMobileGameHotDownloadList();
    renderPlayerGameHotDownloadList();
    renderTopicRankList();
    renderAppCombinationList();
});
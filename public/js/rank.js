function switchTab(evt, tabName) {
    var i, tabcontent, tablinks;

    // Hide all tab content (both top and bottom)
    tabcontent = document.getElementsByClassName("topTabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove "active" class from all tabs
    tablinks = document.getElementsByClassName("topTab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show all content elements matching the tabName
    var targetContent = document.querySelectorAll(`#${tabName}`);
    for (i = 0; i < targetContent.length; i++) {
        targetContent[i].style.display = "block";
    }

    // Add the "active" class to the clicked tab
    evt.currentTarget.className += " active";
}
function switchGameCatRankTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("gameCatRankTabContent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("gameCatRankTab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

function switchAppCatRankTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("appCatRankTabContent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("appCatRankTab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
const mobileGames = [
    { name: '群英召唤师', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"异种族放置卡牌手游，上线即享无限抽，送超强英雄！游戏中你将通过心之树来到文化迥异的世界", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank1.png', rankcategory: 'guaji', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '红玄传：我自为道', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"侠放置类的策略游戏。游戏除了唯美古风美术外，还拥有宏大的世界观、深邃的剧情。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank2.png', rankcategory: 'guaji', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '超进化物语2', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由NTFusion自主研发的一款全新变态进化手游，游戏发生在一个被称作「超进化大陆」的幻想世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank3.png', rankcategory: 'guaji', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '幻谕', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以二次元西幻为背景的大型多人在线角色扮演类手机网络游戏", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank4.png', rankcategory: 'guaji', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '妖怪正传2', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"中国传统神话传说精怪志异文献为基础，创造出一个穿插于现实时空及神魔大陆之间的花花世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank5.png', rankcategory: 'guaji', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: ' 热血江湖', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由官方正版授权，龙图游戏发行青春武侠MMORPG手游。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank6.png', rankcategory: 'guaji', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '道友请留步', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以中国神话为背景，“修仙证道”为主题，融汇了西游记、封神榜、八仙过海等神话巨著，渲染出一幅规模宏大的东方神话世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank7.png', rankcategory: 'guaji', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '天谕', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"一款东方幻想题材的MMORPG。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank8.png', rankcategory: 'guaji', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '太空杀', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由官方正版授权，龙图游戏发行青春武侠MMORPG手游。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank9.png', rankcategory: 'guaji', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '奔跑的蜗牛', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以中国神话为背景，“修仙证道”为主题，融汇了西游记、封神榜、八仙过海等神话巨著，渲染出一幅规模宏大的东方神话世界。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank10.png', rankcategory: 'guaji', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '群英召唤师', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"异种族放置卡牌手游，上线即享无限抽，送超强英雄！游戏中你将通过心之树来到文化迥异的世界", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank1.png', rankcategory: 'xiaoyuan', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '红玄传：我自为道', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"侠放置类的策略游戏。游戏除了唯美古风美术外，还拥有宏大的世界观、深邃的剧情。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank2.png', rankcategory: 'fangzhi', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '超进化物语2', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由NTFusion自主研发的一款全新变态进化手游，游戏发生在一个被称作「超进化大陆」的幻想世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank3.png', rankcategory: 'celue', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '幻谕', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以二次元西幻为背景的大型多人在线角色扮演类手机网络游戏", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank4.png', rankcategory: 'sanguo', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '妖怪正传2', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"中国传统神话传说精怪志异文献为基础，创造出一个穿插于现实时空及神魔大陆之间的花花世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank5.png', rankcategory: 'chuanqi', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: ' 热血江湖', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由官方正版授权，龙图游戏发行青春武侠MMORPG手游。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank6.png', rankcategory: 'gedou', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '道友请留步', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以中国神话为背景，“修仙证道”为主题，融汇了西游记、封神榜、八仙过海等神话巨著，渲染出一幅规模宏大的东方神话世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank7.png', rankcategory: 'pinguo', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '天谕', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"一款东方幻想题材的MMORPG。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank8.png', rankcategory: 'pinguo', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '太空杀', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由官方正版授权，龙图游戏发行青春武侠MMORPG手游。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank9.png', rankcategory: 'celue', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '奔跑的蜗牛', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以中国神话为背景，“修仙证道”为主题，融汇了西游记、封神榜、八仙过海等神话巨著，渲染出一幅规模宏大的东方神话世界。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank10.png', rankcategory: 'xiaoyuan', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '群英召唤师', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"异种族放置卡牌手游，上线即享无限抽，送超强英雄！游戏中你将通过心之树来到文化迥异的世界", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank1.png', rankcategory: 'fangzhi', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '红玄传：我自为道', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"侠放置类的策略游戏。游戏除了唯美古风美术外，还拥有宏大的世界观、深邃的剧情。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank2.png', rankcategory: 'chuanqi', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '超进化物语2', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由NTFusion自主研发的一款全新变态进化手游，游戏发生在一个被称作「超进化大陆」的幻想世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank3.png', rankcategory: 'gedou', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '幻谕', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以二次元西幻为背景的大型多人在线角色扮演类手机网络游戏", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank4.png', rankcategory: 'fangzhi', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '妖怪正传2', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"中国传统神话传说精怪志异文献为基础，创造出一个穿插于现实时空及神魔大陆之间的花花世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank5.png', rankcategory: 'celue', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: ' 热血江湖', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由官方正版授权，龙图游戏发行青春武侠MMORPG手游。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank6.png', rankcategory: 'xiaoyuan', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '道友请留步', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以中国神话为背景，“修仙证道”为主题，融汇了西游记、封神榜、八仙过海等神话巨著，渲染出一幅规模宏大的东方神话世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank7.png', rankcategory: 'gedou', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '天谕', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"一款东方幻想题材的MMORPG。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank8.png', rankcategory: 'sanguo', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '太空杀', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由官方正版授权，龙图游戏发行青春武侠MMORPG手游。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank9.png', rankcategory: 'celue', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '奔跑的蜗牛', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以中国神话为背景，“修仙证道”为主题，融汇了西游记、封神榜、八仙过海等神话巨著，渲染出一幅规模宏大的东方神话世界。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank10.png', rankcategory: 'chuanqi', types: ['赛博朋克', '科幻', '角色扮演'] }
];
const applications = [
    { name: '群英召唤师', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"异种族放置卡牌手游，上线即享无限抽，送超强英雄！游戏中你将通过心之树来到文化迥异的世界", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank1.png', rankcategory: 'guaji1', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '红玄传：我自为道', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"侠放置类的策略游戏。游戏除了唯美古风美术外，还拥有宏大的世界观、深邃的剧情。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank2.png', rankcategory: 'guaji1', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '超进化物语2', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由NTFusion自主研发的一款全新变态进化手游，游戏发生在一个被称作「超进化大陆」的幻想世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank3.png', rankcategory: 'guaji1', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '幻谕', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以二次元西幻为背景的大型多人在线角色扮演类手机网络游戏", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank4.png', rankcategory: 'guaji1', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '妖怪正传2', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"中国传统神话传说精怪志异文献为基础，创造出一个穿插于现实时空及神魔大陆之间的花花世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank5.png', rankcategory: 'guaji1', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: ' 热血江湖', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由官方正版授权，龙图游戏发行青春武侠MMORPG手游。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank6.png', rankcategory: 'guaji1', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '道友请留步', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以中国神话为背景，“修仙证道”为主题，融汇了西游记、封神榜、八仙过海等神话巨著，渲染出一幅规模宏大的东方神话世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank7.png', rankcategory: 'guaji1', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '天谕', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"一款东方幻想题材的MMORPG。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank8.png', rankcategory: 'guaji1', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '太空杀', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由官方正版授权，龙图游戏发行青春武侠MMORPG手游。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank9.png', rankcategory: 'guaji', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '奔跑的蜗牛', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以中国神话为背景，“修仙证道”为主题，融汇了西游记、封神榜、八仙过海等神话巨著，渲染出一幅规模宏大的东方神话世界。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank10.png', rankcategory: 'guaji1', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '群英召唤师', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"异种族放置卡牌手游，上线即享无限抽，送超强英雄！游戏中你将通过心之树来到文化迥异的世界", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank1.png', rankcategory: 'xiaoyuan1', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '红玄传：我自为道', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"侠放置类的策略游戏。游戏除了唯美古风美术外，还拥有宏大的世界观、深邃的剧情。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank2.png', rankcategory: 'fangzhi1', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '超进化物语2', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由NTFusion自主研发的一款全新变态进化手游，游戏发生在一个被称作「超进化大陆」的幻想世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank3.png', rankcategory: 'celue1', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '幻谕', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以二次元西幻为背景的大型多人在线角色扮演类手机网络游戏", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank4.png', rankcategory: 'sanguo1', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '妖怪正传2', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"中国传统神话传说精怪志异文献为基础，创造出一个穿插于现实时空及神魔大陆之间的花花世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank5.png', rankcategory: 'chuanqi1', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: ' 热血江湖', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由官方正版授权，龙图游戏发行青春武侠MMORPG手游。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank6.png', rankcategory: 'gedou1', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '道友请留步', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以中国神话为背景，“修仙证道”为主题，融汇了西游记、封神榜、八仙过海等神话巨著，渲染出一幅规模宏大的东方神话世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank7.png', rankcategory: 'pinguo1', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '天谕', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"一款东方幻想题材的MMORPG。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank8.png', rankcategory: 'pinguo1', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '太空杀', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由官方正版授权，龙图游戏发行青春武侠MMORPG手游。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank9.png', rankcategory: 'celue1', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '奔跑的蜗牛', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以中国神话为背景，“修仙证道”为主题，融汇了西游记、封神榜、八仙过海等神话巨著，渲染出一幅规模宏大的东方神话世界。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank10.png', rankcategory: 'xiaoyuan1', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '群英召唤师', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"异种族放置卡牌手游，上线即享无限抽，送超强英雄！游戏中你将通过心之树来到文化迥异的世界", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank1.png', rankcategory: 'fangzhi1', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '红玄传：我自为道', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"侠放置类的策略游戏。游戏除了唯美古风美术外，还拥有宏大的世界观、深邃的剧情。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank2.png', rankcategory: 'chuanqi1', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '超进化物语2', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由NTFusion自主研发的一款全新变态进化手游，游戏发生在一个被称作「超进化大陆」的幻想世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank3.png', rankcategory: 'gedou1', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '幻谕', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以二次元西幻为背景的大型多人在线角色扮演类手机网络游戏", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank4.png', rankcategory: 'fangzhi1', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '妖怪正传2', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"中国传统神话传说精怪志异文献为基础，创造出一个穿插于现实时空及神魔大陆之间的花花世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank5.png', rankcategory: 'celue1', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: ' 热血江湖', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由官方正版授权，龙图游戏发行青春武侠MMORPG手游。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank6.png', rankcategory: 'xiaoyuan1', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '道友请留步', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以中国神话为背景，“修仙证道”为主题，融汇了西游记、封神榜、八仙过海等神话巨著，渲染出一幅规模宏大的东方神话世界。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank7.png', rankcategory: 'gedou1', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '天谕', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"一款东方幻想题材的MMORPG。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank8.png', rankcategory: 'sanguo1', types: ['赛博朋克', '科幻', '角色扮演'] },
    { name: '太空杀', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"由官方正版授权，龙图游戏发行青春武侠MMORPG手游。", memory: "269.02MB" ,gameCat: "角色扮演", image: '/images/rank/gamerank9.png', rankcategory: 'celue1', types: ['赛博朋克', '科幻', '角色扮演', '主体加强'] },
    { name: '奔跑的蜗牛', dateMobile: '2024-01-04',date: '2023-12-06 10:58:06', content:"以中国神话为背景，“修仙证道”为主题，融汇了西游记、封神榜、八仙过海等神话巨著，渲染出一幅规模宏大的东方神话世界。", memory: "57.05MB" ,gameCat: "模拟经营", image: '/images/rank/gamerank10.png', rankcategory: 'chuanqi1', types: ['赛博朋克', '科幻', '角色扮演'] }
];


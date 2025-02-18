document.addEventListener("DOMContentLoaded", function () {
    const newGames = [
        { name: '超值空间', image: assetBaseUrl + 'imgs/post/newgame1.png', catalog: '探索解密' },
        { name: '世界之外', image: assetBaseUrl + 'imgs/post/newgame2.png', catalog: '音乐舞蹈' },
        { name: '暗影格斗3', image: assetBaseUrl + 'imgs/post/newgame3.png', catalog: '武侠修真' },
        { name: '朝歌', image: assetBaseUrl + 'imgs/post/newgame4.png', catalog: '热血冒险' },
        { name: '剑与远征：启程', image: assetBaseUrl + 'imgs/post/newgame5.png', catalog: '角色扮演' },
        { name: ' 西晋大陆', image: assetBaseUrl + 'imgs/post/newgame6.png', catalog: '模拟经营' },
        { name: '乌龟对对碰', image: assetBaseUrl + 'imgs/post/newgame7.png', catalog: '休闲益智' },
        { name: '超值空间', image: assetBaseUrl + 'imgs/post/newgame1.png', catalog: '探索解密' },
        { name: '世界之外', image: assetBaseUrl + 'imgs/post/newgame2.png', catalog: '音乐舞蹈' },
        { name: '暗影格斗3', image: assetBaseUrl + 'imgs/post/newgame3.png', catalog: '武侠修真' },
        { name: '朝歌', image: assetBaseUrl + 'imgs/post/newgame4.png', catalog: '热血冒险' },
        { name: '剑与远征：启程', image: assetBaseUrl + 'imgs/post/newgame5.png', catalog: '角色扮演' },
        { name: ' 西晋大陆', image: assetBaseUrl + 'imgs/post/newgame6.png', catalog: '模拟经营' },
        { name: '乌龟对对碰', image: assetBaseUrl + 'imgs/post/newgame7.png', catalog: '休闲益智' },
        { name: '超值空间', image: assetBaseUrl + 'imgs/post/newgame1.png', catalog: '探索解密' },
        { name: '世界之外', image: assetBaseUrl + 'imgs/post/newgame2.png', catalog: '音乐舞蹈' },
        { name: '暗影格斗3', image: assetBaseUrl + 'imgs/post/newgame3.png', catalog: '武侠修真' },
        { name: '朝歌', image: assetBaseUrl + 'imgs/post/newgame4.png', catalog: '热血冒险' },
        { name: '剑与远征：启程', image: assetBaseUrl + 'imgs/post/newgame5.png', catalog: '角色扮演' },
        { name: ' 西晋大陆', image: assetBaseUrl + 'imgs/post/newgame6.png', catalog: '模拟经营' },
        { name: '乌龟对对碰', image: assetBaseUrl + 'imgs/post/newgame7.png', catalog: '休闲益智' },
    ]

    const RecentHotPost = [
        { title: 'Altium Designer图文安装教程', image: assetBaseUrl + 'imgs/post/recentHotPost.png', content: 'Altium Designer，简称AD，它是一款综合性的电子设计自动化(EDA)软件。它集原理图设计、PCB(印刷电路板)布放布线、仿真、设计验证、规则检查、制造文档输出和团队协作于一体，可为电子工程师和设计人员提供完整的设计解决方案！许多小伙伴得到了Altium Designer安装包却不知如何正确安装使用，小编整理了Altium Designer图文安装教程供用户参考，包括Altium Designer怎么设置中文语言，及激活步骤，一起来看看吧！' },
        { title: 'Altium Designer图文安装教程', image: assetBaseUrl + 'imgs/post/recentHotPost.png', content: 'Altium Designer，简称AD，它是一款综合性的电子设计自动化(EDA)软件。它集原理图设计、PCB(印刷电路板)布放布线、仿真、设计验证、规则检查、制造文档输出和团队协作于一体，可为电子工程师和设计人员提供完整的设计解决方案！许多小伙伴得到了Altium Designer安装包却不知如何正确安装使用，小编整理了Altium Designer图文安装教程供用户参考，包括Altium Designer怎么设置中文语言，及激活步骤，一起来看看吧！' },
        { title: 'Altium Designer图文安装教程', image: assetBaseUrl + 'imgs/post/recentHotPost.png', content: 'Altium Designer，简称AD，它是一款综合性的电子设计自动化(EDA)软件。它集原理图设计、PCB(印刷电路板)布放布线、仿真、设计验证、规则检查、制造文档输出和团队协作于一体，可为电子工程师和设计人员提供完整的设计解决方案！许多小伙伴得到了Altium Designer安装包却不知如何正确安装使用，小编整理了Altium Designer图文安装教程供用户参考，包括Altium Designer怎么设置中文语言，及激活步骤，一起来看看吧！' },
        { title: 'Altium Designer图文安装教程', image: assetBaseUrl + 'imgs/post/recentHotPost.png', content: 'Altium Designer，简称AD，它是一款综合性的电子设计自动化(EDA)软件。它集原理图设计、PCB(印刷电路板)布放布线、仿真、设计验证、规则检查、制造文档输出和团队协作于一体，可为电子工程师和设计人员提供完整的设计解决方案！许多小伙伴得到了Altium Designer安装包却不知如何正确安装使用，小编整理了Altium Designer图文安装教程供用户参考，包括Altium Designer怎么设置中文语言，及激活步骤，一起来看看吧！' },
        { title: 'Altium Designer图文安装教程', image: assetBaseUrl + 'imgs/post/recentHotPost.png', content: 'Altium Designer，简称AD，它是一款综合性的电子设计自动化(EDA)软件。它集原理图设计、PCB(印刷电路板)布放布线、仿真、设计验证、规则检查、制造文档输出和团队协作于一体，可为电子工程师和设计人员提供完整的设计解决方案！许多小伙伴得到了Altium Designer安装包却不知如何正确安装使用，小编整理了Altium Designer图文安装教程供用户参考，包括Altium Designer怎么设置中文语言，及激活步骤，一起来看看吧！' },
    ]

    function renderNewGameList() {
        const gameSwiper = document.querySelector(".new-game-list");
        const limitedGames = newGames.slice(0, 18);
        limitedGames.forEach(game => {
            const slide = document.createElement("swiper-slide");
            slide.innerHTML = `
                <div class="game-item">
                    <img src="${game.image}" alt="${game.name}">
                    <h3>${game.name}</h3>
                    <p>${game.catalog}</p>
                </div>
            `;
            gameSwiper.appendChild(slide);
        });

        // Initialize Swiper Web Component
        gameSwiper.initialize();
    }

    function renderRecentHotPostList() {
        const postDiv = document.querySelector(".recent-hot-post-list");
        postDiv.innerHTML = "";
        const limitedPost= RecentHotPost.slice(0, 5);
        limitedPost.forEach(post => {
            const postElement = document.createElement("div");
                postElement.classList.add("post-item");
                postElement.innerHTML = `
                    <h3>${post.title}</h3>
                    <div class="details">
                        <img src="${post.image}" alt="${post.title}">
                        <p>${post.content}</p>
                    </div>
                `;
        postDiv.appendChild(postElement);
        });
    }

    renderNewGameList();
    renderRecentHotPostList();
});
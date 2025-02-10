
const applications = [
    { name: '冲呀!饼干人', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app1.png', category: 'jiaose' },
    { name: '皮卡堂之梦想起', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app2.png', category: 'guanka' },
    { name: '潮灵王国：起源', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app3.png', category: 'dongzuo' },
    { name: '锦绣江湖', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app4.png', category: 'xiuxian' },
    { name: '星罗棋布', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app5.png', category: 'zhanzheng' },
    { name: ' 幻谕', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app6.png', category: 'tiyu' },
    { name: '浮生梦山海', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app7.png', category: 'feixing' },
    { name: '进击的骑士', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app8.png', category: 'maoxian' },
    { name: '三国云梦录', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app9.png', category: 'shengcun' },
    { name: '异界深渊：大灵', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app10.png', category: 'kapai' },
    { name: '潮灵王国：起源', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app11.png', category: 'yinyue' },
    { name: '荒蛮传奇', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app12.png', category: 'chuanqi' },
    { name: '莽荒纪-纪宁传奇', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app13.png', category: 'jingying' },
    { name: '轴音旋律', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app14.png', category: 'jieji' },
    { name: '矩阵临界', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app15.png', category: 'chongwu' },
    { name: '魂之刃2', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app16.png', category: 'saiche' },
    { name: '代号56', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app1.png', category: 'qita' },
    { name: '仙剑奇侠传', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app2.png', category: 'jiaose' },
    { name: '哆啦A梦飞车', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app3.png', category: 'guanka' },
    { name: '不朽家族', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app4.png', category: 'dongzuo' },
    { name: '异界深渊：大灵', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app5.png', category: 'xiuxian' },
    { name: '最强祖师', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app6.png', category: 'zhanzheng' },
    { name: '奥拉星2', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app7.png', category: 'tiyu' },
    { name: '斗罗大陆：史莱', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app8.png', category: 'feixing' },
    { name: '冲呀!饼干人', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app9.png', category: 'maoxian' },
    { name: '皮卡堂之梦想起', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app10.png', category: 'shengcun' },
    { name: '潮灵王国：起源', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app11.png', category: 'kapai' },
    { name: '锦绣江湖', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app12.png', category: 'yinyue' },
    { name: '星罗棋布', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app13.png', category: 'chuanqi' },
    { name: ' 幻谕', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app14.png', category: 'jingying' },
    { name: '浮生梦山海', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app15.png', category: 'jieji' },
    { name: '进击的骑士', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app16.png', category: 'chongwu' },
    { name: '三国云梦录', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app1.png', category: 'saiche' },
    { name: '异界深渊：大灵', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app2.png', category: 'qita' },
    { name: '潮灵王国：起源', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app3.png', category: 'jiaose' },
    { name: '荒蛮传奇', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app4.png', category: 'guanka' },
    { name: '莽荒纪-纪宁传奇', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app5.png', category: 'dongzuo' },
    { name: '轴音旋律', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app6.png', category: 'xiuxian' },
    { name: '矩阵临界', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app7.png', category: 'zhanzheng' },
    { name: '魂之刃2', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app8.png', category: 'tiyu' },
    { name: '代号56', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app9.png', category: 'feixing' },
    { name: '仙剑奇侠传', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app10.png', category: 'maoxian' },
    { name: '哆啦A梦飞车', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app11.png', category: 'shengcun' },
    { name: '不朽家族', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app12.png', category: 'kapai' },
    { name: '异界深渊：大灵', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app13.png', category: 'yinyue' },
    { name: '最强祖师', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app14.png', category: 'chuanqi' },
    { name: '奥拉星2', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app15.png', category: 'jingying' },
    { name: '斗罗大陆：史莱', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app16.png', category: 'jieji' },
    { name: '冲呀!饼干人', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app1.png', category: 'jiaose' },
    { name: '皮卡堂之梦想起', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app2.png', category: 'jiaose' },
    { name: '潮灵王国：起源', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app3.png', category: 'jiaose' },
    { name: '锦绣江湖', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app4.png', category: 'chongwu' },
    { name: '星罗棋布', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app5.png', category: 'saiche' },
    { name: ' 幻谕', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app6.png', category: 'qita' },
    { name: '浮生梦山海', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app7.png', category: 'jiaose' },
    { name: '进击的骑士', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app8.png', category: 'guanka' },
    { name: '三国云梦录', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app9.png', category: 'dongzuo' },
    { name: '异界深渊：大灵', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app10.png', category: 'xiuxian' },
    { name: '潮灵王国：起源', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app11.png', category: 'zhanzheng' },
    { name: '荒蛮传奇', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app12.png', category: 'tiyu' },
    { name: '莽荒纪-纪宁传奇', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app13.png', category: 'feixing' },
    { name: '轴音旋律', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app14.png', category: 'maoxian' },
    { name: '矩阵临界', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app15.png', category: 'shengcun' },
    { name: '魂之刃2', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app16.png', category: 'kapai' },
    { name: '代号56', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app1.png', category: 'yinyue' },
    { name: '仙剑奇侠传', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app2.png', category: 'chuanqi' },
    { name: '哆啦A梦飞车', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app3.png', category: 'jingying' },
    { name: '不朽家族', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app4.png', category: 'jieji' },
    { name: '异界深渊：大灵', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app5.png', category: 'chongwu' },
    { name: '最强祖师', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app6.png', category: 'saiche' },
    { name: '奥拉星2', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app7.png', category: 'qita' },
    { name: '斗罗大陆：史莱', type: "休闲益智",date: '2023-12-06更新', image: './assets/images/applications/app8.png', category: 'jiaose' },
];

let activeCategory = "quanbu"; // Default to 'quanbu' (all categories)
let currentPage = 1; // Track the current page
const gamesPerPage = 10; // Number of games to display per page

// Function to get games for the active category
function getGamesForCategory() {
    if (activeCategory === "quanbu") {
        return applications;
    }
    return applications.filter(game => game.category === activeCategory);
}

// Function to render the games for the current page
function renderGames() {
    const categoryDiv = document.getElementById(activeCategory);
    const paginatedGames = getGamesForCategory();

    // Determine how many games to display based on screen size
    const screenWidth = window.innerWidth;
    const isMobileView = screenWidth < 1025;
    const gamesToShow = isMobileView
        ? paginatedGames.slice((currentPage - 1) * gamesPerPage, currentPage * gamesPerPage)
        : paginatedGames; // Show all games when above 1025px

    // Clear the current category div
    categoryDiv.innerHTML = '';

    gamesToShow.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.className = 'gameWrap';

        const imageElement = document.createElement('img');
        imageElement.src = item.image;
        imageElement.alt = item.name;

        const nameElement = document.createElement('p');
        nameElement.className = 'gameName';
        nameElement.textContent = item.name;

        const typeElement = document.createElement('p');
        typeElement.className = 'gameType';
        typeElement.textContent = item.type;

        const dateElement = document.createElement('p');
        dateElement.className = 'gameUpdate';
        dateElement.textContent = item.date;

        const viewNow = document.createElement('div');
        viewNow.className = 'viewNow';
        viewNow.textContent = "查看";

        const gameDetailWrap = document.createElement('div');
        gameDetailWrap.className = 'gameDetailWrap';

        gameDetailWrap.appendChild(nameElement);
        gameDetailWrap.appendChild(typeElement);
        gameDetailWrap.appendChild(dateElement);

        itemDiv.appendChild(imageElement);
        itemDiv.appendChild(gameDetailWrap);
        itemDiv.appendChild(viewNow);

        categoryDiv.appendChild(itemDiv);
    });

    // Update pagination only for mobile view
    if (isMobileView) {
        updatePagination(paginatedGames.length);
    } else {
        const paginationContainer = document.getElementById('pagination');
        paginationContainer.innerHTML = ''; // Clear pagination for desktop view
    }
}

// Function to update pagination
function updatePagination(totalGames) {
    const paginationContainer = document.getElementById('pagination');
    paginationContainer.innerHTML = ''; // Clear existing pagination buttons

    const totalPages = Math.ceil(totalGames / gamesPerPage);

    // Only show pagination if screen width is below 1025px
    if (window.innerWidth >= 1025) {
        return;
    }

    // Add "首页" button
    const homeButton = document.createElement('button');
    homeButton.textContent = "首页";
    homeButton.disabled = currentPage === 1;
    homeButton.addEventListener('click', () => {
        currentPage = 1;
        renderGames();
    });
    paginationContainer.appendChild(homeButton);

    // Add "<" button
    const prevButton = document.createElement('button');
    prevButton.textContent = "<";
    prevButton.className = "pagination-button";
    prevButton.disabled = currentPage === 1;
    prevButton.addEventListener('click', () => {
        currentPage = Math.max(1, currentPage - 1);
        renderGames();
    });
    paginationContainer.appendChild(prevButton);

    // Calculate the range of page numbers to display
    const startPage = Math.max(1, currentPage - 1);
    const endPage = Math.min(totalPages, startPage + 2);

    for (let i = startPage; i <= endPage; i++) {
        const pageButton = document.createElement('button');
        pageButton.textContent = i;
        pageButton.className = i === currentPage ? 'active' : '';
        pageButton.addEventListener('click', () => {
            currentPage = i;
            renderGames();
        });

        paginationContainer.appendChild(pageButton);
    }

    // Add ">" button
    const nextButton = document.createElement('button');
    nextButton.textContent = ">";
    nextButton.className = "pagination-button";
    nextButton.disabled = currentPage === totalPages;
    nextButton.addEventListener('click', () => {
        currentPage = Math.min(totalPages, currentPage + 1);
        renderGames();
    });
    paginationContainer.appendChild(nextButton);

    // Add "尾页" button
    const lastButton = document.createElement('button');
    lastButton.textContent = "尾页";
    lastButton.disabled = currentPage === totalPages;
    lastButton.addEventListener('click', () => {
        currentPage = totalPages;
        renderGames();
    });
    paginationContainer.appendChild(lastButton);
}

// Function to handle tab switching
function switchTab(evt, tabName) {
    activeCategory = tabName; // Update the active category
    currentPage = 1; // Reset to the first page
    renderGames(); // Re-render games for the new category

    // Update tab styles
    const tabcontent = document.getElementsByClassName("catTabcontent");
    Array.from(tabcontent).forEach(tab => (tab.style.display = "none"));

    const tablinks = document.getElementsByClassName("catTab");
    Array.from(tablinks).forEach(link => link.className = link.className.replace(" active", ""));

    document.getElementById(tabName).style.display = "flex";
    evt.currentTarget.className += " active";
}

document.addEventListener('DOMContentLoaded', () => {
    renderGames(); // Initial render

    // Listen for screen resize to handle responsive logic
    window.addEventListener('resize', () => {
        renderGames();
    });
});
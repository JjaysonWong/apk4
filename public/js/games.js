const games = [
    { name: '冲呀!饼干人', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game1.png', category: 'rpg' },
    { name: '皮卡堂之梦想起', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game2.png', category: 'tower_defense' },
    { name: '潮灵王国：起源', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game3.png', category: 'action' },
    { name: '锦绣江湖', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game4.png', category: 'puzzle' },
    { name: '星罗棋布', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game5.png', category: 'war' },
    { name: ' 幻谕', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game6.png', category: 'sport' },
    { name: '浮生梦山海', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game7.png', category: 'shoot' },
    { name: '进击的骑士', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game8.png', category: 'adventure' },
    { name: '三国云梦录', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game9.png', category: 'survival' },
    { name: '异界深渊：大灵', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game10.png', category: 'card' },
    { name: '潮灵王国：起源', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game11.png', category: 'music' },
    { name: '荒蛮传奇', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game12.png', category: 'mobile' },
    { name: '莽荒纪-纪宁传奇', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game13.png', category: 'simulation' },
    { name: '轴音旋律', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game14.png', category: 'arcade' },
    { name: '矩阵临界', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game15.png', category: 'pet' },
    { name: '魂之刃2', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game16.png', category: 'race' },
    { name: '代号56', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game17.png', category: 'other' },
    { name: '仙剑奇侠传', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game18.png', category: 'rpg' },
    { name: '哆啦A梦飞车', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game19.png', category: 'tower_defense' },
    { name: '不朽家族', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game20.png', category: 'action' },
    { name: '异界深渊：大灵', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game21.png', category: 'puzzle' },
    { name: '最强祖师', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game22.png', category: 'war' },
    { name: '奥拉星2', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game23.png', category: 'sport' },
    { name: '斗罗大陆：史莱', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game24.png', category: 'shoot' },
    { name: '冲呀!饼干人', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game1.png', category: 'adventure' },
    { name: '皮卡堂之梦想起', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game2.png', category: 'survival' },
    { name: '潮灵王国：起源', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game3.png', category: 'card' },
    { name: '锦绣江湖', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game4.png', category: 'music' },
    { name: '星罗棋布', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game5.png', category: 'mobile' },
    { name: ' 幻谕', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game6.png', category: 'simulation' },
    { name: '浮生梦山海', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game7.png', category: 'arcade' },
    { name: '进击的骑士', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game8.png', category: 'pet' },
    { name: '三国云梦录', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game9.png', category: 'race' },
    { name: '异界深渊：大灵', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game10.png', category: 'other' },
    { name: '潮灵王国：起源', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game11.png', category: 'rpg' },
    { name: '荒蛮传奇', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game12.png', category: 'tower_defense' },
    { name: '莽荒纪-纪宁传奇', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game13.png', category: 'action' },
    { name: '轴音旋律', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game14.png', category: 'puzzle' },
    { name: '矩阵临界', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game15.png', category: 'war' },
    { name: '魂之刃2', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game16.png', category: 'sport' },
    { name: '代号56', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game17.png', category: 'shoot' },
    { name: '仙剑奇侠传', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game18.png', category: 'adventure' },
    { name: '哆啦A梦飞车', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game19.png', category: 'survival' },
    { name: '不朽家族', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game20.png', category: 'card' },
    { name: '异界深渊：大灵', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game21.png', category: 'music' },
    { name: '最强祖师', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game22.png', category: 'mobile' },
    { name: '奥拉星2', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game23.png', category: 'simulation' },
    { name: '斗罗大陆：史莱', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game24.png', category: 'arcade' },
    { name: '冲呀!饼干人', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game1.png', category: 'rpg' },
    { name: '皮卡堂之梦想起', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game2.png', category: 'rpg' },
    { name: '潮灵王国：起源', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game3.png', category: 'rpg' },
    { name: '锦绣江湖', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game4.png', category: 'pet' },
    { name: '星罗棋布', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game5.png', category: 'race' },
    { name: ' 幻谕', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game6.png', category: 'other' },
    { name: '浮生梦山海', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game7.png', category: 'rpg' },
    { name: '进击的骑士', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game8.png', category: 'tower_defense' },
    { name: '三国云梦录', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game9.png', category: 'action' },
    { name: '异界深渊：大灵', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game10.png', category: 'puzzle' },
    { name: '潮灵王国：起源', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game11.png', category: 'war' },
    { name: '荒蛮传奇', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game12.png', category: 'sport' },
    { name: '莽荒纪-纪宁传奇', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game13.png', category: 'shoot' },
    { name: '轴音旋律', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game14.png', category: 'adventure' },
    { name: '矩阵临界', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game15.png', category: 'survival' },
    { name: '魂之刃2', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game16.png', category: 'card' },
    { name: '代号56', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game17.png', category: 'music' },
    { name: '仙剑奇侠传', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game18.png', category: 'mobile' },
    { name: '哆啦A梦飞车', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game19.png', category: 'simulation' },
    { name: '不朽家族', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game20.png', category: 'arcade' },
    { name: '异界深渊：大灵', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game21.png', category: 'pet' },
    { name: '最强祖师', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game22.png', category: 'race' },
    { name: '奥拉星2', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game23.png', category: 'other' },
    { name: '斗罗大陆：史莱', type: "休闲益智",date: '2023-12-06更新', image: '/images/games/game24.png', category: 'rpg' },
];

let activeCategory = "all"; // Default to 'quanbu' (all categories)
let currentPage = 1; // Track the current page
const gamesPerPage = 10; // Number of games to display per page

// Function to get games for the active category
function getGamesForCategory() {
    if (activeCategory === "all") {
        return games;
    }
    return games.filter(game => game.category === activeCategory);
}

// Function to read category from URL
function getCategoryFromURL() {
    const pathSegments = window.location.pathname.split('/');
    const categoryIndex = pathSegments.indexOf('category');
    const category = categoryIndex !== -1 ? pathSegments[categoryIndex + 1] : null;
    
    return category !== null ? category : "all";
}


document.addEventListener('DOMContentLoaded', () => {
    activeCategory = getCategoryFromURL();

    const activeTab = document.getElementsByClassName("catTab tablinks active");

    if (activeTab.length > 0) {
        switchTab({ currentTarget: activeTab[0] }, activeCategory);
    }

    // Listen for screen resize to handle responsive logic
    window.addEventListener('resize', () => {
        renderGames();
    });
});

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
        viewNow.textContent = Translate;

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
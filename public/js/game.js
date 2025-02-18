function switchTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("gameContent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("gameTab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

function switchRHTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("rhGameContent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("recommendHotTab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

document.addEventListener("DOMContentLoaded", function () {
    const gameCategories = [
        { name: '全部分类', image: assetBaseUrl + 'imgs/game/cat1.png', catalog:'0'},
        { name: '宠物养成', image: assetBaseUrl + 'imgs/game/cat2.png', catalog:'1'},
        { name: '赛车竞速', image: assetBaseUrl + 'imgs/game/cat3.png', catalog:'2'},
        { name: '角色扮演', image: assetBaseUrl + 'imgs/game/cat4.png', catalog:'3'},
        { name: '模拟塔防', image: assetBaseUrl + 'imgs/game/cat5.png', catalog:'4'},
        { name: '动作格斗', image: assetBaseUrl + 'imgs/game/cat6.png', catalog:'5'},
        { name: '休闲益智', image: assetBaseUrl + 'imgs/game/cat7.png', catalog:'6'},
        { name: '战争策略', image: assetBaseUrl + 'imgs/game/cat8.png', catalog:'7'},
        { name: '体育竞技', image: assetBaseUrl + 'imgs/game/cat9.png', catalog:'8'},
        { name: '冒险解谜', image: assetBaseUrl + 'imgs/game/cat10.png', catalog:'9'},
        { name: '挂机养老', image: assetBaseUrl + 'imgs/game/cat11.png', catalog:'10'},
        { name: '卡牌对战', image: assetBaseUrl + 'imgs/game/cat12.png', catalog:'11'},
        { name: '音乐舞蹈', image: assetBaseUrl + 'imgs/game/cat13.png', catalog:'12'},
        { name: '模拟经营', image: assetBaseUrl + 'imgs/game/cat14.png', catalog:'13'},
        { name: '传奇手游', image: assetBaseUrl + 'imgs/game/cat15.png', catalog:'14'},
        { name: '街机格斗', image: assetBaseUrl + 'imgs/game/cat16.png', catalog:'15'},
        { name: '其他游戏', image: assetBaseUrl + 'imgs/game/cat17.png', catalog:'16'},
        { name: '枪战射击', image: assetBaseUrl + 'imgs/game/cat18.png', catalog:'17'},
    ]

    const games = [
        { name: '天龙八部：归来', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'1', image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '暗影低语', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'2', image: assetBaseUrl + 'imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'3', image: assetBaseUrl + 'imgs/home/mobilegame3.png'},
        { name: '弹力果冻', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'4', image: assetBaseUrl + 'imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'5', image: assetBaseUrl + 'imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'6', image: assetBaseUrl + 'imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'7', image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '暗影低语', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'8', image: assetBaseUrl + 'imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'9', image: assetBaseUrl + 'imgs/home/mobilegame3.png'},
        { name: '弹力果冻', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'10', image: assetBaseUrl + 'imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'11', image: assetBaseUrl + 'imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'12', image: assetBaseUrl + 'imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'13', image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '暗影低语', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'14', image: assetBaseUrl + 'imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'15', image: assetBaseUrl + 'imgs/home/mobilegame3.png'},
        { name: '弹力果冻', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'16', image: assetBaseUrl + 'imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'17', image: assetBaseUrl + 'imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'1', image: assetBaseUrl + 'imgs/home/mobilegame6.png'},
        { name: '暗影低语', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'2', image: assetBaseUrl + 'imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'3', image: assetBaseUrl + 'imgs/home/mobilegame3.png'},
        { name: '弹力果冻', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'4', image: assetBaseUrl + 'imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'5', image: assetBaseUrl + 'imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'6', image: assetBaseUrl + 'imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'1', image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '天龙八部：归来', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'1', image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '天龙八部：归来', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'1', image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '天龙八部：归来', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'1', image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '天龙八部：归来', version:'v.1.3.222绿色版', date: '2024-10-10', size: '400.8MB', catagory:'1', image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
    ]

    const recommendGames = [
        { name: '天龙八部：归来', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '暗影低语', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame3.png'},
        { name: '弹力果冻', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '暗影低语', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame3.png'},
        { name: '弹力果冻', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '暗影低语', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame3.png'},
        { name: '弹力果冻', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame6.png'},
        { name: '暗影低语', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame3.png'},
        { name: '弹力果冻', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '天龙八部：归来', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '天龙八部：归来', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '天龙八部：归来', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '天龙八部：归来', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
    ]

    const hotGames = [
        { name: '暗影低语', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame3.png'},
        { name: '弹力果冻', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '暗影低语', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame3.png'},
        { name: '弹力果冻', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '暗影低语', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame3.png'},
        { name: '弹力果冻', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame4.png'},
        { name: '暗影低语', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame3.png'},
        { name: '弹力果冻', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '暗影低语', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame3.png'},
        { name: '弹力果冻', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame6.png'},
        { name: '天龙八部：归来', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame1.png'},
        { name: '暗影低语', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame2.png'},
        { name: '悠悠的时光', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame3.png'},
        { name: '弹力果冻', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame4.png'},
        { name: '双人成行大冒险', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame5.png'},
        { name: ' 连接水管最新版', size: '400.8MB', numberDownload: "1.5w", image: assetBaseUrl + 'imgs/home/mobilegame6.png'},
    ]

    let currentPage = 1;
    let selectedCategory = '0'; // Default to "全部分类" (All Games)
    const itemsPerPage = 24;
    
    // Function to read category from URL on page load
    function getCategoryFromURL() {
        const urlParts = window.location.pathname.split("/");
        const lastPart = urlParts[urlParts.length - 1]; // Get last part of URL
        const secondLastPart = urlParts[urlParts.length - 2]; // Might be category or game_X
    
        const categoryMatch = secondLastPart.match(/game_(\d+)/);
        const pageMatch = lastPart.match(/^(\d+)$/); // Check if last part is a number
    
        if (categoryMatch) {
            selectedCategory = categoryMatch[1]; // Extract category ID
        } else {
            selectedCategory = '0'; // Default to "All"
        }
    
        if (pageMatch) {
            currentPage = parseInt(pageMatch[1]); // Get page number from URL
        } else {
            currentPage = 1; // Default to page 1
        }
    }
    
    // Function to update URL and reload page
    function updateURLAndReload(category, page = 1) {
        if (category === '0' || category === 0) {
            window.location.href = `${window.location.origin}/pages/games/${page}/`; // All games
        } else {
            window.location.href = `${window.location.origin}/pages/games/game_${category}/${page}/`; // Specific category with page
        }
    }
    
    // Render Game Categories
    function renderGameCategories() {
        const categoriesDiv = document.querySelector(".categories-list");
        categoriesDiv.innerHTML = "";
    
        gameCategories.forEach(category => {
            const categoryElement = document.createElement("div");
            categoryElement.classList.add("category-item");
    
            // Add "active" class if the category is selected
            if (category.catalog === selectedCategory) {
                categoryElement.classList.add("active");
            }
    
            categoryElement.innerHTML = `
                <div class="img-block">
                    <img src="${category.image}" alt="${category.name}">
                </div>
                <h3>${category.name}</h3>
            `;
    
            categoryElement.addEventListener("click", () => {
                updateURLAndReload(category.catalog); // Change URL & reload
            });
    
            categoriesDiv.appendChild(categoryElement);
        });
    }
    
    // Render Games
    function renderGames() {
        const gameListDiv = document.querySelector(".game-list");
        gameListDiv.innerHTML = "";
    
        // Filter games by category
        const filteredGames = selectedCategory === '0'
            ? games // Show all games
            : games.filter(game => game.catagory === selectedCategory);
    
        // Get paginated games
        const start = (currentPage - 1) * itemsPerPage;
        const paginatedGames = filteredGames.slice(start, start + itemsPerPage);
    
        paginatedGames.forEach(game => {
            const gameElement = document.createElement("div");
            gameElement.classList.add("game-item");
            gameElement.innerHTML = `
                <div class="img-block">
                    <img src="${game.image}" alt="${game.name}">
                </div>
                <div class="game-detail">
                    <h3>${game.name}</h3>
                    <div class="game-inner-detail">
                        <p class="version">${game.version}</p>
                        <p class="size">${game.size}</p>
                        <p class="date">${game.date}</p>
                    </div>
                </div>    
            `;
            gameListDiv.appendChild(gameElement);
        });
    
        renderPagination(filteredGames.length);
    }
    
    // Render Pagination
    function renderPagination(totalItems) {
        const paginationDiv = document.querySelector(".pagination");
        paginationDiv.innerHTML = "";
    
        const totalPages = Math.ceil(totalItems / itemsPerPage);
        if (totalPages <= 1) return; // No pagination needed
    
        let pageNumbers = [];
    
        if (totalPages <= 3) {
            // Show all pages if total pages are 3 or less
            for (let i = 1; i <= totalPages; i++) {
                pageNumbers.push(
                    `<button class="page-number ${i === currentPage ? 'active' : ''}" data-page="${i}">${i}</button>`
                );
            }
        } else {
            if (currentPage === 1 || currentPage === 2) {
                // For page 1 or 2: Show 1, 2, 3 ... totalPages
                for (let i = 1; i <= 3; i++) {
                    pageNumbers.push(
                        `<button class="page-number ${i === currentPage ? 'active' : ''}" data-page="${i}">${i}</button>`
                    );
                }
                pageNumbers.push('<span class="dots">...</span>');
                pageNumbers.push(`<button class="page-number" data-page="${totalPages}">${totalPages}</button>`);
            } else if (currentPage === totalPages || currentPage === totalPages - 1) {
                // For last two pages: Show 1 ... totalPages-2, totalPages-1, totalPages
                pageNumbers.push(`<button class="page-number" data-page="1">1</button>`);
                pageNumbers.push('<span class="dots">...</span>');
                for (let i = totalPages - 2; i <= totalPages; i++) {
                    pageNumbers.push(
                        `<button class="page-number ${i === currentPage ? 'active' : ''}" data-page="${i}">${i}</button>`
                    );
                }
            } else {
                // For middle pages: Show 1 ... currentPage-1, currentPage, currentPage+1 ... totalPages
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

    function renderRecommendGameList() {
        const gameDiv = document.querySelector(".recommend-game-list");
    
        // Clear previous content
        gameDiv.innerHTML = "";
    
        const limitedGame = recommendGames.slice(0, 12);
    
        // Loop through the limited array and create elements
        limitedGame.forEach((game, index) => {
            const gameElement = document.createElement("div");
            gameElement.classList.add("game-item");
            gameElement.innerHTML = `
                <img src="${game.image}" alt="${game.name}">
                <div class="game-detail">
                    <h3>${game.name}</h3>
                    <p><span>${game.numberDownload}人安装</span><span>${game.size}</span></p>
                </div>
            `;
            gameDiv.appendChild(gameElement);
        });
    }

    function renderHotGameList() {
        const gameDiv = document.querySelector(".hot-game-list");
    
        // Clear previous content
        gameDiv.innerHTML = "";
    
        const limitedGame = hotGames.slice(0, 12);
    
        // Loop through the limited array and create elements
        limitedGame.forEach((game, index) => {
            const gameElement = document.createElement("div");
            gameElement.classList.add("game-item");
            gameElement.innerHTML = `
                <img src="${game.image}" alt="${game.name}">
                <div class="game-detail">
                    <h3>${game.name}</h3>
                    <p><span>${game.numberDownload}人安装</span><span>${game.size}</span></p>
                </div>
            `;
            gameDiv.appendChild(gameElement);
        });
    }
    
    // Initialize
    getCategoryFromURL();
    renderGameCategories();
    renderGames();
    renderRecommendGameList();
    renderHotGameList();
});
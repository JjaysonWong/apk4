function switchTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("appContent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("appTab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

function switchRHTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("rhAppContent");
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
    const appCategories = [
        { name: '全部分类', image: assetBaseUrl + 'imgs/game/cat1.png', catalog:'0'},
        { name: '视频播放', image: assetBaseUrl + 'imgs/application/cat1.png', catalog:'1'},
        { name: '生活服务', image: assetBaseUrl + 'imgs/application/cat2.png', catalog:'2'},
        { name: '新闻阅读', image: assetBaseUrl + 'imgs/application/cat3.png', catalog:'3'},
        { name: '学习教育', image: assetBaseUrl + 'imgs/application/cat4.png', catalog:'4'},
        { name: '运动健身', image: assetBaseUrl + 'imgs/application/cat5.png', catalog:'5'},
        { name: '手机办公', image: assetBaseUrl + 'imgs/application/cat6.png', catalog:'6'},
        { name: '丽人母婴', image: assetBaseUrl + 'imgs/application/cat7.png', catalog:'7'},
        { name: '网络购物', image: assetBaseUrl + 'imgs/application/cat8.png', catalog:'8'},
        { name: '旅游出行', image: assetBaseUrl + 'imgs/application/cat9.png', catalog:'9'},
        { name: '主题美化', image: assetBaseUrl + 'imgs/application/cat10.png', catalog:'10'},
        { name: '摄影拍照', image: assetBaseUrl + 'imgs/application/cat11.png', catalog:'11'},
        { name: '小说漫画', image: assetBaseUrl + 'imgs/application/cat12.png', catalog:'12'},
        { name: '金融理财', image: assetBaseUrl + 'imgs/application/cat13.png', catalog:'13'},
        { name: 'K歌音乐', image: assetBaseUrl + 'imgs/application/cat14.png', catalog:'14'},
        { name: '社交聊天', image: assetBaseUrl + 'imgs/application/cat15.png', catalog:'15'},
        { name: '其他应用', image: assetBaseUrl + 'imgs/application/cat16.png', catalog:'16'},
    ]

    const apps = [
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

    const recommendApps = [
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

    const hotApps = [
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
    let selectedCategory = '0'; // Default to "全部分类" (All Apps)
    const itemsPerPage = 24;
    
    // Function to read category from URL on page load
    function getCategoryFromURL() {
        const urlParts = window.location.pathname.split("/");
        const lastPart = urlParts[urlParts.length - 1]; // Get last part of URL
        const secondLastPart = urlParts[urlParts.length - 2]; // Might be category or app_X
    
        const categoryMatch = secondLastPart.match(/app_(\d+)/);
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
            window.location.href = `${window.location.origin}/applications/${page}/`; // All Apps
        } else {
            window.location.href = `${window.location.origin}/applications/app_${category}/${page}/`; // Specific category with page
        }
    }
    
    // Render App Categories
    function renderAppCategories() {
        const categoriesDiv = document.querySelector(".categories-list");
        categoriesDiv.innerHTML = "";
    
        appCategories.forEach(category => {
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
    
    // Render Apps
    function renderApps() {
        const appListDiv = document.querySelector(".app-list");
        appListDiv.innerHTML = "";
    
        // Filter apps by category
        const filteredApps = selectedCategory === '0'
            ? apps // Show all apps
            : apps.filter(app => app.catagory === selectedCategory);
    
        // Get paginated apps
        const start = (currentPage - 1) * itemsPerPage;
        const paginatedApps = filteredApps.slice(start, start + itemsPerPage);
    
        paginatedApps.forEach(app => {
            const appElement = document.createElement("div");
            appElement.classList.add("app-item");
            appElement.innerHTML = `
                <div class="img-block">
                    <img src="${app.image}" alt="${app.name}">
                </div>
                <div class="app-detail">
                    <h3>${app.name}</h3>
                    <div class="app-inner-detail">
                        <p class="version">${app.version}</p>
                        <p class="size">${app.size}</p>
                        <p class="date">${app.date}</p>
                    </div>
                </div>    
            `;
            appListDiv.appendChild(appElement);
        });
    
        renderPagination(filteredApps.length);
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

    function renderRecommendAppList() {
        const appDiv = document.querySelector(".recommend-app-list");
    
        // Clear previous content
        appDiv.innerHTML = "";
    
        const limitedApp = recommendApps.slice(0, 12);
    
        // Loop through the limited array and create elements
        limitedApp.forEach((app, index) => {
            const appElement = document.createElement("div");
            appElement.classList.add("app-item");
            appElement.innerHTML = `
                <img src="${app.image}" alt="${app.name}">
                <div class="app-detail">
                    <h3>${app.name}</h3>
                    <p><span>${app.numberDownload}人安装</span><span>${app.size}</span></p>
                </div>
            `;
            appDiv.appendChild(appElement);
        });
    }

    function renderHotAppList() {
        const appDiv = document.querySelector(".hot-app-list");
    
        // Clear previous content
        appDiv.innerHTML = "";
    
        const limitedApp = hotApps.slice(0, 12);
    
        // Loop through the limited array and create elements
        limitedApp.forEach((app, index) => {
            const appElement = document.createElement("div");
            appElement.classList.add("app-item");
            appElement.innerHTML = `
                <img src="${app.image}" alt="${app.name}">
                <div class="app-detail">
                    <h3>${app.name}</h3>
                    <p><span>${app.numberDownload}人安装</span><span>${app.size}</span></p>
                </div>
            `;
            appDiv.appendChild(appElement);
        });
    }
    
    // Initialize
    getCategoryFromURL();
    renderAppCategories();
    renderApps();
    renderRecommendAppList();
    renderHotAppList();
});
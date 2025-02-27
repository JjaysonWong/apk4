function switchTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("topTabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("topTab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

function switchCatTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("catTabContent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("catTab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "flex";
    document.getElementById(tabName).style.justifyContent = "space-between";
    evt.currentTarget.className += " active";
}

function switchHotGameTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("hotGameTabContent");
    tablinks = document.getElementsByClassName("hot-game-tab");

    // Hide all tab content
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove "active" class from all tabs
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active", "firstHotGameTab");
    }

    // Show the selected tab and add "active" class to the clicked tab
    document.getElementById(tabName).style.display = "flex";
    evt.currentTarget.classList.add("active");

    // If the third tab is clicked, add class to the first tab
    if (evt.currentTarget === tablinks[2]) {
        tablinks[0].classList.add("firstHotGameTab"); // Add class to first tab
    }
}

function switchUsefulAppTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("usefulAppTabContent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("usefulAppTab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "flex";
    document.getElementById(tabName).style.justifyContent = "space-between";

    evt.currentTarget.className += " active";
}
// Ensure the first tab is loaded on refresh
document.addEventListener("DOMContentLoaded", function() {
    var firstCatTab = document.querySelector(".catTab");
    if (firstCatTab) {
        firstCatTab.click();
    }

    var firstUsefulAppTab = document.querySelector(".usefulAppTab");
    if (firstUsefulAppTab) {
        firstUsefulAppTab.click();
    }

    var firstHotGameTab = document.querySelector(".hot-game-tab");
    if (firstHotGameTab) {
        firstHotGameTab.click();
    }
    var firstHotAppTab = document.querySelector(".hot-app-tab");
    if (firstHotAppTab) {
        firstHotAppTab.click();
    }
});

function switchHotAppTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("hotAppTabContent");
    tablinks = document.getElementsByClassName("hot-app-tab");

    // Hide all tab content
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove "active" class from all tabs
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active", "firstHotAppTab");
    }
    console.log(tabName);
    // Show the selected tab and add "active" class to the clicked tab
    document.getElementById(tabName).style.display = "flex";
    evt.currentTarget.classList.add("active");

    // If the third tab is clicked, add class to the first tab
    if (evt.currentTarget === tablinks[2]) {
        tablinks[0].classList.add("firstHotAppTab"); // Add class to first tab
    }
}
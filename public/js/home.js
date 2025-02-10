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
    evt.currentTarget.className += " active";
}

function switchHotGameTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("hotGameTabContent");
    tablinks = document.getElementsByClassName("hot-game-tab");

    // Debug: Log the clicked tab
    console.log("Clicked tab:", evt.currentTarget);  // Should show the clicked button

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
    evt.currentTarget.className += " active";
}

function switchHotAppTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("hotAppTabContent");
    tablinks = document.getElementsByClassName("hot-app-tab");

    // Debug: Log the clicked tab
    console.log("Clicked tab:", evt.currentTarget);  // Should show the clicked button

    // Hide all tab content
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove "active" class from all tabs
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active", "firstHotAppTab");
    }

    // Show the selected tab and add "active" class to the clicked tab
    document.getElementById(tabName).style.display = "flex";
    evt.currentTarget.classList.add("active");

    // If the third tab is clicked, add class to the first tab
    if (evt.currentTarget === tablinks[2]) {
        tablinks[0].classList.add("firstHotAppTab"); // Add class to first tab
    }
}
function toggleLangDropdown(event) {
    // Prevent the event from propagating so that the document click event doesn't trigger
    event.stopPropagation();

    const dropdown = document.getElementById('languageDropdown');
    
    // Toggle the 'open' class on the dropdown
    dropdown.classList.toggle('open');
}

function toggleMobileLangDropdown(event) {
  // Prevent the event from propagating so that the document click event doesn't trigger
  event.stopPropagation();

  const dropdown = document.getElementById('languageMobileDropdown');
  
  // Toggle the 'open' class on the dropdown
  dropdown.classList.toggle('open');
}

function toggleFooterLangDropdown(event) {
  // Prevent the event from propagating so that the document click event doesn't trigger
  event.stopPropagation();

  const dropdown = document.getElementById('languageFooterDropdown');
  
  // Toggle the 'open' class on the dropdown
  dropdown.classList.toggle('open');
}

document.addEventListener('click', function(event) {
  const dropdown = document.getElementById('languageDropdown');
  
  // Check if the clicked element is inside the dropdown or is the dropdown toggle button
  if (!dropdown.contains(event.target) && !event.target.closest('.dropdown-toggle')) {
      dropdown.classList.remove('open');
  }
  
  
});

document.addEventListener('click', function(event) {
  const dropdown = document.getElementById('languageFooterDropdown');
  
  // Check if the clicked element is inside the dropdown or is the dropdown toggle button
  if (!dropdown.contains(event.target) && !event.target.closest('.dropdown-toggle')) {
      dropdown.classList.remove('open');
  }
});

function toggleMenu(x) {
  x.classList.toggle("change");
  const dropdown = document.querySelector(".mobile-menu-dropdown");
  const overlay = document.querySelector(".menu-overlay");
  const body = document.body;

  dropdown.classList.toggle("show");
  overlay.classList.toggle("show");
  
  if (dropdown.classList.contains("show")) {
      body.classList.add("no-scroll");
  } else {
      body.classList.remove("no-scroll");
  }
}


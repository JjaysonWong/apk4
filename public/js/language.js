function changeLanguage(locale) {
    fetch(`/change-language/${locale}`, {
        method: 'GET',
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    }).then(response => response.json())
    .then(data => {
        if (data.success) {
            // Update language elements dynamically
            document.documentElement.lang = locale; 

            
            document.querySelector('.dropdownList .chosen').classList.remove('chosen');
            document.querySelector(`[onclick="changeLanguage('${locale}', this)"]`).classList.add('chosen');

            location.reload(); 
        }
    });
}

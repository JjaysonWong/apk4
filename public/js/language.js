function changeLanguage(locale, element) {
    fetch(`/change-language/${locale}`, {
        method: 'GET',
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    }).then(() => {
        location.reload(); 
    });
}

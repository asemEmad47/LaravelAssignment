function switchLanguage(language) {
    // Set the language in session
    console.log(language);
    if (language === 'ar') {
        window.location.href = '/index/ar'; // Redirect to Arabic page
    } else {
        window.location.href = '/index/en'; // Redirect to English page
    }
}
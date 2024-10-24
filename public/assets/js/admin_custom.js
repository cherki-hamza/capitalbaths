
document.querySelectorAll('.language-label.js-language-label').forEach(function(span) {

    if (span.textContent.trim() === 'ar') {
        span.textContent = 'Arabic';
    } else if (span.textContent.trim() === 'en') {
        span.textContent = 'English';
    }

});

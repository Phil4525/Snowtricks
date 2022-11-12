const navEl = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
    if (window.scrollY > 56) {
        navEl.classList.add('bg-white');
    } else if (window.scrollY < 56) {
        navEl.classList.remove('bg-white');
    }
});
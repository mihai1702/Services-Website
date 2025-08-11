const scrollIcon = document.getElementById('scroll-icon');

window.addEventListener('scroll', () => {
  if (window.scrollY > 10) {
    scrollIcon.classList.add('hidden');
  } else {
    scrollIcon.classList.remove('hidden');
  }
});
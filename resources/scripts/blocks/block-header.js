document.addEventListener('DOMContentLoaded', function () {
  if ($('.header-image').length) {
    const headerImage = document.getElementById('header-image')
    document.onmousemove = event => {
      const positionX = (window.innerWidth / 2 - event.x) / 12;
      const positionY = -event.y / 12;

      headerImage.style.transform = `translate(${positionX}px, ${positionY}px) rotate(12deg)`;
    }
  }
})

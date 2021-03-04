const body = document.body,
  scrollWrap = document.getElementById('main'),
  height = scrollWrap.getBoundingClientRect().height - 1,
  speed = 0.04

let offset = 0

body.style.height = Math.floor(height) + "px"

function smoothScroll() {
  offset += (window.pageYOffset - offset) * speed

  scrollWrap.style.transform = "translate3d(0, -" + offset + "px, 0)"

  requestAnimationFrame(smoothScroll)
}

smoothScroll()

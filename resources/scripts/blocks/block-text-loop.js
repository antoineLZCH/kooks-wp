$(function () {
  let slidingBar = $('.block-text-loop');
  if (slidingBar.length) {
    let text = $('.text', slidingBar)
    let result = ""
    for (let i = 0; i < 50; i++) {
      result += text.text()
    }
    text.remove()

    slidingBar.append("<div class='text whitespace-no-wrap absolute text-2xl'>" + result + "</div>")
  }
})

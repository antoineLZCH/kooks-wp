$(function () {
  let block = $('.block-contact-link');
  if (block.length > 0) {
    block.each(function () {
      let assetRight = $('#asset-right', $(this))
      let assetRightWidth = assetRight.width()
      let assetLeft = $('#asset-left', $(this))
      let assetLeftWidth = assetLeft.width()
      let button = $('#redirection', $(this))

      button.css('marginLeft', `${assetLeftWidth + 10}px`)
      assetRight.css('right', `-${assetRightWidth + 10}px`)
    })
  }
})

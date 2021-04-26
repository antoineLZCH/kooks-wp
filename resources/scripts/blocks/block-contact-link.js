$(function () {
  let block = $('.block-contact-link, .block-contact-link-products');
  if (block.length > 0) {
    block.each(function () {
      let assetRight = $('#asset-right', $(this))
      let assetRightWidth = assetRight.width()
      let assetLeft = $('#asset-left', $(this))
      let assetLeftWidth = assetLeft.width()
      let button = $('#redirection, #redirection-step-1', $(this))

      button.css('marginLeft', `${assetLeftWidth + 10}px`)
      button.css('marginRight', `${assetRightWidth + 10}px`)
    })
  }
})

$(function () {
  let blockProducts = $('.block-contact-link-products')
  if (blockProducts.length > 0) {
    let stepOneElements = $('[data-first-step]', blockProducts)
    let stepTwoElements = $('[data-second-step]', blockProducts)
    let productBlocks = $('[data-product]')

    stepTwoElements.addClass('hidden')
    let triggerButton = $('#secondStepEnabler')
    triggerButton.on('click', () => {
      $('.details-modal', productBlocks).addClass('is-visible')
      productBlocks.css('margin-bottom', '25%')
      $(window).scrollTop($(productBlocks[0]).offset().top)
      stepOneElements.addClass('hidden')
      stepTwoElements.removeClass('hidden')
    })
  }
})

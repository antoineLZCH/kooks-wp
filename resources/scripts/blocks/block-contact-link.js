$(function () {
  let blockProducts = $('.block-contact-link-products')
  let stepOneElements = $('[data-first-step]', blockProducts)
  let stepTwoElements = $('[data-second-step]', blockProducts)
  if (blockProducts.length > 0 && $(window).innerWidth() >= 1280) {
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

    $('.close-modal').on('click', () => {
      $('.details-modal', productBlocks).removeClass('is-visible')
      productBlocks.css('margin-bottom', '0')
    })
  }
  if (blockProducts.length > 0 && $(window).innerWidth() < 1280) {
    $('.contact-asset').addClass('hidden')
  }
  if ($(window).innerWidth() < 1280) {
    stepOneElements.addClass('hidden')
    stepTwoElements.removeClass('hidden')
  }
})

$(function () {
  let product = $('.block-product');
  if (product.length) {
    product.each(function () {
      let body = $('body');
      let current = $(this);
      let currentModal = $('.details', current);
      let closeButton = $('.close-modal', currentModal);
      let openButton = $('.open-modal', current);
      let detailsButton = $('.toggle-details', current)

      openButton.on('click', function () {
        window.scrollTo({top: 0})
        currentModal.removeClass('hidden');
      })

      closeButton.on('click', function () {
        window.scrollTo({top: current.offset().top})
        $('.details').addClass('hidden');
      })

      detailsButton.on('click', function () {
        $('.content-mobile', current).toggleClass('is-opened')
      })
    })
  }
})

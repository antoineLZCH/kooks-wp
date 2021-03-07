$(function () {
  let product = $('.block-product');
  if (product.length) {
    product.each(function () {
      let body = $('body');
      let current = $(this);
      let currentModal = $('.details', current);
      let closeButton = $('.close-modal', currentModal);
      let openButton = $('.open-modal', current);

      openButton.on('click', function () {
        currentModal.removeClass('hidden');
        body.addClass('overflow-hidden')
      })

      closeButton.on('click', function () {
        currentModal.addClass('hidden');
        body.removeClass('overflow-hidden')
      })
    })
  }
})

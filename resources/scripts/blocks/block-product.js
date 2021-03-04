$(function () {
  let product = $('.block-product');
  if (product.length) {
    product.each(function () {
      let current = $(this);
      let currentModal = $('.details', current);
      let closeButton = $('.close-modal', currentModal);
      let openButton = $('.open-modal', current);


      openButton.on('click', function () {
        currentModal.removeClass('hidden');
      })

      closeButton.on('click', function () {
        currentModal.addClass('hidden');
      })
    })
  }
})

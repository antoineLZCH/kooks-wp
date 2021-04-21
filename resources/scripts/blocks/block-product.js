$(function () {
  let product = $('.block-product');
  if (product.length) {
    product.each(function () {
      let current = $(this);
      let currentModal = $('.details-modal', current);
      let closeButton = $('.close-modal', currentModal);
      let openButton = $('.open-modal', current);
      let detailsButton = $('.toggle-details', current)

      let bannerWrapper = $('.banner-wrapper', currentModal)
      let modalBanner = $('.banner', bannerWrapper)
      let modalProductImage = this.querySelector('.image-wrapper').getBoundingClientRect()
      let imagePosition = modalBanner.width() - (modalProductImage.width / 8)
      console.log(imagePosition);

      if (bannerWrapper.hasClass('is-reversed')) {
        $('[data-modal-image]', currentModal).css({
          'right': `${imagePosition - 56}px`,
          'left': 'unset'
        })
      } else {
        $('[data-modal-image]', currentModal).css({
          'left': `${imagePosition - 56}px`,
          'right': 'unset'
        })
      }

      openButton.on('click', function () {
        window.scrollTo({top: current.offset().top})
        $('.details-modal').removeClass('is-visible');
        currentModal.addClass('is-visible');
      })

      closeButton.on('click', function () {
        window.scrollTo({top: current.offset().top})
        $('.details-modal').removeClass('is-visible');
      })

      detailsButton.on('click', function () {
        $('.content-mobile', current).toggleClass('is-opened')
      })
    })
  }
})

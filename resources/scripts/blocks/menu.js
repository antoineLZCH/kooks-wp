$(function () {
  let body = $('body')
  let mobileMenu = $('.mobile-menu')
  let mobileMenuModal = $('.modal-menu')
  let mobileMenuButton = $('.menu-toggle', mobileMenu)
  let modalCloseButton = $('.menu-toggle-close', mobileMenuModal)

  mobileMenuButton.on('click', function () {
    mobileMenuModal.addClass('modal-opened')
    body.addClass('overflow-hidden')
  })

  modalCloseButton.on('click', function () {
    mobileMenuModal.removeClass('modal-opened')
    body.removeClass('overflow-hidden')
  })
})

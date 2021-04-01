$(function () {
  let block = $('.block-faq');
  if (block.length > 0) {
    const headers = $('[data-question-header]', block);
    headers.on('click', function () {
      let parent = $(this).parent();
      let content = $('[data-question-content]', parent);

      $(this).toggleClass('opened');
      content.toggleClass('closed');
    })
  }
})

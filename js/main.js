var content = {pos: 0, mouse: false};
var turboscroll = {pos: 0, mouse: false};

$(document).ready(function() {

  // Get elements
  content.ref = $('#content');
  turboscroll.ref = $('#turboscroll');

  // Get cropped height
  content.crop = parseInt(content.ref.css('height'), 10);
  turboscroll.crop = parseInt(turboscroll.ref.css('height'), 10);

  // Get overflow height
  content.ref.css('height', 'auto');
  turboscroll.ref.css('height', 'auto');
  content.overflow = content.ref.height() - turboscroll.crop;
  turboscroll.overflow = turboscroll.ref.height() - content.crop;
  turboscroll.ref.css('height', content.crop+'px');
  content.ref.css('height', turboscroll.crop+'px');

  // Track mouse
  content.ref.hover(function() { content.mouse = true; }, function() { content.mouse = false; });
  turboscroll.ref.hover(function() { turboscroll.mouse = true; }, function() { turboscroll.mouse = false; });

  // Scroll content on scrolling turboScroll zone
  turboscroll.ref.scroll(function() {
    if (turboscroll.mouse == true) {
      turboscroll.pos = turboscroll.ref.scrollTop() / turboscroll.overflow;
      content.ref.scrollTop(turboscroll.pos * content.overflow);
    }
  });

  // Scroll turboScroll zone on scrolling content
  content.ref.scroll(function () {
    if (content.mouse == true) {
      content.pos = content.ref.scrollTop() / content.overflow;
      turboscroll.ref.scrollTop(content.pos * turboscroll.overflow);
    }
  });

})(jQuery);
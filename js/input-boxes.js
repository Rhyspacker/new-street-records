$(window, document, undefined).ready(function() {

  $('input, textarea, select').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

});

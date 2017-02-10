var isMobile = false;
// Check if mobile
if (/Mobi/.test(navigator.userAgent)) {
    isMobile = true
}
if ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ){
      isMobile = true;
}

$(document).ready(function() {
  // CV link
  if(isMobile) {
    $(".pdf-link").each(function() {
      $(this).attr("href", $(this).attr("href") + ".pdf");
    });
  }
  // Ripple effect
  $('.btn').on('click', function (event) {
    var $div = $('<div/>'),
        btnOffset = $(this).offset(),
    		xPos = event.pageX - btnOffset.left,
    		yPos = event.pageY - btnOffset.top;
    $div.addClass('ripple-effect');
    var $ripple = $(".ripple-effect");
    $ripple.css("height", $(this).height());
    $ripple.css("width", $(this).height());
    $div
      .css({
        top: yPos - ($ripple.height()/2),
        left: xPos - ($ripple.width()/2),
        background: $(this).data("ripple-color")
      })
      .appendTo($(this));
    window.setTimeout(function(){
      $div.remove();
    }, 1200);
  });
  // Form labels
  var onFocusInput = function(input) {
    checkFileInput(input);
    input.prev("label").addClass("focus show");
    setTimeout(function() {
      input.attr("placeholder", "");
    }, 10);
  }, onBlurInput = function(input) {
    input.prev("label").removeClass("focus");
    if(!input.val()) {
      input.prev("label").removeClass("show");
      setTimeout(function() {
        input.attr("placeholder", input.attr("data-placeholder"));
      }, 250);
    }
  }, checkFileInput = function(input) {
    if($(input).attr("type") != "file" && !$(input).attr("data-file-input")) {
      onBlurInput($(".form-group .form-control[type='file']").prev("input"));
    }
  };
  $(".form-group .form-control:not(.datepicker)").focus(function() {
    onFocusInput($(this));
  });
  $(".form-group .form-control:not(.datepicker)").blur(function() {
    onBlurInput($(this));
  });
  $(".form-group .form-control.datepicker").on("open", function() {
    onFocusInput($(this));
  });
  $(".form-group .form-control.datepicker").on("close", function() {
    onBlurInput($(this));
  });
  $(".form-group .form-control.datepicker").on("change", function() {
    onBlurInput($(this));
  });
  $(".form-group .form-control[type='file']").click(function() {
    onFocusInput($(this).prev("input"));
  });
  $(".form-group .form-control[type='file']").on("change", function() {
    $(this).prev("input").val($(this).val());
    onBlurInput($(this).prev("input"));
    console.log("changed: " + $(this).val())
  });
  $(document).click(function(e) {
    checkFileInput(e.target);
  });
  // Check if value already set
  setTimeout(function(){
    $("input, textarea").each(function() {
      console.log($(this));
      onFocusInput($(this));
      onBlurInput($(this));
    });
  }, 100);
});

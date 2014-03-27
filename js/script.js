var previousScroll = 0,
      headerOffset = 40;


var scroll = $(window).scroll(function() {
    var currentScroll = $(this).scrollTop();
    if (currentScroll > headerOffset) {
      if (currentScroll > previousScroll) {
          $('body').css("margin-top","105px");
          $('.header').addClass('fixed');
          $('#colibri').addClass('pop');
        } 
    } else {
      $('body').css("margin-top","0");
      $('.header').removeClass('fixed'); 
      $('#colibri').removeClass('pop');   
    }
    previousScroll = currentScroll;
});

$( '.navanchor' ).on('click', function(event) {
    event.preventDefault();
    var target = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(target).offset().top
    }, 2000);
});

$("form").on("submit", function(event) {
  // prevent form submission
  event.preventDefault();

  // send an email via AJAX
  $.ajax("mailer.php", {
    type: "POST",
    data: $(this).serialize()
  }).success(function(data) {

    var jsonString = JSON.parse(data);
    $(".modal").html(jsonString.message).fadeIn().delay(2000).fadeOut('slow');

  });
});

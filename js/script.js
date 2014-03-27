var previousScroll = 0,
      headerOffset = 40;

var scroll = $(window).scroll(function() {
  $('.col-lg-4').each(function(){
  var imagePos = $(this).offset().top;

  var topOfWindow = $(window).scrollTop();
    if (imagePos < topOfWindow+400) {
      $(this).addClass("fadeIn");
    }
  });
  var currentScroll = $(this).scrollTop();
  var workOffset = $("#work").offset().top;
  if (currentScroll > headerOffset) {
    if (currentScroll > previousScroll) {
        $('body').css("margin-top","105px");
        $('.header').addClass('fixed');
        $('#colibri').addClass('pop');
      } 
  }else {
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
      scrollTop: $(target).offset().top-60
  }, 2000);
});

function showborder() {     
    $(".expand1").css("background","#36A099");

}

 // use setTimeout() to execute
 setTimeout(showborder, 8000);



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

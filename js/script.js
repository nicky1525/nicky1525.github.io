var previousScroll = 0,
      headerOffset = 70;


var scroll = $(window).scroll(function() {
    var currentScroll = $(this).scrollTop();
    if (currentScroll > headerOffset) {
        if (currentScroll > previousScroll) {
          // $('.header').animate({
          //      top: '0'      //Change to Height of navbar
          // }, 1000); 
          $('.header').addClass('hidden');
          $('#colibri').addClass('pop');              //Mess with animate time
        } 
    } else {
         $('.header').removeClass('hidden');   
    }
    previousScroll = currentScroll;
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

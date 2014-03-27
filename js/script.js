var previousScroll = 0,
      headerOffset = 100;


$(window).scroll(function() {
    var currentScroll = $(this).scrollTop();
    if (currentScroll > headerOffset) {
        if (currentScroll > previousScroll) {
            // $('.header').animate({
            //      top: '0'      //Change to Height of navbar
            // }, 1000); 
            $('.header').addClass('hidden');              //Mess with animate time
        } else {
            // $('.header').animate({
            //      top: '-70px'
            // },1000);
            $('.header').removeClass('hidden');
            
        }
    } else {
         $('.header').removeClass('hidden');   
    }
    previousScroll = currentScroll;
});

scroll();

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

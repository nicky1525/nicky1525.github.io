var previousScroll = 0,
      headerOrgOffset = $('#work').height() + $('.presentation').height();


  $(window).scroll(function() {
      var currentScroll = $(this).scrollTop();
      if (currentScroll > headerOrgOffset) {
          if (currentScroll < previousScroll) {
              $('.navbar-hidden').animate({
                   top: '-70px'      //Change to Height of navbar
              }, 1000);               //Mess with animate time
          } else {
              $('.navbar-hidden').animate({
                   top: '0'
              },1000);
              $('.navbar-hidden').addClass('fixed');
          }
      } else {
           $('.navbar-hidden').removeClass('fixed');   
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

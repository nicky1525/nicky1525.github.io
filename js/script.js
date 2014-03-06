var previousScroll = 0,
      headerOrgOffset = $('#work').height() + $('.presentation').height();


  $(window).scroll(function() {
      var currentScroll = $(this).scrollTop();
      console.log(currentScroll + " and " + previousScroll + " and " + headerOrgOffset);
      if(currentScroll > headerOrgOffset) {
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


window.pop = function pop() {
  var counter = 60;

  var box = document.createElement('div');
  var label = document.createElement('span');
  label.innerText = "Thank you! I got your message and will reply to you soon!";
  box.appendChild(label);

  // Position box and label as you wish.

  function tick() {
    counter--;
    if (counter == 0) {
      window.close();
    } else {
      label.innerText = counter;
      setTimeout(tick, 1000);
    }
  }

  setTimeout(tick, 1000);
}

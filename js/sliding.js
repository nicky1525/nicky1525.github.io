var previousScroll = 0,
    headerOrgOffset = $('#work').height() + $('.presentation').height();


$(window).scroll(function() {
    var currentScroll = $(this).scrollTop();
    console.log(currentScroll + " and " + previousScroll + " and " + headerOrgOffset);
    if(currentScroll > headerOrgOffset) {
        if (currentScroll < previousScroll) {
            $('.navbar-hidden').animate({
                 top: '-120px'      //Change to Height of navbar
            }, 1000);               //Mess with animate time
        } else {
            $('.navbar-hidden').animate({
                 top: '0px'
            },1000);
            $('.navbar-hidden').addClass('fixed');
        }
    } else {
         $('.navbar-hidden').removeClass('fixed');   
    }
    previousScroll = currentScroll;
});

///////////////////
// Master JS File
// by Andy 
///////////////////


$(window).load(function() {
  $(".pre-loader").fadeOut("slow");
      $('.section-0 .dogstuff .dogs').each(function() {
                        $(this).show();
                });
        $('.section-0 .text-contain').show();

});

$(document).ready(function() {

    //smooth scroll to top
    $("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

    $('.sub-menu').addClass('animated fadeInLeft');

    var he = $( window ).height() - 35;
    $('.bg').css('min-height',he);

$('.overlay-close').click(function(){ 
        $('.master-overlay').addClass('end');
        el = $('.master-overlay.end');
        el.addClass('fadeOut');
        el.one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
        function (e) {
            if ( $('.master-overlay').hasClass('end') ){
            el.removeClass('active');    
            }
            el.removeClass('fadeOut');
            el.removeClass('end');
        });    
});

$('.staff-member').click(function(){
    var staff = $(this).html();
    $('.staff-member.lightbox').html(staff);
    $('.master-overlay').addClass('active');

});

$('.mobile-open').click(function(){
    $('.mobile-nav').css('left','0');
    // $('.content-contain').css('left','320px');
});
$('.mobile-close').click(function(){
    $('.mobile-nav').css('left','-420px');
    // $('.content-contain').css('left','0');
});



if (window.DeviceMotionEvent) {
    // alert('devicemotion supported');
    window.addEventListener('devicemotion', function(ev) {
        var acc = ev.accelerationIncludingGravity;
        dmHdlr(acc.x, acc.y, acc.z);
    }, false);
}
else {
    alert("devicemotion not supported on your device or browser.");
}

function dmHdlr(aX, aY, aZ) {

     // alert(aX);
    // s$('aX').innerHTML = aX ? .toFixed(3) : '?';
    // s$('aY').innerHTML = aY ? aY.toFixed(3) : '?';
    // s$('aZ').innerHTML = aZ ? aZ.toFixed(3) : '?';


    $('.dogs_one').css({
        'transform' : 'translateX('+ aY * - +'px) translateY('+ aX * 3 +'px)'
    });
    $('.dogs_two').css({
        'transform' : 'translateX('+ aY * -5 +'px) translateY('+ aX * 5 +'px)'
    });
    $('.dogs_three').css({
        'transform' : 'translateX('+ aY * -6 +'px) translateY('+ aX * 6 +'px)'
    });
    $('.dogs_obowl').css({
        'transform' : 'translateX('+ aY * -4 +'px) translateY('+ aX * 4 +'px)'
    });
    $('.dogs_bowl').css({
        'transform' : 'translateX('+ aY * -2 +'px) translateY('+ aX * 2 +'px)'
    });
}

$('html').mousemove(function(e){

   var offset = $(this).offset();
   var relX = e.clientY - offset.left;
   var relY = e.clientX - offset.top;

    $('.dogs_one').css({
        'transform' : 'translateX('+ relY / 50 +'px)  translateY('+ relX / 50 +'px)'
    });
     $('.dogs_two').css({
        'transform' : 'translateX('+ relY / 60 +'px)  translateY('+ relX / 80 +'px)'
    });
      $('.dogs_three').css({
        'transform' : 'translateX('+ relY / 70 +'px)  translateY('+ relX / 70 +'px)'
    });
    $('.dogs_obowl').css({
        'transform' : 'translateX('+ relY / 80 +'px)  translateY('+ relX / 80 +'px)'
    });
    $('.dogs_bowl').css({
        'transform' : 'translateX('+ relY / 40 +'px)  translateY('+ relX / 40 +'px)'   
    });

});
 // $(".home .bg").interactive_bg({
 //   strength: 25,              // Movement Strength when the cursor is moved. The higher, the faster it will reacts to your cursor. The default value is 25.
 //   scale: 1.01,               // The scale in which the background will be zoomed when hovering. Change this to 1 to stop scaling. The default value is 1.05.
 //   animationSpeed: "500ms",   // The time it takes for the scale to animate. This accepts CSS3 time function such as "100ms", "2.5s", etc. The default value is "100ms".
 //   contain: true,             // This option will prevent the scaled object/background from spilling out of its container. Keep this true for interactive background. Set it to false if you want to make an interactive object instead of a background. The default value is true.
 //   wrapContent: false         // This option let you choose whether you want everything inside to reacts to your cursor, or just the background. Toggle it to true to have every elements inside reacts the same way. The default value is false
 // });


var easter_egg = new Konami();
easter_egg.code = function() { 
        // $('#fullpage').addClass('animated bounceOut');
        $('body').prepend('<iframe class="fadeInDown" style="width:100%; height:100%; position:fixed;" src="http://www.chiptune.com/starfield/starfield.html" frameborder="0" allowfullscreen></iframe><iframe class="fadeInDown" style="width:0px; height:0px;" src="https://www.youtube.com/embed/MuMsb4nzmis?autoplay=1" frameborder="0" allowfullscreen></iframe>'); 
}
easter_egg.load();

// $('.grams').hover(function() {
//     $(this).find('.desc-contain').addClass('flipUp');

// }, function() {
      
// $(this).find('.desc-contain').removeClass('flipUp');
// $(this).find('.desc-contain').addClass('flipDown');
// });


$('.grams .desc').each(function() {
    
var str = $(this).html(); 
var edt = str.replace(/(^|\s)(#[a-z\d-]+)/ig, "$1<span class='hash_tag'>$2</span>");
$(this).html(edt);

                });

 $('#fullpage').fullpage({
        // paddingTop: '4%',
        resize: true,
        navigation: true,
        responsiveHeight:500, 

        afterLoad: function(anchorLink, index){
            var loadedSection = $(this);

            //using index
            if(index == 2){
                // alert("Section 2 ended loading");

                $('.section-1 .dogstuff .dogs').each(function() {
                        $(this).fadeIn();
                });
                $('.section-1 .text-contain').fadeIn();
            }
            if(index == 3){
                // alert("Section 2 ended loading");
                $('.section-2 .dogstuff .dogs').each(function() {
                        $(this).fadeIn();
                });
                $('.section-2 .text-contain').fadeIn();
            }
            if(index == 4){
                // alert("Section 2 ended loading");
                $('.section-3 .dogstuff .dogs').each(function() {
                        $(this).fadeIn();
                });
                $('.section-3 .text-contain').fadeIn();
            }
            if(index == 5){
                // alert("Section 2 ended loading");
                $('.section-4').each(function() {
                        $(this).fadeIn();
                });
                $('.section-4 .text-contain').fadeIn();
            }

        }
    });



function resize() {
       $(".bg > .ibg-bg").css({
        width: $(window).outerWidth(),
        height: $(window).outerHeight()
      })
}


resize();


//on resize
 $(window).resize(function() {
      resize();
    })

});


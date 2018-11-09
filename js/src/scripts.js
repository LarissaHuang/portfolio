

$( document ).ready(function() {
    // console.log( "ready!" );


if( $(window).width() > 768){

	const element = $('.js-tilt').tilt({
        maxTilt: 20,
        perspective: 300,
        easing: 'cubic-bezier(.03,.98,.52,.99)',
        scale: '1',
        speed: '400',
        transition: true,
        disableAxis: null,
        axis: null,
        reset: true,
        glare: false,
        maxGlare: 1
    });
}

    $('#next').click(function(){
        $('#watch .watch-layer.active').next().addClass('active');
    });
    
    $('#prev').click(function(){
        if ( $('#watch .watch-layer.active').last().hasClass('start') ){
            // do nothing
        }else{
            $('#watch .watch-layer.active').last().removeClass('active');
        }
    });

    AOS.init();

    // You can also pass an optional settings object
    // below listed default settings
    AOS.init({
      // Global settings
      disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
      startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
      initClassName: 'aos-init', // class applied after initialization
      animatedClassName: 'aos-animate', // class applied on animation
      useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    
      // Settings that can be overriden on per-element basis, by `data-aos-*` attributes:
      offset: 120, // offset (in px) from the original trigger point
      delay: 0, // values from 0 to 3000, with step 50ms
      duration: 400, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: false, // whether animation should happen only once - while scrolling down
      mirror: false, // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
    });
}); // Document ready

// function watchDescription() {
//     document.getElementById("description").innerHTML= "The MikrotourbillonS backing is made of 100% aluminum and velvet";
//     // console.log("hello");
// }

//when you click next, it's going to add the index # of the next image
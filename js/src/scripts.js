

$( document ).ready(function() {
    // console.log( "ready!" );



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


}); 
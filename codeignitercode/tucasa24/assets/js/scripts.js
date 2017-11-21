$(document).ready(function(ev){
    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
      $('#custom_carousel .controls li.active').removeClass('active');
      $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
    })
//    $('.btn-radio').hover(function(){
//        $(this).find('.blimg').hide();
//        $(this).find('.whimg').show();
//    }),function(){
//        $(this).find('.blimg').show();
//        $(this).find('.whimg').hide();
//    }
});
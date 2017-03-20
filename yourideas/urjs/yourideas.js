$(function(){
    $bh = $('body').height();
    $sh = $('.slider').height();
    $sliderbarh = $sh/$bh*100;
    $('.slidebar').height($sliderbarh+'%');
    $('.slidebar').draggable({
        containment: 'parent',
        axis: 'y',
        drag: function(){
            $pos = $('.slidebar').position().top;
            $scrollpercent = $pos/$sh*100;
            $scrollpx = $scrollpercent/100*$bh;
            $('body').scrollTop($scrollpx);
        }
    });
});
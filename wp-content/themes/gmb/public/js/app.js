/**
 * Created by goshan on 28.04.16.
 */
jQuery(document).ready(function() {
    $('#collapse1').append($('#serviceContent1').html());
    $('#collapse2').append($('#serviceContent2').html());
    $('#collapse3').append($('#serviceContent3').html());
    if($(window).width()<='768'){
        $('#serviceContent1, #serviceContent2,#serviceContent3').hide();
    }
    else{
        $('#collapse1, #collapse2,#collapse3').collapse('hide');
        $('#serviceContent2, #serviceContent3').hide();
        $('#serviceContent1').addClass('animated bounceInUp');
        $('#serviceContent1').show();
    }
});
$(window).resize(function(){
    if($(window).width()<='768'){
        $('#serviceContent1, #serviceContent2,#serviceContent3').hide();
    }
    else{
        $('#collapseExample1, #collapseExample2,#collapseExample3').collapse('hide');
        $('#serviceContent2, #serviceContent3').hide();
        $('#serviceContent1').addClass('animated bounceInUp');
        $('#serviceContent1').show();
    }
});
$('#button1click').click(function () {
    if($(window).width() > '768'){
        $('#serviceContent2, #serviceContent3').hide();
        $('#serviceContent1').addClass('animated bounceInUp');
        $('#serviceContent1').show();
    }
    else{
        $('#collapseExample1').collapse('toggle');
    }
});
$('#button2click').click(function () {
    if($(window).width() > '768'){
        $('#serviceContent1, #serviceContent3').hide();
        $('#serviceContent2').addClass('animated bounceInUp');
        $('#serviceContent2').show();
    }
    else{
        $('#collapseExample2').collapse('toggle');
    }
});
$('#button3click').click(function () {
    if($(window).width() > '768'){
        $('#serviceContent1, #serviceContent2').hide();
        $('#serviceContent3').addClass('animated bounceInUp');
        $('#serviceContent3').show();
    }
    else{
        $('#collapseExample3').collapse('toggle');
    }
});
$(document).ready(function() {
    $('.showbtn').click( function(){
    	var subject = $(this).attr('data-subject') + "";
    	$('.fachbox').css('display', 'none');
    	$('.subjects').html('<button class="btn_back1"></button>' + subject);
    	$('.btn_back1').css('display','block');
    	$('.btn_back1').css('float','left');
    	$('.btn_back1').css('bottom','0px');
    	$('.fachansicht').css('display','block');
    });
   
});
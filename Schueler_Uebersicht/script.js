$(document).ready(function() {
    $('.showbtn').click(function(){
    	var subject = $(this).attr('data-subject') + "";
    	var teacher = $(this).attr('data-teacher') + "";
        $('.subjects').css('margin-left','10%');
    	$('.fachbox').css('display', 'none');
    	$('.subjects').html('<button class="btn_back1"></button>' + subject + "<br /> <span class='subjectteacher'></span>");
    	$('.btn_back1').css('display','block');
    	$('.btn_back1').css('float','left');
    	$('.btn_back1').css('bottom','0px');
    	$('.fachansicht').css('display','block');
    	$('.subjectteacher').text(teacher);
    	$('.subjectteacher').css('display','block');
        
        $('.btn_back1').click(function(){
            $('.subjects').html('<div class="subjects"> MEINE FÄCHER <div class="sort_btns"> <button class="sort1">A</button><button class="sort2">B</button></div></div');
            $('.fachansicht').css('display','none');
            $('.fachbox').css('display', 'block');
            $('.subjectteacher').css('display','none');
            $('.subjects').css('margin-left','5%');
        });
    });
    
});
$(document).ready(function() {
    $('.showbtn').click(function(){
    	var subject = $(this).attr('data-subject') + "";
    	var teacher = $(this).attr('data-teacher') + "";
        $('.subjects').css('margin-left','10%');
    	$('.boxes').css('display', 'none');
    	$('.subjects').html('<button class="btn_back1"></button>' + subject + "<br /> <span class='subjectteacher'></span>");
    	$('.btn_back1').css('display','block');
    	$('.btn_back1').css('float','left');
    	$('.btn_back1').css('bottom','0px');
    	$('.fachansicht').css('display','block');
    	$('.subjectteacher').text(teacher);
    	$('.subjectteacher').css('display','block');
        

        $('.fachbadges').click(function(){
            var name = $(this).attr('data-badgename') + "";
            var datum = $(this).attr('data-date') + "";
            $('.subjects').html('<button class="btn_back1"></button>' + subject);
            $('.btn_back1').css('display','block');
            $('.btn_back1').css('float','left');
            $('.btn_back1').css('bottom','0px');
            $('.btn_back1').css('top','0px');
            $('.fachansicht').css('display','none');
            $('.subjectteacher').css('display','none');
            $('.top_fachbadge').css('display','block');
            $('.badgetitle').text(name);
            $('.badgeteacher').text(subject);
            $('.ausgestellt_am').text('Ausgestellt am: ' + datum);
            $('.ausgestellt_von').text('Ausgestellt von: ' + teacher);
            $('.desc').css('display','block');

            $('.btn_back1').click(function(){
                $('.subjects').css('margin-left','10%');
                $('.boxes').css('display', 'none');
                $('.subjects').html('<button class="btn_back1"></button>' + subject + "<br /> <span class='subjectteacher'></span>");
                $('.btn_back1').css('display','block');
                $('.btn_back1').css('float','left');
                $('.btn_back1').css('bottom','0px');
                $('.fachansicht').css('display','block');
                $('.subjectteacher').text(teacher);
                $('.subjectteacher').css('display','block');
                $('.top_fachbadge').css('display','none');
                $('.desc').css('display','none');

                $('.btn_back1').click(function(){
                    $('.subjects').html('<div class="subjects"> MEINE FÄCHER <div class="sort_btns"> <button class="sort1">Aa</button><button class="sort2 glyphicon glyphicon-calendar"></button></div></div');
                    $('.fachansicht').css('display','none');
                    $('.boxes').css('display', 'block');
                    $('.subjectteacher').css('display','none');
                    $('.subjects').css('margin-left','5%');
                    $('.top_fachbadge').css('display','none');
        });

            });
        });

        $('.btn_back1').click(function(){
            $('.subjects').html('<div class="subjects"> MEINE FÄCHER <div class="sort_btns"> <button class="sort1">Aa</button><button class="sort2 glyphicon glyphicon-calendar"></button></div></div');
            $('.fachansicht').css('display','none');
            $('.boxes').css('display', 'block');
            $('.subjectteacher').css('display','none');
            $('.subjects').css('margin-left','5%');
             $('.top_fachbadge').css('display','none');
        });



    });

        $('#btn_collapse').click(function(e){
            /*
            e.preventDefault();
            $('.nav_collapse').toggleClass("toggled");
            */
        });
    
});
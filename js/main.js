$(document).ready(function(){
    $(".box").css('opacity','0');
    $(".box").css('top','-50px');
    $(".box__img").css('top', '20%');

    $(".why__content__text").css('opacity', 0);
    $(".why__content__text").css('top', '-50px');
    $(".conclusion").css('opacity', 0);
    $(".conclusion").css('top', '-50px');

    var windowHeight = window.innerHeight; // taille de l'ecran
    var durationInterval = 400;
    var iconDurationInterval = 200;
    
    var firstBoxAnimated = $('.box:nth-child(1)');
    var firstBoxAnimatedImage = $('#box__img--1');
    var secondBoxAnimated = $('.box:nth-child(2)');
    var secondBoxAnimatedImage = $('#box__img--2');
    var thirdBoxAnimated = $('.box:nth-child(3)');
    var thirdBoxAnimatedImage = $('#box__img--3');
    var fourthBoxAnimated = $('.box:nth-child(4)');
    var fourthBoxAnimatedImage = $('#box__img--4');

    var why_left = $('.why__content__text--left');
    var why_right = $('.why__content__text--right')
    var conclusion = $('.conclusion');
    
    // h -> height
    // sp -> scroll position  
    var h_animatedBox = $(firstBoxAnimated).height();
    var sp_animatedBox = $(firstBoxAnimated).offset().top + h_animatedBox + 300;

    var h_why_left = $(why_left).height();
    var sp_why_left = $(why_left).offset().top + h_why_left + 300;
    var h_why_right = $(why_right).height();
    var sp_why_right = $(why_right).offset().top + h_why_right + 300;
    var h_conclusion = $(conclusion).height();
    var sp_conclusion = $(conclusion).offset().top + h_conclusion + 300;


      
    $(window).scroll(function(){
        var scrollCurrent = $(this).scrollTop();// taille du scroll - top de la page et top de l'ÃƒÂ©cran

        //apparition du texte au scroll
        if (scrollCurrent > sp_why_left - windowHeight - h_why_left) {
            anim(why_left);
        }
        if (scrollCurrent > sp_why_right - windowHeight - h_why_right) {
            anim(why_right);
        }
        if (scrollCurrent > sp_conclusion - windowHeight - h_conclusion) {
            anim(conclusion);
        }

        //animation des boxes au scroll
        if (scrollCurrent > sp_animatedBox - windowHeight - h_animatedBox) {
            anim(firstBoxAnimated);
            setTimeout(() => {
                animIcon(firstBoxAnimatedImage);
            }, iconDurationInterval);
            setTimeout(() => {
                anim(secondBoxAnimated);
                setTimeout(() => {
                    animIcon(secondBoxAnimatedImage);
                }, iconDurationInterval);
                setTimeout(() => {
                    anim(thirdBoxAnimated);
                    setTimeout(() => {
                        animIcon(thirdBoxAnimatedImage);
                    }, iconDurationInterval);
                    setTimeout(() => {
                        anim(fourthBoxAnimated);
                        setTimeout(() => {
                            animIcon(fourthBoxAnimatedImage);
                        }, iconDurationInterval);
                    }, durationInterval);
                }, durationInterval);
            }, durationInterval);
        }
    });
  
    function anim(el){
        $(el).animate({
            top : '0px',
            opacity : '1',
        }, 1000);
    }

    function animIcon(el) {
        $(el).animate({
            top: '30%',
        }, 1000);
    }
  });
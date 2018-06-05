    $(document).ready(function(){
    /* --- INITIALISATION --- */
    // --- modification css si js est activé
    $(".box").css('opacity','0');
    $(".box").css('top','-50px');
    $(".box__img").css('top', '20%');

    $(".why__content__text").css('opacity', 0);
    $(".why__content__text").css('top', '-50px');
    $(".conclusion").css('opacity', 0);
    $(".conclusion").css('top', '-50px');

    // --- variables
    const windowHeight = window.innerHeight; // taille de l'ecran
    const durationInterval = 400;
    const iconDurationInterval = 200;
    
    const firstBoxAnimated = $('.box:nth-child(1)');
    const firstBoxAnimatedImage = $('#box__img--1');
    const secondBoxAnimated = $('.box:nth-child(2)');
    const secondBoxAnimatedImage = $('#box__img--2');
    const thirdBoxAnimated = $('.box:nth-child(3)');
    const thirdBoxAnimatedImage = $('#box__img--3');
    const fourthBoxAnimated = $('.box:nth-child(4)');
    const fourthBoxAnimatedImage = $('#box__img--4');

    const why_left = $('.why__content__text--left');
    const why_right = $('.why__content__text--right')
    const conclusion = $('.conclusion');
    
    // h -> height
    // sp -> scroll position  
    const h_animatedBox = $(firstBoxAnimated).height();
    const sp_animatedBox = $(firstBoxAnimated).offset().top + h_animatedBox + 300;
    
    const h_why_left = $(why_left).height();
    const sp_why_left = $(why_left).offset().top + h_why_left + 500;
    const h_why_right = $(why_right).height();
    const sp_why_right = $(why_right).offset().top + h_why_right + 500;
    const h_conclusion = $(conclusion).height();
    const sp_conclusion = $(conclusion).offset().top + h_conclusion - 800;
    
    var curentSlideIndex = 1;
    const nbrOfSlides = $('.slide').length;
    const slideDuration = 20000;

    /* FONCTIONS */
    // --- Evenement scroll
    // console.log(sp_conclusion - windowHeight - h_conclusion);
    $(window).scroll(function(){
        var scrollCurrent = $(this).scrollTop();// taille du scroll - top de la page et top de l'ÃƒÂ©cran
        // console.log(scrollCurrent);

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

    // --- Slider
    var timeOutNextSlide;
    var timeOutShowSlide;
    var timeOutAutoSlide;
    var timeOutTick;
    // --- création des dots
    for (var i = 1; i <= nbrOfSlides; i++) {
        if (i == 1) {
            $('.slider__dot__container').append('<div class="dot active" data-value="1"></div>');
        } else {
            $('.slider__dot__container').append('<div class="dot" data-value="'+i+'"></div>');
        }
    }

    showSlides(curentSlideIndex);
    timeOutAutoSlide = setTimeout(autoNextSlide, slideDuration - 950);

    $('.slide__img').click(() => {
        clearTimeout(timeOutAutoSlide);
        clearTimeout(timeOutNextSlide);
        clearTimeout(timeOutTick);
        timeOutAutoSlide = setTimeout(autoNextSlide, slideDuration);
        setNextSlide();
    });
    $('.dot').click(function(){
        const dotValue = $(this).attr('data-value');
        curentSlideIndex = dotValue;
        clearTimeout(timeOutAutoSlide);
        clearTimeout(timeOutNextSlide);
        clearTimeout(timeOutTick);
        timeOutAutoSlide = setTimeout(autoNextSlide, slideDuration - 950);
        setSlideAt(dotValue);
    })

    function setPreviousSlide() {
        showSlides(curentSlideIndex -= 1);
    }

    function setNextSlide() {
        curentSlideIndex = parseInt($('.slider__index').html().split('/')[0]);
        timeOutNextSlide = setTimeout(
            () => {
                animOut($('#slide'+curentSlideIndex+' .slide__img'), 'left', 1000);
                setTimeout(
                    () => {
                        animOut($('#slide'+curentSlideIndex+' .slide__content'), 'right', 1000),
                        setTimeout(
                            () => {
                                animOut($('#slide'+curentSlideIndex+' .slide__content h2, #slide'+curentSlideIndex+' .slide__content p'), 'left', 1000),
                                setTimeout(
                                    () => {
                                        showSlides(curentSlideIndex += 1);
                                    },
                                    350,
                                )
                            },
                            300,
                        )
                    },
                    300,
                )
            },
            0
        )
    }

    function setSlideAt(n) {
        showSlides(curentSlideIndex = n);
    }

    function autoNextSlide() {
        setNextSlide();
        timeOutTick = setTimeout(autoNextSlide, slideDuration);
    }

    function showSlides(index) {
        const slides = $('.slide');
        const dots = $('.dot');
        const sliderIndex = $('.slider__index');
        const progressBar = $('.progress__bar');
        $('.slide__img, .slide__content h2, .slide__content p').css('left', '100px');
        $('.slide__img, .slide__content h2, .slide__content p').css('opacity', '0');
        $('.slide__content').css('right', '-100px');
        $('.slide__content').css('opacity', '0');
        
        if (index > nbrOfSlides) {
            curentSlideIndex = 1;
        }
        
        if (index < 1) {
            curentSlideIndex = nbrOfSlides;
        }
        
        for (var i = 0; i < nbrOfSlides; i++) {
            const slide = slides[i];
            const dot = dots[i];
            slide.style.display = 'none';
            dot.className = dot.className.replace(' active', '');
        }
        
        slides[curentSlideIndex - 1].style.display = 'block';
        dots[curentSlideIndex - 1].className += ' active';
        sliderIndex.html(curentSlideIndex+"/"+nbrOfSlides);
        
        timeOutShowSlide = setTimeout(
            () => {
                anim($('#slide'+curentSlideIndex+' .slide__img'), 'left', 1000);
                setTimeout(
                    () => {
                        anim($('#slide'+curentSlideIndex+' .slide__content'), 'right', 1000),
                        setTimeout(
                            anim($('#slide'+curentSlideIndex+' .slide__content h2, #slide'+curentSlideIndex+' .slide__content p'), 'left', 1000),
                            300,
                        )
                    },
                    300,
                )
            },
            0
        )

        progressBar.css('width', '0');
        progressBar.stop().animate({
            width: "100%",
        }, slideDuration, "linear");
    }
    
    // --- fonctions réutilisables
    function anim(el, animation, duration){
        switch(animation) {
            default:
                $(el).animate({
                    top : '0px',
                    opacity : '1',
                }, duration);
                break;

            case 'left':
                $(el).animate({
                    left : '0px',
                    opacity : '1',
                }, duration);
                break;

            case 'right':
                $(el).animate({
                    right : '0px',
                    opacity : '1',
                }, duration);
                break;

            case 'bottom':
                $(el).animate({
                    bottom : '0px',
                    opacity : '1',
                }, duration);
                break;
        }
    }
    function animOut(el, animation, duration){
        switch(animation) {
            default:
                $(el).animate({
                    top : '100px',
                    opacity : '0',
                }, duration);
                break;

            case 'left':
                $(el).animate({
                    left : '-100px',
                    opacity : '0',
                }, duration);
                break;

            case 'right':
                $(el).animate({
                    right : '100px',
                    opacity : '0',
                }, duration);
                break;

            case 'bottom':
                $(el).animate({
                    bottom : '100px',
                    opacity : '0',
                }, duration);
                break;
        }
    }

    function animIcon(el) {
        $(el).animate({
            top: '30%',
        }, 1000);
    }
});
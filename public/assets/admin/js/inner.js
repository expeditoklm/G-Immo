"use strict";

jQuery(document).on('ready', function ($) {

    /*---------------------------------
     //------ ANIMATE HEADER ------//
     ----------------------------------*/
    $(window).on('scroll', function () {
        var sticky = $(".sticky-header");
        var scroll = $(window).scrollTop();
        if (scroll < 265) {
            sticky.removeClass("sticky");
        } else {
            sticky.addClass("sticky");
        }
    });

    /*----------------------------------
    //------ SMOOTHSCROLL ------//
    -----------------------------------*/
    smoothScroll.init({
        speed: 1000, // Integer. How fast to complete the scroll in milliseconds
        offset: 85, // Integer. How far to offset the scrolling anchor location in pixels

    });

    /*----------------------------------
    //------ JQUERY SCROOLTOP ------//
    -----------------------------------*/
    $(function () {
        var go = $(".go-up");
        $(window).on('scroll', function () {
            var scrolltop = $(this).scrollTop();
            if (scrolltop >= 50) {
                go.fadeIn();
            } else {
                go.fadeOut();
            }
        });

    });

    /*----------------------------------
    //------ ADVANCED SEARCH ------//
    -----------------------------------*/
    $('.more-search-options-trigger').on('click', function (e) {
        e.preventDefault();
        $('.more-search-options, .more-search-options-trigger').toggleClass('active');
        $('.more-search-options.relative').animate({
            height: 'toggle',
            opacity: 'toggle'
        }, 300);
    });

    /*----------------------------------------------------*/
    /*  Range Sliders
    /*----------------------------------------------------*/

    // Area Range
    $(document).ready(function() {
        $("#area-range").each(function() {
            var dataMin = parseInt($(this).attr('data-min'));
            var dataMax = parseInt($(this).attr('data-max'));
            var dataUnit = $(this).attr('data-unit');
    
            // Ajouter les champs d'entrée pour les valeurs min et max visibles et cachées
            $(this).append("<input type='text' class='first-slider-value' disabled/>" +
                           "<input type='text' class='second-slider-value' disabled/>" +
                           "<input type='hidden' class='superficie-min' name='superficie_min'/>" +
                           "<input type='hidden' class='superficie-max' name='superficie_max'/>");
    
            $(this).slider({
                range: true,
                min: dataMin,
                max: dataMax,
                step: 10,
                values: [dataMin, dataMax],
    
                slide: function(event, ui) {
                    // Mettre à jour les valeurs visibles
                    $(this).children(".first-slider-value").val(ui.values[0] + " " + dataUnit);
                    $(this).children(".second-slider-value").val(ui.values[1] + " " + dataUnit);
    
                    // Mettre à jour les valeurs cachées
                    $(this).children(".superficie-min").val(ui.values[0]);
                    $(this).children(".superficie-max").val(ui.values[1]);
                }
            });
    
            // Initialiser les valeurs des champs visibles et cachés
            $(this).children(".first-slider-value").val($(this).slider("values", 0) + " " + dataUnit);
            $(this).children(".second-slider-value").val($(this).slider("values", 1) + " " + dataUnit);
            $(this).children(".superficie-min").val($(this).slider("values", 0));
            $(this).children(".superficie-max").val($(this).slider("values", 1));
        });
    });
    


    // Price Range
    $("#price-range").each(function () {

        var dataMin = $(this).attr('data-min');
        var dataMax = $(this).attr('data-max');
        var dataUnit = $(this).attr('data-unit');

        $(this).append("<input type='text' class='first-slider-value' disabled/>"+
            "<input type='text' class='second-slider-value' disabled/>"+
            "<input type='hidden' class='prix-min' name='prix_min'/>" +
            "<input type='hidden' class='prix-max' name='prix_max'/>");


        $(this).slider({

            range: true,
            min: dataMin,
            max: dataMax,
            values: [dataMin, dataMax],

            slide: function (event, ui) {
                event = event;
                $(this).children(".first-slider-value").val(dataUnit + ui.values[0].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                $(this).children(".second-slider-value").val(dataUnit + ui.values[1].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
            // Mettre à jour les valeurs cachées
                $(this).children(".prix-min").val(ui.values[0]);
                $(this).children(".prix-max").val(ui.values[1]);
                
            
            }
        });
        $(this).children(".first-slider-value").val(dataUnit + $(this).slider("values", 0).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        $(this).children(".second-slider-value").val(dataUnit + $(this).slider("values", 1).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        $(this).children(".prix-min").val($(this).slider("values", 0));
        $(this).children(".prix-max").val($(this).slider("values", 1));

    });
    
    /*----------------------------------
    //------ MODAL ------//
    -----------------------------------*/
    var modal = {};
    modal.hide = function () {
        $('.modal').fadeOut();
        $("html, body").removeClass("hid-body");
    };
    $('.modal-open').on("click", function (e) {
        e.preventDefault();
        $('.modal').fadeIn();
        $("html, body").addClass("hid-body");
    });
    $('.close-reg').on("click", function () {
        modal.hide();
    });
    
    /*----------------------------------
    //------ TABS ------//
    -----------------------------------*/
    $(".tabs-menu a").on("click", function (a) {
        a.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var b = $(this).attr("href");
        $(".tab-contents").not(b).css("display", "none");
        $(b).fadeIn();
    });

}(jQuery));

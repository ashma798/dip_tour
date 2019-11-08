/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    $('.children_minus').click(function (e) {
        e.preventDefault();
        var value = $('.children_input').val();
        if (value > 0) {
            value--;
        }
        $('.children_input').val(value);
    });

    $('.children_plus').click(function (e) {
        e.preventDefault();
        var value = $('.children_input').val();
        value++;
        $('.children_input').val(value);
    });

    $('.adult_minus').click(function (e) {
        e.preventDefault();
        var value = $('.adult_input').val();
        if (value > 1) {
            value--;
        }
        $('.adult_input').val(value);
    });

    $('.adult_plus').click(function (e) {
        e.preventDefault();
        var value = $('.adult_input').val();
        value++;
        $('.adult_input').val(value);
    });

    $('.infant_minus').click(function (e) {
        e.preventDefault();
        var value = $('.infant_input').val();
        if (value > 0) {
            value--;
        }
        $('.infant_input').val(value);
    });

    $('.infant_plus').click(function (e) {
        e.preventDefault();
        var value = $('.infant_input').val();
        value++;
        $('.infant_input').val(value);
    });

});


$(document).ready(function () {

    (function ($) {
        $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');

        $('.tab ul.tabs li a').click(function (g) {
            var tab = $(this).closest('.tab'),
                    index = $(this).closest('li').index();

            tab.find('ul.tabs > li').removeClass('current');
            $(this).closest('li').addClass('current');

            tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
            tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();

            g.preventDefault();
        });
    })(jQuery);

});

$(function () {
    $('.datepicker').datepicker();
});

$(document).ready(function() {
  $("#datepicker").datepicker();
  $('.fa-calendar').click(function() {
    $("#datepicker").focus();
  });
});
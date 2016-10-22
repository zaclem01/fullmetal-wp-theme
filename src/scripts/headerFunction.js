import $ from 'jquery';

export default function() {
    const $sidemenu = $('.sidemenuWrapper');

    // Open sidemenu menu when clicked
    $('.js-menuBtn').click(function(event) {
        event.stopPropagation(); // Stop bubbling to upper DOM elements
        $sidemenu.addClass('js-visible');
    });

    // Close sidemenu menu when anywhere but menu is clicked
    $('body > *').not('.sidemenuWrapper, .topbar_menuBtn').click(function(event) {
        event.stopPropagation(); // Stop bubbling to upper DOM elements
        if ($sidemenu.hasClass('js-visible')) {
            $sidemenu.removeClass('js-visible');
        }
        // Close the sub menus when sidemenu is closed
        if ($('.js-subMenu').children('.nav_item_subMenu').hasClass('js-visible')) {
            $('.js-subMenu').click();
        }
    });

    // Open submenus
    $('.js-subMenu').click(function() {
        const $subMenu = $(this).children('.nav_item_subMenu');
        $(this).children('a').children('i').toggleClass('fa-flip-vertical');
        $subMenu.toggleClass('js-hidden');
        $subMenu.toggleClass('js-visible');
    });

    // Age gate for Boudoir
    $('.js-ageGate').click(function(event) {
        let legalAge = confirm('By click this, you are agreeing that you are age 18 or older. Press OK to proceed to restricted content.');
        if (!legalAge) {
            event.preventDefault();
        }
    });
}
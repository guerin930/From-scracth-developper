let tog = document.getElementsByClassName('tog'),
    footer_body = document.getElementsByClassName('footer-container__body');

jQuery(document).ready(function () {
    jQuery('.menu-link').click(function () {
        jQuery('.mobile-menu').toggle("slow", function () { });
    });
    jQuery(tog[0]).click(function () {
        jQuery(footer_body[0]).toggle("slow", function () { });
    });
    jQuery(tog[1]).click(function () {
        jQuery(footer_body[1]).toggle("slow", function () { });
    });
    jQuery(tog[2]).click(function () {
        jQuery(footer_body[2]).toggle("slow", function () { });
    });
    jQuery(tog[3]).click(function () {
        jQuery(footer_body[3]).toggle("slow", function () { });
    })
});


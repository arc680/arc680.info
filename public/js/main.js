$(function() {
    $(".accordion .pure-menu .pure-menu-item").click(function() {
        var num = $(".accordion .pure-menu .pure-menu-item").index(this);
        $(".accordion-contents .content-wrap").addClass('hidden');
        $(".accordion-contents .content-wrap").eq(num).removeClass('hidden');
        $(".accordion .pure-menu .pure-menu-item").removeClass('pure-menu-selected');
        $(this).addClass('pure-menu-selected');
    });
});
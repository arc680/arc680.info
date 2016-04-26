$(function() {
    $("#profile-menu .menu-tab").click(function() {
        var num = $("#profile-menu .menu-tab").index(this);
        $(".accordion-contents .content-wrap").addClass('hidden');
        $(".accordion-contents .content-wrap").eq(num).removeClass('hidden');
        $("#profile-menu .menu-tab").removeClass('select');
        $(this).addClass('select')
    });
});
(function($) {
    // 読み込んだら開始
    $(function() {
        // アコーディオン
        $(".accordion").each(function() {
            var accordion = $(this);
            $(this).find(".switch").click(function() {
            //$("> .switch", this).click(function() { // 上段の別の書き方
                var targetContentWrap = $(this).next(".content-wrap");
                if (targetContentWrap.css("display") === "none") {
                    accordion.find(".content-wrap").slideUp();
                    accordion.find(".switch.open").removeClass("open");
                }
                targetContentWrap.slideToggle();
                $(this).toggleClass("open");
            });
        });
    
    });
})(jQuery);

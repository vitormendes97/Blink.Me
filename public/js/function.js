$(window).on('resize', function() {
        
        if ($(window).width() < 1360) {
            $(".config-border").css("padding-left","4.5%");
        }
        else {
             $(".config-border").css("padding-left","2%");
        }
});
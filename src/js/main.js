(function($){    
    /**
     * When DOM is ready
     */
    $(function() {
        $('.ham').click(function() {
            $('.navbar-bottom').toggleClass('active');
            var btn_width = btn.width();
            btn.width(0);
            $('.navbar-bottom').animate({width: btn_width }, 500);

        });
        
    });

})(jQuery); // <----- jQuery no conflict wrapper
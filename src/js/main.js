(function($){    
    /**
     * When DOM is ready
     */
    $(function() {
        $('.ham').click(function() {
            $('.navbar-bottom').fadeToggle();
        });
        
    });

})(jQuery); // <----- jQuery no conflict wrapper
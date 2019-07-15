(function($){    
    /**
     * When DOM is ready
     */
    $(function() {
        $('.ham').click(function() {
            $('.navbar-bottom').fadeToggle(300, function() {
                if($(this).css('display') === 'none')
                  $(this).removeAttr('style');
            });
        });
        
    });

})(jQuery); // <----- jQuery no conflict wrapper
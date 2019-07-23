(function($){    
    /**
     * When DOM is ready
     */
    $(function() {
        // Mobile burger script
        $('.ham').click(function() {
            $('.navbar-bottom').fadeToggle(300, function() {
                if($(this).css('display') === 'none')
                  $(this).removeAttr('style');
            });
        });

        // Tabs script
        if($(location).attr('hash')) {
            var activeTab = $(location).attr('hash');
        }
        else {
            var activeTab = $('#tabs .tabs-nav li:first-child a').attr("href");
        }
       
        activateTab();

        $("#tabs .tabs-nav a").click(function(e) {
            deactivateTabs();
            activeTab = $(this).attr("href");
            activateTab();
        });

        function activateTab() {
            $(activeTab).addClass('active');
            $('#tabs .tabs-nav li a[href="'+activeTab+'"]').addClass('active');
        }
        function deactivateTabs() {
            $(activeTab).removeClass('active');
            $('#tabs .tabs-nav li a[href="'+activeTab+'"]').removeClass('active');
        }
    });

})(jQuery); // <----- jQuery no conflict wrapper
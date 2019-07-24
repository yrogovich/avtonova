(function($){    
    /**
     * When DOM is ready
     */
    $(function() {
        //Path for theme
        var templateUrl = bloginfo.templateUrl;

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

        //lazy bg load
        var point = $('#myths');
        var pointTop = point.offset().top;
        var handler = function () {
            
            var windowTop = $(this).scrollTop();
            if (windowTop > pointTop) {
                $('#special-offer').css('background-image', "url('"+templateUrl+"/src/img/home/special-offer-bg-compressed.jpg')")
                $(window).unbind( "scroll", handler );
                console.log('Image loaded!');
            }
        };
        $(window).bind( "scroll", handler );  

        // Mask for input for phone
        $('.phone-mask').mask('+375 (00) 000-00-00');
    });

})(jQuery); // <----- jQuery no conflict wrapper
/**
 * Custom JavaScript for OFM Project
 */

$(document).ready(function() {
    // Equal height cards function
    function equalizeCardHeights() {
        var maxHeight = 0;
        $('.service-block-one .inner-box').each(function() {
            $(this).css('height', 'auto');
            var currentHeight = $(this).outerHeight();
            if (currentHeight > maxHeight) {
                maxHeight = currentHeight;
            }
        });
        $('.service-block-one .inner-box').css('height', maxHeight + 'px');
    }
    
    // Run on page load
    setTimeout(equalizeCardHeights, 500);
    
    // Run on window resize
    $(window).on('resize', function() {
        setTimeout(equalizeCardHeights, 100);
    });
});
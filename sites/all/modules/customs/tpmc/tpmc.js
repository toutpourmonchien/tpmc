/**
 * Created by aurelien on 07/09/2014.
 */

(function ($) {
    $(document).ready(function() {

        $('.views-field-title').popover();
				
				if (Modernizr.touch) {   
					$('.view-nos-videos .views-field-field-video-youtube a').attr('target', '_blank');
				} else {   
   				
					$('.view-nos-videos .views-field-field-video-youtube a').attr('rel', 'shadowbox');
				}  
    });
// jQuery for Drupal 7 [END]
}(jQuery));
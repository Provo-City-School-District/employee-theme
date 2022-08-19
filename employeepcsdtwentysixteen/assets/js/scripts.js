/*
=============================================================================================================
accordion
=============================================================================================================
*/
jQuery(".accordian-category").click( function(){
	jQuery(this).toggleClass("active");
	jQuery(this).next(".accordian-content").toggleClass("active");
});
/*
=============================================================================================================
Directory Live Page Search
=============================================================================================================
*/

jQuery(document).ready(function(){
    jQuery("#appfilter").keyup(function(){

        // Retrieve the input field text and reset the count to zero
        var filter = jQuery(this).val(), count = 0;

        // Loop through the post list
        jQuery(".approvedApps .post").each(function(){

            // If the list item does not contain the text phrase fade it out
            if (jQuery(this).text().search(new RegExp(filter, "i")) < 0) {
                 //jQuery(this).addClass('hide');
                jQuery(this).fadeOut();

            // Show the list item if the phrase matches and increase the count by 1
            } else {
                jQuery(this).show();
                count++;
            }
        });
    });
});
/*
=============================================================================================================
Auto Link Detection
=============================================================================================================
*/

jQuery('.content ul li a').each(function(){
    if (jQuery(this).attr('href').match('.pdf')) {
        jQuery(this).parent().addClass('pdf');
    } else if(jQuery(this).attr('href').match('.xls')) {
        jQuery(this).parent().addClass('xls');
    } else if (jQuery(this).attr('href').match('provo.edu')) {
        jQuery(this).parent().addClass('int');
    } else {
        jQuery(this).parent().addClass('ext');
    }
});
/*
=============================================================================================================
sort list alpha by giving it the class sortList
=============================================================================================================
*/
jQuery(window).on("load", function() {
	var elem = jQuery('.sortList'); //replace this with your list selector
	sortList(elem);
	function sortList($elem) {
		var $li = $elem.find('li'),
			$listLi = jQuery($li,$elem).get();
		$listLi.sort(function(a, b){
			var keyA = jQuery(a).text().toUpperCase();
			var keyB = jQuery(b).text().toUpperCase();
			return (keyA < keyB) ? -1 : 1;
		});
		jQuery.each($listLi, function(index, row){
			$elem.append(row);
		});
	}
});
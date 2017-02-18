jQuery(document).ready(function () {
    var pad = 96;
    if (jQuery('body').hasClass('admin-bar')) {
        var abh = jQuery('#wpadminbar').outerHeight();
        pad += abh;
        console.log('Adminbar present - abh: ' + abh + ' - pad: ' + pad + 'px.');
    } else {
        console.log('Adminbar not present - pad: ' + pad + 'px.');
    }

    /* Add padding and id's to each front page section */
    jQuery("h2.entry-title").each(function () {
        var panelId = jQuery(this).html().toLowerCase().replace(/\s+/g, "-");
        jQuery(this).wrapInner(function () {
            return "<span style='padding-top:" + pad + "px;' id='" + panelId + "'></span>";
        })
    })

    /* Remove navigation link highlighting */
    jQuery('#top-menu li').removeClass('current-menu-item current_page_item ');

    /* Add highlighting on click */
    jQuery('#top-menu li a').on('click', function (event) {
        jQuery(this).parent().parent().find('li').removeClass('current-menu-item');
        jQuery(this).parent().addClass('current-menu-item');
    });

    /* Check current URL and highlight nav for current page */
    jQuery('#top-menu li a').each(function () {
        var pageUrl = jQuery(location).attr('href');
        var navUrl = jQuery(this).attr('href');
        if (navUrl == pageUrl) {
            jQuery(this).parent().addClass('current-menu-item');
        }
    })
})
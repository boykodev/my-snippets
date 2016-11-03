/**
 * JavaScript functions:
 * #1 - filesize validation
 * #2 - hidden element height
 */

// #1 filesize validation
function validateFilesize(selector, limit) {
    $(selector).bind('change', function() {
        var filesize = this.files[0].size / 1024 / 1024;
        if (filesize > limit) {
        	// do stuff
        }
    });
}

// #2 get height of the hidden element
function getActualHeight ($element) {
    // THANKS: http://stackoverflow.com/questions/2345784/

    // find the closest visible parent and get it's hidden children
    var visibleParent = $element.closest(':visible').children(),
        thisHeight;

    // set a temporary class on the hidden parent of the element
    visibleParent.addClass('temp-show');

    // get the height
    thisHeight = $element.height();

    // remove the temporary class
    visibleParent.removeClass('temp-show');

    return thisHeight;
}

// filesize validation
function validateFilesize(selector, limit) {
    $(selector).bind('change', function() {
        var filesize = this.files[0].size / 1024 / 1024;
        if (filesize > limit) {
        	// do stuff
        }
    });
}
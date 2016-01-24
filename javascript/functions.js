// filesize validation
function validateFilesize() {
    $('#file-input').bind('change', function() {
        var filesize = this.files[0].size / 1024 / 1024;
        var limit = 2;
        if (filesize > limit) {
        	// do stuff
        }
    });
}
// filesize validation
function validateFilesize(selector, limit) {
    $(selector).bind('change', function() {
        var filesize = this.files[0].size / 1024 / 1024;
        if (filesize > limit) {
        	// do stuff
        }
    });
}

// simulate form submit
var $form = $('<form>', {
    action: '/',
    method: 'post'
});
var $input = $('<input>', {
    type: 'hidden',
    name: 'name',
    value: 'value'
});
$form.append($input).appendTo('body').submit();

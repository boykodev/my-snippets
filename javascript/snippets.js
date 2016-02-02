/**
 * JavaScript snippets:
 * #1 - simulate form submit
 */

// #1 simulate form submit
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
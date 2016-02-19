/**
 * JavaScript snippets:
 * #1 - simulate form submit
 * #2 - prevent scrolling on append
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

// #2 prevent scrolling on append
var oldHeight = $(document).height();
var oldScroll = $(window).scrollTop();
// append something
$(document).scrollTop(oldScroll + $(document).height() - oldHeight);

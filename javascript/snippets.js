/**
 * JavaScript snippets:
 * #1 - simulate form submit
 * #2 - prevent scrolling on append
 * #3 - get full URL of the background image
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

// #3 get full URL of the background image
// http://stackoverflow.com/questions/35521770
var imageUrl = window.getComputedStyle(document.getElementsByClassName('selector')[0], null).getPropertyValue('background-image').split(/'|"/)[1];

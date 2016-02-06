/**
 * Regular expressions
 * #1 - strip domain name from url
 * #2 - email validation
 */

// #1 strip domain name from url
var re = /https?:\/\/[^\/]+/i;
var url = 'http://www.example.com/path/to/file';
var path = url.replace(re, "");

// #2 email validation
var re = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/i;
var valid = re.test('test@test.com');

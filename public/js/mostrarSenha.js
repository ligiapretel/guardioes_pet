var input = document.querySelector('#campo input');
var img = document.querySelector('#campo img');

img.addEventListener('click', function () {
    input.type = input.type == 'text' ? 'password' : 'text';   
});

var input2 = document.querySelector('#campo2 input');
var img2 = document.querySelector('#campo2 img');

img2.addEventListener('click', function () {
    input2.type = input2.type == 'text' ? 'password' : 'text';   
});
/*var input = document.querySelector('#campo input');
var img = document.querySelector('#campo img');
img.addEventListener('click', function () {
  input.type = input.type == 'text' ? 're-password' : 'text';
});*/

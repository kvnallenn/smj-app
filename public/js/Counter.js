var x = 1;
var lock;
const input = document.querySelector('input.kunciunit');
var span = document.querySelector('#kuncispan'); // find the <span> element in the DOM
var increment = document.getElementById('increment'); // find the element with the ID 'increment'
var decrement = document.getElementById('decrement'); // find the element with the ID 'decrement'

increment.addEventListener('click', function () {
  // this function is executed whenever the user clicks the increment button
  lock = span.textContent = ++x;
  input.value = lock;
});

decrement.addEventListener('click', function () {
  if(span.textContent<=1){
    return false;
  }else{
    lock = span.textContent = --x;
    input.value = lock;
  }
  

});
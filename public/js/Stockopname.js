var text1 = document.getElementById("stock-skrg");
var text2 = document.getElementById("jlh-pny");

function add_number() {
  var first_number = parseFloat(text1.value);
  if (isNaN(first_number)) first_number = 0;
  var second_number = parseFloat(text2.value);
  if (isNaN(second_number)) second_number = 0;
  var result = first_number + second_number;
  document.getElementById("jlh-skrg").value = result;
}
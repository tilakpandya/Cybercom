function getFibonacci() {
  var first = 0;
  var second = 1;
  var input = document.getElementById("input");
  var ans = 0;
  for (var i = 0; i <= parseInt(input.value); i++) {
    console.log(first);
    ans = first + second;
    first = second;
    second = ans;
  }
}
document.body.onload = addElement;
var my_div = new_div = null;

function addElement() {
  var new_div = documet.createElement("div");
  new_div.innerHTML = "hi";

  my_div = getElementByid("orig-div");
  document.body.insertBefore(new_div, my_div);
}


function checkInput(that) {
  if (that.value == "DVD") {
    document.getElementById("DVD").style.display = "block"
    document.getElementById("size").setAttribute('required', "")
  } else {
    document.getElementById("DVD").style.display = "none";
  }
  if (that.value == "Book") {
    document.getElementById("Book").style.display = "block";
    document.getElementById("weight").setAttribute('required', "")
  } else {
    document.getElementById("Book").style.display = "none";
  }
  if (that.value == "Furniture") {
    document.getElementById("Furniture").style.display = "block";
    document.getElementById("height").setAttribute('required', "")
    document.getElementById("width").setAttribute('required', "")
    document.getElementById("length").setAttribute('required', "")
  } else {
    document.getElementById("Furniture").style.display = "none";
  }      
}
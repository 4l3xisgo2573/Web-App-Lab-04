function popupfunction(x) {
    document.getElementById("popup" + x).style.display = "block";
  
    document.getElementById("fade" + x).style.display = "block";
  }
  
  function popupclose(x) {
    document.getElementById("popup" + x).style.display = "none";
  
    document.getElementById("fade" + x).style.display = "none";
  }
  function shoppingCart(value) {
    document.getElementById("cart").innerHTML += value + "<br>";
  }
  function hideandUnhide(){
    var shoppingCart = document.getElementById("cart");
    if (shoppingCart.style.display === "none") {
      shoppingCart.style.display = "block";
      document.getElementById("shoppingFade").style.display = "block";
    } else {
      shoppingCart.style.display = "none";
      document.getElementById("shoppingFade").style.display = "none";
  
    }
  }
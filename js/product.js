let a=0;
function myFunction() {
 
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (a==0) {
    moreText.style.display = "inline";
    btnText.innerHTML = "Read less"; 
    a=1;
  } else {
    more.style.display = "none";
    btnText.innerHTML = "Read more"; 
    a=0;
  }
}
function myFunction2() {
 
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("myBtn2");
  
    if (a==0) {
      moreText.style.display = "inline";
      btnText.innerHTML = "Read less"; 
      a=1;
    } else {
      more2.style.display = "none";
      btnText.innerHTML = "Read more"; 
      a=0;
    }
  }
  function myFunction3() {
 
    var moreText = document.getElementById("more3");
    var btnText = document.getElementById("myBtn3");
  
    if (a==0) {
      moreText.style.display = "inline";
      btnText.innerHTML = "Read less"; 
      a=1;
    } else {
      more3.style.display = "none";
      btnText.innerHTML = "Read more"; 
      a=0;
    }
  }
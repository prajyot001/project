function valid() {
 
    var name = document.getElementById("c_name");
    var phone = document.getElementById("phone");
    var gmail = document.getElementById("gmail");
    var add = document.getElementById("Address");

    var v_name = document.getElementById("valid_name");
    var v_phone = document.getElementById("valid_num");
    var v_gamil = document.getElementById("invalid-feedback3");
    var v_add = document.getElementById("invalid-feedback4");
  
    if (v_name ===null) {
        v_name.style.display = "inline";
    } 
    else if (v_phone ===null) {
        v_phone.style.display = "inline";
    }
   else  if(v_gmail ===null) {
        v_gamil.style.display = "inline";
    }
   else if (v_add === null) {
        v_add.style.display = "inline";
    }
    else {
     
      alert("data inserted succfuly");
    }
  }
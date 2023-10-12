function check(){
    let allAreFilled = true;
    let allAreFilled = true;
    document.getElementById("userForm").querySelectorAll("[required]").forEach(function(i) {
      if (!allAreFilled) return;
      if (!i.value) allAreFilled = false;
      if (i.type === "radio") {
        let radioValueCheck = false;
        document.getElementById("userForm").querySelectorAll(`[name=${i.name}]`).forEach(function(r) {
          if (r.checked) radioValueCheck = true;
        })
        allAreFilled = radioValueCheck;
      }
    })
    if (!allAreFilled) {
      alert('Fill all the fields');
    }
}
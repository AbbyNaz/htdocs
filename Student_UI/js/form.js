 const submitbutton = document.getElementById("submit");
 const input = document.getElementById("LastName","FirsName");

 input.addEventListener("keyup",(e) => {
     const value = e.currentTarget.value;
     submitbutton.disabled = false;

     if (value === ""){
     submitbutton.disabled = true;
 } 

});
// var name = document.getElementById("name");
// var email = document.getElementById("email");
// // var phone = document.getElementById("phone");
// var dropdown = document.getElementById("dropdwon");
// var errorMessage = document.getElementById("error-message");
// var link = document.getElementById("link");
// var field = document.getElementById("field");
// var date = document.getElementById("date");
// var textarea = document.getElementById("textarea");
// var submit = document.getElementById("submit");

// submit.addEventListener("click", function() {
//     if (name.classList.contains("invalid")) {
//       name.classList.remove("invalid");
//     }
//     if (name.classList.contains("valid")) {
//       name.classList.remove("valid");
//     }
//     if (email.classList.contains("invalid")) {
//       email.classList.remove("invalid");
//     }
//     if (email.classList.contains("valid")) {
//       email.classList.remove("valid");
//     }
//     if (phone.classList.contains("invalid")) {
//       phone.classList.remove("invalid");
//     }
//     // if(phonenumber(phone.value)){
//     //   alert('phone number correct');
//     // } else {
//     //   alert("Please only enter numeric characters only(Allowed input:0-9)");
//     // }
//     if (phone.classList.contains("valid")) {
//      phone.classList.remove("valid");
//     }
//     if (dropdown.classList.contains("invalid")) {
//       dropdown.classList.remove("invalid");
//     }
//     if (dropdown.classList.contains("valid")) {
//       dropdown.classList.remove("valid");
//     }
//     if (field.classList.contains("invalid")) {
//       field.classList.remove("invalid");
//     }
//     if (field.classList.contains("valid")) {
//       field.classList.remove("valid");
//     }
//     if (date.classList.contains("invalid")) {
//       date.classList.remove("invalid");
//     }
//     if (date.classList.contains("valid")) {
//       date.classList.remove("valid");
//     }
//     if (link.classList.contains("invalid")) {
//       link.classList.remove("invalid");
//     }
//     if (link.classList.contains("valid")) {
//       link.classList.remove("valid");
//     }
//     if (textarea.classList.contains("invalid")) {
//       textarea.classList.remove("invalid");
//     }
//     if (textarea.classList.contains("valid")) {
//       textarea.classList.remove("valid");
//     }

//     var nameValue = name.value;
//     var emailValue = email.value;
//     var phoneValue = phone.value;
//     if ((nameValue.length && phoneValue.length) === 0) {
//       name.classList.add("invalid");
//       errorMessage.innerText = "Enter a name";
//       return;
//     } 
//     else {
//       name.classList.add("valid");
//     }
    
//     // var validatephone = /^\+?\d{2}[- ]?\d{3}[- ]?\d{5}$/.test(phoneValue);
//     // if(validatephone){
//     //   phone.classList.add("valid");
      
//     // }
//     // else{
//     //   errorMessage.innerText='Please Only Input Number in Phone Number';
//     //   phone.classList.add("invalid");
//     //   return;
//     // }
    
//     var validateEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(emailValue);
//     if (validateEmail) {
//       email.classList.add("valid");
//     } else {
//       errorMessage.innerText = 'Email format incorrect.';
//       email.classList.add("invalid");
//       return;
//     }

//   });
  
//   // if (name && email && phone && dropdown && link && textarea && field && date ) {
//   //   errorMessage.innerText = "";
//   // }

// // function phonenumber(phone) {
// //   console.log(phone);
// //   var number = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
// //   if(phone.value.match(number)) {
// //     console.log('phone number correct');
// //     return true;
// //   }  
// //   else {  
// //     alert("Please Input Number Only");
// //     console.log('phone number incorrect');
// //     return false;
// //   }
// //}


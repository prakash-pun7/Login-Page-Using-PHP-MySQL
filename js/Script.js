const inputs = document.querySelectorAll(".input");

function addcl() {
   let parent = this.parentNode.parentNode;
   parent.classList.add("focus");
}

function remcl() {
   let parent = this.parentNode.parentNode;
   if (this.value == "") {
      parent.classList.remove("focus");
   }
}

inputs.forEach((input) => {
   input.addEventListener("focus", addcl);
   input.addEventListener("blur", remcl);
});

function myFunction() {
   var x = document.getElementById("myInput");
   if (x.type === "password") {
      x.type = "text";
   } else {
      x.type = "password";
   }
}

AOS.init();

$(".toggle-password").click(function () {
   $(this).toggleClass("fa-eye fa-eye-slash");
   var input = $($(this).attr("toggle"));
   if (input.attr("type") == "password") {
      input.attr("type", "text");
   } else {
      input.attr("type", "password");
   }
});
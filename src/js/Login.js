const visible = document.getElementById('visible');
const password = document.getElementById('password');
const button = document.getElementById('submit');
const email = document.getElementById('username');
 password.disabled = fals;

visible.addEventListener("click", function() {
  if (password.type === "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
});

email.addEventListener('input', function() {
  let emaill = email.value;
  if (emaill != "") {
    password.disabled = false;
  
  }else if(emaill == ""){
    password.disabled = true;
    password.style.backgroundColor = 'rgb(198, 0, 0)';
  }
 });

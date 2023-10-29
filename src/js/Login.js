const visible = document.getElementById('visible'),
      password = document.getElementById('password'),
      submit = document.getElementById("enviar"),
      email = document.getElementById("username");
      

      visible.addEventListener("click", function(){
        if(password.type === "password") {
          password.type = "text";
        }else {
          password.type = "password";
        }
      });

      email.addEventListener("change", function(){
        if(password.classList.contains('incompleto') || email.classList.contains('incompleto')){
        validar_campo();
        }
      });

      submit.addEventListener("click",function(){
        validar_campo();
      });

      function validar_campo (){
        if(password.value == ""){
          password.classList.add('incompleto');
       }else if(password.classList.contains('incompleto') ){
         password.classList.remove('incompleto')
         }
       if(email.value == ""){
         email.classList.add('incompleto');
       }else if(email.classList.contains('incompleto')){
         email.classList.remove('incompleto');
         }
      }



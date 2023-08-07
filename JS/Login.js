const $visible = document.getElementById('visible'),
      $password = document.getElementById('password');



       $visible.addEventListener("click", function(){
        if($password.type === "password") {
            $password.type = "text";
        } else {
            $password.type = "password"
        }
       });
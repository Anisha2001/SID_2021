$(document).ready(function(e) {

    $("#rform").submit(function(event){
        let $password = $("#password_1");
        let $confirm= $("#password_2");
        let $error = $("#confirm_error");

        if ($password.val() == $confirm.val()) {
            return true;
        }else{
            $error.text("Password did not match.");
            event.preventDefault();

        }   
       
    });
});
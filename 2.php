<?php
// function username valid | invalid
function is_username_valid($str){
    return preg_match('/^[a-z]{5,9}$/', $str);
}

$username = 'ridhoafni';
    if(is_username_valid($username)) {
        echo 'Username : "'.$username.'" is Valid<br>';
    } else {
        echo 'Username : "'.$username.'" is Invalid<br>';
    }

// function phone valid | invalid
function is_phone_valid($str){
    return preg_match("/\+62[0-9]{8,15}$/", $str);
}

$telp = '+628225241620';
    if(is_phone_valid($telp)) {
        echo 'Phone : "'.$telp.'" is Valid<br>';
    } else {
        echo 'Phone : "'.$telp.'" is Invalid<br>';
    }

    // function password valid | invalid
function is_pwd_valid($str){
    return preg_match("/^\S*(?=\S{8,})(?=.*[\W_])(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/", $str);
}

$pwd = 'C0d3YourFuture##';
    if(is_pwd_valid($pwd)) {
        echo 'PWD : "'.$pwd.'" is Valid<br>';
    } else {
        echo 'PWD : "'.$pwd.'" is Invalid<br>';
    }

    // function Email valid | invalid
    function is_email_valid($str){
        return preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str);
    }
    
    $email = 'iqbal@mail.co';
        if(is_email_valid($email)) {
            echo 'Email : "'.$email.'" is Valid<br>';
        } else {
            echo 'Email : "'.$email.'" is Invalid<br>';
        }
?>
<?php

if(isset($_POST['login-submit'])){
    require 'dbhandler.php';
    $uname_email = $_HOST['uname'];
    $passw = $_HOST['pwd'];

    if(empty($uname_email) || empty($passw)){
        header("Location: ../login.php?error=EmptyField");
        exit();
    }
    $sql = "SELECT * FROM users WHERE uname=? OR email=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../login.php?error=SQLInjection");
        exit();
    }

    else{
        mysqli_stmt_bind_param($stmt, "ss", $uname_email, $uname_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_assoc($result);

        if(empty($data)){
            header("Location: ../login.php?error=user DNE");
            exit();
        }
        else{
            $pass_check = password_verify($passw, $data['password']);
            
            if($pass_check == true){
                session_start();
                $_session['uid'] = $data['uid'];
                $_session['fname'] = $data['fname'];
                $_session['uname'] = $data['uname'];

                header("Location: ../profile.php?error=Success");
                exit();
            }
            else{
                header("Location: ../login.php?error=WrongPass");
                exit();
            }
        }
    }

}
else{
    header("Location: ../login.php");
    exit();
}
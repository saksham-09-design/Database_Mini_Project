<?php
    $e_user = $_REQUEST['uName'];
    $e_password = $_REQUEST['pass'];
    $con = false;
    $o_user = "";
    $o_password = "";

    $con = mysqli_connect('localhost','User_Pass','','user_passwords');
    $query = 'SELECT User, Password FROM u_pass WHERE U_ID = 1';
    $result_user = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result_user);
    $o_user = $row['User'];
    $o_password = $row['Password'];
    
    if(($e_user == $o_user)&&($e_password == $o_password)) {
        mysqli_query($con,'UPDATE u_pass SET active = 1 WHERE U_ID = 1');
        echo "<script language='javascript'> 
                alert('Connection Success!'); 
                window.location.href = 'index.php'
             </script>";
    } else {
        echo "<script language='javascript'> 
                alert('Connection Failed'); 
                window.location.href = 'login.html'
            </script>";
    }
?>
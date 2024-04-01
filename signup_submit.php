<!-- sử lí đăng kí -->
<?php
    // tao ra session de bat loi va hien thi loi 
    session_start();

    // kết nối
    include 'config.php';
    // kiểm tra đầu vào và thực hiện xử lí khi bấm nút sun=bmit trong form
    if (isset($_POST['submit']) && $_POST['username'] !='' && $_POST['password'] !='' && $_POST['re_password'] !='') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];
        $level = 0;

        if($password != $re_password) {
            // sesion thong bao
            $_SESSION["thong_bao"] = "Email or password is incorrect";
            header("location:signup.php");
            die(); // sau do khong thuc hien cai gi nua
        }
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $old = mysqli_query($conn, $sql);
        $password = md5($password);
        if(mysqli_num_rows($old) > 0) {
            $_SESSION["thong_bao"] = "Username already exists";
            header( "location:signup.php");
            die(); // sau do khong thuc hien cai gi nua
        }

        $sql = "INSERT INTO user (username,password,level) VALUES ('$username', '$password','$level')";
        mysqli_query($conn, $sql);
        $_SESSION["thong_bao"] = "Sign Up Success";
        header('location:login.php');
    } else {
        // bat loi bang sesion'
        $_SESSION["thong_bao"] = "Please enter complete information";
        header( "location:signup.php");
    }
?>
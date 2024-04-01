<!-- neu dang nhap thanh cong thi tao ra 1 session va neu sesion nay ton tai thi moi cho vao admin neu ko co thi ko cho vao trang nay -->
<!-- khai bao su dung sesion -->
<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        header("location: login.php");
    }
?>

<!-- ket noi database : goi den file config-->
<?php
    require_once '../config.php';
?>

<?php
    if (isset($_POST['submit'])){
        $username = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        if ($username != "" && $address != "" && $address != "") {
            $sql = "INSERT INTO hocsinh(username, email, address) VALUES('$username', '$email', '$address')";
            $qr = mysqli_query($conn, $sql);
            header("location: ../admin.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>BTEC</h1>
        </div>
        <ul>
            <li><a href="#">Login </a></li>
            <li><a href="#">Register</a></li>
            <li><a href="../admin.php">List Management</a></li>
            <li><a href="login.php">Logout</a></li>
            <li>Help</li>
            <li>Settings</li>
        </ul>
    </div>

    <!-- container -->
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <button type="submit">@</button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <img src="/img/avata.png" alt="">
                    <div class="img-case">
                        <img src="/avata.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="cards">
                <div class="card">
                    <div style="align-items: center; padding-left: 200px;">
                        <h2 style="color:red;">Add student information</h2>
                        <form method="POST" action="">
                            <label for="name">Name student</label>
                            <input type="text" name="name" id="name" required><br><br>
        
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required><br><br>
        
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" required><br><br>
        
                            <input type="submit" name="submit" value="Add">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

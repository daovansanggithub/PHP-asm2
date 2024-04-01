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
    require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>BTEC</h1>
        </div>
        <ul>
            <li><a href="login.php">Login </a></li>
            <li><a href="signup.php">Register</a></li>
            <li><a href="admin.php">List Management</a></li>
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
                    <!-- =====table===== -->
                        <p>Table Managerment</p>
                        <!--  -->
                        <table>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th><a style="color: red;" href="http://localhost/asm2-php1/student/them.php">Insert</a></th> 
                                <th></th> 
                            </tr>

                            <!-- hien thi du lieu -->
                            <?php
                                $sql = "SELECT * FROM hocsinh";
                                $qr = mysqli_query($conn, $sql);
                                while ($rows = mysqli_fetch_array($qr)) { 
                            ?>
                            <tr>
                                <td><?php echo $rows['username']; ?></td>
                                <td><?php echo $rows['email']; ?></td>
                                <td><?php echo $rows['address']; ?></td>
                                <!-- muon sua thi phair lay duoc id thi moi sua dc -->
                                <td><a style="color: blue;" href="student/sua.php?id=<?php echo $rows['id']; ?>">Edit</a>----||----<a onclick="return Del('<?php echo $rows['username']; ?>')" style="color: blue;" href="student/xoa.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
                            </tr>
                            <?php } ?>

                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hiển thị thông báo xác nhận xóa -->
<script>
    function Del(name) {
        return confirm("bạn có chắc chắn muốn xóa học sinh này ra khỏi danh sách không?  "+ name + "?");
    }
</script>
</body>
</html>
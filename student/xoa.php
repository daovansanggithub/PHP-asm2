
<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        header("Location: login.php");
        exit();
    }
?>

<?php
    require_once '../config.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = "DELETE FROM hocsinh WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: http://localhost/asm2-php1/admin.php");
            exit();
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
?>
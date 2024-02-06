<?php
include "koneksi.php";

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $ID_pemain = $_POST['ID_Pemain'];
    $email = $_POST['email'];
    $pasword = $_POST['pasword'];
    $query = mysqli_query($koneksi, "select * from toko where username='$username',ID_pemain='$ID_Pemain',email='$email',pasword='$pasword'");
    if (mysqli_num_rows($query)>0){
        header("location : index.php");
    }else{
        header ("location : login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="form" action="login.php" method="$_POST">
        <table width="25%" border="0" align="">
            <tr>
                <td>username</td>
                <td><input type="text" name="" placeholder="username"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="" placeholder="email"></td>
            </tr>
            <tr>
                <td>pasword</td>
                <td><input type="text" name="" placeholder="pasword"></td>
            </tr>
            <tr>
                <td><input type="submit" name="login" values="login"></td>
            </tr>
        </table>
    </form>
</body>
</html>
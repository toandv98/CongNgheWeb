<?php
    $id = $_GET["id"];
    //moconnect
    include('../php/connect.php');

    //truyvan
    mysqli_query($con,"Delete from nguoidung where id = '$id'");
    echo "Xoá thành công";
    header('location:list_user.php');



    mysqli_close($con);
?>
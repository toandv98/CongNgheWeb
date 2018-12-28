<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/xacnhan.js"></script>
</head>

<body>
    <?php
        session_start();
        include('header.php');
    ?>
    <main class="col-md-10 m-auto">
    <div class="mt-3 mb-2 text-center"><a href="./thembaihat.php" class="btn btn-primary">Thêm bài hát</a></div>
    <div class="card mb-3 mt-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th >STT</th>
                            <th>Tên Bài Hát</th>
                            <th>Lượt Nghe</th>
                            <th>Xoá bài hát</a></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th >STT</th>
                            <th>Tên Bài Hát</th>
                            <th>Lượt Nghe</th>
                            <th>Xoá bài hát</a></th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php
                        include('../php/connect.php');
                        $stt=1;
                        $result = mysqli_query($con,"Select * from baihat");
                        While($data = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td style='width:50px;'>$stt</td>";
                            echo "<td>$data[tenbaihat]</td>";
                            echo "<td style='width:120px;'>$data[luotnghe]</td>";
                            echo "<td style='width:120px;'><a href='del_baihat.php?id=$data[id]' onclick=' return xacnhan();' style='color:red;'>Xoá</a></td>";
                            echo "</tr>";
                            $stt++;
                        }
                        mysqli_close($con);
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
    </main>
    <?php
        include('footer.php');
    ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap4.js"></script>
    <script>
        $('#dataTable').DataTable();
    </script>
</body>

</html>
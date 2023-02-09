<?php 
    session_start(); 
    
    if (!isset($_SESSION["login"])) {
        header("location: login.html");
        echo($_SESSION["login"]);
    }
    require("connect.php");
    $idRoom = $_GET['idroom'];

    $sql = "SELECT * 
    FROM student
    WHERE id_room = '$idRoom'";
    $result = mysqli_query($connect,$sql);
    $count = mysqli_num_rows($result);


    $sqlname = "SELECT room.abbreviation
    FROM student , room
    WHERE student.id_room = room.id_room AND room.id_room = '$idRoom'";
    $nameRommresult = mysqli_query($connect,$sqlname);
    $nameRoom = mysqli_fetch_assoc($nameRommresult);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
    <link rel="stylesheet" href="style-index.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"
        defer></script>
</head>

<body>
    <?php include('navbar.php')?>
    <section>
        <h1 class='text-center'>นักศึกษาทั้งหมดห้อง <?php echo $nameRoom['abbreviation'] ;?></h1>
        <table class="table table-hover fs-6 mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">รูป</th>
                    <th scope="col">รหัสนักศึกษา</th>
                    <th scope="col">ชื่อจริง</th>
                    <th scope="col">นามสกุล</th>
                    <th scope="col">ที่อยู่</th>
                    <th scope="col">เบอร์โทร</th>
                </tr>
            </thead>
            <tbody class="">
                <?php for($i=0;$i<$count;$i++){ 
                $row = mysqli_fetch_assoc($result);
              ?>
                <tr>
                    <th scope="row"><?php echo $i+1;?></th>
                    <td></td>
                    <td><?php echo $row['id_student'];?></td>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['tel'];?></td>
                </tr>
                <?php };?>
            </tbody>
        </table>
    </section>
</body>

</html>
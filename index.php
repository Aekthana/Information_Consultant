<?php 
    session_start(); 
    
    if (!isset($_SESSION["login"])) {
        header("location: login.html");
        echo($_SESSION["login"]);
    }
    require("connect.php");

    $sql = "SELECT * FROM room";
    $result = mysqli_query($connect,$sql);
    $count = mysqli_num_rows($result);


    $sumStudent = "SELECT COUNT(*) AS 'sumstudent'
    FROM room, student 
    WHERE  room.id_room = student.id_room
    GROUP BY student.id_room";
    $resultSumStudent = mysqli_query($connect,$sumStudent);
 
    $sumMen = "SELECT COUNT(*) AS 'summen'
    FROM room, student 
    WHERE  room.id_room = student.id_room AND student.gender = 'ชาย'
	  GROUP BY room.id_room";
    $resultSumMen = mysqli_query($connect,$sumMen);
    
    $sumWomen = "SELECT COUNT(*) AS 'sumwomen'
    FROM room, student 
    WHERE  room.id_room = student.id_room AND student.gender = 'หญิง'
	  GROUP BY room.id_room";
    $resultSumWomen = mysqli_query($connect,$sumWomen);

    $sumCase = "SELECT COUNT(*) AS 'sumcase'
    FROM consultant, student
    WHERE consultant.id_student = student.id_student AND consultant.id_room = student.id_room
    GROUP BY student.id_room
    ";
    $resultSumCase = mysqli_query($connect,$sumCase);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>index</title>
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
     <h1 class='text-center'>ห้องทั้งหมด</h1>
        <table class="table table-hover fs-6 mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ห้อง</th>
                    <th scope="col">จำนวนนักศึกษาทั้งหมด</th>
                    <th scope="col">นักศึกษาชาย</th>
                    <th scope="col">นักศึกษาหญิง</th>
                    <th scope="col">นักศึกษาที่มีปัญหา (เคส)</th>
                    <th scope="col">ดูรายชื่อนักศึกษาที่มีปัญหา</th>
                    <th scope="col">ดูรายชื่อนักศึกษาทั้งหมด</th>
                </tr>
            </thead>
            <tbody class="">
                <?php for($i=0;$i<$count;$i++){ 
                $row = mysqli_fetch_assoc($result);
                $rowSumStudent = mysqli_fetch_assoc($resultSumStudent);
                $rowSumMen = mysqli_fetch_assoc($resultSumMen);
                $rowSumWomen = mysqli_fetch_assoc($resultSumWomen);
                $rowSumCase = mysqli_fetch_assoc($resultSumCase);
              ?>
                <tr>
                    <th scope="row"><?php echo $i+1;?></th>
                    <td><?php echo $row['abbreviation'];?></td>
                    <td><?php echo $rowSumStudent['sumstudent'];?></td>
                    <td><?php echo $rowSumMen['summen'];?></td>
                    <td><?php echo $rowSumWomen['sumwomen'];?></td>
                    <td><?php echo $rowSumCase['sumcase'];?></td>
                    <td><a class="btn btn-outline-primary" href="select-case.php?idroom=<?php echo $row['id_room'];?>">ดูเคส</a></td>
                    <td><a class="btn btn-outline-primary" href="all-student.php?idroom=<?php echo $row['id_room'];?>">ดูราชชื่อ</a></td>
                </tr>
                <?php };?>
            </tbody>
        </table>
    </section>
</body>

</html>
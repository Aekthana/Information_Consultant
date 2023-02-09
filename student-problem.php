<?php
    session_start(); 
    if (!isset($_SESSION["login"])) {
        header("location: login.html");
        echo($_SESSION["login"]);
    }
    require("connect.php");

    $sql = "SELECT consultant.id_consultant,room.abbreviation,student.id_student,student.firstname,student.lastname,consultant.receive_date,consultant.given_date,consultant.problem,consultant.advice
    FROM consultant,student,room
    WHERE consultant.id_student = student.id_student AND consultant.id_room = room.id_room
    ORDER BY consultant.given_date ASC";
    $result = mysqli_query($connect,$sql);
    $count = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student problem</title>
    <link rel="stylesheet" href="style-index.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"
        defer></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>
<body>
    <?php include('navbar.php'); ?>
    <section class="mb-5">
     <h1 class='text-center'>นักศึกษาที่มีปัญหาทั้งหมด</h1>
        <table class="table table-hover fs-6 mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ห้อง</th>
                    <th scope="col">รหัสนักศึกษา</th>
                    <th scope="col">ชื่อจริง</th>
                    <th scope="col">นามสกุล</th>
                    <th scope="col">วันที่ได้รับ</th>
                    <th scope="col">วันที่ให้คำแนะนำ</th>
                    <th scope="col">ปัญหา</th>
                    <th scope="col">คำแนะนำ</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody >
                <?php for($i=0;$i<$count;$i++){ 
                $row = mysqli_fetch_assoc($result);
            
              ?>
                <tr>
                    <th scope="row"><?php echo $i+1;?></th>
                    <td><?php echo $row['abbreviation'];?></td>
                    <td><?php echo $row['id_student'];?></td>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td><?php echo $row['receive_date'];?></td>
                    <td><?php echo $row['given_date'];?></td>
                    <td><?php echo $row['problem'];?></td>
                    <td><?php echo $row['advice'];?></td>
                    <td>
                        <a href="edit-student-problem.php?id_consultant=<?php echo($row['id_consultant']);?>" class="btn btn-outline-warning">แก้ไข</a>
                        <a href="delete-student-problem.php?id_consultant=<?php echo($row['id_consultant']);?>" class="btn btn-outline-danger" onclick="return confirm('คุณต้องการลบหรือมั้ย')">ลบ</a>
                    </td>
                    <!-- text-warning-emphasis  -->
                    <!-- text-danger -->
                </tr>
                <?php };?>
    
            </tbody>
        </table>
    </section>
</body>
</html>
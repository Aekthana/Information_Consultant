<?php
    require('connect.php');
    $id_consultant = $_POST['id_consultant'];
    $receive_date = $_POST['receive_date'];
    $given_date = $_POST['given_date'];
    $id_student = $_POST['id_student'];
    $id_room = $_POST['id_room'];
    $problem = $_POST['problem'];
    $advice = $_POST['advice'];
     
    $sql = "UPDATE consultant SET id_student = '$id_student',id_room='$id_room',receive_date='$receive_date',given_date='$given_date',problem='$problem',advice='$advice' WHERE id_consultant = $id_consultant";

    $result = mysqli_query($connect,$sql);
    if($result){
        echo"
        <script>
        alert('แก้ไขข้อมูลเรียบร้อย')
        window.location.replace('student-problem.php');
        </script>
        ";
    }else{
        echo"
        <script>
        alert('error')
        window.location.replace('student-problem.php');
        </script>
        ";
    }


?>
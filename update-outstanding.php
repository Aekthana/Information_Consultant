<?php
    require('connect.php');
    $id_outstanding = $_POST['id_outstanding'];
    $ouststanding_date = $_POST['ouststanding_date'];
    $reward_date = $_POST['reward_date'];
    $id_student = $_POST['id_student'];
    $id_room = $_POST['id_room'];
    $id_type_outstanding = $_POST['id_type_outstanding'];
    $reward = $_POST['reward'];
     
    $sql = "UPDATE outstanding SET id_student='$id_student',id_room='$id_room',id_type_outstanding='$id_type_outstanding',ouststanding_date='$ouststanding_date',reward='$reward',reward_date='$reward_date'
    WHERE id_outstanding = $id_outstanding";

    $result = mysqli_query($connect,$sql);
    if($result){
        echo"
        <script>
        alert('แก้ไขข้อมูลเรียบร้อย')
        window.location.replace('student-outstanding.php');
        </script>
        ";
    }else{
        echo"
        <script>
        alert('error')
        window.location.replace('student-outstanding.php');
        </script>
        ";
    }


?>
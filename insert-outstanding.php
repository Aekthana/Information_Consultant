<?php 
    require('connect.php');

    $ouststanding_date = $_POST['ouststanding_date'];
    $reward_date = $_POST['reward_date'];
    $id_student = $_POST['id_student'];
    $id_room = $_POST['id_room'];
    $id_type_outstanding = $_POST['id_type_outstanding'];
    $reward = $_POST['reward'];

    $sql = "INSERT INTO outstanding VALUES(null,'$id_student','$id_room','$id_type_outstanding','$ouststanding_date','$reward','$reward_date')";

    $result = mysqli_query($connect,$sql);
    if($result){
        echo"
        <script>
        alert('บันทึกข้อมูลเรียบร้อย')
        window.location.replace('form-outstanding.php');
        </script>
        ";
    }else{
        echo"
        <script>
        alert('error')
        window.location.replace('form-outstanding.php');
        </script>
        ";
    }

?>
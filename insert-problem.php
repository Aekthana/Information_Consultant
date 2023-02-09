<?php 
    require('connect.php');

    $receive_date = $_POST['receive_date'];
    $given_date = $_POST['given_date'];
    $id_student = $_POST['id_student'];
    $id_room = $_POST['id_room'];
    $problem = $_POST['problem'];
    $advice = $_POST['advice'];

    $sql = "INSERT INTO consultant VALUES(null,'$id_student','$id_room','$receive_date','$given_date','$problem','$advice')";

    $result = mysqli_query($connect,$sql);
    if($result){
        echo"
        <script>
        alert('บันทึกข้อมูลเรียบร้อย')
        window.location.replace('form-problem.php');
        </script>
        ";
    }else{
        echo"
        <script>
        alert('error')
        window.location.replace('form-problem.php');
        </script>
        ";
    }

?>
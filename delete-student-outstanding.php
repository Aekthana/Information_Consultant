<?php
    require('connect.php');

    $id_outstanding = $_GET['id_outstanding'];

    $sql = "DELETE FROM outstanding WHERE id_outstanding = $id_outstanding";
    $result = mysqli_query($connect,$sql);
    if($result){
        echo"
        <script>
        alert('ลบข้อมูลเรียบร้อย')
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
<?php 


    require('connect.php');

    $id_consultant = $_GET['id_consultant'];


    $sql = "DELETE FROM consultant WHERE id_consultant = $id_consultant";

    $result = mysqli_query($connect,$sql);
    if($result){
        echo"
        <script>
        alert('ลบข้อมูลเรียบร้อย')
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
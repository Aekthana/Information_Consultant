<?php 
    session_start();
    require('connect.php');
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM teacher WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    echo($count);


    if($count==0){
        echo"
        <script>
        alert('รหัสผ่านไม่ถูกต้อง')
        window.location.replace('login.html');
        </script>
        ";
    }else{
        $_SESSION['login']= $row;
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        header("Location:index.php");
    }

?>
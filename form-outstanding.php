<?php
    session_start(); 
    if (!isset($_SESSION["login"])) {
        header("location: login.html");
        echo($_SESSION["login"]);
    }
    require("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form outstanding</title>
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
    <?php include('navbar.php');?>
    <section>
        <h1 class='text-center'>ฟอร์มบันทึกนักศึกษาดีเด่น</h1>
        <form action="insert-outstanding.php" method="POST" class="row g-4  p-5 ">
            <div class="col-md-6">
                <label for="ouststanding_date" class="form-label">วันที่บันทึก</label>
                <input type="date" name="ouststanding_date" class="form-control" id="receive_date" require>
            </div>
            <div class="col-md-6">
                <label for="reward_date" class="form-label">วันที่ใด้รับรางวัล</label>
                <input type="date" class="form-control" name="reward_date" id="given_date" require>
            </div>
            <div class="col-md-3">
                <label for="id_student" class="form-label">รหัสนักศึกษา</label>
                <input type="text" class="form-control" name="id_student" id="id_student " require>
            </div>
            <div class="col-md-3">
                <label for="id_room" class="form-label">ชั้นปี</label>
                <select class="form-select" aria-label="Default select example" name="id_room" id="id_room" require>
                    <option selected>เลือกห้อง</option>
                    <option value="IS1A">IS1/4</option>
                    <option value="IS2A">IS2/4</option>
                    <option value="IS3A">IS3/4</option>
                    <option value="IS4A">IS4/4A</option>
                    <option value="IS4A">IS4/4B</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="id_type_outstanding" class="form-label">ประเภท</label>
                <select class="form-select" aria-label="Default select example" name="id_type_outstanding" id="id_room" require>
                    <option selected>เลือกประเภทที่เด่น</option>
                    <option value="5001">ด้านกีฬา</option>
                    <option value="5002">ด้านการเรียน</option>
                    <option value="5003">ด้านกิจกรรม</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="reward" class="form-label">รางวัลที่ได้รับ</label>
                <textarea class="form-control" name="reward" id="reward" rows="5" require></textarea>
            </div>
   
            <button type="submit" class="btn btn-outline-success">บันทึก</button>
        </form>
    </section>
</body>

</html>
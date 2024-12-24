<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณแม่ 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url(https://cdn.pixabay.com/photo/2020/04/19/08/17/watercolor-5062356_960_720.jpg);
            background-size: cover;   /* ขนาดคลุมทั้งหมด */
            background-attachment: fixed; /* ล็อคภาพพื้นหลัง */
        }
        h1 {
            color: #2F539B;
            text-shadow: 1px 1px 2px #82CAFF;
            margin-top: 30px;
            margin-bottom: 30px;
            padding: 15px;
            border: 3px solid #2F539B;  /* กรอบหัวข้อ */
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.8); /* พื้นหลังโปร่งแสง */
            display: inline-block;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }
        .multiplication-box {
            background: rgba(255, 255, 255, 0.9);
            border: 5px double #2F539B; /* กรอบแบบ double */
            border-radius: 20px;
            padding: 20px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
            transition: transform 0.3s, box-shadow 0.3s; /* เอฟเฟกต์เมื่อ hover */
        }
        .multiplication-box:hover {
            transform: scale(1.05); /* กล่องขยับ */
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.3); /* เพิ่มเงาขึ้น */
        }
        .text-end {   /* ข้อความฝั่งขวา */
            font-weight: bold;
            color: #2F539B;
        }
        .text-start {  /* ข้อความฝั่งซ้าย */
            font-weight: bold;
            color: #357EC7;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <?php $my_var = 2; ?>
        <h1>สูตรคูณแม่ <?php echo $my_var; ?></h1>
        <div class="row justify-content-center">
            <div class="col-8 col-md-6 multiplication-box">
                <div class="row">
                    <div class="col-6 text-end">
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            echo "{$my_var} x {$i} = ";
                            echo "<br>";
                        }
                        ?>
                    </div>
                    <div class="col-6 text-start">
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            echo $i * $my_var;
                            echo "<br>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
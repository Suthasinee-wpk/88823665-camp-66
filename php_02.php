<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url(https://cdn.pixabay.com/photo/2022/06/25/13/33/landscape-7283516_1280.jpg);
            background-size: cover;   /* ขนาดคลุมทั้งหมด */
            background-attachment: fixed; /* ล็อคภาพพื้นหลัง */
        }
        h1 {
            color: #C25283;
            text-shadow: 1px 1px 2px #DA1884;
            margin-top: 30px;
            margin-bottom: 30px;
            padding: 15px;
            border: 3px solid #C25283;  /* กรอบหัวข้อ */
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.8); /* พื้นหลังโปร่งแสง */
            display: inline-block;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }
        h1:hover {
            transform: scale(1.05); /* กล่องขยับ */
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.3); /* เพิ่มเงาขึ้น */
        }
        table:hover {
            transform: scale(1.05); /* กล่องขยับ */
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.3); /* เพิ่มเงาขึ้น */
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $rows = 25; 
        $cols = 4; 
        ?>
        <h1>ตัวเลข 1-100</h1>
        <div class="row">
            <div class="col">
                <table class="table table-bordered text-center">
                    <tbody>
                        <?php
                        for ($i = 0; $i < $rows; $i++) {  /* สร้างตาราง */
                            echo "<tr>";
                            for ($j = 0; $j < $cols; $j++) {  
                                $number = $i + 1 + ($j * $rows);
                                if ($number <= 100) {
                                    if ($number % 2 == 0) {
                                        $type = "เป็นเลขคู่"; 
                                    } else {
                                        $type = "เป็นเลขคี่";
                                    }
                                    echo "<td>" . $number . " = " . $type . "</td>";
                                } else {
                                    echo "<td></td>"; 
                                }
                            }
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
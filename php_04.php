<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตรวจสอบเลขคู่-คี่</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url(https://cdn.pixabay.com/photo/2019/12/15/08/33/blue-4696575_1280.jpg);
            background-size: cover;   /* ขนาดคลุมทั้งหมด */
            background-attachment: fixed; /* ล็อคภาพพื้นหลัง */
        }
        h2 {
            color: #191970;          
            padding: 15px;
            margin-top: 30px;
            border: 3px solid #191970;  /* กรอบหัวข้อ */
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.8); /* พื้นหลังโปร่งแสง */
            
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }
        h2:hover {
            transform: scale(1.05); /* กล่องขยับ */
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.3); /* เพิ่มเงาขึ้น */
        }
        label {
            color: #191970;
        }
        .table {
            background-color: white;
        }
        .table th {
            background-color: #728FCE;
            color: white;
        }
        .table td {
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">แสดงข้อมูลเลขคู่-คี่</h2>
        <form method="POST" class="mt-4">
            <div class="mb-3">
                <label for="start" class="form-label">เริ่มต้น (Start):</label>
                <input type="number" class="form-control" id="start" name="start" required>
            </div>
            <div class="mb-3">
                <label for="end" class="form-label">สิ้นสุด (End):</label>
                <input type="number" class="form-control" id="end" name="end" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  /* ตรวจสอบว่ามีการส่งค่าจากฟอร์มหรือไม่ */
            $start = $_POST['start'];
            $end = $_POST['end'];
            if ($start <= $end) {   /* ตรวจสอบว่าค่า start ต้องน้อยกว่าหรือเท่ากับ end */
                echo "<h3 class='mt-5 text-center'>ข้อมูลเลขจาก $start ถึง $end</h3>";
                echo "<table class='table table-bordered text-center mt-3'>";
                echo "<thead><tr><th>ตัวเลข</th><th>ประเภท</th></tr></thead><tbody>";
                for ($i = $start; $i <= $end; $i++) {
                    if ($i % 2 == 0) {
                        $type = "เป็นเลขคู่"; 
                    } else {
                        $type = "เป็นเลขคี่";
                    }
                    echo "<tr><td>$i</td><td>$type</td></tr>";
                }   
                echo "</tbody></table>";
            } else {
                echo "<p class='alert alert-danger alert-custom text-center mt-4'>กรุณากรอกค่า Start ที่น้อยกว่าหรือเท่ากับ End!</p>";
            }
        }
        ?>
    </div>
</body>
</html>
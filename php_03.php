<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางสูตรคูณ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url(https://cdn.pixabay.com/photo/2016/12/02/12/06/background-1877688_1280.jpg);
            background-size: cover;   /* ขนาดคลุมทั้งหมด */
            background-attachment: fixed; /* ล็อคภาพพื้นหลัง */
        }
        h2 {
            color: #6A0DAD;          
            padding: 15px;
            border: 3px solid #6A0DAD;  /* กรอบหัวข้อ */
            border-radius: 30px;
            background: rgba(255, 255, 255, 0.8); /* พื้นหลังโปร่งแสง */
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }
        h2:hover {
            transform: scale(1.05); /* กล่องขยับ */
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.3); /* เพิ่มเงาขึ้น */
        }
        label {
            color: #6A0DAD;
        }
        .table {
            background-color: white;
        }
        .table th {
            background-color: #7B68EE;
            color: white;
        }
        .table td {
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">แสดงตารางสูตรคูณ</h2>
        <form method="POST" class="mt-4">
            <div class="mb-3">
                <label for="multiplicationTable" class="form-label">เลือกแม่สูตรคูณ (1-12):</label>
                <input type="number" class="form-control" id="multiplicationTable" name="multiplicationTable" min="1" max="12" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  /* ตรวจสอบว่ามีการส่งค่าจากฟอร์มหรือไม่ */
            $table = $_POST['multiplicationTable'];  /* รับค่าจากฟอร์ม */
            if ($table >= 1 && $table <= 12) {  /* ตรวจสอบว่าค่าที่กรอกอยู่ในช่วงที่กำหนดหรือไม่ */
                echo "<h3 class='mt-5 text-center'>ตารางสูตรคูณของแม่ $table</h3>";
                echo "<table class='table table-bordered text-center mt-3'>";
                echo "<thead><tr><th>ตัวเลข</th><th>ผลลัพธ์</th></tr></thead><tbody>";
                for ($i = 1; $i <= 12; $i++) { /* สร้างตารางสูตรคูณ */
                    $result = $table * $i;
                    echo "<tr><td>$table x $i</td><td>$result</td></tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<p class='mt-4 text-danger text-center'>กรุณากรอกเลขแม่สูตรคูณที่อยู่ในช่วง 1-12 เท่านั้น!</p>";
            }
        }
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Lab 7: Result</title>
    <style>
        .error { color: red; font-weight: bold; }
        table { border: 1px solid black; border-collapse: collapse; width: 50%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าจาก $_POST (ตรวจสอบชื่อ name ใน input ให้ตรงกับหน้าฟอร์ม)
        $fname = $_POST['personal-name'];
        $lname = $_POST['personal-names'];
        $gender = $_POST['radio-gender'];
        $b_year = $_POST['brithday']; 
        $username = $_POST['username'];
        $password = $_POST['password'];
        $c_password = $_POST['confirm_password'];
        $email = $_POST['email'];
        $terms = isset($_POST['checkbox-agree']) ? true : false;

        // แสดงผลข้อมูล
        echo "<h2>สรุปข้อมูลการลงทะเบียน</h2>";
        
        echo "<table>";
        echo "<tr><th>หัวข้อ</th><th>ข้อมูล</th></tr>";
        echo "<tr><td>ชื่อ-นามสกุล</td><td>$fname $lname</td></tr>";
        echo "<td>เพศ</td><td>$gender</td></tr>";
        echo "<tr><td>ปีเกิด</td><td>$b_year</td></tr>";
        echo "<tr><td>ชื่อผู้ใช้ (Username)</td><td>$username</td></tr>";
        echo "<tr><td>อีเมล (E-mail)</td><td>$email</td></tr>";
        echo "<tr><td>สถานะการยอมรับข้อตกลง</td><td>ยอมรับแล้ว</td></tr>";
        echo "</table>";
        
        echo "<p><a href='index.php'>กลับหน้าหลัก</a></p>";
        
    } else {
        echo "<p class='error'>กรุณาส่งข้อมูลผ่านฟอร์มเท่านั้น</p>";
        echo "<a href='index.php'>ไปที่หน้าฟอร์ม</a>";
    }
    ?>
</body>
</html>
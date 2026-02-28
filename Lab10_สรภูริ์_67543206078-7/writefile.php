<?php
$name = $_POST['name'] ?? 'ไม่ระบุชื่อ';
$lastname = $_POST['lastname'] ?? 'ไม่ระบุนามสกุล';

$content = "My Name is " . $name . "\n";
$content .= "My lastname is " . $lastname . "\n";

$filename = "myfile.txt";

if (file_put_contents($filename, $content)) {
    $status = "สร้างไฟล์และบันทึกข้อมูลสำเร็จแล้ว!";
} else {
    $status = "เกิดข้อผิดพลาดในการสร้างไฟล์!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ผลการบันทึก</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <fieldset style="width: 100%; margin: auto; margin-top: 10%;">
        <legend>สถานะการทำงาน</legend>
        <h2 style="color: #0cae00;"><?php echo $status; ?></h2>
        <label for="">ที่อยู่ของไฟล์:</label> <label style="color: grey;"><b><?php echo realpath($filename); ?></b></label>
        <br><br>
        <button onclick="window.location.href='form_67543206027-4.php'">กลับหน้าแรก</button>
    </fieldset>
</body>
</html>
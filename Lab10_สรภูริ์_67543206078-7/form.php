<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Lab 10: File Management</title>
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        font-family: sans-serif;
        color: #333;
        display: flex;
        justify-content: center;
        padding-top: 50px;
        background-color: #fff;
    }

    fieldset {
        border: 1px solid #ddd; /* เส้นขอบบางๆ สีเทา */
        border-radius: 4px;
        padding: 20px;
        width: 300px;
    }

        legend {
            padding: 0 10px;
            font-size: 0.9rem;
            color: #666;
        }

        .row {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 0.85rem;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="text"]:focus {
            border-color: #333; /* เปลี่ยนสีเส้นขอบเมื่อคลิก */
            outline: none;
        }

        button {
            background: #333;
            color: #fff;
            border: none;
            padding: 8px 15px;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
            font-size: 0.9rem;
        }

        button:hover {
            background: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <fieldset>
            <legend>ระบบบันทึกข้อมูลบุคคล</legend>
            <form action="writefile.php" method="post">
                <div class="input-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="กรอกชื่อของคุณ" required>
                </div>
                <div class="input-group">
                    <label for="lastname">Lastname:</label>
                    <input type="text" id="lastname" name="lastname" placeholder="กรอกนามสกุล" required>
                </div>
                <button type="submit">บันทึกข้อมูลลงไฟล์</button>
            </form>
        </fieldset>
    </div>
</body>
</html>
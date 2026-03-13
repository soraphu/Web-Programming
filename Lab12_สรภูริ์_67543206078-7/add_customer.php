<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB12</title>
</head>
<style>
    .title {
        text-align: right;
        height: 30px;
    }

    input,
    textarea,
    select {
        margin-left: 10%;
    }

    button {
        width: 10%;
        height: auto;
    }
</style>

<body>
    <form action="show_customer.php" method="post">
        <input hidden name="Customer_id" value="<?php echo $id ?>">
        <input hidden name="action" value="add">
        <h3 style="color: red;">เพิ่มข้อมูลลูกค้า</h3>
        <fieldset>
            <legend><strong>ข้อมูลลูกค้า</strong></legend>
            <table>
                <tr>
                    <td class="title">ชื่อ:</td>
                    <td><input type="text" name="Customer_Name" id="new_name" value="<?php echo $user['Customer_Name']; ?>" onblur="onBlurValidation( this, 3 )"></td>
                </tr>
                <tr>
                    <td class="title">นามสกุล:</td>
                    <td><input type="text" name="Customer_Lastname" id="new_lastname" value="<?php echo $user['Customer_Lastname']; ?>" onblur="onBlurValidation( this, 3 )"></td>
                </tr>
                <tr>
                    <td class="title">เพศ</td>
                    <td>
                        <input type="radio" name="Customer_Gender" value="Male" <?php echo ($user['Gender'] == 'Male') ? 'checked' : 'unchecked'; ?>> <label for="Gender">ชาย</label>
                        <input type="radio" name="Customer_Gender" value="Female" <?php echo ($user['Gender'] == 'Female') ? 'checked' : 'unchecked'; ?>> <label for="Customer_Gender">หญิง</label>
                    </td>
                </tr>
                <tr>
                    <td class="title">วัน-เดือน-ปีเกิด:</td>
                    <td><input type="date" name="Customer_Birthdate" id="new_birthdate" value="<?php echo $user['Birthdate']; ?>"></td>
                </tr>
                <tr>
                    <td class="title">ที่อยู่:</td>
                    <td><input type="text" name="Customer_Address" id="new_address" value="<?php echo $user['Address']; ?>" onblur="onBlurValidation( this, 3 )"></td>
                </tr>
                <tr>
                    <td class="title">จังหวัด:</td>
                    <td>
                        <select name="Customer_Province" id="new_province">
                            <option value="">เลือกจังหวัด</option>
                            <option value="เชียงใหม่" <?php echo ($user['Province'] == 'เชียงใหม่') ? 'selected' : ''; ?>>เชียงใหม่</option>
                            <option value="ลำพูน" <?php echo ($user['Province'] == 'ลำพูน') ? 'selected' : ''; ?>>ลำพูน</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="title">รหัสไปรษณีย์:</td>
                    <td><input type="text" name="Customer_PostalCode" id="new_postalcode" value="<?php echo $user['Zipcode']; ?>" onblur="onBlurValidation( this, 5 )" onkeyup="onKeyUpValidation(this)"></td>
                </tr>
                <tr>
                    <td class="title">โทรศัพท์:</td>
                    <td><input type="text" name="Customer_Phone" id="new_phone" value="<?php echo $user['Telephone']; ?>" onblur="onBlurValidation( this, 10 )" onkeyup="onKeyUpValidation(this)"></td>
                </tr>
                <tr>
                    <td class="title">รายละเอียดอื่นๆ:</td>
                    <td><textarea name="Customer_Details" rows="3" cols="20" id="new_description"><?php echo $user['Customer_Description']; ?></textarea></td>
                </tr>
            </table>
            <fieldset>
                <legend><strong>Account ของ ลูกค้า</strong></legend>
                <table>
                    <tr>
                        <td class="title">Username:</td>
                        <td><input type="text" name="Customer_username" id="username" onblur="onBlurValidation( this, 5 )"></td>
                    </tr>
                    <tr>
                        <td class="title">Password:</td>
                        <td><input type="password" name="Customer_password" id="user_password" onblur="onBlurValidation( this, 8 )"></td>
                    </tr>
                    <tr>
                        <td class="title">Confirm Password:</td>
                        <td><input type="password" name="Customer_confirm_password" id="user_confirm_password"></td>
                    </tr>
                </table>
            </fieldset>
        </fieldset>
        <div style="width:100%; margin:1.5% auto 0 auto; display:flex; flex-direction: row; justify-content: center; gap: 5%;">
            <button type="submit" name="save" value="update">เพิ่มข้อลูกค้า</button>
            <button type="button" name="cancel" value="cancel" onclick="window.location.href='show_customer.php';">ยกเลิก</button>
        </div>
    </form>
    <script>
        const form = document.querySelector('form');
        const name = document.getElementById('new_name').value.trim();
        const lastname = document.getElementById('new_lastname').value.trim();
        const gender = document.querySelector('input[name="Customer_Gender"]:checked');
        const birthdate = document.getElementById('new_birthdate').value.trim();
        const address = document.getElementById('new_address').value.trim();
        const province = document.getElementById('new_province').value.trim();
        const postalcode = document.getElementById('new_postalcode').value.trim();
        const phone = document.getElementById('new_phone').value.trim();
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('user_password').value.trim();
        const confirmPassword = document.getElementById('user_confirm_password').value.trim();

        form.addEventListener('submit', (e) => {

            if (!name || !lastname || !gender || !birthdate || !address || !province || !postalcode || !phone || !username || !password || !confirmPassword) {
                alert('กรุณากรอกข้อมูลให้ครบถ้วน');
                e.preventDefault();
                return;
            }

            if (password !== confirmPassword) {
                alert('รหัสผ่านไม่ตรงกัน');
                e.preventDefault();
                return;
            }
        }); //form

        function onBlurValidation(input, min) {
            const getLength = input.value.length;
            if (getLength < min && getLength != 0) {
                alert(`กรุณาใส่ข้อมูลไม่ต่ำกว่า ${min} ตัว`)
            }
        } //on blur validate

        function onKeyUpValidation(input) {
            const getLength = input.value.length;
            const reg = /^\d+$/;
            if (!reg.test(input.value) && getLength != 0) {
                alert("กรุณาใส่ข้อมูลเป็นตัวเลขเท่านั้น");
                input.value = '';
            }
        } // on keyup validate
    </script>
</body>

</html>
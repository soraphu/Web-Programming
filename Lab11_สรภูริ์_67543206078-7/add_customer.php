<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB8</title>
</head>
<style>
    .title {
        text-align: right;
        height: 30px;
    }
    input, textarea, select {
        margin-left: 10%;
    }
    button {
        width: 10%;
        height: auto;
    }
</style>
<body>
    <form action="show_customer.php" method="post">
        <input hidden name="Customer_id" value="<?php echo $id ?>" >
        <input hidden name="action" value="add" >
        <h3 style="color: red;">เพิ่มข้อมูลลูกค้า</h3>
        <fieldset>
            <legend><strong>ข้อมูลลูกค้า</strong></legend>
            <table>
                <tr>
                    <td class="title" >ชื่อ:</td>
                    <td><input type="text" name="Customer_Name" value="<?php echo $user['Customer_Name']; ?>" id="new_name"></td>
                </tr>
                <tr>
                    <td class="title" >นามสกุล:</td>
                    <td><input type="text" name="Customer_Lastname" id="new_lastname" value="<?php echo $user['Customer_Lastname']; ?>"></td>
                </tr>
                <tr>
                    <td class="title" >เพศ</td>
                    <td>
                        <input type="radio" name="Customer_Gender" value="Male" <?php echo ($user['Gender'] == 'Male') ? 'checked' : 'unchecked'; ?> > <label for="Gender">ชาย</label>
                        <input type="radio" name="Customer_Gender" value="Female" <?php echo ($user['Gender'] == 'Female') ? 'checked' : 'unchecked'; ?> > <label for="Customer_Gender">หญิง</label>
                    </td>
                </tr>  
                <tr>
                    <td class="title" >วัน-เดือน-ปีเกิด:</td>
                    <td><input type="date" name="Customer_Birthdate" id="new_birthdate" value="<?php echo $user['Birthdate']; ?>"></td>
                </tr>
                <tr>
                    <td class="title" >ที่อยู่:</td>
                    <td><input type="text" name="Customer_Address" id="new_address" value="<?php echo $user['Address']; ?>"></td>
                </tr>
                <tr>
                    <td class="title" >จังหวัด:</td>
                    <td>
                        <select name="Customer_Province" id="new_province">
                            <option value="">เลือกจังหวัด</option>
                            <option value="เชียงใหม่" <?php echo ($user['Province'] == 'เชียงใหม่') ? 'selected' : ''; ?>>เชียงใหม่</option>
                            <option value="ลำพูน" <?php echo ($user['Province'] == 'ลำพูน') ? 'selected' : ''; ?>>ลำพูน</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="title" >รหัสไปรษณีย์:</td>
                    <td><input type="text" name="Customer_PostalCode" id="new_postalcode" value="<?php echo $user['Zipcode']; ?>"></td>
                </tr>
                <tr>
                    <td class="title" >โทรศัพท์:</td>
                    <td><input type="text" name="Customer_Phone" id="new_phone" value="<?php echo $user['Telephone']; ?>"></td>
                </tr>
                <tr>
                    <td class="title" >รายละเอียดอื่นๆ:</td>
                    <td><textarea name="Customer_Details" rows="3" cols="20" id="new_description"><?php echo $user['Customer_Description']; ?></textarea></td>
                </tr>
            </table>
            <fieldset>
                <legend><strong>Account ของ ลูกค้า</strong></legend>
                <table>
                    <tr>
                        <td class="title" >Username:</td>
                        <td><input type="text" name="Customer_username" id=""></td>
                    </tr>
                    <tr>
                        <td class="title" >Password:</td>
                        <td><input type="password" name="Customer_password" id=""></td>
                    </tr>
                    <tr>
                        <td class="title" >Confirm Password:</td>
                        <td><input type="password" name="" id=""></td>
                    </tr>
                </table>
            </fieldset>
        </fieldset>
        <div style="width:100%; margin:1.5% auto 0 auto; display:flex; flex-direction: row; justify-content: center; gap: 5%;">
            <button type="submit" name="save" value="update">เพิ่มข้อลูกค้า</button>
            <button type="button" name="cancel" value="cancel" onclick="window.location.href='show_customer.php';">ยกเลิก</button>
        </div>
    </form>
</body>
</html>
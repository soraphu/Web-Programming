<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB8</title>
    <style>
        table, #title {
            border-collapse: collapse;
            margin-left:auto;
            margin-right:auto;
            width: 80%;
        }
        th {
            text-align: center;
            vertical-align: middle;
            background-color: #f2f2f2;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        td  {
            text-align: left;
            vertical-align: middle;
        }
    </style>
</head>
<body style="padding-top:2%" >
    <table>
        <div id='title' style="margin-bottom:1%; display:flex; flex-direction:row; justify-content:space-between;">
            <div></div>
            <a href="add_customer.php" style="color:blue;">ข้อมูลลูกค้า</a>
            <a href="add_customer.php" style="color:red;">เพิ่มข้อมูลลูกค้า</a>
        </div>
        <thead>
            <tr>
                <th>Id</th>
                <th>ชื่อ - สกุล</th>
                <th>จังหวัด</th>
                <th>โทรศัพท์</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'connectDB.php' ;
                if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == 'edit' ) {
                    $id = $_POST[ 'Customer_id' ] ;
                    $name = $_POST['Customer_Name'];
                    $lastname = $_POST['Customer_Lastname'];
                    $gender = $_POST['Customer_Gender'];
                    $birthdate = $_POST['Customer_Birthdate'];
                    $address = $_POST['Customer_Address'];
                    $province = $_POST['Customer_Province'];
                    $postalcode = $_POST['Customer_PostalCode'];
                    $phone = $_POST['Customer_Phone'];
                    $description = $_POST['Customer_Details'];
                    
                    $_connected = connectDB() ;
                    
                    $_sql = "UPDATE customer SET ";
                    $_sql .= "Customer_Name = '$name', ";
                    $_sql .= "Customer_Lastname = '$lastname', ";
                    $_sql .= "Gender = '$gender', ";
                    $_sql .= "Birthdate = '$birthdate', ";
                    $_sql .= "Address = '$address', ";
                    $_sql .= "Province = '$province', ";
                    $_sql .= "Zipcode = '$postalcode', ";
                    $_sql .= "Telephone = '$phone', ";
                    $_sql .= "Customer_Description = '$description' ";
                    $_sql .= "WHERE Customer_id = '$id';";
                    
                    mysqli_query( $_connected, $_sql ) ;
                    header("Location: " . "show_customer.php");
                } else if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == 'add' ) {
                    $_connected = connectDB() ;
                    $name = $_POST['Customer_Name'];
                    $lastname = $_POST['Customer_Lastname'];
                    $gender = $_POST['Customer_Gender'];
                    $birthdate = $_POST['Customer_Birthdate'];
                    $address = $_POST['Customer_Address'];
                    $province = $_POST['Customer_Province'];
                    $postalcode = $_POST['Customer_PostalCode'];
                    $phone = $_POST['Customer_Phone'];
                    $description = $_POST['Customer_Details'];
                    $username = $_POST['Customer_username'] ;
                    $password = $_POST['Customer_password'] ;

                    $_sql = "INSERT INTO customer ";
                    $_sql .= "( Customer_Name, ";
                    $_sql .= "Customer_Lastname , ";
                    $_sql .= "Gender, ";
                    $_sql .= "Birthdate, "; 
                    $_sql .= "Address, "; 
                    $_sql .= "Province, "; 
                    $_sql .= "Zipcode, "; 
                    $_sql .= "Telephone, "; 
                    $_sql .= "Customer_Description, "; 
                    $_sql .= "username, "; 
                    $_sql .= "password ) ";
                    $_sql .= "VALUES "; //VALUES
                    $_sql .= "( '$name', ";
                    $_sql .= "'$lastname' , ";
                    $_sql .= "'$gender', ";
                    $_sql .= "'$birthdate', "; 
                    $_sql .= "'$address', "; 
                    $_sql .= "'$province', "; 
                    $_sql .= "'$postalcode', "; 
                    $_sql .= "'$phone', "; 
                    $_sql .= "'$description', "; 
                    $_sql .= "'$username', "; 
                    $_sql .= "'$password' ) ;";
                    
                    mysqli_query( $_connected, $_sql );
                    header("Location: " . "show_customer.php");
                } else if ($_GET['Customer_id']) {
                    $id = $_GET['Customer_id'] ;
                    $_connected = connectDB();
                    $_sql = "DELETE FROM customer WHERE Customer_id = '$id' ;" ;
                    mysqli_query( $_connected, $_sql ) ;
                    header("Location: " . "show_customer.php");
                }
                else {
                    $_connected = connectDB();
                    fetchData( $_connected ) ;
                }
                function fetchData( $connect ){
                    if( $result = mysqli_query($connect, "SELECT * FROM customer" ) ) {
                        while ($rows = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $rows['Customer_id']; ?></td>
                                <td><?php echo $rows['Customer_Name'] . " " . $rows['Customer_Lastname']; ?></td>
                                <td><?php echo $rows['Province']; ?></td>
                                <td><?php echo $rows['Telephone']; ?></td>
                                <td><a href="edit_customer.php?Customer_id=<?php echo $rows['Customer_id']; ?>">แก้ไข</a></td>
                                <td><a href="show_customer.php?Customer_id=<?php echo $rows['Customer_id']; ?>" onclick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่?')">ลบ</a></td>
                            </tr>
                            <?php
                        }
                        mysqli_free_result($result);
                    }
                    mysqli_close($connect);
                }
            ?>
        </tbody>
    </table>
</body>
</html>

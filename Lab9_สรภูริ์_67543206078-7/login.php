<?php
    session_start() ;
    if ($_SERVER['REQUEST_METHOD'] == "POST" ) {
        $username = $_POST['username'] ;
        $password = $_POST['password'] ;
        $_connect = new mysqli("localhost", "admin", "114477", "web_program");
        if(mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        } 
        $_sql = "SELECT * FROM customer WHERE username = '$username' AND password = '$password';" ;
        $result = mysqli_query( $_connect, $_sql ) ;
        if ( mysqli_num_rows( $result ) > 0 ) {
            $row = mysqli_fetch_assoc( $result ) ;
            $_SESSION['Customer_id'] = $row['Customer_id'] ;
            $_SESSION['username'] = $row['username'] ;
            header("Location: " . "show_customer.php");
        } 
        else {
            echo "<script>alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');</script>" ;
        }
    } else if ( isset($_SESSION['username']) ) {
        header("Location: " . "show_customer.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB8</title>
</head>
<style>
    input {
        margin-left: 2%;
    }
    table {
        width: 30%;
    }
    label {
        width: 3%;
    }
    tr {
        display: flex;
        flex-direction: row;
        align-content: center;
    }
    .title {
        width: 70px;
    }

</style>
<body>
    <form action="" method="post">
        <fieldset style="padding:2% 2% 2% 2%;" >
            <Legend><strong>Login</strong></Legend>
            <table>
                <tr>
                    <td class="title" ><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username" required><br><br></td>    
                </tr>
                <tr>
                    <td class="title"><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" required><br><br></td>
                </tr>
                <tr style="margin-top: 10px;" >
                    <td class="title" ></td>
                    <td><input style="width:80px" type="submit" value="Login" ></td>
                </tr>
            </table>
        </fieldset>
    </form>    
</body>
</html>
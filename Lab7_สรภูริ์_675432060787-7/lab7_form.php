<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab5 - Web Programing</title>
    <style>
        body {
            background-color: #cccccc;
        }

        legend {
            font-weight: bold;
            font-size: 160%;
        }

        fieldset {
            border: 2px solid #8b8b8b;
            border-radius: 16px;
            margin: 0 0 4rem 0;
            padding: 2rem;
            box-shadow: 14px 20px 0px rgb(42, 42, 42);
        }

        input {
            margin: 0 0 2rem 0;
        }

        input[type="text"] {
            height: 20px;
            border-radius: 12px;
            padding-left: 1%;
            background-color: #6a6a6a;
            color: white;
        }

        input[type='radio'] {
            transform: scale(1.4);
        }

        label.radio {
            margin: 0 1% 0 1%;
        }

        .title {
            display: inline-block;
            font-weight: bold;
            width: 10rem;
        }

        #submit-btn {
            height: 40px;
            width: 6rem;
            margin: 0 90% 0 10%;
            border-radius: 16px;
            color: #ffffff;
            font-weight: bold;
            font-size: 100%;
            background-color: #cf8300;
            transition-duration: 400ms;
        }

        #submit-btn:hover {
            transition-duration: 400ms;
            background-color: black;
            color: yellow;
            font-size: small;
        }
    </style>
</head>

<body>
    <form action="lab7_submit.php" method="POST" style="width: 70%;">
        <fieldset>
            <legend name="personal" style="color: red;">Personal Information</legend>
            <label for="fname" class="title">FirstName:</label> <input type="text" name="personal-name" id="fname"
                value=""><br>
            <label for="lname" class="title">lastName:</label> <input type="text" name="personal-names" id="lname"
                value=""><br>
            <label class="title">Gender:</label>
            <input type="radio" name="radio-gender" id="gender-male" value="Male">
                <label for="gender-male" class="radio">Male</label>
            <input type="radio" name="radio-gender" id="gender-female" value="Female">
                <label for="gender-female" class="radio">Female</label><br>
            <label for="birthday" class="title">Birth:</label> <input type="date" name="brithday" id="birthday">
        </fieldset>
        <hr style="margin: 1rem 0px 1rem 0;">
        <fieldset>
            <legend name="account" style="color: blue;">Account Info</legend>
            <label for="username" class="title">Username:</label> <input type="text" name="username" id="username"><br>
            <label for="pass" class="title">Password:</label> <input type="text" name="password" id="pass"><br>
            <label for="confirm-pass" class="title">Confirm Password: </label> <input type="text" name="confirm_password"
                id="confirm-pass"><br>
            <label for="email" class="title">E-mail:</label> <input type="text" name="email" id="email"><br>
            <input type="checkbox" name="" id="checkbox-agree"> <label for="checkbox-agree">I agree to Terms of Service
                and Privacy Policy.</label> <br>
            <input type="submit" name="" id="submit-btn">
        </fieldset>
    </form>

</body>

</html>
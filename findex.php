<?php
@$err = $_GET['err'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="mystyle.css" rel="stylesheet" type="text/css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 80px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        h4 {
            text-align: center;
            color: #555;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group input:focus {
            border-color: #007bff;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }

        .submit-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
    <script type="text/javascript">
        function isnum(val) {
            return Number(parseFloat(val)) == val;
        }

        function validate() {
            var text11;
            text11 = form1.uname.value;
            if (text11.length < 4 || text11.length > 10) {
                alert('Length of username must be between 4 and 10');
                return false;
            }

            var text12;
            text12 = form1.passcode.value;
            if (text12.length == 0) {
                alert('Password is blank please re-enter it');
                return false;
            }

            return confirm('Are you sure?');
        }
    </script>
</head>

<body>
    <div class="container">
        <h2>DAC Display</h2>
        <h4>Please enter username within 10 digits</h4>
        <form name="form1" action="auth.php" id="1" method="post" onsubmit="return validate()">
            <div class="form-group">
                <label for="uname">User Name</label>
                <input class="input" name="uname" type="text">
            </div>
            <div class="form-group">
                <label for="passcode">Password</label>
                <input class="input" name="passcode" type="password">
            </div>
            <?php
            if ($err == 1)
                echo "<p class='error-message'>Invalid Username or Password</p>";
            ?>
            <input class="submit-btn" name="submit" type="submit" value="Submit">
        </form>
    </div>

    

</body>

</html>

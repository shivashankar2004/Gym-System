<?php
session_start();
if(isset($_SESSION["user_data"]))
{
    header("location:./dashboard/admin/");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gym | Login</title>
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="stylesheet" type="text/css" href="./css/entypo.css">
    <style>
           html, body {
    height: 100%; /* Make sure the html and body elements cover the full height of the viewport */
    margin: 0; /* Remove default margin */
}

body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('gym.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: #fff; /* Default text color to white */
    font-family: 'Arial', sans-serif;
    min-height: 100%; /* Ensure the body element covers the full height of the viewport */
}


        .login-container {
            margin-top: 200px; 
            width: 400px;
            margin-left: 525px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9); /* Slightly transparent white background */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-header h1 {
            color: black; /* Bright color for the header */
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group-addon {
            background-color: green; /* Matching color with the header */
            color: #fff;
            border: black;
        }

        .form-control {
            border: black solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            background-color: GREEN; /* Matching gradient color */
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: grey; /* Darker shade on hover */
        }

        .login-bottom-links {
            text-align: center;
            margin-top: 10px;
        }

        .login-bottom-links a {
            color: #ff7e5f; /* Link color matching the theme */
            text-decoration: none;
        }

        .login-bottom-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div id="container">
    <div class="login-container">
        <div class="login-header login-caret">
            <div class="login-content">
                <h1>GYM MANAGEMENT</h1>
                <!-- progress bar indicator -->
                <div class="login-progressbar-indicator">
                    <h3>43%</h3>
                    <span>logging in...</span>
                </div>
            </div>
        </div>

        <div class="login-progressbar">
            <div></div>
        </div>

        <div class="login-form">
            <div class="login-content">
                <form action="secure_login.php" method='post' id="bb">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="entypo-user"></i>
                            </div>
                            <input type="text" placeholder="User ID" class="form-control" name="user_id_auth" id="textfield" data-rule-minlength="6" data-rule-required="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="entypo-key"></i>
                            </div>
                            <input type="password" name="pass_key" id="pwfield" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="btnLogin" class="btn btn-primary">
                            Log In
                            <i class="entypo-login"></i>
                        </button>
                    </div>
                </form>

                <div class="login-bottom-links">
                    <a class="link">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

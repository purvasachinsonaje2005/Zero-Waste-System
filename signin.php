<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Garbage Collection Management</title>
    <!-- Site favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/Waste Management Logo.jpeg">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

    <style>
        body {
            background: linear-gradient(120deg, #4CAF50, #8BC34A);
            font-family: 'Inter', sans-serif;
        }
        .login-header {
            background: #fff;
            border-bottom: 2px solid #4CAF50;
            padding: 15px 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .brand-logo {
            position: absolute;
            left: 30px;
        }
        .brand-logo img {
            width: 100px;
        }
        .header-title {
            font-style: italic;
            font-size: 24px;
            font-weight: bold;
            color: #4CAF50;
            text-align: center;
        }
        .login-wrap {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-box {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
            padding: 30px;
            border-radius: 10px;
        }
        .login-title h2 {
            font-size: 28px;
            font-weight: bold;
            color: #4CAF50;
        }
        .input-group {
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #dcdcdc;
        }
        .input-group-text {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 0 5px 5px 0;
        }
        .custom-control-label {
            font-size: 14px;
        }
        .forgot-password a {
            color: #4CAF50;
            text-decoration: none;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
        .btn-primary {
            background-color: #4CAF50;
            border: none;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            background-color: #388E3C;
        }
        .login-box img {
            width: 100%;
        }
        @media (max-width: 768px) {
            .login-wrap {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="login-header box-shadow">
        <div class="brand-logo">
            <a href="signin.php">
                <img src="vendors/images/apple-touch-icon.png" alt="Logo">
            </a>
        </div>
        <div class="header-title">
            Zero Waste System
        </div>
    </div>
    
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="vendors/images/image.png" alt="Image">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center">Login</h2>
                            <hr>
                        </div>
                        <form method="POST" action="login.php" enctype="multipart/form-data" autocomplete="off">
                            <div class="input-group custom">
                                <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input type="password" name="password" placeholder="Password" required class="form-control form-control-lg">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                            <div class="row pb-30">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <div class="forgot-password">
                                        <a href="forgot-password.php">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>
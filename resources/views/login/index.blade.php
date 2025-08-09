<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mountain Race Championship</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url('https://images.unsplash.com/photo-1517649763962-0c623066013b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            width: 400px;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
            position: relative;
            overflow: hidden;
        }

        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #800000, #4CAF50);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h1 {
            color: #800000;
            font-size: 28px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .logo p {
            color: #4CAF50;
            font-size: 14px;
            margin-top: 5px;
        }

        .input-group {
            margin-bottom: 25px;
            position: relative;
        }

        .input-group input {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: all 0.3s;
        }

        .input-group input:focus {
            border-color: #800000;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 15px;
            color: #800000;
            font-size: 18px;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .remember-forgot a {
            color: #800000;
            text-decoration: none;
            transition: color 0.3s;
        }

        .remember-forgot a:hover {
            color: #4CAF50;
            text-decoration: underline;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
        }

        .checkbox-container input {
            margin-right: 8px;
            accent-color: #800000;
        }

        .checkbox-container label {
            color: #333;
        }

        button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(45deg, #800000, #A52A2A);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        button:hover {
            background: linear-gradient(45deg, #A52A2A, #800000);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(128, 0, 0, 0.4);
        }

        .register-link {
            text-align: center;
            margin-top: 25px;
            color: #333;
            font-size: 14px;
        }

        .register-link a {
            color: #800000;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s;
        }

        .register-link a:hover {
            color: #4CAF50;
            text-decoration: underline;
        }

        .mountain-icon {
            text-align: center;
            margin-bottom: 20px;
            color: #4CAF50;
            font-size: 40px;
        }

        @media (max-width: 480px) {
            .login-container {
                width: 90%;
                padding: 30px 20px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <div class="mountain-icon">
            <i class="fas fa-mountain"></i>
        </div>
        <div class="logo">
            <h1>Mountain Race 2024</h1>
            <p>Challenge Your Limits</p>
        </div>

        <form action="/login" method="POST">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email Address" required>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" required>
            </div>

            <div class="remember-forgot">
                <div class="checkbox-container">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit">Login</button>

            <div class="register-link">
                Don't have an account? <a href="#">Register here</a>
            </div>
        </form>
    </div>
</body>
</html>

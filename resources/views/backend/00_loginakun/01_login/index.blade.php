<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/assets/abgblora/logo/racenewlogo.png" type="image/x-icon">

    <title>Silahkan Login - SNOC X</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
                        url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.96);
            width: 420px;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(128, 0, 0, 0.2);
            position: relative;
            border-top: 4px solid #800000;
        }

        .mountain-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .mountain-icon {
            color: #800000;
            font-size: 42px;
            margin-bottom: 10px;
            animation: mountainGlow 2s infinite alternate;
        }

        @keyframes mountainGlow {
            0% { text-shadow: 0 0 5px rgba(128, 0, 0, 0.3); }
            100% { text-shadow: 0 0 15px rgba(128, 0, 0, 0.6); }
        }

        .mountain-header h1 {
            color: #800000;
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 1.5px;
            margin-bottom: 5px;
        }

        .mountain-header p {
            color: #4CAF50;
            font-size: 14px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 14px 14px 14px 45px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .form-group input:focus {
            border-color: #800000;
            box-shadow: 0 0 0 3px rgba(128, 0, 0, 0.1);
            outline: none;
        }

        .form-group i {
            position: absolute;
            left: 15px;
            top: 14px;
            color: #800000;
            font-size: 18px;
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .remember {
            display: flex;
            align-items: center;
        }

        .remember input {
            margin-right: 8px;
            accent-color: #800000;
        }

        .remember label {
            color: #555;
        }

        .forgot-password {
            color: #800000;
            text-decoration: none;
            font-weight: 600;
        }

        .forgot-password:hover {
            color: #4CAF50;
            text-decoration: underline;
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(to right, #800000, #a23535);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        .login-btn:hover {
            background: linear-gradient(to right, #a23535, #800000);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(128, 0, 0, 0.3);
        }

        .login-btn::after {
            content: '↑';
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0;
            transition: all 0.3s;
        }

        .login-btn:hover::after {
            opacity: 1;
            right: 15px;
        }

        .register {
            text-align: center;
            margin-top: 25px;
            color: #555;
            font-size: 14px;
        }

        .register a {
            color: #800000;
            font-weight: 600;
            text-decoration: none;
            border-bottom: 1px dashed #800000;
            padding-bottom: 2px;
            transition: all 0.3s;
        }

        .register a:hover {
            color: #4CAF50;
            border-bottom-color: #4CAF50;
        }

        .mountain-border {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(90deg, transparent, #4CAF50, transparent);
            opacity: 0.3;
        }

        @media (max-width: 480px) {
            .login-container {
                width: 90%;
                padding: 30px 20px;
            }

            .mountain-header h1 {
                font-size: 26px;
            }

            .mountain-icon {
                font-size: 36px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="login-container">
      <div class="mountain-header text-center">
    {{-- <img src="/assets/abgblora/logo/racenewlogo.png" alt="Logo" class="mb-2" style="max-width: 120px;" loading="lazy"> --}}
<div class="mountain-header text-center">
  <div style="display: flex; gap: 10px; align-items: center; justify-content: center;">
    {{-- <img src="/assets/abgblora/logo/3.jpg" alt="" width="75px"> --}}
    <img style="margin-bottom:-50px;" src="/assets/abgblora/logo/3.jpg" alt="" width="75px">

</div>
<img src="/assets/abgblora/logo/snocnew.png" alt="" width="200px">
  {{-- <h1 class="fw-bold">SNOC-X</h1> --}}
  <p style="margin-top:-100px;" class="text-muted">SABHAGIRIWANA17</p>
</div>

    {{-- <h1 class="fw-bold">SNOC-X</h1>
    <p class="text-muted">SABHAGIRIWANA17</p> --}}
</div>


<form action="{{ url('/login') }}" method="POST">
    @csrf
<div class="form-group">
    <i class="fas fa-envelope"></i>
    <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
    @error('email')
        <div style="color: red; font-size: 13px; margin-top: 4px;">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Password" required>
    @error('password')
        <div style="color: red; font-size: 13px; margin-top: 4px;">
            {{ $message }}
        </div>
    @enderror
</div>


    {{-- <div class="options">
        <div class="remember">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label>
        </div>
        <a href="#" class="forgot-password">Forgot password?</a>
    </div> --}}

    <button type="submit" class="login-btn">Login</button>

    <div class="register">
        Belum Punya Akun ? <a href="/daftar">Daftar Disini !</a>
    </div>
</form>
        <div class="mountain-border"></div>
    </div>
</body>
</html>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600&display=swap');

    :root {
      --primary: #000080;
      --accent: #ffd100;
    }

    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: linear-gradient(45deg, #000428, #004e92);
      overflow-x: hidden;
    }

    .architect-grid {
      position: fixed;
      width: 100vw;
      height: 100vh;
      background:
        linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px),
        linear-gradient(180deg, rgba(255,255,255,0.05) 1px, transparent 1px);
      background-size: 30px 30px;
      animation: gridMove 40s linear infinite;
    }

    @keyframes gridMove {
      0% { background-position: 0 0; }
      100% { background-position: 1000px 1000px; }
    }

    .login-container {
      position: relative;
      max-width: 450px;
      padding: 3rem;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(0,0,0,0.2);
      backdrop-filter: blur(10px);
      transform-style: preserve-3d;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      margin: 5vh auto;
      border: 1px solid rgba(255,255,255,0.3);
      z-index: 2;
    }

    .login-container::before {
      content: '';
      position: absolute;
      inset: -2px;
      background: linear-gradient(45deg, var(--primary), var(--accent), var(--primary));
      z-index: -1;
      border-radius: 22px;
      animation: borderGlow 6s ease-in-out infinite;
      filter: blur(20px);
      opacity: 0.6;
      background-size: 400% 400%;
    }

    @keyframes borderGlow {
      0%, 100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
    }

    .logo-section {
      display: flex;
      justify-content: center;
      gap: 2rem;
      margin-bottom: 2.5rem;
    }

    .logo-section img {
      width: 80px;
      height: 80px;
      object-fit: contain;
      filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
      transition: transform 0.4s ease;
    }

    .logo-section img:hover {
      transform: scale(1.1);
    }

    h1.title {
      text-align: center;
      color: var(--primary);
      font-size: 2rem;
      margin-bottom: 2rem;
      font-weight: 600;
      text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .input-group {
      position: relative;
      margin-bottom: 1.5rem;
    }

    .input-group input {
      width: 100%;
      padding: 1rem;
      border: 2px solid #e0e0e0;
      border-radius: 10px;
      font-size: 1rem;
      transition: all 0.3s ease;
      background: rgba(255,255,255,0.9);
    }

    .input-group input:focus {
      border-color: var(--primary);
      box-shadow: 0 0 15px rgba(0,0,128,0.1);
      outline: none;
    }

    .input-group i {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #666;
    }

    .btn-login {
      width: 100%;
      padding: 1rem;
      background: linear-gradient(45deg, var(--primary), #1a237e);
      border: none;
      border-radius: 10px;
      color: white;
      font-size: 1.1rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 1rem;
    }

    .btn-login:hover {
      transform: translateY(-3px) scale(1.02);
      box-shadow: 0 5px 15px rgba(241, 239, 239, 0.3);
    }

    .footer-links {
      display: flex;
      justify-content: space-between;
      margin-top: 1.5rem;
      font-size: 0.9rem;
    }

    .footer-links a {
      color: var(--primary);
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .footer-links a:hover {
      color: var(--accent);
    }

    @media (max-width: 576px) {
      .login-container {
        margin: 2rem;
        padding: 2rem;
      }

      .logo-section img {
        width: 60px;
        height: 60px;
      }

      h1.title {
        font-size: 1.5rem;
      }

      .footer-text {
        font-size: 0.8rem;
        padding: 1rem;
      }
    }

    .footer-text {
      text-align: center;
      color: white;
      background-color: rgba(0, 0, 0, 0.4);
      border: 2px solid black;
      border-radius: 10px;
      padding: 1rem 1.5rem;
      margin: 3rem auto 1rem auto;
      max-width: 25%;
      font-size: 1rem;
      font-weight: 500;
      backdrop-filter: blur(4px);
      z-index: 2;
      margin-top: 150px;
    }
    .footer-text {
  max-width: 100%; /* default untuk mobile */
}

@media (min-width: 768px) {
  .footer-text {
    max-width: 90%;
  }
}

@media (min-width: 992px) {
  .footer-text {
    max-width: 60%;
  }
}

@media (min-width: 1200px) {
  .footer-text {
    max-width: 25%;
  }
}


    .skyscraper {
      position: fixed;
      bottom: 0;
      height: 30vh;
      width: 100%;
      background: linear-gradient(to top, rgba(0,0,0,0.1), transparent);
      z-index: -1;
    }
    </style>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
      <title>Silahkan Login !</title>
      <link rel="icon" href="/assets/abgblora/logo/logokabupatenblora.png" type="image/x-icon">

    </head>
    <body>
      <div class="architect-grid"></div>
      <div class="skyscraper"></div>

      <div class="login-container">
        <div class="logo-section">
            <img src="/assets/abgblora/logo/iconabgblora.png" alt="Kabupaten Blora" style="width: 80%;" />
          </div>
              <div class="container">
            <h4 class="title" style="font-family: 'Poppins', sans-serif; text-align: center;">Sign in to ABG Blora</h4>
          </div>

          <div style="font-family: 'Poppins', sans-serif;">
            <style>
                input::placeholder {
                    font-family: 'Poppins', sans-serif;
                }
            </style>

            <form action="/login" method="POST">
                @csrf

                @if ($errors->has('loginError'))
                    <div class="error-message" style="color: red;">
                        {{ $errors->first('loginError') }}
                    </div>
                @endif

                <div class="input-group">
                    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" required />
                    <i class="fas fa-user"></i>
                    @error('email')
                        <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required />
                    <i class="fas fa-lock"></i>
                    @error('password')
                        <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn-login" style="font-size: 16px;">Login</button>

                <div class="footer-links" style="display: flex; justify-content: flex-end;">
                    <a href="/daftar">Register Here?</a>
                </div>
            </form>
        </div>


      </div>

<div class="footer-text" style="font-family: 'Poppins', sans-serif; font-size: 12px;;">
  <img src="/assets/abgblora/logo/logokabupatenblora.png" alt="Logo Kabupaten Blora" width="35">
  <img src="/assets/abgblora/logo/pupr.png" alt="Logo PUPR" width="35">
  <br>
  ABG Blora Bangunan Gedung <br>
  Dinas Pekerjaan Umum Dan Penataan Ruang <br>
  Kabupaten Blora Provinsi Jawa Tengah
</div>
    </body>
    </html>

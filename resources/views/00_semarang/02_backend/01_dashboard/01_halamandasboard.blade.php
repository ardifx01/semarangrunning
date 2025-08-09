
@include('00_semarang.02_backend.01_dashboard.header')

<body>
  <div class="container">
    <div class="overlay" id="overlay"></div>

    <!-- Sidebar -->
   @include('00_semarang.02_backend.01_dashboard.sidebar')

    <!-- Main Content -->
    <div class="main-content">
      <div class="header">
  <div class="header-left"><h3>Dashboard SNOC X | Selamat Datang <span>{{ $user?->name ?? 'Data Belum Diupdate' }}</span></h3></div>

        {{-- <div class="header-left"><h3>Dashboard SNOC X</h3></div> --}}
        <div class="header-right">
          <div class="toggle-sidebar" id="toggleSidebar"><i class="fas fa-bars"></i></div>
          <div class="user-profile">
                <span>{{ $user?->statusadmin?->statusadmin ?? 'Data Belum Diupdate' }}</span>
            {{-- <span>{{ $auth->user()?->statusadmin?->statusadmin }}</span> --}}
        </div>
        </div>
      </div>

<div class="content">
  <div class="welcome-container">
    <div class="animated-background">
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
    </div>
    <div class="welcome-content">
      {{-- <h3 class="welcome-text">Selamat Datang</h3> --}}
      <h3 class="subtitle">Selamat Datang di EVENT SNOC-X</h3>
      <h3 class="team-name">Sabhagiriwana17</h3>
      <div class="logo-container">
        <div class="logo-circle">
          <svg viewBox="0 0 100 100" class="logo-svg">
            <path d="M50 15 L75 50 L50 85 L25 50 Z" class="logo-path"/>
          </svg>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .content {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
    overflow: hidden;
    position: relative;
  }

  .welcome-container {
    position: relative;
    text-align: center;
    z-index: 2;
    max-width: 800px;
    padding: 40px;
    border-radius: 20px;
    backdrop-filter: blur(10px);
    background-color: rgba(255, 255, 255, 0.1);
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.1);
    animation: float 6s ease-in-out infinite;
  }

  .welcome-text {
    font-size: 4rem;
    font-weight: 700;
    color: white;
    margin-bottom: 10px;
    text-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    animation: textGlow 3s ease-in-out infinite alternate;
  }

  .subtitle {
    font-size: 2rem;
    font-weight: 400;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 5px;
    animation: fadeIn 2s ease-in-out;
  }

  .team-name {
    font-size: 1.8rem;
    font-weight: 300;
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 30px;
    animation: slideUp 1.5s ease-out;
  }

  .logo-container {
    display: flex;
    justify-content: center;
    margin-top: 30px;
  }

  .logo-circle {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    display: flex;
    justify-content: center;
    align-items: center;
    animation: pulse 4s infinite;
  }

  .logo-svg {
    width: 60px;
    height: 60px;
  }

  .logo-path {
    fill: none;
    stroke: white;
    stroke-width: 5;
    stroke-dasharray: 200;
    stroke-dashoffset: 200;
    animation: draw 3s ease-in-out forwards, rotate 10s linear infinite;
    animation-delay: 1s;
  }

  .animated-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
  }

  .particle {
    position: absolute;
    background: rgba(255, 255, 255, 0.5);
    border-radius: 50%;
    animation: floatParticle 15s infinite linear;
  }

  .particle:nth-child(1) {
    width: 20px;
    height: 20px;
    top: 20%;
    left: 10%;
    animation-delay: 0s;
  }

  .particle:nth-child(2) {
    width: 15px;
    height: 15px;
    top: 60%;
    left: 80%;
    animation-delay: 2s;
  }

  .particle:nth-child(3) {
    width: 25px;
    height: 25px;
    top: 80%;
    left: 20%;
    animation-delay: 4s;
  }

  .particle:nth-child(4) {
    width: 10px;
    height: 10px;
    top: 30%;
    left: 70%;
    animation-delay: 6s;
  }

  .particle:nth-child(5) {
    width: 30px;
    height: 30px;
    top: 70%;
    left: 30%;
    animation-delay: 8s;
  }

  /* Animations */
  @keyframes float {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-20px);
    }
  }

  @keyframes textGlow {
    0% {
      text-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }
    100% {
      text-shadow: 0 5px 25px rgba(255, 255, 255, 0.6);
    }
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  @keyframes slideUp {
    from {
      transform: translateY(30px);
      opacity: 0;
    }
    to {
      transform: translateY(0);
      opacity: 1;
    }
  }

  @keyframes pulse {
    0% {
      transform: scale(1);
      box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
    }
    70% {
      transform: scale(1.05);
      box-shadow: 0 0 0 15px rgba(255, 255, 255, 0);
    }
    100% {
      transform: scale(1);
      box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
    }
  }

  @keyframes draw {
    to {
      stroke-dashoffset: 0;
    }
  }

  @keyframes rotate {
    from {
      transform: rotate(0deg);
    }
    to {
      transform: rotate(360deg);
    }
  }

  @keyframes floatParticle {
    0% {
      transform: translateY(0) translateX(0);
    }
    25% {
      transform: translateY(-100px) translateX(50px);
    }
    50% {
      transform: translateY(0) translateX(100px);
    }
    75% {
      transform: translateY(100px) translateX(50px);
    }
    100% {
      transform: translateY(0) translateX(0);
    }
  }
</style>
    </div>
  </div>

  <!-- JS -->
  <script>
    const sidebar = document.getElementById('sidebar');
    const toggleSidebar = document.getElementById('toggleSidebar');
    const overlay = document.getElementById('overlay');
    const mainContent = document.querySelector('.main-content');

    toggleSidebar.addEventListener('click', () => {
      sidebar.classList.toggle('active');
      overlay.classList.toggle('active');
      mainContent.style.filter = sidebar.classList.contains('active') ? 'blur(2px)' : 'none';
    });

    overlay.addEventListener('click', () => {
      sidebar.classList.remove('active');
      overlay.classList.remove('active');
      mainContent.style.filter = 'none';
    });

    window.addEventListener('resize', () => {
      if (window.innerWidth > 768) {
        sidebar.classList.add('active');
        overlay.classList.remove('active');
        mainContent.style.filter = 'none';
      } else {
        sidebar.classList.remove('active');
      }
    });
  </script>
</body>
</html>


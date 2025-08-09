<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="/assets/abgblora/logo/racenewlogo.png">

    <title>Sabhagiriwana17 National Orienteering - Coming Soon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1a2a6c;
            --secondary: #b21f1f;
            --accent: #fdbb2d;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--primary), var(--secondary), var(--accent));
            color: white;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow-x: hidden;
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            padding: 3rem 2rem;
            background: rgba(0, 0, 0, 0.75);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            margin: 2rem auto;
            animation: fadeIn 1s ease-out;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .logo {
            width: 120px;
            height: 120px;
            background: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 1rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
            border: 3px solid var(--accent);
        }

        h1 {
            font-size: clamp(1.8rem, 4vw, 2.8rem);
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            background: linear-gradient(to right, white, var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1.2;
        }

        .tagline {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 1.5rem;
            font-weight: 300;
        }

        .construction-icon {
            font-size: 4rem;
            margin: 1.5rem 0;
            display: inline-block;
            animation: bounce 2s infinite;
        }

        .description {
            max-width: 700px;
            margin: 0 auto 2rem;
            font-size: clamp(1rem, 2vw, 1.1rem);
            opacity: 0.9;
        }

        .countdown {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin: 2rem auto;
            max-width: 600px;
        }

        .countdown-item {
            background: rgba(255, 255, 255, 0.15);
            padding: 1rem 0.5rem;
            border-radius: 10px;
            min-width: 80px;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .countdown-number {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.3rem;
            font-family: 'Courier New', monospace;
        }

        .countdown-label {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.7;
        }

        .contact-info {
            margin: 1.5rem 0;
            font-size: 1.1rem;
        }

        .contact-info a {
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
        }

        .social-icon {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2rem;
            transition: all 0.3s;
            color: white;
        }

        .social-icon:hover {
            background: white;
            color: var(--primary);
            transform: translateY(-3px) scale(1.1);
        }

        .progress-container {
            width: 100%;
            max-width: 500px;
            margin: 2rem auto;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            height: 10px;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(to right, var(--accent), #f5af19);
            width: 65%;
            border-radius: 10px;
            animation: progressAnimation 2s ease-in-out infinite alternate;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-20px); }
            60% { transform: translateY(-10px); }
        }

        @keyframes progressAnimation {
            0% { width: 65%; }
            100% { width: 70%; }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                padding: 2rem 1.5rem;
                width: 95%;
            }

            .logo {
                width: 100px;
                height: 100px;
                font-size: 2rem;
            }

            .countdown-item {
                min-width: 70px;
                padding: 0.8rem 0.3rem;
            }

            .countdown-number {
                font-size: 1.7rem;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 1.5rem 1rem;
                border-radius: 15px;
            }

            .countdown {
                gap: 0.5rem;
            }

            .countdown-item {
                min-width: 60px;
                padding: 0.6rem 0.2rem;
            }

            .countdown-number {
                font-size: 1.5rem;
            }

            .construction-icon {
                font-size: 3rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <div class="logo">S17</div>
            <div class="tagline">National Orienteering Championships</div>
        </div>

        <div class="construction-icon">
            <i class="fas fa-hard-hat"></i>
        </div>

        <h1>Sabhagiriwana17<br>National Competitions</h1>

        <p class="description">
            We're building something extraordinary for the orienteering community! Our website will be your comprehensive resource for event details, registration, rules, and everything about this prestigious national competition.
        </p>

        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>

        <div class="countdown">
            <div class="countdown-item">
                <div class="countdown-number" id="days">00</div>
                <div class="countdown-label">Days</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="hours">00</div>
                <div class="countdown-label">Hours</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="minutes">00</div>
                <div class="countdown-label">Minutes</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="seconds">00</div>
                <div class="countdown-label">Seconds</div>
            </div>
        </div>

        <div class="contact-info">
            <p>For inquiries and partnership opportunities:</p>
            <p>
                <a href="mailto:info@sabhagiriwana17.or.id">
                    <i class="fas fa-envelope"></i> info@sabhagiriwana17.or.id
                </a>
                <br>
                <a href="tel:+6281234567890">
                    <i class="fas fa-phone"></i> +62 812-3456-7890
                </a>
            </p>
        </div>

        <div class="social-icons">
            <a href="#" class="social-icon" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="social-icon" aria-label="Twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon" aria-label="YouTube">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </div>

    <script>
        // Set launch date (October 17, 2024)
        const launchDate = new Date("2024-10-17T00:00:00").getTime();

        // Update countdown every second
        const countdown = setInterval(function() {
            const now = new Date().getTime();
            const distance = launchDate - now;

            // Time calculations
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display results
            document.getElementById("days").textContent = days.toString().padStart(2, '0');
            document.getElementById("hours").textContent = hours.toString().padStart(2, '0');
            document.getElementById("minutes").textContent = minutes.toString().padStart(2, '0');
            document.getElementById("seconds").textContent = seconds.toString().padStart(2, '0');

            // If countdown finished
            if (distance < 0) {
                clearInterval(countdown);
                document.querySelector(".construction-icon").innerHTML = '<i class="fas fa-flag-checkered"></i>';
                document.querySelector("h1").textContent = "We're Live!";
                document.querySelector(".description").innerHTML = "The website is now available. Click below to enter!";
                document.querySelector(".countdown").innerHTML = '<a href="#" style="color:white;background:var(--accent);padding:1rem 2rem;border-radius:50px;text-decoration:none;font-weight:bold;">ENTER SITE</a>';
            }
        }, 1000);

        // Add service worker for PWA capability (optional)
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js').then(registration => {
                    console.log('ServiceWorker registration successful');
                }).catch(err => {
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }
    </script>
</body>
</html>

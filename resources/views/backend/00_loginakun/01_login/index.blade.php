<style>
    /* Default height for small devices (mobile phones) */

    /* Responsive typography and spacing */
    @media (max-width: 576px) {
        .header-title {
            font-size: 1.8rem; /* Adjusted font size */
        }

        .header-description {
            font-size: 0.9rem;
        }

        .container-fluid {
            padding: 20px;
        }
    }

    @media (max-width: 360px) {
        .header-title {
            font-size: 1.5rem;
        }

        .header-description {
            font-size: 0.8rem;
        }
    }
</style>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Silahkan Login !</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="/assets/login/css/bootstrap-login-form.min.css" />

  <link rel="icon" href="/assets/icon/logokabupatenblora.png"  type="image/x-icon">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />


</head>

<body>
  <!-- Start your project here-->
  <section style="height: 100vh; display: flex; flex-direction: column; justify-content: space-between; align-items: center; overflow: hidden; margin: 0; padding: 0;">
    <div class="container-fluid h-custom" style="height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">

        <div class="row d-flex justify-content-center align-items-center w-100">
            <!-- Logo dan Teks -->
            <div class="col-12 col-md-6 d-flex flex-column text-center text-md-left align-items-center" style="gap: 15px;">

                <div class="d-flex justify-content-center align-items-center mb-3">
                    <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="Logo Kabupaten Blora" width="95" loading="lazy">
                    <img src="/assets/icon/pupr.png" class="img-fluid" alt="Logo PUPR" width="95" loading="lazy">
                </div>
{{--
                <h1 class="header-title" style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: bold;">
                    <span style="font-weight: bold; font-style: italic; color: black;">MASJAKI</span>
                    <span style="font-weight: bold; font-style: italic; color: #064420;">BLORA</span>
                </h1>
                <p class="header-description" style="font-family: 'Montserrat', sans-serif; font-size: 1rem; color: black; font-weight: bold;">
                    Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora
                </p> --}}
            </div>

            <!-- Form Login -->
            <div class="col-12 col-md-4">
                <form action="/login" method="post">
                    @csrf
                    <div class="mb-4">
                        <input type="text" name="email" class="form-control rounded-full" id="email" placeholder="Email" style="padding: 10px 15px;" />
                        <label class="form-label" for="email">Email address</label>
                    </div>

                    <div class="mb-3">
                        <input type="password" name="password" class="form-control rounded-full" id="password" placeholder="Password" style="padding: 10px 15px;" />
                        <label class="form-label" for="password">Password</label>
                    </div>

                    <div class="text-center mt-4 pt-2">
                        <button type="submit" class="btn btn-dark btn-lg"
                            style="background-color: #064420; color: white; padding: 10px 50px; border: none;"
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#064420'; this.style.color='white';">
                            <i class="fas fa-sign-in-alt me-2"></i> <span style="font-size:14px; text-transform:capitalize;">Login</span>
                        </button>

                        <p class="small fw-bold mt-2 pt-1 mb-0">
                            Belum Punya Akun? <a href="/404" class="link-danger">Daftar</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="d-flex flex-column text-center justify-content-center py-3 px-4 w-100"
         style="background: rgb(3, 69, 3); display: flex; align-items: center;">
        <div class="d-flex justify-content-center align-items-center mb-2">
            <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="Logo Kabupaten Blora" width="20" loading="lazy">
            <img src="/assets/icon/pupr.png" class="img-fluid" alt="Logo PUPR" width="20" loading="lazy">
        </div>

        <div class="text-white" style="font-size: 14px; font-weight: 400;">
            © Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora Provinsi Jawa Tengah
        </div>
    </div>
</section>

  <!-- MDB -->
  <script type="text/javascript" src="/assets/login/js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>

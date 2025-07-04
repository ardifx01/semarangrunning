      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand bg-body">

        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>

            <!-- Pastikan Bootstrap Icons & CSS untuk posisi badge -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
  .nav-icon-wrapper {
    position: relative;
    display: inline-block;
    width: 40px;
    text-align: center;
  }
  .nav-icon-wrapper .badge {
    position: absolute;
    top: 0;
    right: 0;
    font-size: 0.7rem;
    padding: 2px 5px;
  }
    .nav-icon-wrapper i {
    color: #000 !important;
  }
</style>
<style>
@media (max-width: 767.98px) {
  .bungkushilang {
    display: none !important;
  }
}
</style>

{{-- <div class="bungkushilang"> --}}
<!-- 1. PBG.SLF -->

@can('superadmin')

<li class="nav-item bungkushilang">
  <a class="nav-link" href="#">
    <span class="nav-icon-wrapper">
      <i class="bi bi-building-check"></i>
      <span class="badge bg-danger">3</span>
    </span>
  </a>
</li>

<!-- 2. Tracking -->
<li class="nav-item bungkushilang">
  <a class="nav-link" href="#">
    <span class="nav-icon-wrapper">
      <i class="bi bi-geo-alt"></i>
      <span class="badge bg-danger">2</span>
    </span>
  </a>
</li>

<!-- 3. Pendataan -->
<li class="nav-item bungkushilang">
  <a class="nav-link" href="#">
    <span class="nav-icon-wrapper">
      <i class="bi bi-card-list"></i>
      <span class="badge bg-danger">6</span>
    </span>
  </a>
</li>

<!-- 4. Bantek -->
<li class="nav-item bungkushilang">
  <a class="nav-link" href="#">
    <span class="nav-icon-wrapper">
      <i class="bi bi-tools"></i>
      <span class="badge bg-danger">1</span>
    </span>
  </a>
</li>

<!-- 5. Sosialisasi -->
<li class="nav-item bungkushilang">
  <a class="nav-link" href="#">
    <span class="nav-icon-wrapper">
      <i class="bi bi-megaphone"></i>
      <span class="badge bg-danger">4</span>
    </span>
  </a>
</li>

<!-- 6. KRK -->
<li class="nav-item bungkushilang">
  <a class="nav-link" href="#">
    <span class="nav-icon-wrapper">
      <i class="bi bi-map"></i>
      <span class="badge bg-danger">5</span>
    </span>
  </a>
</li>

<!-- 7. Penilik -->
<li class="nav-item bungkushilang">
  <a class="nav-link" href="#">
    <span class="nav-icon-wrapper">
      <i class="bi bi-person-check"></i>
      <span class="badge bg-danger">24</span>
    </span>
  </a>
</li>

<!-- 8. MBR Gambar -->
<li class="nav-item bungkushilang">
  <a class="nav-link" href="#">
    <span class="nav-icon-wrapper">
      <i class="bi bi-house-heart"></i>
      <span class="badge bg-danger">23</span>
    </span>
  </a>
</li>

<!-- 9. Bantuan Gambar -->
<li class="nav-item bungkushilang">
  <a class="nav-link" href="#">
    <span class="nav-icon-wrapper">
      <i class="bi bi-file-earmark-image"></i>
      <span class="badge bg-danger">65</span>
    </span>
  </a>
</li>

<!-- 10. Hibah Bangunan -->
<li class="nav-item bungkushilang">
  <a class="nav-link" href="#">
    <span class="nav-icon-wrapper">
      <i class="bi bi-bank"></i>
      <span class="badge bg-danger">23</span>
    </span>
  </a>
</li>

<!-- 11. Akun -->
<li class="nav-item bungkushilang">
  <a class="nav-link" href="#">
    <span class="nav-icon-wrapper">
      <i class="bi bi-person-circle"></i>
      <span class="badge bg-danger">35</span>
    </span>
  </a>
</li>

<!-- 12. Database -->
<li class="nav-item bungkushilang">
  <a class="nav-link" href="#">
    <span class="nav-icon-wrapper">
      <i class="bi bi-hdd-stack"></i>
      <span class="badge bg-danger">56</span>
    </span>
  </a>
</li>

<!-- 13. Statistik -->
<li class="nav-item bungkushilang">
  <a class="nav-link" href="#">
    <span class="nav-icon-wrapper">
      <i class="bi bi-bar-chart-line"></i>
      <span class="badge bg-danger">34</span>
    </span>
  </a>
</li>

@endcan

{{-- </div> --}}
            {{-- <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li> --}}
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            <!--begin::Navbar Search-->
            {{-- <li class="nav-item">
              <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="bi bi-search"></i>
              </a>
            </li> --}}
            <!--end::Navbar Search-->
            <!--begin::Messages Dropdown Menu-->
            {{-- <li class="nav-item dropdown">
              <a class="nav-link" data-bs-toggle="dropdown" href="#">
                <i class="bi bi-chat-text"></i>
                <span class="navbar-badge badge text-bg-danger">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <a href="#" class="dropdown-item">
                  <!--begin::Message-->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="/assets/00_administrator/dist/assets/img/user1-128x128.jpg"
                        alt="User Avatar"
                        class="img-size-50 rounded-circle me-3"
                      />
                    </div>
                    <div class="flex-grow-1">
                      <h3 class="dropdown-item-title">
                        Brad Diesel
                        <span class="float-end fs-7 text-danger"
                          ><i class="bi bi-star-fill"></i
                        ></span>
                      </h3>
                      <p class="fs-7">Call me whenever you can...</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                      </p>
                    </div>
                  </div>
                  <!--end::Message-->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!--begin::Message-->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="/assets/00_administrator/dist/assets/img/user8-128x128.jpg"
                        alt="User Avatar"
                        class="img-size-50 rounded-circle me-3"
                      />
                    </div>
                    <div class="flex-grow-1">
                      <h3 class="dropdown-item-title">
                        John Pierce
                        <span class="float-end fs-7 text-secondary">
                          <i class="bi bi-star-fill"></i>
                        </span>
                      </h3>
                      <p class="fs-7">I got your message bro</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                      </p>
                    </div>
                  </div>
                  <!--end::Message-->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!--begin::Message-->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="/assets/00_administrator/dist/assets/img/user3-128x128.jpg"
                        alt="User Avatar"
                        class="img-size-50 rounded-circle me-3"
                      />
                    </div>
                    <div class="flex-grow-1">
                      <h3 class="dropdown-item-title">
                        Nora Silvester
                        <span class="float-end fs-7 text-warning">
                          <i class="bi bi-star-fill"></i>
                        </span>
                      </h3>
                      <p class="fs-7">The subject goes here</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                      </p>
                    </div>
                  </div>
                  <!--end::Message-->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
              </div>
            </li> --}}
            <!--end::Messages Dropdown Menu-->
            <!--begin::Notifications Dropdown Menu-->
            {{-- <li class="nav-item dropdown">
              <a class="nav-link" data-bs-toggle="dropdown" href="#">
                <i class="bi bi-bell-fill"></i>
                <span class="navbar-badge badge text-bg-warning">15</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="bi bi-envelope me-2"></i> 4 new messages
                  <span class="float-end text-secondary fs-7">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="bi bi-people-fill me-2"></i> 8 friend requests
                  <span class="float-end text-secondary fs-7">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                  <span class="float-end text-secondary fs-7">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
              </div>
            </li> --}}
            <!--end::Notifications Dropdown Menu-->
            <!--begin::Fullscreen Toggle-->
            <li class="nav-item">
              <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
              </a>
            </li>
            <!--end::Fullscreen Toggle-->
            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                {{-- <img
                src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar"
                  class="user-image rounded-circle shadow"
                  alt="User Image"
                />
                <span class="d-none d-md-inline">{{ Auth::user()->name }}</span> --}}
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-success">
                  {{-- <img
                    src="{{ asset('storage/' . Auth::user()->avatar) }}"
                    class="rounded-circle shadow"
                    alt="User Image"
                  />
                  <p> --}}
                    {{-- {{ Auth::user()->name }}
                    <small style="color: navy;">{{ Auth::user()->statusadmin->statusadmin }}</small> --}}
                  </p>
                </li>
                <!--end::User Image-->
                <!--begin::Menu Body-->
                <!--end::Menu Body-->
                <!--begin::Menu Footer-->
                <li class="user-footer">
                  {{-- <a href="#" class="btn btn-default btn-flat">Profile</a> --}}
                  {{-- <a href="/logout" class="btn btn-default btn-flat float-end">Logout</a> --}}
                  <form action="{{ url('/logout') }}" method="POST" class="float-end">
                    @csrf
                    <button type="submit" class="btn btn-default btn-flat">
                        <i class="bi bi-door-open"></i> Logout
                    </button>
                </form>


                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->

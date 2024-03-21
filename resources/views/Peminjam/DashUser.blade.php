<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Without menu - Layouts | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
      <div class="layout-container">
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
               <!-- Search -->
              {{-- <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div> --}}
              <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Perpusta</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Koleksi</a>
                      </li>
                      {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li> --}}
                      {{-- <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                      </li> --}}
                    </ul>
                   
                  </div>
                </div>
              </nav>
              <!-- /Search --> 

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="col-lg-9 col-md-9 order-1">
                <div class="row">
                  <div class="col-lg-3 col-md-12 col-3 mb-4">
                      <div class="card" style="width: 12rem;">
                        <div class="card-body">
                          <h5 class="card-title text-center">JAGUNG REBUS</h5>
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1sfDqQwjU0DVvy3SQMy4wJbsmEfMAlFdrjQ&usqp=CAU" class="card-img-top" alt="" width="10px" height="150px">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12 col-3 mb-4">
                      <div class="card" style="width: 12rem;">
                        <div class="card-body">
                          <h5 class="card-title text-center">DADAR GULUNG</h5>
                          <img src="data:image/jpeg;base64,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" class="card-img-top" alt="" width="10px" height="150px">
                        </div>
                      </div>
                    </div>
                </div>
            
            
            
              
              </div>
              <!-- Layout Demo -->
              <div class="layout-demo-wrapper">
                <div class="layout-demo-placeholder">
                  
                <div class="layout-demo-info">
                  <h4>Layout without Menu (Navigation)</h4>
                  <button class="btn btn-primary" type="button" onclick="history.back()">Go Back</button>
                </div>
              </div>
              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
      name="viewport"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
    />
    <!-- Material Kit CSS -->
    <link
      href="assets/css/material-dashboard.css?v=2.1.0"
      rel="stylesheet"
    />
  </head>

  <body class="dark-edition">
    <div class="wrapper">
      <div
        class="sidebar"
        data-color="purple"
        data-background-color="black"
        data-image="assets/img/sidebar-2.jpg"
      >
        <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo"> <a class="navbar-brand" href="#">
        <img src="../assets/img/logo.png" width="100%" height="100%" style="margin-left: 2%;" alt="">
      </a></div>
        <div class="sidebar-wrapper">
          <ul class="nav">
          <li class="nav-item active">
              <a class="nav-link" href="./adminDashboard_sidebar.php">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#client" class="nav-link" data-toggle="collapse"
                ><i class="material-icons">person</i>
                <p>Client</p></a
              >
              <div class="collapse" id="client">
                <ul class="list-unstyled nav">
                  <li class="nav-item">
                    <a class="nav-link" name href="./addClient.php"
                      >Add Client</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./assignService.php"
                      >Assign Service</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./modifyClient.php">
                      Modify Client</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./createService.php"
                      >Modify Service</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./createPackage.php"
                      >Create Package</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Auto SLA</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a href="#master" class="nav-link" data-toggle="collapse"
                ><i class="material-icons">supervisor_account</i>
                <p>Master</p></a
              >
              <div class="collapse" id="master">
                <ul class="list-unstyled nav">
                  <li class="nav-item">
                    <a class="nav-link" name href="./bankDetails.php"
                      >Bank Details</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./LOB.php">LOB</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./mandatoryDocuments.php"
                      >Mandatory Documents</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./package.php">Create Package</a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="./service.php
                    "
                      >Service</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./serviceType.php"
                      >Service Type</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./addModifyUser.php"
                      >Add Modify User</a
                    >
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="./standardMacro.php"
                      >Standard Macro</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./reportColor.php"
                      >Report Color Code</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./reportConfig.php"
                      >Report Configuration Master</a
                    >
                  </li>
                </ul>
              </div>
            </li>
            <li class="navbar-item">
              <a href="#" class="nav-link">
                <i class="material-icons">library_books</i>
                <p>Reports</p></a
              >
            </li>
            <li class="navbar-item">
              <a href="#" class="nav-link">
                <i class="material-icons">content_paste</i>
                <p>Task</p></a
              >
            </li>
            <li class="navbar-item">
              <a href="#" class="nav-link"
                ><i class="material-icons">account_circle</i>
                <p>User</p></a
              >
            </li>
            <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="upgrade.php">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
          </ul>
        </div>
      </div>
      <div class="main-panel">
        <!-- Navbar -->
        <nav
          class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top"
        >
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
            </div>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              aria-controls="navigation-index"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)">
                    <i class="material-icons">notifications</i>
                    <p class="d-lg-none d-md-block">
                      Notifications
                    </p>
                  </a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                <div class="ripple-container"></div></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="MyProfile.php">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="API/db_logout.php">Log out</a>
                </div>
              </li>
                <!-- your navbar here -->
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
    <!--   Core JS Files   -->
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/material-dashboard.js?v=2.1.0"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/demo/demo.js"></script>
  </body>
</html>
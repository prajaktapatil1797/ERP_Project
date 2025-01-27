<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Modify User
    </title>
    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
      name="viewport"
    />
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
    <!-- CSS Files -->
    <link
      href="assets/css/material-dashboard.css?v=2.1.0"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/3aaaecc22c.js"
      crossorigin="anonymous"
    ></script>
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"
    />

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
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
        <div class="logo">
          <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Logo
          </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
          <li class="nav-item">
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
          id="navigation-example"
        >
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <a class="navbar-brand" href="javascript:void(0)">Modify User</a>
            </div>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              aria-controls="navigation-index"
              aria-expanded="false"
              aria-label="Toggle navigation"
              data-target="#navigation-example"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
              <form class="navbar-form">
                <div class="input-group no-border">
                  <input
                    type="text"
                    value=""
                    class="form-control"
                    placeholder="Search..."
                  />
                  <button
                    type="submit"
                    class="btn btn-default btn-round btn-just-icon"
                  >
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="/client_Side_Files/adminDashboard_sidebar.php"
                  >
                    <i class="material-icons">dashboard</i>
                    <p class="d-lg-none d-md-block">
                      Stats
                    </p>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="javscript:void(0)"
                    id="navbarDropdownMenuLink"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="material-icons">notifications</i>
                    <span class="notification">5</span>
                    <p class="d-lg-none d-md-block">
                      Some Actions
                    </p>
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
                    <a class="dropdown-item" href="javascript:void(0)"
                      >Mike John responded to your email</a
                    >
                    <a class="dropdown-item" href="javascript:void(0)"
                      >You have 5 new tasks</a
                    >
                    <a class="dropdown-item" href="javascript:void(0)"
                      >You're now friend with Andrew</a
                    >
                    <a class="dropdown-item" href="javascript:void(0)"
                      >Another Notification</a
                    >
                    <a class="dropdown-item" href="javascript:void(0)"
                      >Another One</a
                    >
                  </div>
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
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Modify User</h4>
                  </div>
                  <div class="card-body">
                    <form id="ajax">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Title</label>
                            <select id="Title" class="form-control" required>
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">First Name</label>
                            <input
                              name="First Name"
                              type="text"
                              class="form-control"
                              required
                            />
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating"
                              >Middle Name</label
                            >
                            <input
                              name="Middle Name"
                              type="text"
                              class="form-control"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="Last Name" class="bmd-label-floating"
                              >Last Name
                            </label>
                            <input
                              name="Last Name"
                              type="text"
                              class="form-control"
                            />
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating"
                              >Contact No.</label
                            >
                            <input
                              name="Contact No."
                              type="number"
                              class="form-control"
                              min="0"
                              required
                            />
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating"
                              >Password Mail To</label
                            >
                            <input
                              name="Password Mail To"
                              type="email"
                              class="form-control"
                              required
                            />
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Groups</label>
                            <select name="Groups" class="form-control" required>
                              <option>Choose..</option>
                              <option>1..</option>
                              <option>2..</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Status</label>
                            <select name="Status" class="form-control">
                              <option>Active</option>
                              <option>completed</option>
                              <option>Pending</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Login Name</label>
                            <input
                              name="Login Name"
                              type="text"
                              class="form-control"
                            />
                          </div>
                        </div>

                        <!--checkBoxes-->

                        <!--checkBoxes-->
                      </div>

                      <div class="row justify-content-end">
                        <button
                          type="submit"
                          class="btn btn-primary"
                          style="margin-right: 1%;"
                        >
                          Submit
                        </button>
                        <button
                          type="button"
                          class="btn btn-primary"
                          style="margin-right: 2%;"
                          onclick="formReset()"
                        >
                          Cancel
                        </button>
                      </div>

                      <div class="clearfix"></div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- table -->

              <div class="col-md-12">
                <div class="row">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h3 class="card-title">Modify User</h3>
                    </div>
                    <table class="table table-hover" style="margin-top: 4%;">
                      <thead class="text-primary thead-dark">
                        <th>
                          First Name
                        </th>

                        <th>
                          Last Name
                        </th>
                        <th>
                          Email ID
                        </th>
                        <th>
                          Level
                        </th>
                        <th>
                          Edit
                        </th>
                        <th>
                          Delete
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Dakota
                          </td>
                          <td>
                            Rice
                          </td>
                          <td>
                            abc@xyz.com
                          </td>
                          <td>
                            OF
                          </td>

                          <td class="text-primary">
                            <button
                              type="button"
                              class="btn btn-primary btn-sm"
                            >
                              Edit
                            </button>
                          </td>
                          <td class="text-primary">
                            <button
                              type="button"
                              class="btn btn-primary btn-sm"
                            >
                              Delete
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Minerva
                          </td>
                          <td>
                            Hooper
                          </td>
                          <td>
                            abc@xyz.com
                          </td>
                          <td>
                            QC
                          </td>

                          <td class="text-primary">
                            <button
                              type="button"
                              class="btn btn-primary btn-sm"
                            >
                              Edit
                            </button>
                          </td>
                          <td class="text-primary">
                            <button
                              type="button"
                              class="btn btn-primary btn-sm"
                            >
                              Delete
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- table end -->
            </div>
          </div>
        </div>

        <script>
          const x = new Date().getFullYear();
          let date = document.getElementById("date");
          date.innerHTML = "&copy; " + x + date.innerHTML;
        </script>
      </div>
    </div>
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
    <script>
      function formReset() {
        document.getElementById("ajax").reset();
      }

      $(document).ready(function () {
        $().ready(function () {
          $sidebar = $(".sidebar");

          $sidebar_img_container = $sidebar.find(".sidebar-background");

          $full_page = $(".full-page");

          $sidebar_responsive = $("body > .navbar-collapse");

          window_width = $(window).width();

          $(".fixed-plugin a").click(function (event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass("switch-trigger")) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });

          $(".fixed-plugin .active-color span").click(function () {
            $full_page_background = $(".full-page-background");

            $(this).siblings().removeClass("active");
            $(this).addClass("active");

            var new_color = $(this).data("color");

            if ($sidebar.length != 0) {
              $sidebar.attr("data-color", new_color);
            }

            if ($full_page.length != 0) {
              $full_page.attr("filter-color", new_color);
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr("data-color", new_color);
            }
          });

          $(".fixed-plugin .background-color .badge").click(function () {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");

            var new_color = $(this).data("background-color");

            if ($sidebar.length != 0) {
              $sidebar.attr("data-background-color", new_color);
            }
          });

          $(".fixed-plugin .img-holder").click(function () {
            $full_page_background = $(".full-page-background");

            $(this).parent("li").siblings().removeClass("active");
            $(this).parent("li").addClass("active");

            var new_image = $(this).find("img").attr("src");

            if (
              $sidebar_img_container.length != 0 &&
              $(".switch-sidebar-image input:checked").length != 0
            ) {
              $sidebar_img_container.fadeOut("fast", function () {
                $sidebar_img_container.css(
                  "background-image",
                  'url("' + new_image + '")'
                );
                $sidebar_img_container.fadeIn("fast");
              });
            }

            if (
              $full_page_background.length != 0 &&
              $(".switch-sidebar-image input:checked").length != 0
            ) {
              var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                .find("img")
                .data("src");

              $full_page_background.fadeOut("fast", function () {
                $full_page_background.css(
                  "background-image",
                  'url("' + new_image_full_page + '")'
                );
                $full_page_background.fadeIn("fast");
              });
            }

            if ($(".switch-sidebar-image input:checked").length == 0) {
              var new_image = $(".fixed-plugin li.active .img-holder")
                .find("img")
                .attr("src");
              var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                .find("img")
                .data("src");

              $sidebar_img_container.css(
                "background-image",
                'url("' + new_image + '")'
              );
              $full_page_background.css(
                "background-image",
                'url("' + new_image_full_page + '")'
              );
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css(
                "background-image",
                'url("' + new_image + '")'
              );
            }
          });

          $(".switch-sidebar-image input").change(function () {
            $full_page_background = $(".full-page-background");

            $input = $(this);

            if ($input.is(":checked")) {
              if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn("fast");
                $sidebar.attr("data-image", "#");
              }

              if ($full_page_background.length != 0) {
                $full_page_background.fadeIn("fast");
                $full_page.attr("data-image", "#");
              }

              background_image = true;
            } else {
              if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr("data-image");
                $sidebar_img_container.fadeOut("fast");
              }

              if ($full_page_background.length != 0) {
                $full_page.removeAttr("data-image", "#");
                $full_page_background.fadeOut("fast");
              }

              background_image = false;
            }
          });

          $(".switch-sidebar-mini input").change(function () {
            $body = $("body");

            $input = $(this);

            if (md.misc.sidebar_mini_active == true) {
              $("body").removeClass("sidebar-mini");
              md.misc.sidebar_mini_active = false;

              $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar();
            } else {
              $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar(
                "destroy"
              );

              setTimeout(function () {
                $("body").addClass("sidebar-mini");

                md.misc.sidebar_mini_active = true;
              }, 300);
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function () {
              window.dispatchEvent(new Event("resize"));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function () {
              clearInterval(simulateWindowResize);
            }, 1000);
          });
        });
      });

      $("form").submit(function (event) {
        var formdata = $("form").serializeArray();
        var data = {};
        $(formdata).each(function (index, obj) {
          data[obj.name] = obj.value;
        });
        console.log(data);
        event.preventDefault();
      });
      $.ajax;
    </script>
  </body>
</html>

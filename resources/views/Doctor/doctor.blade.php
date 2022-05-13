<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>i Track</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/t.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-7 " href="indexx.html"><img src="images/track.svg" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="indexx.html"><img src="images/tlogo.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <!-- <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul> -->
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <!-- <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div> -->
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/my-profile-icon-png-3 (1).jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li> -->
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Add New Student 
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Check Student Profile 
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                
                
                
              </ul>
            </div>
           
            <!-- <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div> -->
            <!-- <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div> -->
          </div>
          <!-- To do section tab ends -->
          <!-- <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div> -->
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="indexx.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#primary" aria-expanded="false" aria-controls="primary">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">primary</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="primary">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#first-term"
                    aria-expanded="false" aria-controls="first-term"> first term </a></li>


                <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#second-term"
                    aria-expanded="false" aria-controls="second-term"> second term </a></li>


               

              </ul>
            </div>
            <div class="collapse" id="first-term">
              <h5 style="text-align:center; color: #4b49ac; font-size: 16px">first term</h5>
            <ul class="nav flex-column sub-menu">

              <li class="nav-item"> <a class="nav-link" href="doctor-level.html"> 1 </a></li>
              <li class="nav-item"> <a class="nav-link"  href="doctor-level.html"> 2 </a>
              </li>
              <li class="nav-item"> <a class="nav-link"  href="doctor-level.html" >3</a></li>
              <li class="nav-item"> <a class="nav-link"  href="doctor-level.html" >4</a></li>
              <li class="nav-item"> <a class="nav-link" href="doctor-level.html">5</a></li>
              <li class="nav-item"> <a class="nav-link"  href="doctor-level.html" >6</a></li>
            </ul>
            </div>
            <div class="collapse" id="second-term">
              <h5 style="text-align:center; color: #4b49ac; font-size: 16px">second-term</h5>
            <ul class="nav flex-column sub-menu">

              <li class="nav-item"> <a class="nav-link"  href="doctor-level.html"> 1 </a></li>
              <li class="nav-item"> <a class="nav-link"  href="doctor-level.html" > 2 </a>
              </li>
              <li class="nav-item"> <a class="nav-link" href="doctor-level.html">3</a></li>
              <li class="nav-item"> <a class="nav-link"  href="doctor-level.html">4</a></li>
              <li class="nav-item"> <a class="nav-link"  href="doctor-level.html">5</a></li>
              <li class="nav-item"> <a class="nav-link"  href="doctor-level.html">6</a></li>
            </ul>
            </div>
                      </li>
                 <!-- **************************************************************************************** -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#middle" aria-expanded="false" aria-controls="middle">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">middle</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="middle">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#f-term"
                    aria-expanded="false" aria-controls="f-term"> first term </a></li>


                <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#s-term"
                    aria-expanded="false" aria-controls="s-term"> second term </a></li>


               

              </ul>
            </div>
            <div class="collapse" id="f-term">
              <h5 style="text-align:center; color: #4b49ac; font-size: 16px">first term</h5>
            <ul class="nav flex-column sub-menu">

              <li class="nav-item"> <a class="nav-link" href="doctor-level.html"> 1 </a></li>
              <li class="nav-item"> <a class="nav-link" href="doctor-level.html"> 2 </a>
              </li>
              <li class="nav-item"> <a class="nav-link" href="doctor-level.html">3</a></li>
              
            </ul>
            </div>

            <div class="collapse" id="s-term">
              <h5 style="text-align:center; color: #4b49ac; font-size: 16px">second-term</h5>
            <ul class="nav flex-column sub-menu">

              <li class="nav-item"> <a class="nav-link" href="doctor-level.html"> 1 </a></li>
              <li class="nav-item"> <a class="nav-link" href="doctor-level.html"> 2 </a>
              </li>
              <li class="nav-item"> <a class="nav-link" href="doctor-level.html">3</a></li>
              
            </ul>
            </div>

          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#secondary" aria-expanded="false" aria-controls="secondary">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">secondary</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="secondary">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#f-t"
                    aria-expanded="false" aria-controls="f-t"> first term </a></li>


                <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#s-t"
                    aria-expanded="false" aria-controls="s-t"> second term </a></li>


               

              </ul>
            </div>
            <div class="collapse" id="f-t">
              <h5 style="text-align:center; color: #4b49ac; font-size: 16px">first term</h5>
            <ul class="nav flex-column sub-menu">

              <li class="nav-item"> <a class="nav-link" href="doctor-level.html"> 1 </a></li>
              <li class="nav-item"> <a class="nav-link" href="doctor-level.html"> 2 </a>
              </li>
              <li class="nav-item"> <a class="nav-link" href="doctor-level.html">3</a></li>
              
            </ul>
            </div>
            <div class="collapse" id="s-t">
              <h5 style="text-align:center; color: #4b49ac; font-size: 16px">second-term</h5>
            <ul class="nav flex-column sub-menu">

              <li class="nav-item"> <a class="nav-link" href="doctor-level.html"> 1 </a></li>
              <li class="nav-item"> <a class="nav-link" href="doctor-level.html"> 2 </a>
              </li>
              <li class="nav-item"> <a class="nav-link" href="doctor-level.html">3</a></li>
              
            </ul>
            </div>

            
          </li>
          
         
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#add-student" aria-expanded="false" aria-controls="add-student">
              <i class="icon-plus menu-icon"></i>
              <span class="menu-title">Add Student</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="add-student">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="add-student.html">Add Student</a></li>
              </ul>
            </div>
          </li> -->
          
         
         
        
          
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome </h3>
                  
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white " type="button" id="dropdownMenuDate2"  aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (21 April 2022)
                    </button>
                    <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div> -->
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Banha</h4>
                        <h6 class="font-weight-normal">Qalyubiyah</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Student Number</p>
                      <p class="fs-30 mb-2">700</p>
                     
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Recent Registrations </p>
                      <p class="fs-30 mb-2">80</p>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Number Of Activities</p>
                      <p class="fs-30 mb-2">8</p>
                       
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Number Of Social Workers</p>
                      <p class="fs-30 mb-2">8</p>
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
       
          <div class="row">
           
            <div class="col-md-5 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">To Do Lists</h4>
									<div class="list-wrapper pt-2">
										<ul class="d-flex flex-column-reverse todo-list todo-list-custom">
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Add Notes
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
											<li class="completed">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
													   Check student Profile 
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
											<!-- <li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Project meeting with CEO
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li> -->
											<!-- <li class="completed">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
														Follow up of team zilla
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li> -->
											
										</ul>
                  </div>
                  <div class="add-items d-flex mb-0 mt-2">
										<input type="text" class="form-control todo-list-input"  placeholder="Add new task">
										<button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="icon-circle-plus"></i></button>
									</div>
								</div>
							</div>
            </div>
          </div>
          
        
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022.  Premium <a href="#" >Student Performance Tracking System</a>  All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

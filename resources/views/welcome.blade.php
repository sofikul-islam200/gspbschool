<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/moltran/layouts/green-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Mar 2021 08:43:15 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Gacha Govtment primary school</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('software')}}/assets/images/favicon.ico">
        <!-- Table datatable css -->
        <link href="{{asset('software')}}/assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('software')}}/assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('software')}}/assets/libs/datatables/fixedHeader.bootstrap4.min.html" rel="stylesheet" type="text/css" />
        <link href="{{asset('software')}}/assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('software')}}/assets/libs/datatables/scroller.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Plugins css-->
        <link href="{{asset('software')}}/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        
        <!-- App css -->
        <link href="{{asset('software')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('software')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('software')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
        
        <style>
            a.btn {
                padding: 0px 4px;
             }

             span#modal_title {
                background: #000000;
                color: white;
                padding: 3px 331px;
                font-family: 'Tinos', serif;
            },
            body{
                font-family: 'Dosis', sans-serif;
            }
        </style>
        @notifyCss
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom" style="z-index:0">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                        </div>
                    </li>

                    <li class="dropdown notification-list d-none d-md-inline-block">
                        <a href="#" id="btn-fullscreen" class="nav-link waves-effect waves-light">
                            <i class="mdi mdi-crop-free noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list">
                       
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('software')}}/assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle" style="height:100;width:80">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-face-profile"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-power-settings"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                  


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                        <a href="index.html" class="logo text-center logo-dark">
                            <span class="logo-lg">
                                <img src="{{asset('software')}}/assets/images/logo-dark.png" alt="" height="16">
                                <!-- <span class="logo-lg-text-dark">Moltran</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-lg-text-dark">M</span> -->
                                <img src="{{asset('software')}}/assets/images/logo-sm.png" alt="" height="25">
                            </span>
                        </a>

                        <a href="index.html" class="logo text-center logo-light">
                            <span class="logo-lg">
                                <img src="{{asset('software')}}/assets/images/logo.png" alt="" height="50">
                                <!-- <span class="logo-lg-text-dark">Moltran</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-lg-text-dark">M</span> -->
                                <img src="{{asset('software')}}/assets/images/logo-sm.png" alt="" height="25">
                            </span>
                        </a>
                    </div>

                <!-- LOGO -->
  

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
        
                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->
            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                    <div class="slimscroll-menu">
    
                        <!--- Sidemenu -->
                        <div id="sidebar-menu">
    
                            <div class="user-box">
                    
                                <div class="float-left">
                                    <img src="{{asset('software')}}/assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle">
                                </div>
                                <div class="user-info">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                John Doe <i class="mdi mdi-chevron-down"></i>
                                                        </a>
                                        <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 29px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-face-profile mr-2"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-settings mr-2"></i> Settings</a></li>
                                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-lock mr-2"></i> Lock screen</a></li>
                                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-power-settings mr-2"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                    <p class="font-13 text-muted m-0">Administrator</p>
                                </div>
                            </div>
    
                            <ul class="metismenu" id="side-menu">
    
                                <li>
                                    <a href="index.html" class="waves-effect">
                                        <i class="mdi mdi-home"></i>
                                        <span> Dashboard </span>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-email"></i>
                                        <span> Setup Manage </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{route('class.view')}}"> Class Info </a></li>
                                        
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="calendar.html" class="waves-effect">
                                        <i class=" mdi mdi-calendar"></i>
                                        <span> Calendar </span>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-palette"></i>
                                        <span> Elements </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="ui-typography.html">Typography</a></li>
                                        <li><a href="ui-buttons.html">Buttons</a></li>
                                        <li><a href="ui-cards.html">Cards</a></li>
                                        <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                        <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                        <li><a href="ui-modals.html">Modals</a></li>
                                        <li><a href="ui-bootstrap.html">BS Elements</a></li>
                                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                        <li><a href="ui-notification.html">Notification</a></li>
                                        <li><a href="ui-sweet-alert2.html">Sweet-Alert2</a></li>
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-invert-colors"></i>
                                        <span> Components </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="components-grid.html">Grid</a></li>
                                        <li><a href="components-portlets.html">Portlets</a></li>
                                        <li><a href="components-widgets.html">Widgets</a></li>
                                        <li><a href="components-nestable-list.html">Nestable</a></li>
                                        <li><a href="components-rangeslider.html">Sliders </a></li>
                                        <li><a href="components-gallery.html">Gallery </a></li>
                                        <li><a href="components-pricing.html">Pricing Table </a></li>
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-atom-variant"></i>
                                        <span> Icons </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="icons-material.html">Material Design</a></li>
                                        <li><a href="icons-ion.html">Ion Icons</a></li>
                                        <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-widgets"></i>
                                        <span> Forms </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="form-elements.html">General Elements</a></li>
                                        <li><a href="form-validation.html">Form Validation</a></li>
                                        <li><a href="form-advanced.html">Advanced Form</a></li>
                                        <li><a href="form-wizard.html">Form Wizard</a></li>
                                        <li><a href="form-quilljs.html">Quilljs Editor</a></li>
                                        <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                        <li><a href="form-xeditable.html">X-editable</a></li>
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-view-list"></i>
                                        <span> Tables </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="tables-basic.html">Basic Tables</a></li>
                                        <li><a href="tables-datatable.html">Data Table</a></li>
                                        <li><a href="tables-editable.html">Editable Table</a></li>
                                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-poll-box"></i>
                                        <span> Charts </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="charts-morris.html">Morris Chart</a></li>
                                        <li><a href="charts-chartjs.html">Chartjs</a></li>
                                        <li><a href="charts-flot.html">Flot Chart</a></li>
                                        <li><a href="charts-peity.html">Peity Charts</a></li>
                                        <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                        <li><a href="charts-radial.html">Radial charts</a></li>
                                        <li><a href="charts-other.html">Other Chart</a></li>
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-map-marker"></i>
                                        <span> Maps </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="maps-google.html"> Google Map</a></li>
                                        <li><a href="maps-vector.html"> Vector Map</a></li>
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-table-plus"></i>
                                        <span> Layouts </span>
                                        <span class="badge badge-danger badge-pill float-right">New</span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                        <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                        <li><a href="layouts-small-sidebar.html">Small Sidebar</a></li>
                                        <li><a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a></li>
                                        <li><a href="layouts-unsticky.html">Unsticky Layout</a></li>
                                        <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-google-pages"></i>
                                        <span> Pages </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="pages-profile.html">Profile</a></li>
                                        <li><a href="pages-timeline.html">Timeline</a></li>
                                        <li><a href="pages-invoice.html">Invoice</a></li>
                                        <li><a href="pages-email-template.html">Email template</a></li>
                                        <li><a href="pages-contact.html">Contact-list</a></li>
                                        <li><a href="pages-login.html">Login</a></li>
                                        <li><a href="pages-register.html">Register</a></li>
                                        <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                        <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                        <li><a href="pages-blank.html">Blank Page</a></li>
                                        <li><a href="pages-maintenance.html">Maintenance</a></li>
                                        <li><a href="pages-coming-soon.html">Coming-soon</a></li>
                                        <li><a href="pages-404.html">404 Error</a></li>
                                        <li><a href="pages-404_alt.html">404 alt</a></li>
                                        <li><a href="pages-500.html">500 Error</a></li>
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-share-variant"></i>
                                        <span> Multi Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level nav" aria-expanded="false">
                                        <li>
                                            <a href="javascript: void(0);">Level 1.1</a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul class="nav-third-level nav" aria-expanded="false">
                                                <li>
                                                    <a href="javascript: void(0);">Level 2.1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Level 2.2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
    
                        </div>
                        <!-- End Sidebar -->
    
                        <div class="clearfix"></div>
    
                    </div>
                    <!-- Sidebar -left -->
    
                </div>
                <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

          @yield('admin_content')

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
        

      
        @notifyJs
        <x:notify-messages />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <!-- Vendor js -->
        <script src="{{asset('software')}}/assets/js/vendor.min.js"></script>
        {{-- datatable --}}
        <script src="{{asset('software')}}/assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="{{asset('software')}}/assets/libs/datatables/dataTables.bootstrap4.min.js"></script>

        <script src="{{asset('software')}}/assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="{{asset('software')}}/assets/libs/datatables/responsive.bootstrap4.min.js"></script>

        <script src="{{asset('software')}}/assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="{{asset('software')}}/assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        {{-- end datatable --}}
        <script src="{{asset('software')}}/assets/libs/moment/moment.min.js"></script>
        <script src="{{asset('software')}}/assets/libs/jquery-scrollto/jquery.scrollTo.min.js"></script>
        <script src="{{asset('software')}}/assets/libs/sweetalert2/sweetalert2.min.js"></script>
        
        <!-- Chat app -->
        <script src="{{asset('software')}}/assets/js/pages/jquery.chat.js"></script>

        <!-- Todo app -->
        <script src="{{asset('software')}}/assets/js/pages/jquery.todo.js"></script>

        <!-- flot chart -->
        <script src="{{asset('software')}}/assets/libs/flot-charts/jquery.flot.js"></script>
        <script src="{{asset('software')}}/assets/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="{{asset('software')}}/assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
        <script src="{{asset('software')}}/assets/libs/flot-charts/jquery.flot.resize.js"></script>
        <script src="{{asset('software')}}/assets/libs/flot-charts/jquery.flot.pie.js"></script>
        <script src="{{asset('software')}}/assets/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="{{asset('software')}}/assets/libs/flot-charts/jquery.flot.stack.js"></script>
        <script src="{{asset('software')}}/assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

        <!-- Dashboard init JS -->
        <script src="{{asset('software')}}/assets/js/pages/dashboard.init.js"></script>
        <!-- Datatables init -->
        <script src="{{asset('software')}}/assets/js/pages/datatables.init.js"></script> 
        <!-- App js -->
        <script src="{{asset('software')}}/assets/js/app.min.js"></script>
       
         <script>  
            $(document).on("click", "#delete", function(e){
                e.preventDefault();
                var link = $(this).attr("href");
                   swal({
                     title: "Are you Want to delete?",
                     text: "Once Delete, This will be Permanently Delete!",
                     icon: "warning",
                     buttons: true,
                     dangerMode: true,
                   })
                   .then((willDelete) => {
                     if (willDelete) {
                          window.location.href = link;
                     } else {
                       swal("Safe Data!");
                     }
                   });
               });
       </script>

    </body>
</html>
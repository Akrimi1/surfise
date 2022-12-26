<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from adminlte.io/themes/v3/pages/forms/advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2022 13:19:24 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>AdminLTE 3 | Advanced form elements</title>
      <link rel="stylesheet" href="https:/fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
      <link rel="stylesheet" href="{{ asset('/backend/plugins/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/backend/plugins/daterangepicker/daterangepicker.css') }}">
      <link rel="stylesheet" href="{{ asset('/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/backend/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/backend/plugins/select2/css/select2.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/backend/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/backend/plugins/bs-stepper/css/bs-stepper.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/backend/plugins/dropzone/min/dropzone.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/backend/dist/css/adminlte.min2167.css') }}">
   </head>
   <body class="hold-transition sidebar-mini">
      <div class="wrapper">
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                  <a href="https:/adminlte.io/themes/v3/index3.html" class="nav-link">Home</a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                  <a href="#" class="nav-link">Contact</a>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                  <i class="fas fa-search"></i>
                  </a>
                  <div class="navbar-search-block">
                     <form class="form-inline">
                        <div class="input-group input-group-sm">
                           <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                           <div class="input-group-append">
                              <button class="btn btn-navbar" type="submit">
                              <i class="fas fa-search"></i>
                              </button>
                              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                              <i class="fas fa-times"></i>
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-comments"></i>
                  <span class="badge badge-danger navbar-badge">3</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <a href="#" class="dropdown-item">
                        <div class="media">
                           <img src="{{ asset('/backend/dist/img/user1.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                           <div class="media-body">
                              <h3 class="dropdown-item-title">
                                 Brad Diesel
                                 <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">Call me whenever you can...</p>
                              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                           </div>
                        </div>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                        <div class="media">
                           <img src="{{ asset('/backend/dist/img/user88.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                           <div class="media-body">
                              <h3 class="dropdown-item-title">
                                 John Pierce
                                 <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">I got your message bro</p>
                              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                           </div>
                        </div>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                        <div class="media">
                           <img src="{{ asset('/backend/dist/img/user3.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                           <div class="media-body">
                              <h3 class="dropdown-item-title">
                                 Nora Silvester
                                 <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">The subject goes here</p>
                              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                           </div>
                        </div>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-bell"></i>
                  <span class="badge badge-warning navbar-badge">15</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <span class="dropdown-item dropdown-header">15 Notifications</span>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                     <i class="fas fa-envelope mr-2"></i> 4 new messages
                     <span class="float-right text-muted text-sm">3 mins</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                     <i class="fas fa-users mr-2"></i> 8 friend requests
                     <span class="float-right text-muted text-sm">12 hours</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                     <i class="fas fa-file mr-2"></i> 3 new reports
                     <span class="float-right text-muted text-sm">2 days</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                  <i class="fas fa-th-large"></i>
                  </a>
               </li>
            </ul>
         </nav>
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="https:/adminlte.io/themes/v3/index3.html" class="brand-link">
            <img src="{{ asset('/backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>
            <div class="sidebar">
               <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                     <img src="{{ asset('/backend/dist/img/user2.jpg') }}" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                     <a href="#" class="d-block">Alexander Pierce</a>
                  </div>
               </div>
               <div class="form-inline">
                  <div class="input-group" data-widget="sidebar-search">
                     <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                     <div class="input-group-append">
                        <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                        </button>
                     </div>
                  </div>
               </div>
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-tachometer-alt"></i>
                           <p>
                              Dashboard
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/index.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v1</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/index2.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v2</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/index3.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v3</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="https:/adminlte.io/themes/v3/pages/widgets.html" class="nav-link">
                           <i class="nav-icon fas fa-th"></i>
                           <p>
                              Widgets
                              <span class="right badge badge-danger">New</span>
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-copy"></i>
                           <p>
                              Layout Options
                              <i class="fas fa-angle-left right"></i>
                              <span class="badge badge-info right">6</span>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/layout/top-nav.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Top Navigation</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/layout/top-nav-sidebar.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Top Navigation + Sidebar</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/layout/boxed.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Boxed</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/layout/fixed-sidebar.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Fixed Sidebar</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/layout/fixed-sidebar-custom.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Fixed Sidebar <small>+ Custom Area</small></p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/layout/fixed-topnav.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Fixed Navbar</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/layout/fixed-footer.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Fixed Footer</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/layout/collapsed-sidebar.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Collapsed Sidebar</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-chart-pie"></i>
                           <p>
                              Charts
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/charts/chartjs.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>ChartJS</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/charts/flot.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Flot</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/charts/inline.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Inline</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/charts/uplot.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>uPlot</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-tree"></i>
                           <p>
                              UI Elements
                              <i class="fas fa-angle-left right"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/UI/general.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>General</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/UI/icons.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Icons</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/UI/buttons.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Buttons</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/UI/sliders.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Sliders</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/UI/modals.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Modals & Alerts</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/UI/navbar.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Navbar & Tabs</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/UI/timeline.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Timeline</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/UI/ribbons.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Ribbons</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                           <i class="nav-icon fas fa-edit"></i>
                           <p>
                              Forms
                              <i class="fas fa-angle-left right"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="general.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>General Elements</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="advanced.html" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Advanced Elements</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="editors.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Editors</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="validation.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Validation</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-table"></i>
                           <p>
                              Tables
                              <i class="fas fa-angle-left right"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/tables/simple.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Simple Tables</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/tables/data.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>DataTables</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/tables/jsgrid.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>jsGrid</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-header">EXAMPLES</li>
                     <li class="nav-item">
                        <a href="https:/adminlte.io/themes/v3/pages/calendar.html" class="nav-link">
                           <i class="nav-icon far fa-calendar-alt"></i>
                           <p>
                              Calendar
                              <span class="badge badge-info right">2</span>
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="https:/adminlte.io/themes/v3/pages/gallery.html" class="nav-link">
                           <i class="nav-icon far fa-image"></i>
                           <p>
                              Gallery
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="https:/adminlte.io/themes/v3/pages/kanban.html" class="nav-link">
                           <i class="nav-icon fas fa-columns"></i>
                           <p>
                              Kanban Board
                           </p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon far fa-envelope"></i>
                           <p>
                              Mailbox
                              <i class="fas fa-angle-left right"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/mailbox/mailbox.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Inbox</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/mailbox/compose.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Compose</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/mailbox/read-mail.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Read</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-book"></i>
                           <p>
                              Pages
                              <i class="fas fa-angle-left right"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/invoice.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Invoice</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/profile.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Profile</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/e-commerce.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>E-commerce</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/projects.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Projects</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/project-add.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Project Add</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/project-edit.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Project Edit</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/project-detail.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Project Detail</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/contacts.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Contacts</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/faq.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>FAQ</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/contact-us.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Contact us</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon far fa-plus-square"></i>
                           <p>
                              Extras
                              <i class="fas fa-angle-left right"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                    Login & Register v1
                                    <i class="fas fa-angle-left right"></i>
                                 </p>
                              </a>
                              <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                    <a href="https:/adminlte.io/themes/v3/pages/examples/login.html" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Login v1</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="https:/adminlte.io/themes/v3/pages/examples/register.html" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Register v1</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="https:/adminlte.io/themes/v3/pages/examples/forgot-password.html" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Forgot Password v1</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="https:/adminlte.io/themes/v3/pages/examples/recover-password.html" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Recover Password v1</p>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                    Login & Register v2
                                    <i class="fas fa-angle-left right"></i>
                                 </p>
                              </a>
                              <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                    <a href="https:/adminlte.io/themes/v3/pages/examples/login-v2.html" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Login v2</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="https:/adminlte.io/themes/v3/pages/examples/register-v2.html" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Register v2</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="https:/adminlte.io/themes/v3/pages/examples/forgot-password-v2.html" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Forgot Password v2</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="https:/adminlte.io/themes/v3/pages/examples/recover-password-v2.html" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Recover Password v2</p>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/lockscreen.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Lockscreen</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/legacy-user-menu.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Legacy User Menu</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/language-menu.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Language Menu</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/404.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Error 404</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/500.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Error 500</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/pace.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Pace</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/examples/blank.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Blank Page</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/starter.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Starter Page</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-search"></i>
                           <p>
                              Search
                              <i class="fas fa-angle-left right"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/search/simple.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Simple Search</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="https:/adminlte.io/themes/v3/pages/search/enhanced.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Enhanced</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-header">MISCELLANEOUS</li>
                     <li class="nav-item">
                        <a href="https:/adminlte.io/themes/v3/iframe.html" class="nav-link">
                           <i class="nav-icon fas fa-ellipsis-h"></i>
                           <p>Tabbed IFrame Plugin</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="https:/adminlte.io/docs/3.1/" class="nav-link">
                           <i class="nav-icon fas fa-file"></i>
                           <p>Documentation</p>
                        </a>
                     </li>
                     <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="fas fa-circle nav-icon"></i>
                           <p>Level 1</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-circle"></i>
                           <p>
                              Level 1
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Level 2</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                    Level 2
                                    <i class="right fas fa-angle-left"></i>
                                 </p>
                              </a>
                              <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                       <i class="far fa-dot-circle nav-icon"></i>
                                       <p>Level 3</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                       <i class="far fa-dot-circle nav-icon"></i>
                                       <p>Level 3</p>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">
                                       <i class="far fa-dot-circle nav-icon"></i>
                                       <p>Level 3</p>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Level 2</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="fas fa-circle nav-icon"></i>
                           <p>Level 1</p>
                        </a>
                     </li>
                     <li class="nav-header">LABELS</li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon far fa-circle text-danger"></i>
                           <p class="text">Important</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon far fa-circle text-warning"></i>
                           <p>Warning</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="nav-icon far fa-circle text-info"></i>
                           <p>Informational</p>
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
         </aside>
         <div class="content-wrapper">
            @yield('content')
         </div>
         <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
               <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https:/adminlte.io/">AdminLTE.io</a>.</strong> All rights reserved.
         </footer>
         <aside class="control-sidebar control-sidebar-dark">
         </aside>
      </div>
      <script src="{{ asset('/backend/plugins/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('/backend/plugins/select2/js/select2.full.min.js') }}"></script>
      <script src="{{ asset('/backend/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
      <script src="{{ asset('/backend/plugins/moment/moment.min.js') }}"></script>
      <script src="{{ asset('/backend/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
      <script src="{{ asset('/backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
      <script src="{{ asset('/backend/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
      <script src="{{ asset('/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
      <script src="{{ asset('/backend/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
      <script src="{{ asset('/backend/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
      <script src="{{ asset('/backend/plugins/dropzone/min/dropzone.min.js') }}"></script>
      <script src="{{ asset('/backend/dist/js/adminlte.min2167.js') }}"></script>
      <script src="{{ asset('/backend/dist/js/demo.js') }}"></script>
      <script>
         $(function () {
           //Initialize Select2 Elements
           $('.select2').select2()
         
           //Initialize Select2 Elements
           $('.select2bs4').select2({
             theme: 'bootstrap4'
           })
         
           //Datemask dd/mm/yyyy
           $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
           //Datemask2 mm/dd/yyyy
           $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
          //Money Euro
           $('[data-mask]').inputmask()
         
           //Date picker
           $('#reservationdate').datetimepicker({
               format: 'L'
           });
         
           //Date and time picker
           $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
         
           //Date range picker
           $('#reservation').daterangepicker()
           //Date range picker with time picker
           $('#reservationtime').daterangepicker({
             timePicker: true,
             timePickerIncrement: 30,
             locale: {
               format: 'MM/DD/YYYY hh:mm A'
             }
           })
           //Date range as a button
           $('#daterange-btn').daterangepicker(
             {
               ranges   : {
                 'Today'       : [moment(), moment()],
                 'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                 'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                 'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                 'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                 'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
               },
               startDate: moment().subtract(29, 'days'),
               endDate  : moment()
             },
             function (start, end) {
               $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
             }
           )
         
           //Timepicker
           $('#timepicker').datetimepicker({
             format: 'LT'
           })
         
           //Bootstrap Duallistbox
           $('.duallistbox').bootstrapDualListbox()
         
           //Colorpicker
           $('.my-colorpicker1').colorpicker()
           //color picker with addon
           $('.my-colorpicker2').colorpicker()
         
           $('.my-colorpicker2').on('colorpickerChange', function(event) {
             $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
           })
         
           $("input[data-bootstrap-switch]").each(function(){
             $(this).bootstrapSwitch('state', $(this).prop('checked'));
           })
         
         })
         ///BS-Stepper Init
         document.addEventListener('DOMContentLoaded', function () {
           window.stepper = new Stepper(document.querySelector('.bs-stepper'))
         })
         
        ///DropzoneJS Demo Code Start
         Dropzone.autoDiscover = false
         
         ///Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
         var previewNode = document.querySelector("#template")
         previewNode.id = ""
         var previewTemplate = previewNode.parentNode.innerHTML
         previewNode.parentNode.removeChild(previewNode)
         
         var myDropzone = new Dropzone(document.body, { ///                                              Make the whole body a dropzone
           url: "/target-url", ///Set the url
           thumbnailWidth: 80,
           thumbnailHeight: 80,
           parallelUploads: 20,
           previewTemplate: previewTemplate,
           autoQueue: false, ///Make sure the files aren't queued until manually added
           previewsContainer: "#previews", ///Define the container to display the previews
           clickable: ".fileinput-button" ///Define the element that should be used as click trigger to select files.
         })
         
         myDropzone.on("addedfile", function(file) {
           ////Hookup the start button
           file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
         })
         
         ///Update the total progress bar
         myDropzone.on("totaluploadprogress", function(progress) {
           document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
         })
         
         myDropzone.on("sending", function(file) {
           ///Show the total progress bar when upload starts
           document.querySelector("#total-progress").style.opacity = "1"
           //And disable the start button
           file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
         })
         
         //Hide the total progress bar when nothing's uploading anymore
         myDropzone.on("queuecomplete", function(progress) {
           document.querySelector("#total-progress").style.opacity = "0"
         })
         
         //Setup the buttons for all transfers
         //The "add files" button doesn't need to be setup because the config
         //`clickable` has already been specified.
         document.querySelector("#actions .start").onclick = function() {
           myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
         }
         document.querySelector("#actions .cancel").onclick = function() {
           myDropzone.removeAllFiles(true)
         }
         //DropzoneJS Demo Code End
      </script>
   </body>
   <!-- Mirrored from adminlte.io/themes/v3/pages/forms/advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2022 13:19:41 GMT -->
</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset = "utf-8">
    <title>Laraspace - Laravel Admin</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <script src="assets/global/js/core/pace.js"></script>
    <!-- START CORE CSS-->
    <link href="assets/global/css/laraspace.css" rel="stylesheet" type="text/css">
    <!-- END CORE CSS -->

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="ju0AJjtVlV2LnL9lhkK9fOpg7DhuaMFVgR1mifUv">

    <link rel="apple-touch-icon" sizes="57x57" href="../../assets/global/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../assets/global/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../assets/global/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/global/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../assets/global/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets/global/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../assets/global/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../assets/global/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/global/img/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="../../assets/global/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../../assets/global/img/favicons/android-chrome-192x192.png"
          sizes="192x192">
    <link rel="icon" type="image/png" href="../../assets/global/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="../../assets/global/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="../../assets/global/img/favicons/manifest.json">
    <link rel="mask-icon" href="../../assets/global/img/favicons/safari-pinned-tab.svg" color="#333333">
    <link rel="shortcut icon" href="../../assets/global/img/favicons/favicon.ico">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/assets/global/img/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="/assets/global/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#333333">
</head>
<body class="layout-default skin-default">

<div id="app" class="site-wrapper">
    <header class="site-header">
        <a href="#" class="brand-main">
            <img src="../../assets/global/img/logo-desk.png" id="logo-desk" alt="Laraspace Logo" class="hidden-sm-down">
            <img src="../../assets/global/img/logo-mobile.png" id="logo-mobile" alt="Laraspace Logo"
                 class="hidden-md-up">
        </a>
        <a href="#" class="nav-toggle">
            <div class="hamburger hamburger--htla">
                <span>toggle menu</span>
            </div>
        </a>

        <ul class="action-list">
            <li>
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        class="icon-fa icon-fa-plus"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-edit"></i> New Post</a>
                    <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-tag"></i> New Category</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-star"></i> Separated link</a>
                </div>
            </li>
            <li>
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        class="icon-fa icon-fa-bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right notification-dropdown">
                    <h6 class="dropdown-header">Notifications</h6>
                    <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-user"></i> New User was Registered</a>
                    <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-comment"></i> A Comment has been posted.</a>
                </div>
            </li>
            <li>
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="avatar"><img
                        src="../../assets/global/img/avatars/avatar.png" alt="Avatar"></a>
                <div class="dropdown-menu dropdown-menu-right notification-dropdown">
                    <a class="dropdown-item" href="../settings.html"><i class="icon-fa icon-fa-cogs"></i> Settings</a>
                    <a class="dropdown-item" href="../../login.html"><i class="icon-fa icon-fa-sign-out"></i> Logout</a>
                </div>
            </li>
        </ul>
    </header>
    <div class="mobile-menu-overlay"></div>
    <div class="sidebar-left " id="mobile-nav">
        <div class="sidebar-body scroll-pane">
            <ul class="side-nav metismenu" id="menu">
                <li class="">
                    <a href="#"><i class="icon-fa icon-fa-dashboard"></i> Dashboard <span
                            class="icon-fa arrow icon-fa-fw"></span> </a>
                    <ul aria-expanded="true" class="collapse">
                        <li class="">
                            <a href="../dashboard/basic.html">Basic</a>
                        </li>
                        <li class="">
                            <a href="../dashboard/ecommerce.html">Ecommerce</a>
                        </li>
                        <li class="">
                            <a href="../dashboard/finance.html">Finance</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#"><i class="icon-fa icon-fa-th-large"></i> Layouts <span
                            class="icon-fa arrow icon-fa-fw"></span> </a>
                    <ul aria-expanded="true" class="collapse">
                        <li class="">
                            <a href="../layouts/sidebar.html">Sidebar</a>
                        </li>
                        <li class="">
                            <a href="../layouts/icon-sidebar.html">Icon Sidebar</a>
                        </li>
                        <li class="">
                            <a href="../layouts/horizontal-menu.html">Horizontal Menu</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#"><i class="icon-fa icon-fa-star"></i> Basic UI <span
                            class="icon-fa arrow icon-fa-fw"></span> </a>
                    <ul aria-expanded="true" class="collapse">
                        <li class="">
                            <a href="../basic-ui/buttons.html">Buttons</a>
                        </li>
                        <li class="">
                            <a href="../basic-ui/cards.html">Cards</a>
                        </li>
                        <li class="">
                            <a href="../basic-ui/tabs.html">Tabs &amp; Accordians</a>
                        </li>
                        <li class="">
                            <a href="../basic-ui/typography.html">Typography</a>
                        </li>
                        <li class="">
                            <a href="../basic-ui/tables.html">Tables</a>
                        </li>
                        <li class="">
                            <a href="../basic-ui/modals.html">Modals</a>
                        </li>
                        <li class="">
                            <a href="../basic-ui/progress-bars.html">Progress Bar</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#"><i class="icon-fa icon-fa-puzzle-piece"></i> Components <span
                            class="icon-fa arrow icon-fa-fw"></span> </a>
                    <ul aria-expanded="true" class="collapse">
                        <li class="active">
                            <a href="datatables.html">Datatables</a>
                        </li>
                        <li class="">
                            <a href="notifications.html">Notifications</a>
                        </li>
                        <li class="">
                            <a href="nestable-list.html"> Nestable List</a>
                        </li>
                        <li class="">
                            <a href="nestable-tree.html">Nestable Tree</a>
                        </li>
                        <li class="">
                            <a href="image-cropper.html">Image Cropper</a>
                        </li>
                        <li class="">
                            <a href="zoom.html">Image Zoom</a>
                        </li>
                        <li class="">
                            <a href="calendar.html">Calendar</a>
                        </li>
                        <li class="">
                            <a href="#">Rating<span class="icon-fa arrow icon-fa-fw"></span> </a>
                            <ul aria-expanded="true" class="collapse submenu">
                                <li class=""><a href="ratings/star.html">Star Ratings</a></li>
                                <li class=""><a href="ratings/bar.html">Bar Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#"><i class="icon-fa icon-fa-bar-chart"></i> Charts <span
                            class="icon-fa arrow icon-fa-fw"></span> </a>
                    <ul aria-expanded="true" class="collapse">
                        <li class="">
                            <a href="../charts/chartjs.html">Chart JS</a>
                        </li>
                        <li class="">
                            <a href="../charts/sparklines.html">Sparkline</a>
                        </li>
                        <li class="">
                            <a href="../charts/amcharts.html">AM Charts</a>
                        </li>
                        <li class="">
                            <a href="../charts/morris.html">Morris</a>
                        </li>
                        <li class="">
                            <a href="../charts/gauges.html">Gauges</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#"><i class="icon-fa icon-fa-eye"></i> Icons <span class="icon-fa arrow icon-fa-fw"></span>
                    </a>
                    <ul aria-expanded="true" class="collapse">
                        <li class="">
                            <a href="../icons/icomoon.html">IcoMoon</a>
                        </li>
                        <li class="">
                            <a href="../icons/evil.html">Evil Icons</a>
                        </li>
                        <li class="">
                            <a href="../icons/meteo.html">Meteo Icons</a>
                        </li>
                        <li class="">
                            <a href="../icons/line.html">Line Icons</a>
                        </li>
                        <li class="">
                            <a href="../icons/fps-line.html">FPS Line</a>
                        </li>
                        <li class="">
                            <a href="../icons/fontawesome.html">Font Awesome</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#"><i class="icon-fa icon-fa-rocket"></i> Forms <span
                            class="icon-fa arrow icon-fa-fw"></span> </a>
                    <ul aria-expanded="true" class="collapse">
                        <li class="">
                            <a href="../forms/general.html">General Elements</a>
                        </li>
                        <li class="">
                            <a href="../forms/advanced.html">Advanced Elements</a>
                        </li>
                        <li class="">
                            <a href="../forms/layouts.html">Form Layouts</a>
                        </li>
                        <li class="">
                            <a href="../forms/validation.html">Form Validation</a>
                        </li>
                        <li class="">
                            <a href="../forms/wizards.html">Form Wizard</a>
                        </li>
                        <li class="">
                            <a href="../forms/wizards-2.html">Form Wizard 2</a>
                        </li>
                        <li class="">
                            <a href="../forms/editors.html">Editors</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#"><i class="icon-fa icon-fa-image"></i> Gallery <span
                            class="icon-fa arrow icon-fa-fw"></span> </a>
                    <ul aria-expanded="true" class="collapse">
                        <li class="">
                            <a href="../gallery/grid.html">Gallery Grid</a>
                        </li>
                        <li class="">
                            <a href="../gallery/masonry-grid.html">Gallery Masonry Grid</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#"><i class="icon-fa icon-fa-file"></i> Pages <span
                            class="icon-fa arrow icon-fa-fw"></span> </a>
                    <ul aria-expanded="true" class="collapse">
                        <li class="">
                            <a href="../../login.html">Login</a>
                        </li>
                        <li class="">
                            <a href="../login-2.html">Login 2</a>
                        </li>
                        <li class="">
                            <a href="../login-3.html">Login 3</a>
                        </li>
                        <li class="">
                            <a href="../../register.html">Register</a>
                        </li>
                        <li class="">
                            <a href="../register-2.html">Register 2</a>
                        </li>
                        <li class="">
                            <a href="../register-3.html">Register 3</a>
                        </li>
                        <li class="">
                            <a href="../404.html">404 Page</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#"><i class="icon-fa icon-fa-user"></i> Users <span
                            class="icon-fa arrow icon-fa-fw"></span> </a>
                    <ul aria-expanded="true" class="collapse">
                        <li class="">
                            <a href="../users.html">All Users</a>
                        </li>
                        <li class="">
                            <a href="../users/1.html">User Profile</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="../todos.html"><i class="icon-fa icon-fa-check"></i> Todo App </a>
                </li>
                <li class="">
                    <a href="#"><i class="icon-fa icon-fa-cogs"></i> Settings <span
                            class="icon-fa arrow icon-fa-fw"></span> </a>
                    <ul aria-expanded="true" class="collapse">
                        <li class="">
                            <a href="../settings/social.html">Social</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>


    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Datatables</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard/basic.html">Home</a></li>
                <li class="breadcrumb-item"><a href="datatables.html">Components</a></li>
                <li class="breadcrumb-item active">Datatables</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Default</h6>
                    </div>
                    <div class="card-block">
                        <table id="default-datatable" class="table table-striped table-bordered" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008/12/13</td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008/12/19</td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013/03/03</td>
                                <td>$342,000</td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>36</td>
                                <td>2008/10/16</td>
                                <td>$470,600</td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>43</td>
                                <td>2012/12/18</td>
                                <td>$313,500</td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>19</td>
                                <td>2010/03/17</td>
                                <td>$385,750</td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>66</td>
                                <td>2012/11/27</td>
                                <td>$198,500</td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td>64</td>
                                <td>2010/06/09</td>
                                <td>$725,000</td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>59</td>
                                <td>2009/04/10</td>
                                <td>$237,500</td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>2012/09/26</td>
                                <td>$217,500</td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>30</td>
                                <td>2011/09/03</td>
                                <td>$345,000</td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td>40</td>
                                <td>2009/06/25</td>
                                <td>$675,000</td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td>$106,450</td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sidney</td>
                                <td>23</td>
                                <td>2010/09/20</td>
                                <td>$85,600</td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>$1,200,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>2010/12/22</td>
                                <td>$92,575</td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>28</td>
                                <td>2010/11/14</td>
                                <td>$357,650</td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td>$206,850</td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010/03/11</td>
                                <td>$850,000</td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>20</td>
                                <td>2011/08/14</td>
                                <td>$163,000</td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sidney</td>
                                <td>37</td>
                                <td>2011/06/02</td>
                                <td>$95,400</td>
                            </tr>
                            <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td>53</td>
                                <td>2009/10/22</td>
                                <td>$114,500</td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>London</td>
                                <td>27</td>
                                <td>2011/05/07</td>
                                <td>$145,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Cortez</td>
                                <td>Team Leader</td>
                                <td>San Francisco</td>
                                <td>22</td>
                                <td>2008/10/26</td>
                                <td>$235,500</td>
                            </tr>
                            <tr>
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>Edinburgh</td>
                                <td>46</td>
                                <td>2011/03/09</td>
                                <td>$324,050</td>
                            </tr>
                            <tr>
                                <td>Unity Butler</td>
                                <td>Marketing Designer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/12/09</td>
                                <td>$85,675</td>
                            </tr>
                            <tr>
                                <td>Howard Hatfield</td>
                                <td>Office Manager</td>
                                <td>San Francisco</td>
                                <td>51</td>
                                <td>2008/12/16</td>
                                <td>$164,500</td>
                            </tr>
                            <tr>
                                <td>Hope Fuentes</td>
                                <td>Secretary</td>
                                <td>San Francisco</td>
                                <td>41</td>
                                <td>2010/02/12</td>
                                <td>$109,850</td>
                            </tr>
                            <tr>
                                <td>Vivian Harrell</td>
                                <td>Financial Controller</td>
                                <td>San Francisco</td>
                                <td>62</td>
                                <td>2009/02/14</td>
                                <td>$452,500</td>
                            </tr>
                            <tr>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>37</td>
                                <td>2008/12/11</td>
                                <td>$136,200</td>
                            </tr>
                            <tr>
                                <td>Jackson Bradshaw</td>
                                <td>Director</td>
                                <td>New York</td>
                                <td>65</td>
                                <td>2008/09/26</td>
                                <td>$645,750</td>
                            </tr>
                            <tr>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2011/02/03</td>
                                <td>$234,500</td>
                            </tr>
                            <tr>
                                <td>Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td>$163,500</td>
                            </tr>
                            <tr>
                                <td>Sakura Yamamoto</td>
                                <td>Support Engineer</td>
                                <td>Tokyo</td>
                                <td>37</td>
                                <td>2009/08/19</td>
                                <td>$139,575</td>
                            </tr>
                            <tr>
                                <td>Thor Walton</td>
                                <td>Developer</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2013/08/11</td>
                                <td>$98,540</td>
                            </tr>
                            <tr>
                                <td>Finn Camacho</td>
                                <td>Support Engineer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/07/07</td>
                                <td>$87,500</td>
                            </tr>
                            <tr>
                                <td>Serge Baldwin</td>
                                <td>Data Coordinator</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2012/04/09</td>
                                <td>$138,575</td>
                            </tr>
                            <tr>
                                <td>Zenaida Frank</td>
                                <td>Software Engineer</td>
                                <td>New York</td>
                                <td>63</td>
                                <td>2010/01/04</td>
                                <td>$125,250</td>
                            </tr>
                            <tr>
                                <td>Zorita Serrano</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>56</td>
                                <td>2012/06/01</td>
                                <td>$115,000</td>
                            </tr>
                            <tr>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>43</td>
                                <td>2013/02/01</td>
                                <td>$75,650</td>
                            </tr>
                            <tr>
                                <td>Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td>$145,600</td>
                            </tr>
                            <tr>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2011/03/21</td>
                                <td>$356,250</td>
                            </tr>
                            <tr>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>London</td>
                                <td>21</td>
                                <td>2009/02/27</td>
                                <td>$103,500</td>
                            </tr>
                            <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>San Francisco</td>
                                <td>30</td>
                                <td>2010/07/14</td>
                                <td>$86,500</td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008/11/13</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td>$112,000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6>Responsive</h6>
                    </div>
                    <div class="card-block">
                        <table id="responsive-datatable" class="table table-striped table-bordered" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008/12/13</td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008/12/19</td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013/03/03</td>
                                <td>$342,000</td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>36</td>
                                <td>2008/10/16</td>
                                <td>$470,600</td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>43</td>
                                <td>2012/12/18</td>
                                <td>$313,500</td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>19</td>
                                <td>2010/03/17</td>
                                <td>$385,750</td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>66</td>
                                <td>2012/11/27</td>
                                <td>$198,500</td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td>64</td>
                                <td>2010/06/09</td>
                                <td>$725,000</td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>59</td>
                                <td>2009/04/10</td>
                                <td>$237,500</td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>2012/09/26</td>
                                <td>$217,500</td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>30</td>
                                <td>2011/09/03</td>
                                <td>$345,000</td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td>40</td>
                                <td>2009/06/25</td>
                                <td>$675,000</td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td>$106,450</td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sidney</td>
                                <td>23</td>
                                <td>2010/09/20</td>
                                <td>$85,600</td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>$1,200,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>2010/12/22</td>
                                <td>$92,575</td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>28</td>
                                <td>2010/11/14</td>
                                <td>$357,650</td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td>$206,850</td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010/03/11</td>
                                <td>$850,000</td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>20</td>
                                <td>2011/08/14</td>
                                <td>$163,000</td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sidney</td>
                                <td>37</td>
                                <td>2011/06/02</td>
                                <td>$95,400</td>
                            </tr>
                            <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td>53</td>
                                <td>2009/10/22</td>
                                <td>$114,500</td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>London</td>
                                <td>27</td>
                                <td>2011/05/07</td>
                                <td>$145,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Cortez</td>
                                <td>Team Leader</td>
                                <td>San Francisco</td>
                                <td>22</td>
                                <td>2008/10/26</td>
                                <td>$235,500</td>
                            </tr>
                            <tr>
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>Edinburgh</td>
                                <td>46</td>
                                <td>2011/03/09</td>
                                <td>$324,050</td>
                            </tr>
                            <tr>
                                <td>Unity Butler</td>
                                <td>Marketing Designer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/12/09</td>
                                <td>$85,675</td>
                            </tr>
                            <tr>
                                <td>Howard Hatfield</td>
                                <td>Office Manager</td>
                                <td>San Francisco</td>
                                <td>51</td>
                                <td>2008/12/16</td>
                                <td>$164,500</td>
                            </tr>
                            <tr>
                                <td>Hope Fuentes</td>
                                <td>Secretary</td>
                                <td>San Francisco</td>
                                <td>41</td>
                                <td>2010/02/12</td>
                                <td>$109,850</td>
                            </tr>
                            <tr>
                                <td>Vivian Harrell</td>
                                <td>Financial Controller</td>
                                <td>San Francisco</td>
                                <td>62</td>
                                <td>2009/02/14</td>
                                <td>$452,500</td>
                            </tr>
                            <tr>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>37</td>
                                <td>2008/12/11</td>
                                <td>$136,200</td>
                            </tr>
                            <tr>
                                <td>Jackson Bradshaw</td>
                                <td>Director</td>
                                <td>New York</td>
                                <td>65</td>
                                <td>2008/09/26</td>
                                <td>$645,750</td>
                            </tr>
                            <tr>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2011/02/03</td>
                                <td>$234,500</td>
                            </tr>
                            <tr>
                                <td>Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td>$163,500</td>
                            </tr>
                            <tr>
                                <td>Sakura Yamamoto</td>
                                <td>Support Engineer</td>
                                <td>Tokyo</td>
                                <td>37</td>
                                <td>2009/08/19</td>
                                <td>$139,575</td>
                            </tr>
                            <tr>
                                <td>Thor Walton</td>
                                <td>Developer</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2013/08/11</td>
                                <td>$98,540</td>
                            </tr>
                            <tr>
                                <td>Finn Camacho</td>
                                <td>Support Engineer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/07/07</td>
                                <td>$87,500</td>
                            </tr>
                            <tr>
                                <td>Serge Baldwin</td>
                                <td>Data Coordinator</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2012/04/09</td>
                                <td>$138,575</td>
                            </tr>
                            <tr>
                                <td>Zenaida Frank</td>
                                <td>Software Engineer</td>
                                <td>New York</td>
                                <td>63</td>
                                <td>2010/01/04</td>
                                <td>$125,250</td>
                            </tr>
                            <tr>
                                <td>Zorita Serrano</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>56</td>
                                <td>2012/06/01</td>
                                <td>$115,000</td>
                            </tr>
                            <tr>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>43</td>
                                <td>2013/02/01</td>
                                <td>$75,650</td>
                            </tr>
                            <tr>
                                <td>Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td>$145,600</td>
                            </tr>
                            <tr>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2011/03/21</td>
                                <td>$356,250</td>
                            </tr>
                            <tr>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>London</td>
                                <td>21</td>
                                <td>2009/02/27</td>
                                <td>$103,500</td>
                            </tr>
                            <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>San Francisco</td>
                                <td>30</td>
                                <td>2010/07/14</td>
                                <td>$86,500</td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008/11/13</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td>$112,000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="site-footer">
        <div class="text-right">
            Powered by <a href="http://bytefury.com/" target="_blank">Bytefury</a>
        </div>
    </footer>
    <div class="skin-tools">
        <a class="skin-tools-action">
            <i class="icon-fa icon-fa-cog"></i>
        </a>
        <div class="skin-tools-content">
            <h5 class="mt-2">Select Skin</h5>
            <div class="row mt-md-4">
                <div class="col-sm-6 skin-item">
                    <a href="#" class="skin-radio active" data-skin="default" title="Skin - Default">
                        <img src="../../assets/global/img/skins/skin-default.png" class="img-fluid">
                    </a>
                </div>
                <div class="col-sm-6 skin-item">
                    <a href="#" class="skin-radio" data-skin="tyrell" data-logo="white" title="Skin - Tyrell">
                        <img src="../../assets/global/img/skins/skin-tyrell.png" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="row mt-md-4">
                <div class="col-sm-6 skin-item">
                    <a href="#" class="skin-radio" data-skin="arryn" data-logo="white" title="Skin - Arryn">
                        <img src="../../assets/global/img/skins/skin-arryn.png" class="img-fluid">
                    </a>
                </div>
                <div class="col-sm-6 skin-item">
                    <a href="#" class="skin-radio" data-skin="lannister" data-logo="white" title="Skin - Lannister">
                        <img src="../../assets/global/img/skins/skin-lannister.png" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="row mt-md-4">
                <div class="col-sm-6 skin-item">
                    <a href="#" class="skin-radio" data-skin="stark" title="Skin - Stark">
                        <img src="../../assets/global/img/skins/skin-stark.png" class="img-fluid">
                    </a>
                </div>
                <div class="col-sm-6 skin-item">
                    <a href="#" class="skin-radio" data-skin="targaryen" title="Skin - Targaryen">
                        <img src="../../assets/global/img/skins/skin-targaryen.png" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- START GLOBAL  SCRIPT -->
<script src="assets/global/js/core/plugins.js"></script>
<script src="assets/global/js/demo/skintools.js"></script>
<!-- END GLOBAL  SCRIPT -->

<!-- START PAGE  SCRIPT -->
<script src="assets/plugins/datatables/dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="assets/pages/datatables.js"></script>
<!-- END PAGE  SCRIPT -->

</body>
</html>
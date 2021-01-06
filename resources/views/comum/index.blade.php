
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Title -->
        <title>AdministreSite</title>
        <base href="/adminsite/public/">

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Favicon -->
        <link rel="shortcut icon" href="../../favicon.ico">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
        <!-- CSS Global Compulsory -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
        <!-- CSS Global Icons -->
        <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/vendor/icon-line/css/simple-line-icons.css">
        <link rel="stylesheet" href="assets/vendor/icon-etlinefont/style.css">
        <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
        <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">

        <link rel="stylesheet" href="assets/vendor/hs-admin-icons/hs-admin-icons.css">
        <link rel="stylesheet" href="assets/vendor/animate.css">
        <link rel="stylesheet" href="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="assets/vendor/bootstrap-select/css/bootstrap-select.min.css">

        <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">

        <!-- CSS Unify -->
        <link rel="stylesheet" href="assets/css/unify-admin.css">

        <!-- CSS Customization -->
        <link rel="stylesheet" href="assets/css/custom.css">
    </head>

    <body>
        <main>
            <!-- Header -->
            <header id="js-header" class="u-header u-header--sticky-top">
                <div class="u-header__section u-header__section--admin-dark g-min-height-65">
                    <nav class="navbar no-gutters g-pa-0">
                        <div class="col-auto d-flex flex-nowrap u-header-logo-toggler g-py-12">
                            <!-- Logo -->
                            <a href="http://localhost/adminsite/public/admin" class="navbar-brand d-flex align-self-center g-hidden-xs-down g-line-height-1 py-0 g-mt-5">

                                <svg class="u-header-logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-78.000000, -19.000000)">
                                <g transform="translate(78.000000, 19.000000)">
                                <path class="g-fill-primary" d="M0,0 L19.2941176,0 L19.2941176,0 C23.7123956,-8.11624501e-16 27.2941176,3.581722 27.2941176,8 L27.2941176,27.2941176 L8,27.2941176 L8,27.2941176 C3.581722,27.2941176 5.41083001e-16,23.7123956 0,19.2941176 L0,0 Z"></path>
                                <path class="g-fill-white" d="M21.036662,24.8752523 L20.5338647,22.6659916 L20.3510293,22.6659916 C19.8533083,23.4481246 19.1448284,24.0626484 18.2255681,24.5095816 C17.3063079,24.9565147 16.2575544,25.1799779 15.0792761,25.1799779 C13.0376043,25.1799779 11.5139914,24.672107 10.5083918,23.6563498 C9.50279224,22.6405927 9,21.1017437 9,19.0397567 L9,8.02392554 L12.6109986,8.02392554 L12.6109986,18.4150692 C12.6109986,19.7050808 12.8750915,20.6725749 13.4032852,21.3175807 C13.9314789,21.9625865 14.7593086,22.2850846 15.886799,22.2850846 C17.3901196,22.2850846 18.4947389,21.8356188 19.2006901,20.9366737 C19.9066413,20.0377286 20.2596117,18.5318912 20.2596117,16.4191164 L20.2596117,8.02392554 L23.855374,8.02392554 L23.855374,24.8752523 L21.036662,24.8752523 Z"></path>
                                <path class="g-fill-white" d="M44.4764678,24.4705882 L40.8807055,24.4705882 L40.8807055,14.1099172 C40.8807055,12.809748 40.6191519,11.8397145 40.096037,11.1997875 C39.5729221,10.5598605 38.7425531,10.2399018 37.6049051,10.2399018 C36.0914269,10.2399018 34.9842682,10.6868282 34.2833958,11.5806945 C33.5825234,12.4745608 33.2320924,13.9727801 33.2320924,16.0753974 L33.2320924,24.4705882 L29.6515664,24.4705882 L29.6515664,7.61926145 L32.4550421,7.61926145 L32.9578394,9.8285222 L33.1406747,9.8285222 C33.6485533,9.02607405 34.3697301,8.40647149 35.3042266,7.96969592 C36.2387232,7.53292034 37.27478,7.31453583 38.412428,7.31453583 C42.4551414,7.31453583 44.4764678,9.3714132 44.4764678,13.4852296 L44.4764678,24.4705882 Z M53.7357283,24.4705882 L50.1552023,24.4705882 L50.1552023,7.61926145 L53.7357283,7.61926145 L53.7357283,24.4705882 Z M49.9418944,3.15503112 C49.9418944,2.51510412 50.1171098,2.0224693 50.467546,1.67711187 C50.8179823,1.33175444 51.3182351,1.15907831 51.9683197,1.15907831 C52.5980892,1.15907831 53.0881846,1.33175444 53.4386208,1.67711187 C53.7890571,2.0224693 53.9642725,2.51510412 53.9642725,3.15503112 C53.9642725,3.76448541 53.7890571,4.24442346 53.4386208,4.59485968 C53.0881846,4.94529589 52.5980892,5.12051137 51.9683197,5.12051137 C51.3182351,5.12051137 50.8179823,4.94529589 50.467546,4.59485968 C50.1171098,4.24442346 49.9418944,3.76448541 49.9418944,3.15503112 Z M68.0077253,10.3313195 L63.8939294,10.3313195 L63.8939294,24.4705882 L60.2981671,24.4705882 L60.2981671,10.3313195 L57.525164,10.3313195 L57.525164,8.65532856 L60.2981671,7.55831633 L60.2981671,6.4613041 C60.2981671,4.47042009 60.7654084,2.99505497 61.699905,2.03516447 C62.6344015,1.07527397 64.0615189,0.595335915 65.9812999,0.595335915 C67.2408388,0.595335915 68.4800439,0.803563007 69.6989525,1.22002344 L68.7543031,3.93208145 C67.8705943,3.64766945 67.0275286,3.50546559 66.2250804,3.50546559 C65.4124747,3.50546559 64.820805,3.75686171 64.4500537,4.25966149 C64.0793023,4.76246128 63.8939294,5.51664965 63.8939294,6.52224922 L63.8939294,7.61926145 L68.0077253,7.61926145 L68.0077253,10.3313195 Z M69.0089215,7.61926145 L72.9094094,7.61926145 L76.3375727,17.1724096 C76.8556088,18.5335242 77.2009611,19.813359 77.3736398,21.0119524 L77.49553,21.0119524 C77.5869482,20.453286 77.7545456,19.7752783 77.9983273,18.9779089 C78.242109,18.1805396 79.5321012,14.3943616 81.8683427,7.61926145 L85.738358,7.61926145 L78.5315971,26.7103215 C77.2212704,30.2146837 75.0374253,31.9668385 71.9799963,31.9668385 C71.1877057,31.9668385 70.4157419,31.8805004 69.6640816,31.7078217 L69.6640816,28.8738734 C70.2024329,28.9957643 70.8169567,29.0567088 71.5076716,29.0567088 C73.2344587,29.0567088 74.4482703,28.056203 75.1491427,26.0551615 L75.7738303,24.4705882 L69.0089215,7.61926145 Z"></path>
                                </g>
                                </g>
                                </g>
                                </svg>



                            </a>
                            <!-- End Logo -->

                            <!-- Sidebar Toggler -->
                            <a class="js-side-nav u-header__nav-toggler d-flex align-self-center ml-auto" href="#" data-hssm-class="u-side-nav--mini u-sidebar-navigation-v1--mini" data-hssm-body-class="u-side-nav-mini" data-hssm-is-close-all-except-this="true" data-hssm-target="#sideNav">
                                <i class="hs-admin-align-left"></i>
                            </a>
                            <!-- End Sidebar Toggler -->
                        </div>

                        <!-- Top Search Bar -->
                        <form id="searchMenu" class="u-header--search col-sm g-py-12 g-ml-15--sm g-ml-20--md g-mr-10--sm" aria-labelledby="searchInvoker" action="#!">
                            <div class="input-group g-max-width-450--sm">
                                <input class="form-control h-100 form-control-md g-rounded-4 g-pr-40" type="text" placeholder="Enter search keywords">
                                <button type="submit" class="btn u-btn-outline-primary g-brd-none g-bg-transparent--hover g-pos-abs g-top-0 g-right-0 d-flex g-width-40 h-100 align-items-center justify-content-center g-font-size-18 g-z-index-2"><i class="hs-admin-search"></i>
                                </button>
                            </div>
                        </form>
                        <!-- End Top Search Bar -->

                                               <!-- Top Activity Toggler -->
                        <a id="activityInvoker" class="text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20" href="#" aria-controls="activityMenu" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#activityMenu"
                           data-dropdown-type="css-animation" data-dropdown-animation-in="fadeInRight" data-dropdown-animation-out="fadeOutRight" data-dropdown-duration="300">
                            <i class="hs-admin-align-right g-absolute-centered"></i>
                        </a>
                        <!-- End Top Activity Toggler -->
                    </nav>

                    <!-- Top Activity Panel -->
                    <div id="activityMenu" class="js-custom-scroll u-header-sidebar g-pos-fix g-top-0 g-left-auto g-right-0 g-z-index-4 g-width-300 g-width-400--sm g-height-100vh" aria-labelledby="activityInvoker">
                        <div class="u-header-dropdown-bordered-v1 g-pa-20">
                            <a id="activityInvokerClose" class="pull-right g-color-lightblue-v2" href="#" aria-controls="activityMenu" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#activityMenu" data-dropdown-type="css-animation" data-dropdown-animation-in="fadeInRight"
                               data-dropdown-animation-out="fadeOutRight" data-dropdown-duration="300">
                                <i class="hs-admin-close"></i>
                            </a>
                            <h4 class="text-uppercase g-font-size-default g-letter-spacing-0_5 g-mr-20 g-mb-0">Activity</h4>
                        </div>

                        <!-- Activity Bars -->
                        <section class="g-pa-20 g-mb-10">
                         <a href="{{route('logout.index')}}">logout</a>

                        </section>
                        <!-- End Activity Bars -->



                    </div>
                    <!-- End Top Activity Panel -->

                </div>
            </header>
            <!-- End Header -->


            <section class="container-fluid px-0 g-pt-65">
                <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
                    <!-- Sidebar Nav -->
                    <div id="sideNav" class="col-auto u-sidebar-navigation-v1 u-sidebar-navigation--dark">
                        <ul id="sideNavMenu" class="u-sidebar-navigation-v1-menu u-side-nav--top-level-menu g-min-height-100vh mb-0">
                            <!-- ADMIN   -->
                            
                            <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                                <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{ route('admin.index')}}">
                                    <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                                        <i class="hs-admin-layers"></i>
                                    </span>
                                    <span class="media-body align-self-center">Dashboard</span>
                                </a>
                            <!-- END ADMIN   -->                            
                            <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                                <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{ route('categoria.index')}}">
                                    <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                                        <i class="hs-admin-layers"></i>
                                    </span>
                                    <span class="media-body align-self-center">Categoria</span>
                                </a>

                            </li>
                            <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                                <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{ route('post.index')}}">
                                    <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                                        <i class="hs-admin-layers"></i>
                                    </span>
                                    <span class="media-body align-self-center">Artigos</span>
                                </a>

                            </li>
                            <!--Produtos-->
                            <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                                <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{ route('product.index')}}">
                                    <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                                        <i class="hs-admin-layers"></i>
                                    </span>
                                    <span class="media-body align-self-center">Produtos</span>
                                </a>

                            </li>
                            <!--END Produtos-->

                                                        <!--Usuarios-->
                                                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                                <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="{{ route('usuarios.index')}}">
                                    <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                                        <i class="hs-admin-layers"></i>
                                    </span>
                                    <span class="media-body align-self-center">Usuarios</span>
                                </a>

                            </li>
                            <!--END Usuario-->
                            
                            


                         </ul>
                    </div>
                    <!-- End Sidebar Nav -->


                    <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
                        <!-- Breadcrumb-v1 -->
                        <div class="g-hidden-sm-down g-bg-gray-light-v8 g-pa-20">
                            <ul class="u-list-inline g-color-gray-dark-v6">

                                <li class="list-inline-item g-mr-10">
                                    <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle" href="#!">Dashboard</a>
                                    <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
                                </li>

                                <li class="list-inline-item g-mr-10">
                                    <a class="u-link-v5 g-color-gray-dark-v6 g-color-secondary--hover g-valign-middle" href="#!">Tables</a>
                                    <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
                                </li>

                                <li class="list-inline-item">
                                    <span class="g-valign-middle">Tables - Basic</span>
                                </li>
                            </ul>
                        </div>
                        <!-- End Breadcrumb-v1 -->



                        @yield('content')


                        <!-- Footer -->
                        <footer id="footer" class="u-footer--bottom-sticky g-bg-white g-color-gray-dark-v6 g-brd-top g-brd-gray-light-v7 g-pa-20">
                            <div class="row align-items-center">
                                <!-- Footer Nav -->
                                <div class="col-md-4 g-mb-10 g-mb-0--md">
                                    <ul class="list-inline text-center text-md-left mb-0">
                                        <li class="list-inline-item">
                                            <a class="g-color-gray-dark-v6 g-color-secondary--hover" href="#">FAQ</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <span class="g-color-gray-dark-v6">|</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="g-color-gray-dark-v6 g-color-secondary--hover" href="#">Support</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <span class="g-color-gray-dark-v6">|</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="g-color-gray-dark-v6 g-color-secondary--hover" href="#">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Footer Nav -->

                                <!-- Footer Socials -->
                                <div class="col-md-4 g-mb-10 g-mb-0--md">
                                    <ul class="list-inline g-font-size-16 text-center mb-0">
                                        <li class="list-inline-item g-mx-10">
                                            <a href="#" class="g-color-facebook g-color-secondary--hover">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item g-mx-10">
                                            <a href="#" class="g-color-google-plus g-color-secondary--hover">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item g-mx-10">
                                            <a href="#" class="g-color-black g-color-secondary--hover">
                                                <i class="fa fa-github"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item g-mx-10">
                                            <a href="#" class="g-color-twitter g-color-secondary--hover">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Footer Socials -->

                                <!-- Footer Copyrights -->
                                <div class="col-md-4 text-center text-md-right">
                                    <small class="d-block g-font-size-default">&copy; 2020 Htmlstream. All Rights Reserved.</small>
                                </div>
                                <!-- End Footer Copyrights -->
                            </div>
                        </footer>
                        <!-- End Footer -->
                    </div>
                </div>
            </section>
        </main>

        <div id="new-project-form" class="rounded-0 p-0" style="display: none; width: 790px; max-width: 100%;">
            <header class="g-bg-gray-light-v8 g-px-15 g-px-30--sm g-py-20">
                <h2 class="g-font-weight-300 g-font-size-16 g-color-black mb-0">Create New Project</h2>
            </header>

            <div class="g-pa-15 g-pa-30--sm">
                <form>
                    <h3 class="g-mb-20">
            <!--         <span class="d-inline-block g-line-height-1_6 g-font-weight-300 g-font-size-20 g-color-black g-brd-bottom--dashed g-brd-gray-light-v6">Dropbox design</span>
                    <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-ml-15"></i> -->
                        <span class="g-font-weight-300 g-font-size-20 g-color-black">Dropbox design</span>
                    </h3>

                    <div class="form-group g-mb-35">
                        <textarea class="form-control form-control-md g-resize-none g-line-height-1_6 g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-pa-20" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit blanditiis, doloremque libero assumenda et qui, vel placeat quos in consequuntur iure quam alias modi quidem, praesentium. Voluptatibus tenetur deleniti eaque! periam et facere voluptas
            commodi natus blanditiis laborum quasi ea, possimus quae cupiditate distinctio, tenetur ullam quidem inventore fuga eaque incidunt reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</textarea>
                    </div>

                    <table class="g-mb-35">
                        <thead>
                            <tr>
                                <th class="g-width-340 g-font-weight-300 g-font-size-16 g-color-black g-pb-20">Team Member</th>
                                <th class="g-width-460 g-font-weight-300 g-font-size-16 g-color-black g-pb-20">Role</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="g-pb-15">
                                    <img class="g-width-40 g-height-40 rounded-circle g-mr-12" src="assets/img-temp/125x125/img3.jpg" alt="Image Description">
                                    <span class="g-hidden-sm-down g-line-height-1 g-color-gray-dark-v6">Carlos Castillo</span>
                                </td>
                                <td class="g-pb-15">
                                    <div class="u-select--v2 g-width-280--md g-brd-gray-light-v7 g-rounded-3">
                                        <select class="js-select u-select--v2-select w-100 g-color-gray-dark-v6" style="display: none;">
                                            <option>Designer</option>
                                            <option>Manager</option>
                                            <option>Programmer</option>
                                        </select>
                                        <i class="hs-admin-angle-down g-absolute-centered--y g-right-20 g-color-gray-light-v6"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="g-pb-15">
                                    <img class="g-width-40 g-height-40 rounded-circle g-mr-12" src="assets/img-temp/125x125/img6.jpg" alt="Image Description">
                                    <span class="g-hidden-sm-down g-line-height-1 g-color-gray-dark-v6">Micheal Schultz</span>
                                </td>
                                <td class="g-pb-15">
                                    <div class="u-select--v2 g-width-280--md g-brd-gray-light-v7 g-rounded-3">
                                        <select class="js-select u-select--v2-select w-100 g-color-gray-dark-v6" style="display: none;">
                                            <option>Manager</option>
                                            <option>Designer</option>
                                            <option>Programmer</option>
                                        </select>
                                        <i class="hs-admin-angle-down g-absolute-centered--y g-right-20 g-color-gray-light-v6"></i>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <a class="d-flex align-items-center pull-left u-link-v5 g-parent" href="#">
                                        <span class="d-inline-block g-pos-rel g-width-40 g-height-40 g-bg-secondary--parent-hover g-font-size-14 g-color-secondary g-color-white--parent-hover g-brd-around g-brd-secondary rounded-circle g-mr-12">
                                            <i class="hs-admin-plus g-absolute-centered"></i>
                                        </span>
                                        <span class="g-hidden-sm-down g-line-height-1 g-color-secondary">Add Member</span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="g-mb-30">
                        <div class="media g-mb-30">
                            <h3 class="d-flex align-self-center g-font-weight-300 g-font-size-16 g-color-black mb-0 g-mr-20">Set Project Budget</h3>
                            <span class="media-body align-self-center text-right g-font-size-16 g-color-gray-dark-v6">
                                <span class="g-font-weight-300">Total:</span>
                                <i class="g-font-style-normal g-color-black">$</i>
                                <span id="regularSliderAmount" class="g-color-black">45000</span>
                            </span>
                        </div>

                        <div id="regularSlider" class="u-slider--v3 g-mb-15" data-result-container="regularSliderAmount" data-default="45000" data-min="0" data-max="99000"></div>

                        <div class="media">
                            <span class="d-flex align-self-center g-font-weight-300 g-color-gray-dark-v6 g-mr-20">$0</span>
                            <span class="media-body align-self-center text-right g-font-weight-300 g-color-gray-dark-v6">$99000</span>
                        </div>
                    </div>

                    <div class="g-mb-35">
                        <h3 class="g-font-weight-300 g-font-size-16 g-color-black g-mb-20">Set Project Budget</h3>
                        <div class="u-tagsinput--v1">
                            <input class="js-tagsinput" type="text">
                        </div>
                    </div>

                    <div class="g-mb-45">
                        <h3 class="g-font-weight-300 g-font-size-16 g-color-black g-mb-20">Subtasks</h3>

                        <div class="media g-brd-bottom g-brd-gray-light-v7 g-pb-15">
                            <div class="d-flex align-self-center align-items-center">
                                <label class="form-check-inline u-check g-color-gray-dark-v6 g-pl-35 mb-0">
                                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                                    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0 g-width-20 g-height-20">
                                        <i class="hs-admin-icons g-bg-lightblue-v3--parent-checked g-brd-gray-light-v7 g-brd-lightblue-v3--parent-checked g-rounded-2" data-check-icon="&#xe936"></i>
                                    </div>
                                    <span class="g-color-gray-dark-v7--checked g-text-strike--checked">Profiles Of The Powerful Advertising Exec Steve Grasse</span>
                                </label>
                            </div>

                            <div class="media-body d-flex align-self-center align-items-center justify-content-end g-ml-10 g-ml-0--sm">
                                <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Assign To:</span>

                                <div class="u-select--v1 g-width-185--md g-pr-20">
                                    <select class="js-select u-select--v1-select w-100" style="display: none;">
                                        <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="assets/img-temp/125x125/img3.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Carlos Castillo</span></span>'>Carlos Castillo</option>
                                        <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="assets/img-temp/125x125/img6.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">John Doe</span></span>'>John Doe</option>
                                        <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="assets/img-temp/125x125/img5.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Franc Doe</span></span>'>Franc Doe</option>
                                    </select>
                                    <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto"></i>
                                </div>
                            </div>
                        </div>

                        <div class="media g-brd-bottom g-brd-gray-light-v7 g-py-15">
                            <div class="d-flex align-self-center align-items-center">
                                <label class="form-check-inline u-check g-color-gray-dark-v6 g-pl-35 mb-0">
                                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" checked>
                                    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0 g-width-20 g-height-20">
                                        <i class="hs-admin-icons g-bg-lightblue-v3--parent-checked g-brd-gray-light-v7 g-brd-lightblue-v3--parent-checked g-rounded-2" data-check-icon="&#xe936"></i>
                                    </div>
                                    <span class="g-color-gray-dark-v7--checked g-text-strike--checked">7 Ways To Advertise Your Business For Free</span>
                                </label>
                            </div>

                            <div class="media-body d-flex align-self-center align-items-center justify-content-end g-ml-0--sm">
                                <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Assign To:</span>

                                <div class="u-select--v1 g-width-185--md g-pr-20">
                                    <select class="js-select u-select--v1-select w-100" style="display: none;">
                                        <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="assets/img-temp/125x125/img6.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">John Doe</span></span>'>John Doe</option>
                                        <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="assets/img-temp/125x125/img3.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Carlos Castillo</span></span>'>Carlos Castillo</option>
                                        <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="assets/img-temp/125x125/img5.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Franc Doe</span></span>'>Franc Doe</option>
                                    </select>
                                    <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto"></i>
                                </div>
                            </div>
                        </div>

                        <div class="media g-brd-bottom g-brd-gray-light-v7 g-py-15">
                            <div class="d-flex align-self-center align-items-center">
                                <label class="form-check-inline u-check g-color-secondary g-pl-35 mb-0">
                                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                                    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0 g-width-20 g-height-20">
                                        <i class="hs-admin-icons g-bg-lightblue-v3--parent-checked g-brd-gray-light-v7 g-brd-lightblue-v3--parent-checked g-rounded-2" data-check-icon="&#xe936"></i>
                                    </div>
                                    Add New Task
                                </label>
                            </div>

                            <div class="media-body d-flex align-self-center align-items-center justify-content-end g-ml-0--sm">
                                <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Assign To:</span>

                                <div class="u-select--v1 g-width-185--md g-pr-20">
                                    <select class="js-select u-select--v1-select w-100" style="display: none;">
                                        <option data-content='<span class="d-flex align-items-center g-mr-12--sm"><span class="d-flex align-items-center justify-content-center g-width-40 g-height-40 g-bg-gray-light-v8 g-font-size-18 g-color-gray-light-v6 rounded-circle g-mr-12--sm"><i class="hs-admin-user"></i></span><span class="g-hidden-sm-down g-line-height-1 g-color-black">Unknown</span></span>'>Unknown</option>
                                        <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="assets/img-temp/125x125/img3.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Carlos Castillo</span></span>'>Carlos Castillo</option>
                                        <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="assets/img-temp/125x125/img6.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">John Doe</span></span>'>John Doe</option>
                                        <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="assets/img-temp/125x125/img5.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Franc Doe</span></span>'>Franc Doe</option>
                                    </select>
                                    <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="media g-bg-gray-light-v8 g-px-20 g-py-10 g-mb-35">
                        <div class="d-flex align-self-center align-items-center g-mr-10">
                            <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Assign To:</span>

                            <div class="u-select--v1 g-width-185--md g-pr-20">
                                <select class="js-select u-select--v1-select w-100" style="display: none;">
                                    <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="assets/img-temp/125x125/img3.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Carlos Castillo</span></span>'>Carlos Castillo</option>
                                    <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="assets/img-temp/125x125/img6.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">John Doe</span></span>'>John Doe</option>
                                    <option data-content='<span class="d-flex align-items-center"><img class="g-width-40 g-height-40 rounded-circle g-mr-12--sm" src="assets/img-temp/125x125/img5.jpg" alt="Image Description"><span class="g-hidden-sm-down g-line-height-1 g-color-black">Franc Doe</span></span>'>Franc Doe</option>
                                </select>
                                <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto"></i>
                            </div>
                        </div>

                        <div class="d-flex align-self-center align-items-center ml-auto">
                            <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Due Date:</span>

                            <div class="form-group mb-0">
                                <div id="datepickerWrapper" class="u-datepicker-right u-datepicker--v3 g-pos-rel g-width-140 g-width-180--sm g-cursor-pointer g-brd-around g-brd-gray-light-v7 g-rounded-4">
                                    <span class="g-hidden-sm-down g-pos-abs g-top-0 g-left-0 g-z-index-2 g-width-40 h-100 g-font-size-18 g-color-gray-light-v6 rounded-0">
                                        <i class="hs-admin-calendar g-absolute-centered"></i>
                                    </span>
                                    <input id="datepicker" class="g-bg-transparent g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-pr-40 g-pl-40--sm g-py-12 w-100" type="text" data-rp-wrapper="#datepickerWrapper" data-rp-date-format="d M Y" data-rp-default-date='["20 Jun 2017"]'>
                                    <span class="g-pos-abs g-top-0 g-right-0 g-z-index-2 g-width-40 h-100 g-font-size-default g-color-gray-light-v6 rounded-0">
                                        <i class="hs-admin-angle-down g-absolute-centered"></i>
                                    </span>
                                </div>
                            </div>

                            <a class="u-link-v5 g-font-size-18 g-color-gray-light-v6 g-color-secondary--hover g-ml-15" href="#">
                                <i class="hs-admin-share"></i>
                            </a>
                        </div>
                    </div>

                    <div class="g-mb-35">
                        <h3 class="g-font-weight-300 g-font-size-16 g-color-black g-mb-20">Project Visibility</h3>

                        <div class="g-mb-15">
                            <label class="form-check-inline u-check g-pl-35 ml-0 g-mr-10 g-mr-40--sm">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio" checked="">
                                <div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-20 g-height-20 g-brd-lightblue-v3--checked">
                                    <i class="g-absolute-centered d-block g-width-16 g-height-16 g-bg-lightblue-v3--parent-checked"></i>
                                </div>
                                Everyone
                            </label>

                            <label class="form-check-inline u-check g-pl-35 ml-0 g-mr-10 g-mr-40--sm">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                                <div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-20 g-height-20 g-brd-lightblue-v3--checked">
                                    <i class="g-absolute-centered d-block g-width-16 g-height-16 g-bg-lightblue-v3--parent-checked"></i>
                                </div>
                                Friends
                            </label>

                            <label class="form-check-inline u-check g-pl-35 ml-0 g-mr-10 g-mr-40--sm">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                                <div class="u-check-icon-radio-v4 g-absolute-centered--y g-left-0 g-width-20 g-height-20 g-brd-lightblue-v3--checked">
                                    <i class="g-absolute-centered d-block g-width-16 g-height-16 g-bg-lightblue-v3--parent-checked"></i>
                                </div>
                                Collegues
                            </label>
                        </div>
                    </div>

                    <div class="g-mb-35">
                        <h3 class="g-font-weight-300 g-font-size-16 g-color-black g-mb-20">Attachments</h3>

                        <a class="js-file-upload d-flex align-items-center u-link-v5 g-color-secondary mb-0" href="#" data-element-classes="d-flex align-items-center g-parent g-mb-15" data-icon-classes="hs-admin-file g-font-size-18 g-color-gray-light-v6 g-color-secondary--parent-hover g-mr-15"
                           data-text-classes="g-color-gray-dark-v6 g-color-secondary--parent-hover" data-remove-btn-classes="hs-admin-close g-font-size-14 g-color-primary opacity-0 g-opacity-1--parent-hover g-cursor-pointer g-ml-15">
                            <i class="hs-admin-plus g-font-size-16 g-mr-15"></i>
                            Add New Attachment
                        </a>
                    </div>

                    <div class="d-flex">
                        <button class="btn btn-xl u-btn-secondary g-width-160--md g-font-size-14 g-mr-15" type="submit">Create Project</button>
                        <button class="btn btn-xl u-btn-outline-gray-dark-v6 g-width-160--md g-font-size-14" type="reset" data-fancybox-close>Cancel</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- JS Global Compulsory -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>

        <script src="assets/vendor/popper.js/popper.min.js"></script>
        <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="assets/vendor/cookiejs/jquery.cookie.js"></script>


        <!-- JS Plugins Init. -->
        <script src="assets/vendor/appear.js"></script>
        <script src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
        <script src="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/vendor/table-edits/build/table-edits.min.js"></script>

        <!-- JS Unify -->
        <script src="assets/js/hs.core.js"></script>
        <script src="assets/js/components/hs.side-nav.js"></script>
        <script src="assets/js/helpers/hs.hamburgers.js"></script>
        <script src="assets/js/components/hs.dropdown.js"></script>
        <script src="assets/js/components/hs.scrollbar.js"></script>
        <script src="assets/js/helpers/hs.focus-state.js"></script>

        <!-- JS Custom -->
        <script src="assets/js/custom.js"></script>

        <!-- JS Plugins Init. -->
        <script>
            $(document).on('ready', function () {
                // initialization of custom select
                $('.js-select').selectpicker();

                // initialization of sidebar navigation component
                $.HSCore.components.HSSideNav.init('.js-side-nav');

                // initialization of hamburger
                $.HSCore.helpers.HSHamburgers.init('.hamburger');

                // initialization of HSDropdown component
                $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
                    dropdownHideOnScroll: false,
                    dropdownType: 'css-animation',
                    dropdownAnimationIn: 'fadeIn',
                    dropdownAnimationOut: 'fadeOut'
                });

                // initialization of custom scrollbar
                $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

                // initialization of editable table
                $('.js-editable-table tr').editable({
                    keyboard: true,
                    dblclick: true,
                    button: true,
                    buttonSelector: '.js-edit',
                    maintainWidth: true,
                    edit: function (values) {
                        $('.js-edit i', this).removeClass('hs-admin-pencil').addClass('hs-admin-check g-color-secondary');
                    },
                    save: function (values) {
                        $('.js-edit i', this).removeClass('hs-admin-check g-color-secondary').addClass('hs-admin-pencil');
                    }
                });
            });
        </script>
    </body>

</html>

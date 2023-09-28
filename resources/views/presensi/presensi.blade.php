
<!doctype html>
<html lang="en" dir="ltr">
    
<!-- Mirrored from templates.iqonic.design/hope-ui/pro/html/dashboard/plugins/image-croper.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 12:47:22 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title data-setting="app_name" data-rightJoin="">MES</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="DC.title" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Google Font Api KEY-->
        <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
        <!-- Config Options -->
        {{-- <meta name="setting_options" content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;huisetting-html&quot;,&quot;setting&quot;:{&quot;app_name&quot;:{&quot;value&quot;:&quot;Hope UI&quot;},&quot;theme_scheme_direction&quot;:{&quot;value&quot;:&quot;ltr&quot;},&quot;theme_scheme&quot;:{&quot;value&quot;:&quot;light&quot;},&quot;theme_style_appearance&quot;:{&quot;value&quot;:[&quot;theme-default&quot;]},&quot;theme_color&quot;:{&quot;colors&quot;:{&quot;--{{'prefix'}}primary&quot;:&quot;#3a57e8&quot;,&quot;--{{'prefix'}}info&quot;:&quot;#08B1BA&quot;},&quot;value&quot;:&quot;theme-color-default&quot;},&quot;theme_transition&quot;:{&quot;value&quot;:&quot;theme-with-animation&quot;},&quot;theme_font_size&quot;:{&quot;value&quot;:&quot;theme-fs-md&quot;},&quot;page_layout&quot;:{&quot;value&quot;:&quot;container-fluid&quot;},&quot;header_navbar&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;header_banner&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;sidebar_color&quot;:{&quot;value&quot;:&quot;sidebar-white&quot;},&quot;card_color&quot;:{&quot;value&quot;:&quot;card-default&quot;},&quot;sidebar_type&quot;:{&quot;value&quot;:[]},&quot;sidebar_menu_style&quot;:{&quot;value&quot;:&quot;left-bordered&quot;},&quot;footer&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;body_font_family&quot;:{&quot;value&quot;:null},&quot;heading_font_family&quot;:{&quot;value&quot;:null}}}'> --}}
        <!-- Favicon -->
        <link rel="shortcut icon" href="https://templates.iqonic.design/hope-ui/pro/html/assets/images/favicon.ico" />
        
        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}" />
        
        
        <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css')}}" />
        <link href="{{ asset('assets/vendor/bootstrap-toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />

        
        
        
        
        
        
        
        <!-- Hope Ui Design System Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/hope-ui.mind1f1.css?v=2.2.0')}}" />
        <link rel="stylesheet" href="{{ asset('assets/css/pro.mind1f1.css?v=2.2.0')}}" />
        
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/custom.mind1f1.css?v=2.2.0 ') }}" />
        
        <!-- Dark Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/dark.mind1f1.css?v=2.2.0 ') }}" />
        
        <!-- Customizer Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/customizer.mind1f1.css?v=2.2.0 ' ) }}" />
        
        <!-- RTL Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/rtl.mind1f1.css?v=2.2.0 ') }}" />
        
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
        

    </head>
    <body class="  ">
        <!-- loader Start -->
        <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body">
                <img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/loader.webp" alt="loader" class="light-loader img-fluid w-25" width="200" height="200">
            </div>
        </div>
        </div>
        <!-- loader END -->
          
<main class="main-content">
            <div class="position-relative  iq-banner ">
            <!--Nav Start-->
                <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu left-border">
                   <div class="container-fluid navbar-inner">
                      <a href="{{ url('/') }}" class="navbar-brand">
                         
                         <!--Logo start-->
                         <div class="logo-main">
                             <div class="logo-normal">
                                 <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                     <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                     <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                     <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                 </svg>
                             </div>
                             <div class="logo-mini">
                                 <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                     <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                     <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                     <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                 </svg>
                             </div>
                         </div>
                         <!--logo End-->         <h4 class="logo-title d-block d-xl-none" data-setting="app_name">Hope UI</h4>
                      </a>
                      <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                         <i class="icon d-flex">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24">
                               <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                            </svg>
                         </i>
                      </div>
                      <div class="d-flex align-items-center justify-content-between product-offcanvas">
                        
                         <div class="offcanvas offcanvas-end shadow-none iq-product-menu-responsive" tabindex="-1" id="offcanvasBottom">
                            <div class="offcanvas-body">
                               <ul class="iq-nav-menu list-unstyled">
                                  <li class="nav-item active">
                                     <a class="nav-link menu-arrow justify-content-start" data-bs-toggle="collapse" href="#homeData"
                                        role="button" aria-expanded="false" aria-controls="homeData">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <path
                                              d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                                              fill="currentColor" />
                                        </svg>
                                        <span class="nav-text ms-2">Home</span>
                                     </a>
                                 
                                  </li>
                              
                               </ul>
                            </div>
                         </div>
                      </div>
                      <div class="d-flex align-items-center">
                         <button id="navbar-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                               <span class="navbar-toggler-bar bar1 mt-1"></span>
                               <span class="navbar-toggler-bar bar2"></span>
                               <span class="navbar-toggler-bar bar3"></span>
                            </span>
                         </button>
                      </div>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                          
                            <li class="nav-item dropdown border-end pe-3 d-none d-xl-block">
                               <div class="form-group input-group mb-0 search-input">
                                  <input type="text" class="form-control" placeholder="Search...">
                                  <span class="input-group-text">
                                     <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                           stroke-linecap="round" stroke-linejoin="round"></circle>
                                        <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                           stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                               </div>
                            </li>
                            <li class="nav-item dropdown iq-responsive-menu border-end d-block d-xl-none">
                               <div class="btn btn-sm bg-body" id="navbarDropdown-search-11" role="button" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></circle>
                                     <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                  </svg>
                               </div>
                               <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown-search-11"
                                  style="width: 25rem;">
                                  <li class="px-3 py-0">
                                     <div class="form-group input-group mb-0">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-text">
                                           <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                                 stroke-linecap="round" stroke-linejoin="round"></circle>
                                              <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                                 stroke-linecap="round" stroke-linejoin="round"></path>
                                           </svg>
                                        </span>
                                     </div>
                                  </li>
                               </ul>
                            </li>
                     
                            <li class="nav-item iq-full-screen d-none d-xl-block" id="fullscreen-item">
                               <a href="#" class="nav-link" id="btnFullscreen" data-bs-toggle="dropdown">
                                  <div class="btn btn-primary btn-icon btn-sm rounded-pill">
                                     <span class="btn-inner">
                                        <svg class="normal-screen icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <path d="M18.5528 5.99656L13.8595 10.8961" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                           <path d="M14.8016 5.97618L18.5524 5.99629L18.5176 9.96906" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                           <path d="M5.8574 18.896L10.5507 13.9964" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                           <path d="M9.60852 18.9164L5.85775 18.8963L5.89258 14.9235" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <svg class="full-normal-screen d-none icon-24" width="24" height="24" viewBox="0 0 24 24"
                                           fill="none" xmlns="http://www.w3.org/2000/svg">
                                           <path d="M13.7542 10.1932L18.1867 5.79319" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                           <path d="M17.2976 10.212L13.7547 10.1934L13.7871 6.62518" stroke="currentColor"
                                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                           <path d="M10.4224 13.5726L5.82149 18.1398" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                           <path d="M6.74391 13.5535L10.4209 13.5723L10.3867 17.2755" stroke="currentColor"
                                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                     </span>
                                  </div>
                               </a>
                            </li>
                         </ul>
                      </div>
                   </div>
                </nav>                <!-- Nav Header Component Start -->
                    <div class="iq-navbar-header" style="height: 215px;">
                        <div class="container-fluid iq-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="flex-wrap d-flex justify-content-between align-items-center">
                                        <div>
                                            <h1>Selamat Datang!</h1>
                                            <p>Silahkan scann QR code anda di bawah ini.</p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-link btn-soft-light">
                                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.8251 15.2171H12.1748C14.0987 15.2171 15.731 13.985 16.3054 12.2764C16.3887 12.0276 16.1979 11.7713 15.9334 11.7713H14.8562C14.5133 11.7713 14.2362 11.4977 14.2362 11.16C14.2362 10.8213 14.5133 10.5467 14.8562 10.5467H15.9005C16.2463 10.5467 16.5263 10.2703 16.5263 9.92875C16.5263 9.58722 16.2463 9.31075 15.9005 9.31075H14.8562C14.5133 9.31075 14.2362 9.03619 14.2362 8.69849C14.2362 8.35984 14.5133 8.08528 14.8562 8.08528H15.9005C16.2463 8.08528 16.5263 7.8088 16.5263 7.46728C16.5263 7.12575 16.2463 6.84928 15.9005 6.84928H14.8562C14.5133 6.84928 14.2362 6.57472 14.2362 6.23606C14.2362 5.89837 14.5133 5.62381 14.8562 5.62381H15.9886C16.2483 5.62381 16.4343 5.3789 16.3645 5.13113C15.8501 3.32401 14.1694 2 12.1748 2H11.8251C9.42172 2 7.47363 3.92287 7.47363 6.29729V10.9198C7.47363 13.2933 9.42172 15.2171 11.8251 15.2171Z" fill="currentColor"></path>
                                                    <path opacity="0.4" d="M19.5313 9.82568C18.9966 9.82568 18.5626 10.2533 18.5626 10.7823C18.5626 14.3554 15.6186 17.2627 12.0005 17.2627C8.38136 17.2627 5.43743 14.3554 5.43743 10.7823C5.43743 10.2533 5.00345 9.82568 4.46872 9.82568C3.93398 9.82568 3.5 10.2533 3.5 10.7823C3.5 15.0873 6.79945 18.6413 11.0318 19.1186V21.0434C11.0318 21.5715 11.4648 22.0001 12.0005 22.0001C12.5352 22.0001 12.9692 21.5715 12.9692 21.0434V19.1186C17.2006 18.6413 20.5 15.0873 20.5 10.7823C20.5 10.2533 20.066 9.82568 19.5313 9.82568Z" fill="currentColor"></path>
                                                </svg>
                                                Announcements
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-header-img">
                            <img src="{{ asset('assets/images/dashboard/top-header.png')}}" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                            <img src="{{ asset('assets/images/dashboard/top-header1.png')}}" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                            <img src="{{ asset('assets/images/dashboard/top-header2.png')}}" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                            <img src="{{ asset('assets/images/dashboard/top-header3.png')}}" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                            <img src="{{ asset('assets/images/dashboard/top-header4.png')}}" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                            <img src="{{ asset('assets/images/dashboard/top-header5.png')}}" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                        </div>
                    </div>                <!-- Nav Header Component End -->
            <!--Nav End-->
            </div>
            <div class="content-inner container-fluid pb-0" id="page_layout">
<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-header d-flex justify-content-between">
            <div class="header-title">
               <h4 class="card-title">Scann Disini</h4>
            </div>
            
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-9">
                  <div class="docs-demo">
                     <div class="img-container">
                        <div  style="width: 500px" id="reader" ></div>
                        <input type="hidden" name="result" id="result"/>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="docs-preview clearfix">
                     <div class="img-preview preview-lg"></div>
                     <div class="img-preview preview-md"></div>
                     <div class="img-preview preview-sm"></div>
                     <div class="img-preview preview-xs"></div>
                  </div>
               
               </div>
               
            </div>
         </div>
      </div>
   </div>
  
</div>
            </div>
            <!-- Footer Section Start -->
            <footer class="footer">
                <div class="footer-body">
                    <ul class="left-panel list-inline mb-0 p-0">
                     
                    </ul>
                    <div class="right-panel">
                        ©<script>2022</script> <span data-setting="app_name">Event Hope</span>, Made with
                        <span class="text-gray">
                            <svg class="icon-16" width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z" fill="currentColor"></path>
                            </svg>
                        </span> by <a href="https://rembon.co.id/" target="_blank">Rembon</a>.
                    </div>
                </div>
            </footer>
            <!-- Footer Section End -->
        </main>

        <!-- Wrapper End-->
        <!-- Modal -->
  
        <!-- Library Bundle Script -->
        <script src="{{ asset('assets/js/core/libs.min.js')}}"></script>
        <!-- Plugin Scripts -->
        
        
        
        
        <!-- Slider-tab Script -->
        <script src="{{ asset('assets/js/plugins/slider-tabs.js')}}"></script>
        
        
        
        
        
        
        
        
        
        
        
        
        
        <!-- Lodash Utility -->
        <script src="{{ asset('assets/vendor/lodash/lodash.min.js')}}"></script>
        <!-- Utilities Functions -->
        <script src="{{ asset('assets/js/iqonic-script/utility.min.js')}}"></script>
        <!-- Settings Script -->
        <script src="{{ asset('assets/js/iqonic-script/setting.min.js')}}"></script>
        <!-- Settings Init Script -->
        {{-- <script src="{{ asset('assets/js/setting-init.js')}}"></script> --}}
        <!-- External Library Bundle Script -->
        <script src="{{ asset('assets/js/core/external.min.js')}}"></script>
        <!-- Widgetchart Script -->
        <script src="{{ asset('assets/js/charts/widgetchartsd1f1.js?v=2.2.0')}}" defer></script>
        <!-- Dashboard Script -->
        <script src="{{ asset('assets/js/charts/dashboardd1f1.js?v=2.2.0')}}" defer></script>
        <script src="{{ asset('assets/js/charts/alternate-dashboardd1f1.js?v=2.2.0')}}" defer></script>
        <!-- Hopeui Script -->
        <script src="{{ asset('assets/js/hope-uid1f1.js?v=2.2.0')}}" defer></script>
        <script src="{{ asset('assets/js/hope-uiprod1f1.js?v=2.2.0')}}" defer></script>
        {{-- <script src="{{ asset('assets/js/sidebard1f1.js?v=2.2.0')}}" defer></script> --}}
        <script src="{{ asset('assets/js/plugins/image-croper.js')}}"></script>
<script src="{{ asset('assets/vendor/cropper/dist/cropper.min.js')}}"></script>
    </body>


</html>


<script src="{{ asset('assets/vendor/bootstrap-toastr/toastr.min.js')}}"  type="text/javascript" ></script>
{{-- <script src="./dist/html5-qrcode.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader",
            { fps: 10, qrbox: {width: 250, height: 250} },
            /* verbose= */ false);
            html5QrcodeScanner.render(onScanSuccess, onScanFailure);

            // $('#result').val('test');
            function onScanSuccess(decodedText, decodedResult) {
                // alert(decodedText);
                $('#result').val(decodedText);
                let id = decodedText;    
                
                new swal({
                        title: "Konfirmasi Kehadiran",
                        // icon: "question",
                        dangerMode: true,
                        buttons: {
                            cancel: true,
                            confirm: true,
                        },
                    })

                        .then((willDelete) => {
                            if (willDelete) {
                                                        
                                html5QrcodeScanner.clear().then(_ => {
                                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                                    

                                    $.ajax({
                                        
                                        url: "{{ route('post.presensi') }}",
                                        type: 'POST',            
                                        data: {
                                            _methode : "POST",
                                            _token: CSRF_TOKEN, 
                                            qr_code : id
                                        },            
                                        success: function (response) { 
                                           
                                            if(response.status == 200){
                                                html5QrcodeScanner.render(onScanSuccess, onScanError);
                                                // $('#page_layout').load(' #page_layout');
                                            }else{
                                                alert('gagal');
                                                html5QrcodeScanner.render(onScanSuccess, onScanError);
                                            }
                                            // html5QrcodeScanner();
                                            
                                        }
                                    });   
                                }).catch(error => {
                                    alert('something wrong');
                                });
                                
                            // }
                                            
                            } else {

                                toastr.error("gagal silahkan ulangi lagi !");
                            }
                        });

            }
                
            //     html5QrcodeScanner.clear().then(_ => {
            //         var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                    

            //         $.ajax({
                        
            //             url: "{{ route('post.presensi') }}",
            //             type: 'POST',            
            //             data: {
            //                 _methode : "POST",
            //                 _token: CSRF_TOKEN, 
            //                 qr_code : id
            //             },            
            //             success: function (response) { 
            //                 console.log(response);
            //                 if(response.status == 200){
            //                     $( "#reader" ).load(window.location.href + " #reader" );
            //                 }else{
            //                     alert('gagal');
            //                 }
            //                 // html5QrcodeScanner();
                            
            //             }
            //         });   
            //     }).catch(error => {
            //         alert('something wrong');
            //     });
                
            // }
 
            function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
                // console.warn(`Code scan error = ${error}`);
            }
 
           
        </script>
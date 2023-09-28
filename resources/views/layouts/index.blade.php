<html lang="en" dir="ltr">
    
<!-- Mirrored from templates.iqonic.design/hope-ui/pro/html/dashboard/alternate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 12:46:28 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title >{{ $title }}</title>
        <meta name="description" content="Aplikasi Event MES">
        <meta name="keywords" content="Aplikasi Event MES">
        <meta name="author" content="Aang Wiadi">
        <meta name="DC.title" content="Aplikasi Event MES">

        <!-- Google Font Api KEY-->
        <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
        <!-- Config Options -->
        <meta name="setting_options" content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;huisetting-html&quot;,&quot;setting&quot;:{&quot;app_name&quot;:{&quot;value&quot;:&quot;Hope UI&quot;},&quot;theme_scheme_direction&quot;:{&quot;value&quot;:&quot;ltr&quot;},&quot;theme_scheme&quot;:{&quot;value&quot;:&quot;light&quot;},&quot;theme_style_appearance&quot;:{&quot;value&quot;:[&quot;theme-default&quot;]},&quot;theme_color&quot;:{&quot;colors&quot;:{&quot;--{{ 'prefix' }}primary&quot;:&quot;#3a57e8&quot;,&quot;--{{ 'prefix' }}info&quot;:&quot;#08B1BA&quot;},&quot;value&quot;:&quot;theme-color-default&quot;},&quot;theme_transition&quot;:{&quot;value&quot;:&quot;theme-with-animation&quot;},&quot;theme_font_size&quot;:{&quot;value&quot;:&quot;theme-fs-md&quot;},&quot;page_layout&quot;:{&quot;value&quot;:&quot;container-fluid&quot;},&quot;header_navbar&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;header_banner&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;sidebar_color&quot;:{&quot;value&quot;:&quot;sidebar-white&quot;},&quot;card_color&quot;:{&quot;value&quot;:&quot;card-default&quot;},&quot;sidebar_type&quot;:{&quot;value&quot;:[]},&quot;sidebar_menu_style&quot;:{&quot;value&quot;:&quot;left-bordered&quot;},&quot;footer&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;body_font_family&quot;:{&quot;value&quot;:null},&quot;heading_font_family&quot;:{&quot;value&quot;:null}}}'>

        {{-- <meta name="setting_options" content=""> --}}
        <!-- Favicon -->
        <link rel="shortcut icon" href="https://templates.iqonic.design/hope-ui/pro/html/assets/images/favicon.ico" />
        
        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}" />
        
        

        
        
        
        
        
        <!-- SwiperSlider css -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/swiperSlider/swiper-bundle.min.css') }}">
        
        
        
        <!-- Hope Ui Design System Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/hope-ui.mind1f1.css?v=2.2.0')}}" />
        <link rel="stylesheet" href="{{ asset('assets/css/pro.mind1f1.css?v=2.2.0')}}" />
        
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/custom.mind1f1.css?v=2.2.0')}}" />
        
        <!-- Dark Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/dark.mind1f1.css?v=2.2.0')}}" />
        
        <!-- Customizer Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/customizer.mind1f1.css?v=2.2.0')}}" />
        
        <!-- RTL Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/rtl.mind1f1.css?v=2.2.0')}}" />
        
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
              <img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/loader.webp" alt="loader"
                 class="light-loader img-fluid w-25" width="200" height="200">
           </div>
        </div>
     </div>
        <!-- loader END -->
      @include('layouts.sidebar')

		<main class="main-content ">
            <div class="position-relative no-printme">
            <!--Nav Start-->
                <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu left-border">
                   <div class="container-fluid navbar-inner">
                      <a href="#" class="navbar-brand">
                         
                         <!--Logo start-->
                         <div class="logo-main no-printme">
                             <div class="logo-normal">
                                 <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="https://www.w3.org/2000/svg">
                                     <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                     <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                     <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                     <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                 </svg>
                             </div>
                             <div class="logo-mini">
                                 <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="https://www.w3.org/2000/svg">
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
                         <div class="breadcrumb-title border-end me-3 pe-3 d-none d-xl-block">
                            <small class="mb-0 text-capitalize">{{ $title }}</small>
                         </div>
                         <div class="offcanvas offcanvas-end shadow-none iq-product-menu-responsive" tabindex="-1" id="offcanvasBottom">
                            <div class="offcanvas-body">
                               <ul class="iq-nav-menu list-unstyled">
                                  <li class="nav-item active">
                                     <a target="_blank" class="nav-link menu-arrow justify-content-start"  href="{{ url('/admin/presensi/add/#') }}"
                                        role="button" aria-expanded="false" aria-controls="homeData">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor"
                                           xmlns="https://www.w3.org/2000/svg">
                                           <path
                                              d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                                              fill="currentColor" />
                                        </svg>
                                        <span class="nav-text ms-2">Display</span>
                                     </a>
                                     {{-- <ul class="iq-header-sub-menu list-unstyled collapse" id="homeData">
                                        <li class="nav-item"><a class="nav-link "
                                              href="index.html">Dashboard</a></li>
                                        <li class="nav-item"><a
                                              class="nav-link active"
                                              href="alternate-dashboard.html">Alternate Dashboard</a></li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#menuStyles" role="button"
                                              aria-expanded="false" aria-controls="menuStyles">
                                              Menu Style
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                       stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                              id="menuStyles">
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="index-horizontal.html">Horizontal Dashboard</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="index-dual-horizontal.html">Dual Horizontal Dashboard</a>
                                              </li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="index-dual-compact.html">Dual Compact</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="index-boxed.html">Boxed Horizontal</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="index-boxed-fancy.html">Boxed Fancy</a></li>
                                           </ul>
                                        </li>
                                        <li class="nav-item"><a
                                              class="nav-link "
                                              href="https://templates.iqonic.design/hope-ui/pro/html/e-commerce/index.html">E-Commerce</a></li>
                                        <li class="nav-item"><a class="nav-link "
                                              href="https://templates.iqonic.design/hope-ui/pro/html/social-app/index.html">Social App</a></li>
                                        <li class="nav-item"><a
                                              class="nav-link "
                                              href="https://templates.iqonic.design/hope-ui/pro/html/blog/index.html">Blog</a></li>
                                        <li class="nav-item"><a
                                              class="nav-link "
                                              href="https://templates.iqonic.design/hope-ui/pro/html/appointment/index.html">Appointment</a></li>
                                        <li class="nav-item"><a
                                              class="nav-link "
                                              href="https://templates.iqonic.design/hope-ui/pro/html/file-manager/index.html">File Manager</a></li>
                                        <li class="nav-item"><a class="nav-link "
                                              href="https://templates.iqonic.design/hope-ui/pro/html/chat/index.html" target="_blank">Chat</a></li>
                                        <li class="nav-item"><a class="nav-link "
                                              href="https://templates.iqonic.design/hope-ui/pro/html/mail/index.html">Mail</a></li>
                                     </ul> --}}
                                  </li>
                                  {{-- <li class="nav-item">
                                     <a class="nav-link menu-arrow justify-content-start" data-bs-toggle="collapse" href="#allPagesData"
                                        role="button" aria-expanded="false" aria-controls="allPagesData">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <path opacity="0.4"
                                              d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2"
                                              fill="currentColor" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M8.07999 6.64999V6.65999C7.64899 6.65999 7.29999 7.00999 7.29999 7.43999C7.29999 7.86999 7.64899 8.21999 8.07999 8.21999H11.069C11.5 8.21999 11.85 7.86999 11.85 7.42899C11.85 6.99999 11.5 6.64999 11.069 6.64999H8.07999ZM15.92 12.74H8.07999C7.64899 12.74 7.29999 12.39 7.29999 11.96C7.29999 11.53 7.64899 11.179 8.07999 11.179H15.92C16.35 11.179 16.7 11.53 16.7 11.96C16.7 12.39 16.35 12.74 15.92 12.74ZM15.92 17.31H8.07999C7.77999 17.35 7.48999 17.2 7.32999 16.95C7.16999 16.69 7.16999 16.36 7.32999 16.11C7.48999 15.85 7.77999 15.71 8.07999 15.74H15.92C16.319 15.78 16.62 16.12 16.62 16.53C16.62 16.929 16.319 17.27 15.92 17.31Z"
                                              fill="currentColor" />
                                        </svg>
                                        <span class="nav-text ms-2">Pages</span>
                                     </a>
                                     <ul class="iq-header-sub-menu list-unstyled collapse" id="allPagesData">
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow " data-bs-toggle="collapse" href="#specialPages" role="button"
                                              aria-expanded="false" aria-controls="specialPages">
                                              Special Pages
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                       stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                              id="specialPages">
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="special-pages/billing.html">Billing</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="special-pages/calender.html">Calender</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="special-pages/kanban.html">Kanban</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="special-pages/pricing.html">Pricing</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="special-pages/timeline.html">Timeline</a></li>
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#authSkins" role="button"
                                              aria-expanded="false" aria-controls="authSkins">
                                              Auth skins
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                       stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                              id="authSkins">
                                              <li class="nav-item">
                                                 <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#defaultAuth"
                                                    role="button" aria-expanded="false" aria-controls="defaultAuth">
                                                    Default
                                                    <i class="right-icon">
                                                       <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                                       </svg>
                                                    </i>
                                                 </a>
                                                 <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                                    id="defaultAuth">
                                                    <li class="nav-item"><a
                                                          class="nav-link "
                                                          href="auth/sign-in.html">Sign In</a></li>
                                                    <li class="nav-item"><a
                                                          class="nav-link "
                                                          href="auth/sign-up.html">Sign Up</a></li>
                                                    <li class="nav-item"><a
                                                          class="nav-link "
                                                          href="auth/confirm-mail.html">Email Verified</a></li>
                                                    <li class="nav-item"><a class="nav-link "
                                                          href="auth/recoverpw.html">Reset Password</a></li>
                                                    <li class="nav-item"><a
                                                          class="nav-link "
                                                          href="auth/lock-screen.html">Lock Screen</a></li>
                                                 </ul>
                                              </li>
                                              <li class="nav-item">
                                                 <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#animatedAuth"
                                                    role="button" aria-expanded="false" aria-controls="animatedAuth">
                                                    Animated
                                                    <i class="right-icon">
                                                       <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                                       </svg>
                                                    </i>
                                                 </a>
                                                 <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                                    id="animatedAuth">
                                                    <li class="nav-item"><a
                                                          class="nav-link "
                                                          href="auth-pro/sign-in.html">Sign In</a></li>
                                                    <li class="nav-item"><a
                                                          class="nav-link "
                                                          href="auth-pro/sign-up.html">Sign Up</a></li>
                                                    <li class="nav-item"><a
                                                          class="nav-link "
                                                          href="auth-pro/email.html">Email</a></li>
                                                    <li class="nav-item"><a
                                                          class="nav-link "
                                                          href="auth-pro/lock-screen.html">Lock screen</a></li>
                                                    <li class="nav-item"><a
                                                          class="nav-link "
                                                          href="auth-pro/reset-password.html">Reset password</a></li>
                                                    <li class="nav-item"><a
                                                          class="nav-link "
                                                          href="auth-pro/two-factor.html">Two factor</a></li>
                                                    <li class="nav-item"><a
                                                          class="nav-link "
                                                          href="auth-pro/account-deactivate.html">Account
                                                          deactivate</a></li>
                                                 </ul>
                                              </li>
                                              <li class="nav-item">
                                                 <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#popupAuth"
                                                    role="button" aria-expanded="false" aria-controls="popupAuth">
                                                    popup
                                                    <i class="right-icon">
                                                       <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                                       </svg>
                                                    </i>
                                                 </a>
                                                 <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                                    id="popupAuth">
                                                    <li class="nav-item"><a
                                                          class="nav-link " href="#"
                                                          data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign In</a></li>
                                                    <li class="nav-item"><a
                                                          class="nav-link " href="#"
                                                          data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Sign Up</a></li>
                                                 </ul>
                                              </li>
                                              <li class="nav-item">
                                                 <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#simpleAuth"
                                                    role="button" aria-expanded="false" aria-controls="simpleAuth">
                                                    simple
                                                    <i class="right-icon">
                                                       <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                                       </svg>
                                                    </i>
                                                 </a>
                                                 <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                                    id="simpleAuth">
                                                    <li class="nav-item"><a
                                                          class="nav-link "
                                                          href="simple-auth-pro/sign-in.html">Sign In</a></li>
                                                    <li class="nav-item"><a
                                                          class="nav-link "
                                                          href="simple-auth-pro/sign-up.html">Sign Up</a></li>
                                                 </ul>
                                              </li>
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#userApps" role="button"
                                              aria-expanded="false" aria-controls="userApps">
                                              User
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                       stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                              id="userApps">
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="app/user-profile.html">User Profile</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="app/user-add.html">User Add</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="app/user-list.html">User List</a></li>
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#utilities" role="button"
                                              aria-expanded="false" aria-controls="utilities">
                                              Utilities
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                       stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                              id="utilities">
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="errors/maintenance.html">Maintenance</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="errors/error404.html">404</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="errors/error500.html">505</a></li>
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#extraPlugins" role="button"
                                              aria-expanded="false" aria-controls="extraPlugins">
                                              Plugins
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                       stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                              id="extraPlugins">
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="plugins/button-hover.html">Button Hover</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="plugins/choise-js.html">Choise JS</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="plugins/fslightbox.html">FSlightbox</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="plugins/select2.html">Select2</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="plugins/sweet-alert.html">Sweetalert</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="plugins/flatpickr.html">flatpickr</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="plugins/apexcharts.html">Apexcharts</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="plugins/gallery-hover.html">Gallery Hover</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="plugins/image-croper.html">Image Croper</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="plugins/loader.html">Loader</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="plugins/rating.html">Rating</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="plugins/quill-editor.html">Quill</a></li>
                                              <li class="nav-item"><a class="nav-link "
                                                    href="plugins/uppy.html">Uppy</a></li>
                                           </ul>
                                        </li>
                                     </ul>
                                  </li>
                                  <li class="nav-item">
                                     <a class="nav-link menu-arrow justify-content-start" data-bs-toggle="collapse" href="#elementsData"
                                        role="button" aria-expanded="false" aria-controls="elementsData">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor"
                                           xmlns="http://www.w3.org/2000/svg">
                                           <path opacity="0.4"
                                              d="M11.9912 18.6215L5.49945 21.8641C5.00921 22.1302 4.39768 21.9525 4.12348 21.4643C4.0434 21.3108 4.00106 21.1402 4 20.9668V13.7088C4 14.4284 4.40573 14.8726 5.47299 15.3701L11.9912 18.6215Z"
                                              fill="currentColor" />
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M8.89526 2H15.0695C17.7773 2 19.9735 3.06605 20 5.79337V20.9668C19.9989 21.1374 19.9565 21.3051 19.8765 21.4554C19.7479 21.7007 19.5259 21.8827 19.2615 21.9598C18.997 22.0368 18.7128 22.0023 18.4741 21.8641L11.9912 18.6215L5.47299 15.3701C4.40573 14.8726 4 14.4284 4 13.7088V5.79337C4 3.06605 6.19625 2 8.89526 2ZM8.22492 9.62227H15.7486C16.1822 9.62227 16.5336 9.26828 16.5336 8.83162C16.5336 8.39495 16.1822 8.04096 15.7486 8.04096H8.22492C7.79137 8.04096 7.43991 8.39495 7.43991 8.83162C7.43991 9.26828 7.79137 9.62227 8.22492 9.62227Z"
                                              fill="currentColor" />
                                        </svg>
                                        <span class="nav-text ms-2">Elements </span>
                                     </a>
                                     <ul class="iq-header-sub-menu list-unstyled collapse" id="elementsData">
                                        <li class="nav-item">
                                           <a class="nav-link" href="https://templates.iqonic.design/hope-ui/pro/html/">Components</a>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link" href="plugins/ui-color.html">UI Color</a>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#widgetsPage" role="button"
                                              aria-expanded="false" aria-controls="widgetsPage">
                                              Widgets
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                       stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                              id="widgetsPage">
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="widget/widgetbasic.html">Widget Basic</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="widget/widgetchart.html">Widget Chart</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="widget/widgetcard.html">Widget Card</a></li>
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#mapPages" role="button"
                                              aria-expanded="false" aria-controls="mapPages">
                                              Map
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                       stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                              id="mapPages">
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="maps/google.html">Google</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="maps/vector.html">Vector</a></li>
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#formsPages" role="button"
                                              aria-expanded="false" aria-controls="formsPages">
                                              Form
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                       stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                              id="formsPages">
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="form/form-element.html">Element</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="form/form-wizard.html">Wizard</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="form/form-validation.html">Validation</a></li>
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#tablesPages" role="button"
                                              aria-expanded="false" aria-controls="tablesPages">
                                              Table
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                       stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                              id="tablesPages">
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="table/bootstrap-table.html">Bootstrap Table</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="table/table-data.html">Data Table</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="table/border-table.html">Bordered Table</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="table/fancy-table.html">Fancy Table</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="table/fixed-table.html">Fixed Table</a></li>
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#iconsPages" role="button"
                                              aria-expanded="false" aria-controls="iconsPages">
                                              Icons
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                       stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                              id="iconsPages">
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="icons/solid.html">Solid</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="icons/outline.html">Outlined</a></li>
                                              <li class="nav-item"><a
                                                    class="nav-link "
                                                    href="icons/dual-tone.html">Dual Tone</a></li>
                                           </ul>
                                        </li>
                                     </ul>
                                  </li> --}}
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
                            <li class="nav-item dropdown me-0 me-xl-3">
                               <div class="d-flex align-items-center mr-2 iq-font-style" role="group" aria-label="First group"
                                  data-setting="radio">
                                  <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-sm" id="font-size-sm">
                                  <label for="font-size-sm" class="btn btn-border border-0 btn-icon btn-sm" data-bs-toggle="tooltip"
                                     title="Font size 14px" data-bs-placement="bottom">
                                     <span class="mb-0 h6" style="color: inherit !important;">A</span>
                                  </label>
                                  <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-md" id="font-size-md">
                                  <label for="font-size-md" class="btn btn-border border-0 btn-icon" data-bs-toggle="tooltip"
                                     title="Font size 16px" data-bs-placement="bottom">
                                     <span class="mb-0 h4" style="color: inherit !important;">A</span>
                                  </label>
                                  <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-lg" id="font-size-lg">
                                  <label for="font-size-lg" class="btn btn-border border-0 btn-icon" data-bs-toggle="tooltip"
                                     title="Font size 18px" data-bs-placement="bottom">
                                     <span class="mb-0 h2" style="color: inherit !important;">A</span>
                                  </label>
                               </div>
                            </li>
                            {{-- <li class="nav-item dropdown border-end pe-3 d-none d-xl-block">
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
                            </li> --}}
                            {{-- <li class="nav-item dropdown iq-responsive-menu border-end d-block d-xl-none">
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
                            </li> --}}
                        
                            <li class="nav-item dropdown" id="itemdropdown1">
                               <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                  <div class="btn btn-primary btn-icon btn-sm rounded-pill">
                                     <span class="btn-inner">
                                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                           xmlns="https://www.w3.org/2000/svg">
                                           <path
                                              d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z"
                                              fill="currentColor"></path>
                                           <path opacity="0.4"
                                              d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z"
                                              fill="currentColor"></path>
                                        </svg>
                                     </span>
                                  </div>
                               </a>
                               <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  <li>
                                     <a class="dropdown-item" href="app/user-profile.html">Profile</a>
                                  </li>
                                  {{-- <li>
                                     <a class="dropdown-item" href="app/user-privacy-setting.html">Privacy Setting</a>
                                  </li> --}}
                                  <li>
                                     <hr class="dropdown-divider">
                                  </li>
                                  <li>
                                     <a class="dropdown-item" href="{{ url('user/logout') }}">Logout</a>
                                  </li>
                               </ul>
                            </li>
                            <li class="nav-item iq-full-screen d-none d-xl-block" id="fullscreen-item">
                               <a href="#" class="nav-link" id="btnFullscreen" data-bs-toggle="dropdown">
                                  <div class="btn btn-primary btn-icon btn-sm rounded-pill">
                                     <span class="btn-inner">
                                        <svg class="normal-screen icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                           xmlns="https://www.w3.org/2000/svg">
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
                                           fill="none" xmlns="https://www.w3.org/2000/svg">
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
                </nav>            <!--Nav End-->
            </div>
            
            <!-- BEGIN CONTENT -->


            @yield('content')


            <!-- END CONTENT -->


            <!-- Footer Section Start -->
            <footer class="footer no-printme">
                <div class="footer-body">
                    {{-- <ul class="left-panel list-inline mb-0 p-0">
                        <li class="list-inline-item"><a href="extra/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="extra/terms-of-service.html">Terms of Use</a></li>
                    </ul> --}}
                    <div class="right-panel">
                        ©<script>2022</script> <span data-setting="app_name">2022 Hope UI</span>, Rembon
                        
                    </div>
                </div>
            </footer>
            <!-- Footer Section End -->
        </main>
        <!-- Live Customizer start -->
       <!-- Live Customizer end -->
        <!-- Wrapper End-->
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body">
                <form action="#" autocomplete="off">
                    <h3 class="text-center">Sign In</h3>
                    <p class="text-center">Sign in to stay connected</p>
                    <div class="form-group">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control mb-0"  placeholder="Enter email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control mb-0" placeholder="Enter password" autocomplete="off">
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-check d-inline-block mt-2 pt-1">
                            <input type="checkbox" class="form-check-input" id="customCheck11">
                            <label class="form-check-label" for="customCheck11">Remember Me</label>
                        </div>
                        <a href="#">Forget password</a>
                    </div>
                    <div class="text-center pb-3">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Sign in</button>
                    </div>
                    <p class="text-center">Or sign in with other accounts?</p>
                    <div class="d-flex justify-content-center">
                        <ul class="list-group list-group-horizontal list-group-flush">
                        <li class="list-group-item border-0 pb-0">
                            <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/fb.svg" alt="fb" loading="lazy"></a>
                        </li>
                        <li class="list-group-item border-0 pb-0">
                            <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/gm.svg" alt="gm" loading="lazy"></a>
                        </li>
                        <li class="list-group-item border-0 pb-0">
                            <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/im.svg" alt="im" loading="lazy"></a>
                        </li>
                        <li class="list-group-item border-0 pb-0">
                            <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/li.svg" alt="li" loading="lazy"></a>
                        </li>
                        </ul>
                    </div>
                    <p class="text-center">Don't have account?<a href="#"> Click here to sign up.</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body">
                <form action="#">
                    <h3 class="text-center">Sign Up</h3>
                    <p class="text-center">Create your Hope UI account</p>
                    <div class="d-flex justify-content-between">
                    <div class="form-group me-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control mb-0"  placeholder="Enter First Name" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control mb-0" placeholder="Enter Last Name" autocomplete="off">
                    </div>
                    </div>
                    <div class="d-flex justify-content-between">
                    <div class="form-group me-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control mb-0"  placeholder="Enter Email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Phone No.</label>
                        <input type="tel" class="form-control mb-0" placeholder="Enter Phone Number" autocomplete="off">
                    </div>
                    </div>
                    <div class="d-flex justify-content-between">
                    <div class="form-group me-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control mb-0"  placeholder="Enter Password"  autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control mb-0" placeholder="Enter Confirm Password" autocomplete="off">
                    </div>
                    </div>
                        <div class="text-center pb-3">
                            <input type="checkbox" class="form-check-input" id="customCheck112">
                            <label class="form-check-label" for="customCheck112">I agree with the terms of use</label>
                        </div>
                    <div class="text-center pb-3">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Sign in</button>
                    </div>
                    <p class="text-center">Or sign in with other accounts?</p>
                    <div class="d-flex justify-content-center">
                        <ul class="list-group list-group-horizontal list-group-flush">
                            <li class="list-group-item border-0 pb-0">
                                <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/fb.svg" alt="fb" loading="lazy"></a>
                            </li>
                            <li class="list-group-item border-0 pb-0">
                                <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/gm.svg" alt="gm" loading="lazy"></a>
                            </li>
                            <li class="list-group-item border-0 pb-0">
                                <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/im.svg" alt="im" loading="lazy"></a>
                            </li>
                            <li class="list-group-item border-0 pb-0">
                                <a href="#"><img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/li.svg" alt="li" loading="lazy"></a>
                            </li>
                        </ul>
                    </div>
                    <p class="text-center">Already have an Account<a href="#">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>


              <!-- Library Bundle Script -->
              <script src="{{ asset('assets/js/core/libs.min.js')}}"></script>
              <!-- Plugin Scripts -->
              <!-- Tour plugin Start -->
              <script src="{{ asset('assets/vendor/sheperd/dist/js/sheperd.min.js')}}"></script>
              {{-- <script src="{{ asset('assets/js/plugins/tour.js')}}" defer></script> --}}
              
              
              <!-- Flatpickr Script -->
              <script src="{{ asset('assets/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>
              <script src="{{ asset('assets/js/plugins/flatpickr.js')}}" defer></script>
              
              
              
              <!-- Slider-tab Script -->
              <script src="{{ asset('assets/js/plugins/slider-tabs.js')}}"></script>
              
              
              
              
              <!-- Select2 Script -->
              <script src="{{ asset('assets/js/plugins/select2.js')}}" defer></script>
              
              
              
              
              
              
            <!-- SwiperSlider Script -->
              <script src="{{ asset('assets/vendor/swiperSlider/swiper-bundle.min.js')}}"></script>
              
              
           
         
              <!-- Utilities Functions -->
              <script src="{{ asset('assets/js/iqonic-script/utility.min.js')}}"></script>
              <!-- Settings Script -->
              <script src="{{ asset('assets/js/iqonic-script/setting.min.js')}}"></script>
              <!-- Settings Init Script -->
              <script src="{{ asset('assets/js/setting-init.js')}}"></script>
              <!-- External Library Bundle Script -->
              <script src="{{ asset('assets/js/core/external.min.js')}}"></script>
              <!-- Widgetchart Script -->
              <script src="{{ asset('assets/js/charts/widgetchartsd1f1.js?v=2.2.0')}}" defer></script>

              <!-- Hopeui Script -->
              {{-- <script src="{{ asset('assets/js/hope-uid1f1.js?v=2.2.0')}}" defer></script>
              <script src="{{ asset('assets/js/hope-uiprod1f1.js?v=2.2.0')}}" defer></script>
              <script src="{{ asset('assets/js/sidebard1f1.js?v=2.2.0')}}" defer></script> --}}


        
        
        
 
        
        
        
        
        
        

        
        
        
        
        
        

        <!-- Lodash Utility -->
        <script src="{{ asset('assets/vendor/lodash/lodash.min.js')}}"></script>
        <!-- Utilities Functions -->
        <script src="{{ asset('assets/js/iqonic-script/utility.min.js')}}"></script>
        <!-- Settings Script -->
        <script src="{{ asset('assets/js/iqonic-script/setting.min.js')}}"></script>
        <!-- Settings Init Script -->
        <script src="{{ asset('assets/js/setting-init.js')}}"></script>
        <!-- External Library Bundle Script -->
        <script src="{{ asset('assets/js/core/external.min.js')}}"></script>
        <!-- Widgetchart Script -->
        <script src="{{ asset('assets/js/charts/widgetchartsd1f1.js?v=2.2.0')}}" defer></script>

        <!-- Hopeui Script -->
        <script src="{{ asset('assets/js/hope-uid1f1.js?v=2.2.0')}}" defer></script>
        <script src="{{ asset('assets/js/hope-uiprod1f1.js?v=2.2.0')}}" defer></script>
        <script src="{{ asset('assets/js/sidebard1f1.js?v=2.2.0')}}" defer></script>



        @yield('js')     
      
   </body>


</html>

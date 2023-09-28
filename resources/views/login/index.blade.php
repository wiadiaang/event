
<!doctype html>
<html lang="en" dir="ltr">
  
<!-- Mirrored from templates.iqonic.design/hope-ui/pro/html/dashboard/simple-auth-pro/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 12:46:48 GMT -->
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title data-setting="app_name" data-rightJoin=" Pro | Responsive Bootstrap 5 Admin Dashboard Template">Hope UI Pro | Responsive Bootstrap 5 Admin Dashboard Template</title>
      <meta name="description" content="Hope UI Pro is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
      <meta name="keywords" content="premium, admin, dashboard, template, bootstrap 5, clean ui, hope ui, admin dashboard,responsive dashboard, optimized dashboard, simple auth">
      <meta name="author" content="Iqonic Design">
      <meta name="DC.title" content="Hope UI Pro Simple | Responsive Bootstrap 5 Admin Dashboard Template">
      <!-- Google Font Api KEY-->
      <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
      <!-- Config Options -->
      <meta name="setting_options" content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;huisetting-html&quot;,&quot;setting&quot;:{&quot;app_name&quot;:{&quot;value&quot;:&quot;Hope UI&quot;},&quot;theme_scheme_direction&quot;:{&quot;value&quot;:&quot;ltr&quot;},&quot;theme_scheme&quot;:{&quot;value&quot;:&quot;light&quot;},&quot;theme_style_appearance&quot;:{&quot;value&quot;:[&quot;theme-default&quot;]},&quot;theme_color&quot;:{&quot;colors&quot;:{&quot;--{{'prefix'}}primary&quot;:&quot;#3a57e8&quot;,&quot;--{{'prefix'}}info&quot;:&quot;#08B1BA&quot;},&quot;value&quot;:&quot;theme-color-default&quot;},&quot;theme_transition&quot;:{&quot;value&quot;:&quot;theme-with-animation&quot;},&quot;theme_font_size&quot;:{&quot;value&quot;:&quot;theme-fs-md&quot;},&quot;page_layout&quot;:{&quot;value&quot;:&quot;container-fluid&quot;},&quot;header_navbar&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;header_banner&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;sidebar_color&quot;:{&quot;value&quot;:&quot;sidebar-white&quot;},&quot;card_color&quot;:{&quot;value&quot;:&quot;card-default&quot;},&quot;sidebar_type&quot;:{&quot;value&quot;:[]},&quot;sidebar_menu_style&quot;:{&quot;value&quot;:&quot;left-bordered&quot;},&quot;footer&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;body_font_family&quot;:{&quot;value&quot;:null},&quot;heading_font_family&quot;:{&quot;value&quot;:null}}}'>
      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/hope-ui/pro/html/assets/images/favicon.ico" />
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css')}}" />
      
      
      
      
      
      
      
      
      
      
      
      
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
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body">
              <img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/loader.webp" alt="loader" class="light-loader img-fluid w-25" width="200" height="200">
          </div>
      </div>
    </div>
    <!-- loader END -->
    <div class="wrapper">
    <section class="iq-auth-page" style="background: url({{ asset('assets/images/dashboard/top-image.jpg')}}); background-size: cover;background-repeat: no-repeat;">
        <div class="row d-flex align-items-center justify-content-center vh-100 w-100">
            <div class="col-md-4 col-xl-4">
                <div class="card p-4">
                    <div class="card-body ">
                        <h3 class="text-center">Sign In</h3>
                        <p class="text-center">Sign in to stay connected</p>
                        <div class="form-group">
                            <label class="form-label" for="email-id">Email address</label>
                            <input type="email" class="form-control mb-0" id="email-id" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" class="form-control mb-0" id="password" placeholder="Enter password">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check d-inline-block pt-1 mb-0">
                                <input type="checkbox" class="form-check-input" id="customCheck11">
                                <label class="form-check-label" for="customCheck11">Remember Me</label>
                            </div>
                                {{-- <a href="../auth-pro/reset-password.html">Forget password</a> --}}
                        </div>
                        <div class="text-center pb-3">
                            <button type="button" class="btn btn-primary">Sign in</button>
                        </div>
                        {{-- <p class="text-center">Or sign in with other accounts?</p>
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
                        </div> --}}
                        {{-- <p class="text-center">Don't have account?<a href="sign-up.html" class="ms-2"> Click here to sign up.</a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    

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
    <script src="{{ asset('assets/js/setting-init.js')}}"></script>
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
    <script src="{{ asset('assets/js/sidebard1f1.js?v=2.2.0')}}" defer></script>  </body>

<!-- Mirrored from templates.iqonic.design/hope-ui/pro/html/dashboard/simple-auth-pro/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 12:46:48 GMT -->
</html>

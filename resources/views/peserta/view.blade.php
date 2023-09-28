
@extends('layouts.index')


@section('css')

@endsection

@section('content')

<div class="content-inner container-fluid pb-0" id="page_layout">
    <div id='printable_div_id'  class="row">
    
        <div  class="row iq-star-inserted row-cols-1 row-cols-md-2 row-cols-lg-3 mb-4 mt-4 text-center">
            <div class="col iq-star-inserted-1">
               {{-- <div class="card my-5">
                  <div class="card-body">
                     <h2 class="my-0 fw-normal mb-4">Enterprise</h2>
                     <h1 class="card-title pricing-card-title mb-0">$29 <small class="text-secondary"> / month</small></h1>
                     <p class="mb-0">billed yearly</p>
                     <p>$79.9 billed monthly</p>
                     <ul class="list-unstyled my-3 p-0">
                        <li><p>30 users included</p></li>
                        <li><p>15 GB of storage</p></li>
                        <li><p>Call and email support</p></li>
                        <li><p>Help center access</p></li>
                     </ul>
                     <button type="button" class="btn btn-primary rounded-pill w-100">Get Started</button>
                  </div>
               </div> --}}
            </div>
            <div class="col iq-star-inserted-2"  >
               <div    class="card mb-0 shadow-lg" >
                  <div class="card-body printme">
                     <h2><span class="badge rounded-pill bg-soft-primary mb-4"><small class="text-uppercase px-3">{{ $post->nama_peserta }}</small></span></h2>
                     <ul class="list-unstyled my-3 p-0">
                        <li><p>No Peserta</p></li>
                    </ul>
                     <h2 class="my-0 fw-normal mb-4">{{ $post->no_peserta }}</h2>

                     {!! QrCode::size(300)->backgroundColor(60, 206, 139)->generate($post->no_peserta) !!}
                     <h1 class="card-title pricing-card-title mb-0">{{ $post->nama_event }}</h1>
                     <p class="mb-0">{{ $post->tanggal_event }}</p>
                     
                     
                     
                  </div>
                 
               </div>
               
               {{-- <input type="button" id="btnPrint" value="Print" /> --}}
               
            </div>
            <div class="col iq-star-inserted-3">
               {{-- <div class="card my-5">
                  <div class="card-body">
                     <h2 class="my-0 fw-normal mb-4">Premium</h2>
                     <h1 class="card-title pricing-card-title mb-0">$49 <small class="text-secondary"> / month</small></h1>
                     <p class="mb-0">billed yearly</p>
                     <p>$99.9 billed monthly</p>
                     <ul class="list-unstyled my-3 p-0">
                        <li><p>50 users included</p></li>
                        <li><p>60 GB of storage</p></li>
                        <li><p>24 X 7 call support</p></li>
                        <li><p>Help center access</p></li>
                     </ul>
                     <button type="button" class="btn btn-primary rounded-pill w-100">Get Started</button>
                  </div>
               </div> --}}
            </div>
         </div>
         {{-- <button type="button"  id="btnPrint" class="btn btn-primary rounded-pill w-100">Print</button> --}}
    </div>
    <div class="row">
    
        <div class="row iq-star-inserted row-cols-1 row-cols-md-2 row-cols-lg-3 mb-4 mt-4 text-center">
            <div class="col iq-star-inserted-1">

            </div>
            <div class="col iq-star-inserted-2" >
                <button type="button"  id="btnPrint" class="btn btn-primary rounded-pill w-100">Print</button>
               
            </div>
            <div class="col iq-star-inserted-3">
  
            </div>
         </div>
        
    </div>

</div>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(function () {
        $("#btnPrint").click(function () {
            var contents = $("#printable_div_id").html();
            var frame1 = $('<iframe />');
            frame1[0].name = "frame1";
            frame1.css({ "position": "absolute", "top": "-1000000px" });
            $("body").append(frame1);
            var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
            frameDoc.document.open();
            //Create a new HTML document.
            frameDoc.document.write('<html><head><title>Kartu Peserta</title>');
            frameDoc.document.write('</head><body>');
            //Append the external CSS file.
            frameDoc.document.write('<link rel="stylesheet" href="{{ asset("assets/css/core/libs.min.css") }}" /><link rel="stylesheet" href="{{ asset("assets/css/hope-ui.mind1f1.css?v=2.2.0")}}" /> <link rel="stylesheet" href="{{ asset("assets/css/pro.mind1f1.css?v=2.2.0")}}" /><link rel="stylesheet" href="{{ asset("assets/css/custom.mind1f1.css?v=2.2.0")}}" /><link rel="stylesheet" href="{{ asset("assets/css/customizer.mind1f1.css?v=2.2.0")}}" /><link rel="preconnect" href="https://fonts.googleapis.com/"><link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&amp;display=swap" rel="stylesheet">');
            //Append the DIV contents.
            frameDoc.document.write(contents);
            frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function () {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                frame1.remove();
            }, 500);
        });
    });
    </script>


@endsection
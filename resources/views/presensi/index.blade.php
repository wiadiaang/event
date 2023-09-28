@extends('layouts.index')


@section('css')

<link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css')}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />

@endsection

@section('content')
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="card-title">{{ $title }}</h4>
                </div>
        
             </div>
             <div class="card-body">
              
                <div class="table-responsive">
                   <table id="presensi" class="table table-striped" >
                      <thead>
                         <tr>
                            <th>No</th>
                            <th>Photo</th>

                            <th>Nama Peserta</th>
                            
                            <th>No Peserta</th>
                            <th>Event</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Jam Masuk</th>
                            <th>Jam keluar</th>
                        
                          
                            <th>Action</th>
                         </tr>
                      </thead>
                
                    
                   </table>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

@endsection

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script type="text/javascript">

   /*-------------Data tables---------------*/
   if ($.fn.DataTable) {
    // Bootstrap DataTable
    if ($('#presensi').length) {
        var table = $('#presensi').DataTable({
        "autoWidth": false,
        "dom": '<"row align-items-center"<"col-md-6" l><"col-md-6" f>><"table-responsive my-3" rt><"row align-items-center" <"col-md-6" i><"col-md-6" p>><"clear">',
        processing: true,
        serverSide: true,
        ajax: "{{ route('get.presensi') }}",
        columns: [
              { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
              {data: 'photo', name: 'photo'},
              {data: 'nama_peserta', name: 'nama_peserta'},
              {data: 'no_peserta', name: 'no_peserta'},
              {data: 'nama_event', name: 'nama_event'},
            
              {data: 'email_peserta', name: 'email_peserta'},
              {data: 'no_hp', name: 'no_hp'},
              {data: 'jam_checkin', name: 'jam_checkin'},
              {data: 'jam_checkout', name: 'jam_checkout'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

  $(document).on('click', '.delete-confirm', function (e) {
    e.preventDefault();
    var id = $(this).data('id');

    console.log(id);

    new swal({
            title: "Anda yakin akan menghapus?",
            // icon: "question",
            dangerMode: true,
            buttons: {
                cancel: true,
                confirm: true,
            },
        })

        .then((willDelete) => {
            if (willDelete) {
                                           
                                $.ajax({
                                    type: "GET",
                                    url: "{{url('/admin/presensi/delete')}}"+ "/" + id,
                                    success: function (data) {
                                            
                                        toastr.success("Delete Data Sukses !");
                                        table.ajax.reload();
                                       
                                        
                                    } ,
                                    error : function(data)
                                    {
                                      
                                        toastr.error("delete gagal karena ada error !");
                                    }        
                                });

                            
            } else {

                toastr.warning("gagal coy !");
            }
        });



});

}
    // Column hidden datatable
  
}  


  </script> 
 


@endsection
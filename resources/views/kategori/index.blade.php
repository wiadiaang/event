@extends('layouts.index')


@section('css')
     <!-- Sweetlaert2 css -->
     <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css')}}" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
 
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {{-- <link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" /> --}}
        <!-- END PAGE LEVEL PLUGINS -->

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
                <ul class="d-flex nav nav-pills mb-0 text-center profile-tab nav-slider" >
                    <a href="{{ url('admin/kategori/add') }}" class="btn btn-primary rounded-pill">Tambah Data</a>
                   
                </ul>
             </div>
            
             <div class="card-body">
             
                <div class="table-responsive">
                   <table id="kategori" class="table table-striped" >
                      <thead>
                         <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Action</th>
                         </tr>
                      </thead>
                      {{-- <tbody>
                        @if($posts->count())
                      
                            @foreach($posts as $key => $post)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ $post->nama_kategori }} </td>
                                    <td>
                                        <div class="d-flex justify-content-evenly">
                                   
                                            <a class="btn btn-primary btn-icon btn-sm rounded-pill ms-2"  href="/admin/kategori/edit/{{ $post->id_kategori }}" role="button">
                                                <span class="btn-inner">
                                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>
                                                        <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>
                                                        <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                            <a  class="btn btn-primary btn-icon btn-sm rounded-pill ms-2 delete-confirm" href="" data-id='{{ $post->id_kategori }}' role="button">
                                                <span class="btn-inner">
                                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                        <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </a>
     </div>

     
                                     </td>
                                </tr>
                               
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3"> No record found </td>
                            </tr>
                        @endif
                      </tbody> --}}
                
                      {{-- <tfoot>
                         <tr>
                            <th>No</th>
                            <th>Kategori</th>
                         
                            <th>Action</th>
                         </tr>
                      </tfoot> --}}
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
    if ($('#kategori').length) {
        var table = $('#kategori').DataTable({
        "autoWidth": false,
        "dom": '<"row align-items-center"<"col-md-6" l><"col-md-6" f>><"table-responsive my-3" rt><"row align-items-center" <"col-md-6" i><"col-md-6" p>><"clear">',
        processing: true,
        serverSide: true,
        ajax: "{{ route('get.kategori') }}",
        columns: [
              { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
              {data: 'nama_kategori', name: 'nama_kategori'},
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
                                    url: "{{url('/admin/kategori/delete')}}"+ "/" + id,
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
    if ($('[data-toggle="data-table-column-hidden"]').length) {
        var hiddentable= $('[data-toggle="data-table-column-hidden"]').DataTable({});
        $('a.toggle-vis').on('click', function (e) {
          e.preventDefault();
          const column = hiddentable.column($(this).attr('data-column'));
          column.visible(!column.visible());
        });
    }
    // Column filter datatable
    if ($('[data-toggle="data-table-column-filter"]').length) {
      $('[data-toggle="data-table-column-filter"] tfoot th').each(function () {
        const title = $(this).attr('title');
        $(this).html(`<td><input type="text" class="form-control form-control-sm" placeholder="${title}" /></td>`);
      });
      $('[data-toggle="data-table-column-filter"]').DataTable({
        initComplete: function () {
          this.api().columns().every(function () {
            var that = this;

            $('input', this.footer()).on('keyup change clear', function () {
              if (that.search() !== this.value) {
                that
                  .search(this.value)
                  .draw();
              }
            });
          });
        }
      });
    };
    // Multilanguage datatable
    if ($('[data-toggle="data-table-multi-language"]').length) {
      function languageSelect() {
        return Array.from(document.querySelector('#langSelector').options).filter(option => option.selected).map(option => option.getAttribute('data-path'))
      }
      function dataTableInit() {
        $('[data-toggle="data-table-multi-language"]').DataTable({
          "language": {
            "url": languageSelect()
          }
        });
      }
      dataTableInit()
      document.querySelector('#langSelector').addEventListener('change', (e) => {
        $('[data-toggle="data-table-multi-language"]').dataTable().fnDestroy();
        dataTableInit()
      })
    };
  };


  </script> 
 

@endsection
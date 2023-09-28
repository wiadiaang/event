
@extends('layouts.index')


@section('css')

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {{-- <link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" /> --}}
        <!-- END PAGE LEVEL PLUGINS -->

@endsection

@section('content')

<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">{{ $title }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('update.peserta',$post->id_peserta) }}"  method="POST" enctype="multipart/form-data" >
                        @csrf    
                        @method('PATCH') 
                       

                        <div class="form-group">
                            <label class="form-label">Event</label>
                            
                            <select name="event_id" class="form-select mb-3 shadow-none">
                                <option value="">Pilih Salah Satu</option>
                                @foreach ($event as $event)
                                    
                                    @if ( old('event_id', $post->event_id) ==$event->event_id)
                                         
                                          <option value="{{ $event->event_id }}" selected>{{ $event->nama_event }}</option>
                                    @else
                                    <option value="{{ $event->event_id }}">{{ $event->nama_event }}</option>
                                    @endif

                                 @endforeach  
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="email1101">Nama Peserta :</label>
                            <input name="nama_peserta" type="text" class="form-control"  value="{{ old('nama_peserta', $post->nama_peserta) }}" id="text">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email1101">Email :</label>
                            <input name="email_peserta" type="email" value="{{ old('email_peserta', $post->email_peserta) }}" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="email1101">NIK :</label>
                            <input name="nik" type="text"  value="{{ old('nik', $post->nik) }}" class="form-control"  >
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="email1101">No. Handphone :</label>
                            <input name="no_hp" type="text" class="form-control"  value="{{ old('no_hp', $post->no_hp) }}" id="text">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email1101">Alamat :</label>
                            <input name="alamat" type="text" class="form-control"  value="{{ old('alamat', $post->alamat) }}" id="text">
                        </div>

                        <div class="form-group">
                            <label for="customFile1" class="form-label custom-file-input">Photo</label>
                            <input name="photo"  class="form-control" type="file" id="customFile1">
                        </div>


           
                        <a href="{{ url('/admin/peserta')}}" class="btn btn-danger">Batal</a>
                  
                        <button type="submit" class="btn btn-primary">Simpan</button>
                       
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('js')


@endsection
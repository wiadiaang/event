
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
                    <form action="{{ route('post.kategori') }}"  method="POST" >
                        @csrf
                       
                        <div class="form-group">
                            <label class="form-label" for="email1101">Kategori Event:</label>
                            <input name="nama_kategori" type="text" class="form-control" id="text">
                        </div>
                        {{-- <div class="form-group">
                            <label class="form-label" for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="checkbox mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                <label class="form-check-label" for="flexCheckDefault3">
                                    Remember me
                                </label>
                            </div>
                        </div> --}}
                        <a href="{{ url('/admin/kategori')}}" class="btn btn-danger">Batal</a>
                  
                        <button type="submit" class="btn btn-primary">Simpan</button>
                       
                    </form>
                </div>
            </div>
            {{-- <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Form Grid</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Input</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputText1">Input Text </label>
                            <input type="text" class="form-control" id="exampleInputText1" value="Mark Jhon" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputEmail3">Email Input</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" value="markjhon@gmail.com" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputurl">Url Input</label>
                            <input type="url" class="form-control" id="exampleInputurl" value="https://getbootstrap.com" placeholder="Enter Url">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputphone">Teliphone Input</label>
                            <input type="tel" class="form-control" id="exampleInputphone" value="1-(555)-555-5555">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputNumber1">Number Input</label>
                            <input type="number" class="form-control" id="exampleInputNumber1" value="2356">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputPassword3">Password Input</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" value="markjhon123" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputdate">Date Input</label>
                            <input type="date" class="form-control" id="exampleInputdate" value="2019-12-18">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputmonth">Month Input</label>
                            <input type="month" class="form-control" id="exampleInputmonth" value="2019-12">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputweek">Week Input</label>
                            <input type="week" class="form-control" id="exampleInputweek" value="2019-W46">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputtime">Time Input</label>
                            <input type="time" class="form-control" id="exampleInputtime" value="13:45">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputdatetime">Date and Time Input</label>
                            <input type="datetime-local" class="form-control" id="exampleInputdatetime" value="2019-12-19T13:45:00">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-danger">cancel</button>
                    </form>
                </div>
            </div>
            <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Input Size</h4>
                </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label class="form-label" for="colFormLabelSm">Small</label>
                        <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="form-control-sm">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="colFormLabel">Default</label>
                        <input type="email" class="form-control" id="colFormLabel" placeholder="form-control">
                    </div>
                    <div class="form-group mb-0">
                        <label class="form-label pb-0" for="colFormLabelLg">Large</label>
                        <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="form-control-lg">
                    </div>
                </form>
            </div>
            </div>
            <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Select Size</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-label">Small</label>
                    <select class="form-select form-select-sm mb-3 shadow-none">
                        <option selected="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Default</label>
                    <select class="form-select mb-3 shadow-none">
                        <option selected="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Large</label>
                    <select class="form-select form-select-lg shadow-none">
                        <option selected="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div> --}}
            {{-- </div> --}}
        </div>
    </div>
</div>

@endsection

@section('js')


@endsection
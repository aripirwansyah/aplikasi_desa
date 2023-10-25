@extends('user.layouts.master')

@section('content')

<div class="container mt-5 mb-5 h-100 content" >
    <!-- Basic Layout & Basic with Icons -->
    <!-- Basic Layout -->
    <form method="POST" action="{{ url('/user/submitEditSKUsaha') }}/{{ $rowSKUsaha->id }}" enctype="multipart/form-data">

        @csrf
        <div class="card shadow-lg bg-body rounded">
            <div class="card-header py-4" style="background-color:#0c386e; color: #ffffff;">
                <div class="mx-3">
                    <div class="float-end">
                        <i class="fa-solid fa-file-lines fa-3x"></i>
                    </div>
                    <div class="float-start">
                        <h5>TAMBAH PENDAFTARAN SURAT KETERANGAN USAHA (SKU)</h5>
                    </div>
                </div>
            </div>
            <div class="card-body py-4 px-5">
                <div class="px-3">
                    <input type="text" class="form-control" name="user_id_input" value="{{$rowUser->id}}">
                    <div class="row mb-3 ">
                        <label class="col-md-2 col-form-label" for="basic-default-name">Nik</label>
                        <div class="col-md-10">
                        <input type="text" name="" class="form-control" id="basic-default-name" placeholder="Input Nik" disabled value="{{$rowUser->nik}}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label" for="basic-default-company">Nama</label>
                        <div class="col-md-10">
                        <input type="text" name="" class="form-control" id="basic-default-company" placeholder="Input Nama" disabled value="{{$rowUser->name}}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label" for="basic-default-company">Tempat, Tanggal Lahir</label>
                        <div class="col-md-5">
                            <input type="text" name="" class="form-control" id="basic-default-company" placeholder="Input Tempat Lahir" disabled value="{{$rowUser->tempatLahir}} " />
                        </div>
                        <div class="col-md-5">
                            <input type="text" name="" class="form-control" id="basic-default-company" placeholder="Input Tanggal Lahir" disabled value="{{$rowUser->tanggalLahir}}"/>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="row mb-3">
                            <label class="col-md-2 col-form-label" for="basic-default-company">alamat KTP</label>
                            <div class="col-md-10">
                                <textarea name="" id="" class="form-control" placeholder="Input Alamat" disabled >{{$rowUser->alamatKTP}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-2 col-form-label" for="basic-default-company">alamat Domisili</label>
                            <div class="col-md-10">
                                <textarea name="" id="" class="form-control"  placeholder="Input Alamat" disabled >{{$rowUser->alamatDomisili}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <p>
                            <a class="" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Show Data
                            </a>
                        </p>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label" for="basic-default-company">Pekerjaan</label>
                        <div class="col-md-10">
                        <input type="text" name="pekerjaan_input" class="form-control" id="basic-default-company"  value="{{$rowSKUsaha->pekerjaan}}"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label" for="basic-default-company">Type Usaha</label>
                        <div class="col-md-10">
                        <input type="text" name="typeUsaha_input" class="form-control" id="basic-default-company" value="{{$rowSKUsaha->typeUsaha}}"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label" for="basic-default-company">Lokasi Usaha</label>
                        <div class="col-md-10">
                        <input type="text" name="lokasiUsaha_input" class="form-control" id="basic-default-company" value="{{$rowSKUsaha->lokasiUsaha}}"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label" for="basic-default-company">Mulai Usaha</label>
                        <div class="col-md-10">
                        <input type="text" name="mulaiUsaha_input" class="form-control" id="basic-default-company" value="{{$rowSKUsaha->mulaiUsaha}}"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label" for="basic-default-company">Foto Bukti Usaha</label>
                        <div class="col-md-10">
                            <input type="file" name="fotoUsaha_input" class="form-control" id="basic-default-company"  value="{{$rowSKUsaha->fotoUsaha}}"/>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Current Image</label>
                        <div class="col-sm-10">
                            @if ($rowSKUsaha->fotoUsaha != '')
                                <input type="hidden" name="fotoUsaha_inputCurent" class="form-control" id="basic-default-name" value="{{ $rowSKUsaha->fotoUsaha }}">
                                <img src="{{url('images/skusaha/'.$rowSKUsaha->fotoUsaha)}}" alt="" width="100" height="100">
                            @else
                                <img src="{{URL::asset('images/user/image_empty.jpg')}}" alt="" width="100" height="100">
                            @endif
                        </div>
                    </div>


                </div>
            </div>
            <div class="card-footer p-4">
                <div class="float-start">
                    <button class="btn btn-secondary"><i class="fa-solid fa-left-long"></i> Back</button>
                </div>
                <div class="float-end">
                    <button type="reset" class="btn btn-danger"><i class="fa-solid fa-rotate-right"></i> Reset</button>
                    <button class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Submit</button>
                </div>
            </div>
        </div>
    </form>
    <!-- Basic with Icons -->
</div>
  <!-- / Content -->
@endsection

@section('contentx')
    <script type="text/javascript">
        $(document).ready(function() {
            console.log("Tess");
        });
    </script>
@endsection

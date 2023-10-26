@extends('user.layouts.master')

@section('content')

<div class="container mt-5 mb-5 h-100">
    <!-- Basic Layout & Basic with Icons -->
    <!-- Basic Layout -->
    <form method="POST" action="{{ route('user.submitAddSKUsaha') }}">
        @csrf
        <div class="row h-100 d-flex justify-content-center">
            <div class="col-sm-8">
                <div class="card shadow-lg bg-body rounded">
                    <div class="card-header py-4" style="background-color:#0c386e; color: #ffffff;">
                        <div class="mx-3">
                            <div class="float-end">
                                <i class="fa-solid fa-file-lines fa-3x"></i>
                            </div>
                            <div class="float-start">
                                <h5>DETAIL PENDAFTARAN SURAT KETERANGAN USAHA (SKU)</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="py-4 px-5">
                            <div class="px-3">
                                <div class="row mb-3 ">
                                    <label class="col-md-3 col-form-label" for="basic-default-name">Nik</label>
                                    <div class="col-md-9">
                                    <input type="text" name="nik_input" class="form-control" id="basic-default-name" disabled value="{{$rowUser->nik}}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">Nama</label>
                                    <div class="col-md-9">
                                    <input type="text" name="nama_input" class="form-control" id="basic-default-company" disabled value="{{$rowUser->name}}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">Tempat, Tanggal Lahir</label>
                                    <div class="col-md-5">
                                        <input type="text" name="tempatLahir_input" class="form-control" id="basic-default-company" placeholder="Input Tempat Lahir" disabled value="{{$rowUser->tempatLahir}}" />
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="tanggalLahir_input" class="form-control" id="basic-default-company" placeholder="Input Tanggal Lahir" disabled value="{{$rowUser->tanggalLahir}}"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">Pekerjaan</label>
                                    <div class="col-md-9">
                                    <input type="text" name="pekerjaan_input" class="form-control" id="basic-default-company"  value="{{$rowSKUsaha->pekerjaan}}"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">Type Usaha</label>
                                    <div class="col-md-9">
                                    <input type="text" name="pekerjaan_input" class="form-control" id="basic-default-company" value="{{$rowSKUsaha->typeUsaha}}"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">Mulai Usaha</label>
                                    <div class="col-md-9">
                                    <input type="text" name="pekerjaan_input" class="form-control" id="basic-default-company" value="{{$rowSKUsaha->mulaiUsaha}}"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-name">Current Image</label>
                                    <div class="col-md-9">
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
                        <hr>
                        <br>

                        {{-- ============================== --}}
                        <div class="px-5">
                            <div class="px-3">
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">Status</label>
                                    <div class="col-md-9">
                                        @if ($rowSKUsaha->status_id == 1)
                                            <button type="button" class="btn btn-primary btn-sm py-0" disabled>prossess</button>
                                        @elseif ($rowSKUsaha->status_id == 2)
                                            <button type="button" class="btn btn-success btn-sm py-0" disabled>diterima</button>
                                        @elseif ($rowSKUsaha->status_id == 3)
                                            <button type="button" class="btn btn-danger btn-sm py-0" disabled>ditolak</button>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="px-3">
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="basic-default-company">Deskripsi</label>
                                    <div class="col-md-9">
                                        <span>Data Pendaftaran Surat Keterangan Usaha (SKU) Masih Di Proses</span>
                                    </div>
                                </div>
                            </div>

                            @if ($rowSKUsaha->status_id == 2)
                                <div class="px-3">
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">File Pdf</label>
                                        <div class="col-md-9">
                                            @if ($rowSKUsaha->fotoUsaha != '')
                                                <input type="hidden" name="fotoUsaha_inputCurent" class="form-control" id="basic-default-name" value="{{ $rowSKUsaha->fotoUsaha }}">
                                                <img src="{{url('images/skusaha/'.$rowSKUsaha->fotoUsaha)}}" alt="" width="100" height="100">
                                            @else
                                                <img src="{{URL::asset('images/user/image_empty.jpg')}}" alt="" width="100" height="100">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @elseif ($rowSKUsaha->status_id == 3)
                                <div class="px-3">
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label" for="basic-default-company">Deskripsi Masalah</label>
                                        <div class="col-md-9">
                                            <textarea name="" class="form-control" disabled>{{ $rowSKUsahaProses->skUsahaDeskFailed}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        {{-- ============================== --}}

                    </div>
                    <div class="card-footer p-4">
                        <div class="float-start">
                            <a href="{{ url('/user/sku_data') }}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-left-long"></i> Back</a>
                        </div>

                    </div>
                </div>
                <br>

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

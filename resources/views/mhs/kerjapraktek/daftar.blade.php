@extends('template.MainTemplate')

@section('content')


    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="header-title m-t-0 m-b-20">Kerja Praktek</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h5>Daftar Kerja Praktek</h5>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 card-body">
                        <form method="POST" action="{{url('kerjapraktek')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="nama_perusahaan" class="col-sm-4 col-form-label-lg text-md-right" >{{__('Nama Perusahaan')}}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}"  autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat_perusahaan" class="col-sm-4 col-form-label-lg text-md-right">{{__('Alamat Perusahaan')}}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" value="{{old('alamat_perusahaan')}}"  autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nomor_surat" class="col-sm-4 col-form-label-lg text-md-right">{{__('Nomor Surat')}}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" value="{{old('nomor_surat')}}"  autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="periode" class="col-sm-4 col-form-label-lg text-md-right">{{__('Periode ')}}</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" id ="periode" name="periode" value="{{old('periode')}}" autofocus >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="akhir_periode" class="col-sm-4 col-form-label-lg text-md-right">{{__('Akhir Periode')}}</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" id="akhir_periode" name="akhir_periode" value="{{old('akhir_periode')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ipk" class="col-sm-4 col-form-label-lg text-md-right">{{__('IPK')}}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="ipk" name="ipk" value="{{old('ipk')}}"  autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_sks" class="col-sm-4 col-form-label-lg text-md-right">{{__('Jumlah SKS')}}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="jumlah_sks" name="jumlah_sks" value="{{old('jumlah_sks')}}" autofocus>
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>

@endsection
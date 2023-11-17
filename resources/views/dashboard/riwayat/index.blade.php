@extends('dashboard.layout')

@section('konten')
    <form action="{{ route('riwayat.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-between">
            <div class="col-5">            
                <h3>Riwayat</h3>
                @if (get_meta_value('_foto'))
                    <img style="max-width: 100px;max-height:100px" src="{{ asset('foto') . '/' . get_meta_value('_foto') }}">
                @endif
                <div class="mb-3">
                    <label for="_foto" class="form-label">Foto</label>
                    <input type="file" class="form-controll form-controll-sm riwayat" name="_foto" id="_foto">
                </div>
                
                <div class="mb-3">
                    <label for="_kota" class="form-label">Kota   </label>
                    <div class="textarea"></div>
                    <input type="text" class="form-controll form-controll-sm riwayat" name="_kota" id="_kota" value="{{ get_meta_value('_kota')}}">
                </div>
                <div class="mb-3">
                    <label for="_provinsi" class="form-label">Provinsi</label>
                    <div class="textarea"></div>
                    <input type="text" class="form-controll form-controll-sm riwayat" name="_provinsi" id="_provinsi" value="{{ get_meta_value('_provinsi')}}">
                </div>
                <div class="mb-3">
                    <label for="_nohp" class="form-label">No HP</label>
                    <div class="textarea"></div>
                    <input type="text" class="form-controll form-controll-sm riwayat" name="_nohp" id="_nohp" value="{{ get_meta_value('_nohp')}}">
                </div>
                <div class="mb-3">
                    <label for="_email" class="form-label">Email</label>
                    <div class="textarea"></div>
                    <input type="text" class="form-controll form-controll-sm riwayat" name="_email" id="_email" value="{{ get_meta_value('_email')}}">
                </div>

            </div> 
            <div class="col-5">
                <h3>Akun Media Sosial</h3>
                <div class="mb-3">
                    <label for="_facebook" class="form-label">Facebook</label>
                    <div class="textarea"></div>
                    <input type="text" class="form-controll form-controll-sm riwayat" name="_facebook" id="_facebook" value="{{ get_meta_value('_facebook')}}">
                </div>
                <div class="mb-3">
                    <label for="_twitter" class="form-label">Twitter</label>
                    <div class="textarea"></div>
                    <input type="text" class="form-controll form-controll-sm riwayat" name="_twitter" id="_twitter" value="{{ get_meta_value('_twitter')}}">
                </div>
                <div class="mb-3">
                    <label for="_linkedin" class="form-label">Linkedin</label>
                    <div class="textarea"></div>
                    <input type="text" class="form-controll form-controll-sm riwayat" name="_linkedin" id="_linkedin" value="{{ get_meta_value('_linkedin')}}">
                </div>
                <div class="mb-3">
                    <label for="_github" class="form-label">Github</label>
                    <div class="textarea"></div>
                    <input type="text" class="form-controll form-controll-sm riwayat" name="_github" id="_github" value="{{ get_meta_value('_github')}}">
                </div>
            </div>        
        </div>

        <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
    </form>

@endsection


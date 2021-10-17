@extends('layout.main')

@section('container')
<div class="row my-5 justify-content-center">
    <h1 class="text-center">Generate Surat</h1>
    <div class="col-md-5 p-5 shadow-sm mb-5 bg-body rounded">
        <form method="POST" action="{{route('result')}}" class=" d-flex flex-column align-items-center justify-content-center">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger w-100" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
            @endif
        
            <div class="form-floating mb-3 w-100">
                <input type="text" class="form-control" id="nama" name="nama" required placeholder="John Doe">
                <label for="nama">Nama Lengkap</label>
            </div>

            <div class="form-floating mb-3 w-100">
                <input type="text" class="form-control" id="alamat" name="alamat" required placeholder="Alamat">
                <label for="alamat">Alamat</label>
            </div>            

            <div class="form-floating mb-3 w-100">
                <input type="text" class="form-control" id="kota" name="kota" required placeholder="Kota?Kab.">
                <label for="kota">Kota/Kabupaten</label>
            </div>            

            <div class="form-floating mb-3 w-100">
                <input type="text" class="form-control" id="jabatan" name="jabatan" required placeholder="Jabatan">
                <label for="jabatan">Jabatan</label>
            </div>                        

            <div class="form-floating mb-3 w-100">
                <input type="date" class="form-control" id="date" name="date" required placeholder="Tanggal">
                <label for="date">Tanggal</label>
            </div>                        

            <select class="form-select mb-4" id="option" onchange="changeContent()" required name="jenis">
            <option value="" disabled selected>Pilih jenis surat</option>
            </select>            
            
            <h2 id="tes"></h2>

            <input type="hidden" name="opening" id="opening">
            <input type="hidden" name="main" id="main">
            <input type="hidden" name="closing" id="closing">

            <button type="submit" class="btn btn-primary w-100">Generate</button>
        </form>    
    </div>

    <div id="templates" class="justify-content-center align-items-center d-flex flex-column">
    </div>
</div>
@endsection

@section('script_footer')
<script src="/js/generate.js"></script>
@endsection
@extends('layout.main')

@section('container')
<div class="row my-5 justify-content-center">
    <h1 class="text-center">
        @yield('title')
    </h1>
    <div class="col-md-5 p-3 shadow-sm mb-5 bg-body rounded">
        <form class=" d-flex flex-column align-items-center justify-content-center mt-4">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger w-100" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
            @endif
        
            <div class="form-floating mb-3 w-100">
                <input type="text" class="form-control" id="jenis-surat" name="jenis-surat" placeholder="Surat Izin">
                <label for="jenis-surat">Jenis Surat</label>
            </div>

            <div class="form-floating mb-3 w-100">
                <textarea class="form-control" placeholder="Opening" id="opening-surat" name="opening-surat" style="height: 100px"></textarea>
                <label for="opening-surat">Opening Surat</label>
            </div>            

            <div class="form-floating mb-3 w-100">
                <textarea class="form-control" placeholder="Isi" id="isi-surat" name="isi-surat" style="height: 100px"></textarea>
                <label for="isi-surat">Isi Surat</label>
            </div>                        
 
            <div class="form-floating mb-3 w-100">
                <textarea class="form-control" placeholder="Closing" id="closing-surat" name="closing-surat" style="height: 100px"></textarea>
                <label for="closing-surat">Closing Surat</label>
            </div>                        

            @yield('button')
            <a class="btn btn-outline-primary w-100" id="back" href="{{ route('manage')}}">Kembali</a>
        </form>    
    </div>
    <div id="templates" class="justify-content-center align-items-center d-flex flex-column">
    </div>
</div>
@endsection
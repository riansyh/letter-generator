@extends('layout.main')

@section('container')
<h1 class="text-center mt-4">Kelola Template Surat</h1>
<div class="row mt-5 justify-content-start">
    <div class="col-3">
        <a class="btn btn-primary" href="{{route('add')}}"> <i class="fas fa-plus" ></i>  Tambah Template</a>
    </div>
</div>
<div class="row px-2 mt-2 justify-content-center">
    <table class="table table-striped table-hover">
    <thead>
        <tr>
        <th scope="col">No.</th>
        <th scope="col">Jenis Surat</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody id="templates">
    </tbody>
    </table>    
</div>
@endsection

@section('script_footer')
<script src="/js/manage.js"></script>
@endsection
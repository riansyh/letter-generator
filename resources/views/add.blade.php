@extends('layout.inputLetter')

@section('title')
    Tambah Template Surat
@endsection

@section('button')
    <a class="btn btn-primary w-100 mb-3" id="add-data" onclick="addData()">Tambahkan</a>
@endsection

@section('script_footer')
    <script src="/js/add.js"></script>
@endsection
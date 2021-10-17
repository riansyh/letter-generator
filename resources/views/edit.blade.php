@extends('layout.inputLetter')

@section('title')
    Edit Template Surat
@endsection

@section('button')
    <a class="btn btn-primary w-100 mb-3" id="update-data" onclick="updateData()">Ubah</a>    
@endsection

@section('script_footer')
    <script src="/js/edit.js"></script>
@endsection
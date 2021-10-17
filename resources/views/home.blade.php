@extends('layout.main')

@section('container')
<div class="row my-5 justify-content-center">
    <h1 class="text-center">Generate Surat Sederhana</h1>
    <p class="desc text-center">Website ini dapat digunakan untuk membuat surat secara otomatis. <br> Dibuat oleh <a href="http://github.com/riansyh">Rian Febriansyah</a> sebagai submission tahap penugasan seleksi internship Campuspedia</p>

    <a href="{{ route('generate')}}" class="d-block btn-primary btn mt-3 mx-3 p-3 w-50"> <i class="fas fa-envelope-open-text me-1"></i> Generate Surat</a>
    <a href="{{ route('manage')}}" class="d-block btn-primary btn mt-3 mx-3 p-3 w-50"> <i class="fas fa-tasks me-1"></i> Kelola Template Surat</a>
</div>
@endsection

@section('script_footer')
    <script type="text/javascript">
        fetch('/api/letter', {
            method: 'GET', 
            headers: {
               'Content-Type': 'application/json',
               'Accept': 'application/json',
               'url': '/api/letter',
            },
         })
         .then((response) => response.json())
         .then((data) => show(data))
         .catch(error => console.log(error));

         const show = (data) => {
            document.querySelector('#tes').innerHTML = data;
         }

    </script>
@endsection
@extends('layout.inputLetter')

@section('title')
    Tambah Template Surat
@endsection

@section('button')
    <a class="btn btn-primary w-100 mb-3" id="add-data">Tambahkan</a>
@endsection

@section('script_footer')
    <script type="text/javascript">
    const addData = () => {
        const data = {
            'name' : document.querySelector('#jenis-surat').value,
            'opening' : document.querySelector('#opening-surat').value,
            'main' : document.querySelector('#isi-surat').value,
            'closing' : document.querySelector('#closing-surat').value,
        }

        console.log(data.name);

        if(data.name !== '' && data.opening !== '' && data.main !== '' && data.closing !== ''){
            fetch(`/api/letter`, {
                method: 'POST', 
                headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'url': '/api/letter',
                },
                body: JSON.stringify(data),
            })
            .then((response) => response.json())
            .then((data) => console.log(data))
            .then(alert("Data berhasil ditambahkan"))
            .then(location.replace("/manage"))
            .catch(error => console.log(error));        
        } else {
            alert("Kolom input harus diisi!")
        }

    }

    document.getElementById('add-data').addEventListener('click', addData);

    </script>
@endsection
@extends('layout.inputLetter')

@section('title')
    Edit Template Surat
@endsection

@section('button')
    <a class="btn btn-primary w-100 mb-3" id="update-data">Ubah</a>    
@endsection

@section('script_footer')
    <script type="text/javascript">
    let url_str = window.location.href;
    let url = new URL(url_str);
    let search_params = url.searchParams; 

    fetch(`/api/letter/${search_params.get('id')}`, {
        method: 'GET', 
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'url': '/api/letter',
        },
    })
    .then((response) => response.json())
    .then((data) => putInEdit(data))
    .catch(error => console.log(error));

    const putInEdit = (data) => {
        document.querySelector('#jenis-surat').value = data.data.name;
        document.querySelector('#opening-surat').value = data.data.opening;
        document.querySelector('#isi-surat').value = data.data.main;
        document.querySelector('#closing-surat').value = data.data.closing;
    }

    const updateData = () => {
        const data = {
            'name' : document.querySelector('#jenis-surat').value,
            'opening' : document.querySelector('#opening-surat').value,
            'main' : document.querySelector('#isi-surat').value,
            'closing' : document.querySelector('#closing-surat').value,
        }

        fetch(`/api/letter/${search_params.get('id')}`, {
            method: 'PUT', 
            headers: {
               'Content-Type': 'application/json',
               'Accept': 'application/json',
               'url': '/api/letter',
            },
            body: JSON.stringify(data),
        })
        .then((response) => response.json())
        .then((data) => console.log(data))
        .then(alert("Data berhasil diubah"))
        .then(location.replace("/manage"))
        .catch(error => console.log(error));        
    }

    document.getElementById('update-data').addEventListener('click', updateData);

    </script>
@endsection
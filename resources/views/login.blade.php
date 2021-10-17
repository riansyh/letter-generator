@extends('layout.main')

@section('container')
<div class="row my-5 justify-content-center">
    <div class="col-md-5 p-5 shadow-sm mb-5 bg-body rounded">
        <h1 class="h2 mb-4">Login</h1>
        <form method="POST" action="{{route('store')}}" class=" d-flex flex-column align-items-center justify-content-center">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger w-100" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
            @endif
        
            <div class="form-floating mb-3 w-100">
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-3 w-100">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <label for="password">Password</label>
            </div>
        
              <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>    
    </div>
</div>
@endsection


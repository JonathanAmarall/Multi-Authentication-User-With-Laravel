@extends('template.template')
@section('content')
<div class="row justify-content-center p-4">
    <div class="col-6 ">
        <div class="card shadow">
            <div class="card-header">
                Realize o login
            </div>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço do E-mail</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-dark">Logar</button>

                    <!-- exibe erros de validação na tela -->
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            @if( isset($errors) && count(($errors)) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error )
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
<style>
    body {
        background-color: #211313;
    }
</style>
@endsection
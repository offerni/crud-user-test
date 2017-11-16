@extends('layouts.site')

@section('conteudo')
    <div class="container">
        <h3 class="text-center">Adicionar Usuário</h3>
        <form class="form-group col-sm-12" method="POST" enctype="multipart/form-data" action="{{ route('usuario.salvar') }} ">
            {{ csrf_field() }}
            @include('auth._form')
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
@endsection

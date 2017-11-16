@extends('layouts.site')

@section('conteudo')
    <div class="container">
        <h3 class="text-center">Editar Usuário</h3>
        <form class="form-group col-sm-12" method="POST" action="{{ route('usuario.atualizar', $registro->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('auth._form')
                <button type="submit" class="btn btn-primary atualizar-usuario">Atualizar</button>
        </form>
    </div>
@endsection

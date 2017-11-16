@extends('layouts.site')

@section('conteudo')
    <div class="container">
        <h3 class="text-center">Editar Contato</h3>
        <form class="form-group col-sm-12" method="POST" action="{{route('contato.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('contatos._form')
            <div class="row d-flex justify-content-center">
                <div class="col-sm-7">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
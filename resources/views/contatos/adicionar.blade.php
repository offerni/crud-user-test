@extends('layouts.site')

@section('conteudo')
    <div class="container">
        <h3 class="text-center">Adicionar Contato</h3>
        <form class="form-group col-sm-12" method="POST" action="{{ route('contato.salvar', $id)}}">
            {{ csrf_field() }}
            @include('contatos._form')
            <div class="row d-flex justify-content-center">
                <div class="col-sm-7">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
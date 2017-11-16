@extends('layouts.site')

@section('conteudo')

<div class="container justify-content-center">
    <div class="form-row justify-content-center">
        <div class="form-group col-sm-6 ">
            <h3 class="text-center">Usuários</h3>
        </div>
        <div class="form-group col-sm-6">
            <h3 class="text-center">Contatos</h3>
        </div>
        @foreach($registros as $registro)
            <div class="form-group col-sm-2">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-light">Nome</li>
                    <li class="list-group-item list-group-item-light">Email</li>
                    <li class="list-group-item list-group-item-light">Endereço</li>
                    <li class="list-group-item list-group-item-light">Data de Nasc.</li>
                    <li class="list-group-item list-group-item-light">CPF</li>
                </ul>
            </div>
            <div class="form-group col-sm-4 ">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-primary">{{$registro->name}}</li>
                    <li class="list-group-item list-group-item-primary">{{$registro->email}}</li>
                    <li class="list-group-item list-group-item-primary">{{$registro->endereco}}</li>
                    <li class="list-group-item list-group-item-primary">{{date('d/m/Y', strtotime($registro->data_nascimento))}}</li>
                    <li class="list-group-item list-group-item-primary">{{$registro->cpf}}</li>
                    @if(!Auth::guest())
                        <li class="d-flex">
                            <a class="btn btn-warning col-sm-6" href="{{route('usuario.editar', $registro->id)}}">Atualizar</a>
                            <a class="btn btn-danger col-sm-6" href="{{route('usuario.deletar', $registro->id)}}">Deletar</a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="form-group col-sm-6 contato-scroll" >

                <table class="table table-bordered table-hover">
                    <thead>
                    <tr class="table-primary">
                        <th hidden>{{$num=1}}</th>
                        <th></th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        @if(!Auth::guest())
                            <th class="d-flex justify-content-end"> <a class="btn btn-outline-primary btn-sm" href="{{route('contato.adicionar', $registro->id)}}"><span class="oi oi-plus"></span></a>  </th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    <th hidden></th>
                    @foreach($registro->contatos as $contato)
                    <tr class="table table-hover table-secondary ">
                        <th scope="row">{{$num++}}</th>
                        <td>{{$contato->email}}</td>
                        <td>{{$contato->telefone}}</td>
                        @if(!Auth::guest())
                            <td class="d-flex">
                                <a class="btn btn-warning col-sm-6 btn-sm" href="{{route('contato.editar', $contato->id)}}">Atualizar</a>
                                <a class="btn btn-danger col-sm-6 btn-sm" href="{{route('contato.deletar', $contato->id)}}">Deletar</a>
                            </td>
                        @endif
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @endforeach
    </div>
    @if(!Auth::guest())
        <a href="{{route('register')}}" class="btn btn-primary">Adicionar novo Usuário</a>
    @endif
</div>

@endsection

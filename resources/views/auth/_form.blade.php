<div class="form-row ">
    <div class="form-group col-sm-6" {{ $errors->has('name') ? ' has-error' : '' }}>
        <label for="name" class="control-label">Nome</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}{{isset($registro->name)? $registro->name : ''}}" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group col-sm-6" {{ $errors->has('email') ? ' has-error' : '' }}>
        <label for="name" class="control-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}{{isset($registro->email)? $registro->email : ''}}"placeholder="exemplo@mail.com" required>

        @if ($errors->has('email'))
            <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
        @endif
    </div>
     @if(!isset($registro->password))
        <div class="form-group col-sm-6" {{ $errors->has('password') ? ' has-error' : '' }}>
            <label for="password" class="control-label">Senha</label>
            <input type="password" name="password" class="form-control"  required>

            @if ($errors->has('password'))
                <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
            @endif
        </div>

        <div class="form-group col-sm-6">
            <label for="password-conform" class="control-label">Confirmar Senha</label>
            <input type="password" name="password_confirmation" class="form-control"  required>
        </div>
    @endif


    <div class="form-group col-sm-12" {{ $errors->has('endereco') ? ' has-error' : '' }}>
        <label for="name" class="control-label">Endereço</label>
        <input type="text" name="endereco" class="form-control" value="{{old('endereco') }}{{isset($registro->endereco)? $registro->endereco : ''}}" required autofocus >

        @if ($errors->has('endereco'))
            <span class="help-block">
                        <strong>{{ $errors->first('endereco') }}</strong>
                    </span>
        @endif
    </div>

    <div class="form-group col-sm-6" {{ $errors->has('data_nascimento') ? ' has-error' : '' }}>
        <label for="name" class="control-label">Data de Nascimento</label>
        <input type="text" name="data_nascimento" class="form-control"
               value="{{ old('data_nascimento') }}{{isset($registro->data_nascimento)? date('d/m/Y', strtotime($registro->data_nascimento)) : ''}}"
               placeholder="dd/mm/YYYY" required autofocus>

        @if ($errors->has('data_nascimento'))
            <span class="help-block">
                <strong>{{ $errors->first('data_nascimento') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group col-sm-6" {{ $errors->has('cpf') ? ' has-error' : '' }}>
        <label for="name" class="control-label">CPF</label>
        <input type="text" name="cpf" class="form-control" value="{{ old('cpf') }}{{isset($registro->cpf)? $registro->cpf : ''}}" required autofocus >
        <span class="help-block invalido">
            CPF Inválido!
        </span>

        @if ($errors->has('cpf'))
            <span class="help-block">
                <strong>{{ $errors->first('cpf') }}</strong>
            </span>
        @endif
    </div>
    @if(isset($registro->img_url))
        <div class="form-group col-sm-2">
            <img src="{{asset($registro->img_url)}}" class="img-thumbnail">
        </div>
    @endif

    <label class="form-group col-sm-12">
        <label for="name" class="control-label">Adicionar Imagem </label>
        <input name="img_url" type="file" class="form-control-file" value="{{ old('img_url') }}{{isset($registro->img_url)? $registro->img_url : ''}}">
    </label>
</div>

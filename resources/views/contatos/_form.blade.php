<div class="row d-flex justify-content-center">
    <div class="form-group col-sm-7" {{ $errors->has('email') ? ' has-error' : '' }}>
        <label for="name" class="control-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}{{isset($registro->email)? $registro->email : ''}}"placeholder="exemplo@mail.com" required>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group col-sm-7" {{ $errors->has('telefone') ? ' has-error' : '' }}>
        <label for="name" class="control-label">Telefone</label>
        <input type="text" name="telefone" class="form-control" value="{{ old('telefone') }}{{isset($registro->telefone)? $registro->telefone : ''}}" required>

        @if ($errors->has('telefone'))
            <span class="help-block">
                <strong>{{ $errors->first('telefone') }}</strong>
            </span>
        @endif
    </div>
</div>

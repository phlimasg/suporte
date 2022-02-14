@extends('layout.master')
@section('conteudo')

<h3>Opções de Usuário</h3>
<form action="@if(isset($user->name)) {{ route('user.update', ['user'=>$user]) }} @else {{ route('user.store') }} @endif" method="post">
    @csrf
    @if(isset($user->name)) @method('PUT') @endif
    <div class="row">
        <div class="col-md-4">
            <label for="">Nome:</label>
            <input type="text" class="form-control" name="name" value="@if(isset($user)) {{$user->name}} @endif">
        </div>
        <div class="col-md-4">
            <label for="">Email:</label>
            <input type="text" class="form-control" name="email" value="@if(isset($user)) {{$user->email}} @endif">
        </div>
        <div class="col-md-4">
            <label for="">Senha:</label>
            <input type="password" class="form-control" name="password" >
        </div>
    </div>
    <hr>
    <button class="btn btn-secondary btn-block" type="submit">Salvar</button>
</form>

@endsection

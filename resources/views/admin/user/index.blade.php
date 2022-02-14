@extends('layout.master')
@section('conteudo')

<h3>Listagem de Usuários</h3>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Ações</th>   
                </tr>
              </thead>
              <tbody>
                  @foreach ($users as $i)                  
                  <tr>
                    <td>{{$i->id}}</td>
                    <td>{{$i->name}}</td>
                    <td>{{$i->email}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('user.show',['user' => $i])}}" class="btn btn-primary">Visualizar</a>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                              <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('user.edit',['user' => $i])}}">Editar</a>
                              <a class="dropdown-item" href="#">Excluir</a>
                            </div>
                          </div>
                    </td>
                  </tr>
                  @endforeach                
              </tbody>
            </table>
        </div>
        
    </div>
</div>

@endsection

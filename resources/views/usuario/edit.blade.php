@extends('layout/public')
@section('content')
    <div class="component-title" data-intro='Nessa tela você irá editar um usuario já cadastrado no sistema.'>
        <h1>Edição do usuario</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="#/usuario/help" class="btn btn-default btn-help" data-intro='Clique aqui para ter uma ajuda igual a essa na página.'>Ajuda</a>
        </div>
    </div>
    
     @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" action="/usuario/{{$usuario->cd_usuario}}" method="POST">
            <div class="form-group">
                <label for="nm_usuario" class="col-md-4 control-label">Nome :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_usuario" name="nm_usuario" placeholder="Nome do usuario" value="{{$usuario->nm_usuario}}" required/>
                </div>
            </div>
			<div class="form-group">
                <label for="nm_senha" class="col-md-4 control-label">Senha :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_senha" name="nm_senha" placeholder="Senha do usuario" value="{{$usuario->nm_senha}}" required/>
                </div>
            </div>
			<div class="form-group">
                <label for="nm_email" class="col-md-4 control-label">Email :</label>
                <div class="col-md-6">
                    <input type="email" class="form-control" id="nm_email" name="nm_email" placeholder="Email do usuario" value="{{$usuario->nm_email}}" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="cd_departamento" class="col-md-4 control-label">Departamento</label>
                <div class="col-md-6">
                    {{Form::select('cd_departamento', $departamentos, NULL,['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-4 col-md-6">
                    <button type="submit" class="btn btn-info">Editar</button>
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                </div>
            </div>
        </form>
        </div>
        </div>
    </div>
@stop
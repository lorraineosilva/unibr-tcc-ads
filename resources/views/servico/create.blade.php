@extends('layout/public')
@section('content')
    <div class="component-title">
        <h1>Cadastro de serviço</h1>
    </div>

    <div class="component-barra-menu">
        <div class="btn-group pull-right" role="group">
            <a href="/estoque/help" class="btn btn-default">Ajuda</a>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="nm_servico" class="col-md-4 control-label">Serviço :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="nm_servico" name="nm_servico" placeholder="Nome do serviço" />
                </div>
            </div>
            <div class="form-group">
                <label for="vl_servico" class="col-md-4 control-label">Valor do Servico :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="vl_servico" name="vl_servico" placeholder="Valor" />
                </div>
            </div>
            <div class="form-group">
                <label for="ds_servico" class="col-md-4 control-label">Descrição do Serviço :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="ds_servico" name="ds_servico" placeholder="Descrição" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-4 col-md-6">
                    <button type="submit" class="btn btn-default">Cadastrar</button>
                </div>
            </div>
        </form>
        </div>
        </div>
    </div>
@stop

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">General Elements</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form>
        <div class="row">
          <div class="col-sm-12">
            <!-- text input -->
            <div class="form-group">
              <label>Nome do Evento</label>
              <input type="text" class="form-control" placeholder="Enter ...">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <!-- textarea -->
            <div class="form-group">
              <label>Descrição do Evento</label>
              <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>
          </div>
        </div>

        <!-- input states -->
        <div class="form-group">
          <label class="col-form-label" for="inputSuccess"><i class="fas fa-map"></i> Local</label>
          <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
        </div>
        <div class="form-group">
          <label class="col-form-label" for="inputSuccess"><i class="far fa-clock"></i> Horário</label>
          <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
        </div>
        <div class="form-group">
          <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Quantidade de Ingressos Disponíveis</label>
          <input type="text" class="form-control is-invalid" id="inputError" placeholder="Enter ...">
        </div>

        <div class="row">
          <div class="col-sm-6">
            <!-- checkbox -->
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Haverá Visitantes?</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" checked>
                <label class="form-check-label">Estacionamento Gratuito?</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" disabled>
                <label class="form-check-label">Edital de Abertura?</label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <!-- radio -->
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radio1">
                <label class="form-check-label">Somente Homens</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radio1" >
                <label class="form-check-label">Somente Mulheres</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" checked>
                <label class="form-check-label">Ambos</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <!-- select -->
            <div class="form-group">
              <label>Selecione a área de uso:</label>
              <select class="form-control">
                <option>Área Especial B</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <!-- Select multiple-->
            <div class="form-group">
              <label>Selecione os tipos de comida:</label>
              <select multiple class="form-control">
                <option>Comida Convencional / Prato Feito</option>
                <option>Japonesa Cultural</option>
                <option>Trailers de Fast Food</option>
                <option>Sorveteria </option>
                <option>option 5</option>
              </select>
            </div>
          </div>
        </div>
        <div class="group-btn">
            <button class="btn btn-success">Criar</button>
            <button class="btn btn-danger">Voltar</button>
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
@stop

@section('css')

@stop

@section('js')

@stop

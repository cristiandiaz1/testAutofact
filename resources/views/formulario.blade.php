@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Formulario</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('postFormulario') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="pregunta1">¿Qué te gustaría que agregáramos al informe?</label>
                                <input type="text" class="form-control" name="pregunta1" id="pregunta1">
                            </div>

                            <div class="form-group">
                                <label for="pregunta2">¿La información es correcta?</label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pregunta2" id="pregunta2" value="Si">
                                    <label class="form-check-label" for="pregunta2">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pregunta2" id="pregunta2" value="No">
                                    <label class="form-check-label" for="pregunta2">No</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pregunta2" id="pregunta2" value="Más o menos">
                                    <label class="form-check-label" for="pregunta2">Más o menos</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pregunta3">¿Del 1 al 5, es rápido el sitio?</label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3" value="1">
                                    <label class="form-check-label" for="pregunta3">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3" value="2">
                                    <label class="form-check-label" for="pregunta3">2</label>
                                </div><div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3" value="3">
                                    <label class="form-check-label" for="pregunta3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3" value="4">
                                    <label class="form-check-label" for="pregunta3">4</label>
                                </div><div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3" value="5">
                                    <label class="form-check-label" for="pregunta3">5</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

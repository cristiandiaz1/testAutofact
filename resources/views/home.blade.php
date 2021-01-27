@extends('layouts.app')
@include('flash::message')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Formularios pendientes</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="{{route('getFormulario')}}" class="btn btn-primary">Realizar Formulario </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

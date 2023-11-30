@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-image: url('images/biblioteca3.jpg'); background-size: cover; background-position: center; height: 85vh; display: flex; align-items: center; justify-content: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" style="background-color: #FF0000; color: #FFFFFF;">{{ __('Lograste entrar!') }}</div>

                    <div class="card-body" style="background-color: #FFAAAA;">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('¡Estás conectado!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
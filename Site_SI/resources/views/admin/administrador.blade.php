
@extends('layouts.app')
@section('title', 'Administrador')
@section('conteudo')
    @include('admin.menuAdministrador')
    <div class="container">
        <div class="row">
            <div class="large-10 medium-10 small-10 columns medium-centered">
                <br>
                <div class="callout large center secondary">
                    @yield('admin')
                </div>
            </div>
        </div>
    </div>
@endsection	
@extends('layouts.app')

<!-- Main Content -->
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="large-5 medium-5 small-5 columns medium-centered">
                <div class="callout large center secondary">
                    <h5>Login</h5>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="medium-12 columns">E-Mail</label>

                                <div class="medium-12 columns">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="medium-centered">
                                    <button type="submit" class="button">
                                        Enviar link para resetar a senha!
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

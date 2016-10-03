@extends('layouts.app')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="large-5 medium-5 small-5 columns medium-centered">
            <div class="callout large center secondary">
            <h5>Login</h5>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                            <label for="email" class="medium-12 columns">E-Mail Address</label>
                            <div class="medium-12 columns">
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="password" class="medium-12 columns">Password</label>
                            <div class="medium-12 columns">
                                <input id="password" type="password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block" >
                                        <strong style="color:red;" >{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group">
                            <div class="medium-12 columns">
                                <button type="submit" class="button">
                                    Login
                                </button>
                            </div>
                        </div>
                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

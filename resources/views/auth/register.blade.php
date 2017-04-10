@extends('layouts.layout_login')

@section('content')
<div class="md-card" id="login_card">
    <div class="md-card-content large-padding" id="register_form">
        <a href="{{route('login')}}" class="uk-position-top-right uk-close uk-margin-right uk-margin-top" data-uk-tooltip="{pos:'top'}" title="Back To Login"></a>
        <h2 class="heading_a uk-margin-medium-bottom">Create an account</h2>
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="uk-form-row">
                <label for="register_username{{ $errors->has('name') ? ' has-error' : '' }}">Username</label>
                <input class="md-input" type="text" name="name" value="{{ old('name') }}" required autofocus />
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="uk-form-row{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="register_email">E-mail</label>
                <input class="md-input" type="email" name="email" value="{{ old('email') }}" required />
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="uk-form-row{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="register_password">Password</label>
                <input class="md-input" id="password" type="password" class="form-control" name="password" required/>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="uk-form-row">
                <label for="register_password_repeat">Repeat Password</label>
                <input class="md-input" id="password-confirm" type="password" class="form-control" name="password_confirmation" required />
            </div>
            <div class="uk-margin-medium-top">
                <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection

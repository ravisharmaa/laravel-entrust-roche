@extends('layouts.layout_login')

@section('content')
<div class="md-card" id="login_card">
    <div class="md-card-content large-padding" id="login_password_reset">
        <a href="{{route('login')}}" class="uk-position-top-right uk-close uk-margin-right uk-margin-top" data-uk-tooltip="{pos:'top'}" title="Back To Login"></a>
        <h2 class="heading_a uk-margin-large-bottom">Reset password</h2>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <div class="uk-form-row">
                <label for="login_email_reset">Your email address</label>
                <input class="md-input" id="email" type="email" name="email" value="{{ old('email') }}" required />
                @if ($errors->has('email'))
                    <span class="uk-text-danger">
                        {{ $errors->first('email') }}
                    </span>
                @endif
            </div>
            <div class="uk-margin-medium-top">
                <button type="submit" class="md-btn md-btn-primary md-btn-block">
                    Send Password Reset Link
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

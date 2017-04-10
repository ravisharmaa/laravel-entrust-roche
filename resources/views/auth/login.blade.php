@extends('layouts.layout_login')

@section('content')

<div class="md-card" id="login_card">
    <div class="md-card-content large-padding" id="login_form">
        <div class="login_heading">
            <div class="user_avatar"></div>
        </div>
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="parsley-row">
                        <label for="email">Email<span class="req">*</span></label>
                        <input class="md-input" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
                        @if ($errors->has('email'))
                            <span class="uk-text-danger">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>


            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="parsley-row">
                        <label for="password">Password<span class="req">*</span></label>
                        <input class="md-input" type="password" id="password" name="password" required />
                        @if ($errors->has('password'))
                            <span class="uk-text-danger">
                            {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="uk-margin-medium-top">
                <button type="submit"  class="md-btn md-btn-primary md-btn-block md-btn-large">
                    Sign In
                </button>
            </div>

            <div class="uk-margin-top">
                <a href="#" id="login_help_show" class="uk-float-right">Need help?</a>
                <span class="icheck-inline">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} data-md-icheck>
                    <label for="login_page_stay_signed" class="inline-label">Remember Me</label>
                </span>
            </div>

            <div class="uk-margin-top uk-text-center">
                <a class="btn btn-link" href="{{ route('password.request') }}"> Forgot Your Password? </a>
            </div>

            <div class="uk-margin-top uk-text-center">
                <a href="{{url('/register')}}">Create an account</a>
            </div>
        </form>
    </div>

    <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
        <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
        <h2 class="heading_b uk-text-success">Can't log in?</h2>
        <p>Here’s the info to get you back in to your account as quickly as possible.</p>
        <p>First, try the easiest thing: if you remember your password but it isn’t working, make sure that Caps Lock is turned off, and that your username is spelled correctly, and then try again.</p>
        <p>If your password still isn’t working, it’s time to <a href="#" id="password_reset_show">reset your password</a>.</p>
    </div>
</div>


@endsection

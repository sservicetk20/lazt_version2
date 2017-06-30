@extends('admin/auth/layouts.app')

@section('content')
<style type="text/css">
  .form {
    max-width: 350px!important;
}  
</style>
<div class="center">
  <div class="row form z-depth-5 white">
      
       <div class="input-field col s12 center"><br>
         <p class="center">LAZT</p>
        </div>
        
    <h5 style="font-weight: 100">{{ __('Register') }}</h5>
    <p>{{ __('mensaje_registro') }}</p>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <div class="input-field col s12{{ $errors->has('name') ? ' has-error' : '' }}"><i class="material-icons prefix">account_circle</i>
                  <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required>
                  <label for="name">{{ __('name') }}</label>
                    @if ($errors->has('name'))
                        <span class="red-text">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}"><i class="material-icons prefix">email</i>
                  <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                  <label for="email">{{ __('E-mail Address') }}</label>
                    @if ($errors->has('email'))
                        <div class="col s12">
                            <span class="red-text">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        </div>
                    @endif
                </div>

                <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}" required><i class="material-icons prefix">vpn_key</i>
                    <input type="password" name="password" class="validate" min="8" id="password">
                    <label for="password">{{ __('Password') }}</label>
                    @if ($errors->has('password'))
                        <span class="red-text">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field col s12{{ $errors->has('password_confirmation') ? ' has-error' : '' }}"><i class="material-icons prefix">vpn_key</i>
                    <input id="password-confirm" type="password" class="validate" name="password_confirmation">
                    <label>{{ __('Confirm_Password') }}</label>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>

                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light pink">{{ __('Register') }}</button>
                        
                        <div class="margin-top margin center-align medium-small">
                    <h6 class="center-align">REGISTER WITH</h6>
                     <a class="btn blue btn-facebook">
                   <i class="fa fa-facebook"></i>
                  </a>
                  
                  <a class="btn red facebook">
                   <i class="fa fa-google"> </i>
                  </a>
                </div>
                        
                        <p class="center-align">
                            ¿Ya tienes una cuenta? <a class="" href="{{ url('/login') }}">{{ __('Have_account') }}</a>
                        </p>
                    </div>
                </form>
            </div>
    </div>
@endsection

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

        <h5 style="font-weight: 100"> {{ __('Login') }} </h5>
            <div class="divider"></div>

           @if ($status = Session::get('status'))
            <div class="alert alert-info">
              {{ $status }}
            </div>
           @endif

            <form role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}"><i class="material-icons prefix">account_circle</i>
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

                <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}" required><i class="material-icons prefix">vpn_key</i>
                    <input type="password" name="password" class="validate" min="8" id="password">
                    <label for="password">{{ __('Password') }}</label>
                    @if ($errors->has('password'))
                        <span class="red-text">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <p class="col s12">
                  <input type="checkbox" id="remember" name="remember" />
                  <label for="remember">{{ __('Remember Me') }}</label>
                </p>

                <div class="input-field col s12">
                 <button type="submit" class="btn waves-effect waves-light pink">{{ __('Login') }}</button>
                 </div>
          
                <div class="margin-top margin center-align medium-small">
                    <h6 class="center-align">SIGN ON WITH</h6>
                     <a class="btn blue btn-facebook">
                   <i class="fa fa-facebook"></i>
                  </a>
                  
                  <a class="btn red facebook">
                   <i class="fa fa-google"> </i>
                  </a>
                </div>
                   
                   <div>
                      <div class="input-field col s6 m6 l6">
                        <p class="margin medium-small">
                           <a class="" href="{{ url('/register') }}">Registrarse</a>
                        </p>
                        </div>
                        <div class="input-field col s6 m6 l6">
                         <p class="margin right-align medium-small">
                            <a class="" href="{{ url('/password/reset') }}">{{ __('Forgot_Password') }}</a>
                         </p>
                        </div>
                        
                    </div>
                    
                </div>
            </form>
            
        </div>
    </div>
    
@endsection

@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s12">
        <div class="container">
            <div id="register-page" class="row" style="width:100%;max-width:550px;margin: auto;padding-top: 11px;">
                <div class="col-md-12 s12 m6 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
                    
                 <form method="POST" class="login-form" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <h5 class="ml-4">{{ __('Register') }}</h5>
                                <p class="ml-4">Join to our community now !</p>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">person_outline</i>
                        
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="username" class="center-align">Username</label>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">mail_outline</i>
                                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">lock_outline</i>
                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">lock_outline</i>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <label for="password-again">{{ __('Confirm Password') }}</label>
                            </div>
                        </div>

                         <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">lock_outline</i>
                               <div class="input-field">
                                <select class="select2 browser-default" name="type" style="margin-left: 43px;width: 90%">
                                  <option value="">Select Type</option>
                                  <option value="Talent">Talent</option>
                                  <option value="telant with Products">Telant with Products</option>
                                  <option value="promoters">All Promoters</option>
                                  
                               
                                </select>
                              </div>
                                <!-- <label for="password-again"></label> -->
                            </div>
                        </div>

                    
                    
                  
                        <div class="row">
                            <div class="input-field col s12">
                                
                                 <button type="submit"  class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">
                                    {{ __('Register') }}
                                </button>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <p class="margin medium-small"><a href="/login">Already have an account? Login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="content-overlay"></div>
    </div>
</div>


@endsection

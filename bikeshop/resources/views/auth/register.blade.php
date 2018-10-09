@extends('layouts.app')
@section('content')
<!-- ============================================ START  Main Content ================================================== -->
<div class="uk-overlay uk-text-center uk-vertical-align  min-h min-w">
    <!-- =============== TO CHANGE  background video THIS IS THE PLACE ================== -->
    <iframe data-uk-cover src="{{ setting('site.backgroundvideo') }}?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent" width="560" height="615" frameborder="0" allowfullscreen=""></iframe>
    <div class="uk-vertical-align  uk-overlay-panel uk-overlay-background">
        <div class=" uk-vertical-align-middle uk-text-center  uk-width-medium-3-10 uk-width-large-2-10 uk-container-center">

            <div class="uk-margin-large-bottom  uk-animation-reverse uk-animation-scale uk-animation-hover">
                <img class="uk-margin uk-margin-remove" width="200" height="40" alt="logo" src="{{ Voyager::image(setting('site.logo')) }}"/>
            </div>
            <!-- =============== START FORM ================== -->
            <form method="POST" class="uk-form" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf

                <h2 class="uk-margin-large-bottom uk-text-muted">Sign up</h2>

                <div class="uk-form-row">
                    <div class="uk-form-icon uk-form-icon-flip uk-width-1-1">

                        <input id="name" type="text" class="uk-width-1-1{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="User Name">
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                        <i class="uk-icon-user"></i>
                    </div> 
                </div>
                <div class="uk-form-row">
                    <div class="uk-form-icon uk-form-icon-flip uk-width-1-1">
                        <input id="email" placeholder="Email" type="email" 
                        class="uk-width-1-1{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                        name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                        <i class="uk-icon-envelope"></i>
                    </div> 
                </div>
                <div class="uk-form-row">
                    <div class="uk-form-icon uk-form-icon-flip uk-width-1-1" >
                       <input id="password" type="password" class="uk-width-1-1{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                       <i class="uk-icon-lock "></i>
                   </div>                    
               </div>

               <div class="uk-form-row">
                <div class="uk-form-icon uk-form-icon-flip uk-width-1-1" >
                    <input id="password-confirm" type="password" class="uk-width-1-1" name="password_confirmation" required placeholder="Confirm Password">
                    <i class="uk-icon-lock "></i>
                </div>                    
            </div>

            <div class="uk-form-row uk-text-small">
                <label class="uk-float-left"><input type="checkbox" required> I agree to the Terms &amp; Conditions</label>
            </div>
            <div class="uk-form-row">
               <button type="submit" class="uk-width-1-1 uk-button uk-button-primary uk-button-large">
                {{ __('Register') }}
            </button>

        </div>

    </form>
    <!-- =============== END FORM ================== -->
</div>
</div>
</div>
<!-- =============== END Main Content  ============================================= -->
@endsection

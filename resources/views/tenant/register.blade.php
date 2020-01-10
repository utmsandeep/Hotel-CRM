@extends('tenant.layouts.master')

@section('content')
         
<section class="registerpart" style="background-image:url({{ asset('images/main-system/bannerimage.jpg') }})">        
  <div class="container">
      <div class="registersection">
    

                <div class="loginmodelbody">
                 <div class="loginpage">
                 
                  <h2>Sign up</h2>
                  <h3>Create new account</h3>
        
                  <form action="{{ route('tenant.register.submit') }}" method="post">
                  	@csrf
                    <div class="form-group {{ $errors->has('firstname') ? 'has-error' : ''}}">
                      <label for="firstname">First Name:</label>
                      <input type="text" class="form-control" placeholder="Enter First Name" id="firstname" name="firstname" value="{{ old('firstname') }}">
                       {!! $errors->first('firstname', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''}}">
                        <label for="lastname">Last Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Last Name" id="lastname" name="lastname" value="{{ old('lastname') }}">
                         {!! $errors->first('lastname', '<p class="help-block">:message</p>') !!}
                      </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" value="{{ old('email') }}">
                         {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                      </div>
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" placeholder="Enter Password" name="password" id="pwd">
                       {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group">
                      <label for="c-pwd">Confirm Password:</label>
                      <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" id="c-pwd">
                    </div>
                    <div class="row textpart">
                    <div class="form-group form-check">
                      <label class="form-check-label remme">
                        <input class="form-check-input " type="checkbox"> I have read 
                        and accept 
                        the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                      </label>
                    </div>
                    
                  </div>
                    <div class="row">
                    <div class="subsignbtn">
                    <button type="submit" class="btn btn-primary subbtn ">Submit</button>
                  </div>
                  </div>
                  </form>
                 </div>
                </div>
              </div>
  </div>
  </section>
@endsection
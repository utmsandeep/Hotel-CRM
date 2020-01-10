@extends('tenant.layouts.master')

@section('head')
<link rel="stylesheet" href="assets/styles/style.css">
<link rel="stylesheet" href="{{ asset('css/tenant/admin.css') }}">
@endsection

@section('content')
  
  <section class="container">        
  <div class="adminlogin">
     
      <div class="adminloginimg">
        <img src="{{ asset('images/main-system/hotel1.jpg') }}" />
    </div>
                <div class="formsection">
                 <div class="formpart">
                  <h2>Log in</h2>
                 <hr>
                  <form action="{{ route('tenant.admin.login.submit') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" placeholder="Enter Password" id="pwd" name="password">
                    </div>
                    <div class="form-group form-check"> 
                      <label class="form-check-label remme">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me</a>
                      </label>
                    </div>
                    
                    <div class="adminbtn">
                    <button type="submit" class="btn btn-raised adminsub">Submit</button>
                  </div>
                  
                  </form>
                 </div>
               
              </div>
  </div>
  </section>       

@endsection
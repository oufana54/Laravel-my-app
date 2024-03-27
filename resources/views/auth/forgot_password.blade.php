@extends('base')

@section('title','forgot password')
 
@section('content')

<div class ="container">
  <div class="row">
    <div class="col-md-4 mx-auto">
        <h1 class ="text-center text-muted mb-3 mt-5">forgot password</h1>
        <p class="text-center text-muted mb-5">Please enter your email address.We'll send you a link to reset your password</p>  

        <form method="post" action ="{{ route('app_forgotpassword')}}">
                @csrf   
                {{--On inclus le message d'alertes--}}
                @include('alerts.alert-message') 

                <label for="email-send" class="form-label">Email</label>  
                <input type="email" name="email-send" id="email-send" class="form-control mb-3 @error('email-send') is-invalid @enderror" placeholder ="Please enter your email adress" required autocomplete="email" autofocus> 
                
                <div class="d-grid gap-2 mt-4">
            <button class="btn btn-primary " type="submit">Reset password</button>

            <p class="text-center text-muted mt-4">Back to login <a href="{{ route('login')}}" >Login</a></p>

          </div>
       </form>        
    </div>
   </div>
</div>
@endsection
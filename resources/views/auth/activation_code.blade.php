@extends('base')

@section('title', 'account activation')

@section('content')
  
<div class="container">
  <div class="row">
    <div class="col-md-4 mx-auto">
     <h1 class ="text-center text-muted mb-3 mt-5">Account activation</h1>  
      
      <form method="POST" action="{{ route('app_activation_code',['token' => $token]) }}" >
      @csrf


      @include('alerts.alert-message')

      <div class="mb-3">
        <label for="activation-code" class="form-label">Activation Code</label>
        <input type="text" class="form-control @if(Session:: has('danger')) is-invalid @endif" name="activation-code" id="activation-code" value="@if(session::has('activation_code')){{Session::get('activation_code')}} @endif" required>
      </div>
     
       <div class="row mb-3">
          <div class="col-md-6">
            <a href="{{ route('app_activation_account_change_email',['token' => $token]) }}">Change your email address</a>
          </div>
          <div class="col-md-6 text-end">
            <a href="{{ route('app_resend_activition_code',['token' => $token]) }}">Resend your acivition code</a>
          </div>
       </div>

       <div class="d-grid gap-2">
         <button class="btn btn-primary" type="submit">Activate</button>
       </div>

      </form>
    </div>
            
     
  </div>
</div>


@endsection
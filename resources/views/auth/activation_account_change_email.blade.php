@extends('base')

@section('title', 'Change your email address')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
              <h3 class ="text-center text-muted mb-3 mt-5">Change your email address</h3>

              @include('alerts.alert-message')  

              <form method="post" action="{{ route('app_activation_account_change_email',['token' => $token]) }}">
              @csrf

                <div class="md-3">
                  <label for="new-email" class="form-label">New Email address</label> 
                  <input type="email"class="form-control @if(Session:: has('danger')) is-invalid @endif"  name="new-email" id="new-email" value="@if(session::has('new-email')){{ Session::get('new-email') }} @endif" placeholder="Enter the new email address" required>
                </div>

                <div class="d-grid gap-2">
                  <button class="btn btn-primary" type="submit">Change</button>
                </div> 
              </form> 
            </div>
        </div>
    </div>
@endsection
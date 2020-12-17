@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" align="center" style="margin-top: 60px;">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h2>Reset Password</h2>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                            <div class="col-md-6">
                                <span class="add-on"><i class="halflings-icon user"></i></span>
                                <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" style="width: 250px;" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                       <!--  </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                             <a class="btn btn-success"  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Back To Login</a>
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                               
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Recover') }}
                                </button>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

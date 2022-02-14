@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sign Up') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('First Name:') }}</label>

                            <div class="col-md-6">
                                <input  type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" autofocus value="{{ old('first_name') }}" required autocomplete="first_name" >

                                @error('first_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    {{-- <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> --}}
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="middle_name" class="col-md-4 col-form-label text-md-end">{{ __('Middle Name:') }}</label>

                            <div class="col-md-6">
                                <input id="middle_name" type="middle_name" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" required autocomplete="middle_name">

                                @error('middle_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name:') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="last_name" class="form-control @error('last_name') is-invalid @enderror" name="last_name"  value="{{ old('last_name') }}" required autocomplete="last_name">

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3" >
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender:') }}</label>
                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="gender" type="radio" id="gender" value="male">
                                    <label class="form-check-label" for="gender">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="gender" type="radio" id="gender" value="female">
                                    <label class="form-check-label" for="gender">female</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3" >
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role:') }}</label>
                            <div class="col-md-6">
                                <select id="role" name="role" >
                                    <option>Admin</option>
                                    <option>User</option>
                                  </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="display_picture_link" class="col-md-4 col-form-label text-md-end">{{ __('display_picture_link') }}</label>

                            <div class="col-md-6">
                                <input id="display_picture_link" type="file" class="form-label @error('display_picture_link') is-invalid @enderror" name="display_picture_link" required autocomplete="display_picture_link">

                                @error('display_picture_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="" style="align-content: center; text-align: center">
                            <button type="submit" class="btn btn-warning">
                                {{ __('Submit') }}
                            </button>
                            <a class="nav-link" href="{{ route('login') }}" style="color: blue; text-decoration: underline;">Already have an account? click here to log in</a>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

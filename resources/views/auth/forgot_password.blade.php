@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">{{ __('Send Password Reset Link') }}</button>
        </div>
    </form>
@endsection

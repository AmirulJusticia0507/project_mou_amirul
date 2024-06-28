@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
        </div>
    </form>
@endsection

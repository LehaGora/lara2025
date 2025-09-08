@extends('layouts.base')

@section('title', 'Welcome Login')

@section('bootstrap')
    @vite(['resources/css/bootstrap.min.css'])
@endsection

@section('content')
    <h2>Вход</h2>
    <form method="POST" action="{{ route('login-post') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
            <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
            @error('email')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" value="{{ old('password') }}">
            @error('password')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <input name="checkbox" type="checkbox" class="form-check-input @error('checkbox') is-invalid @enderror" id="exampleCheck1" >
            <label class="form-check-label" for="exampleCheck1">Проверить меня</label>
            @error('checkbox')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
@endsection

@section('footer')
    <div class="h-14.5 hidden lg:block mt-4">Login</div>
@endsection

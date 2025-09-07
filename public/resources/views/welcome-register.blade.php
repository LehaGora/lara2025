@extends('layouts.base')

@section('title', 'Welcome Registr')

@section('bootstrap')
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    @vite(['resources/css/bootstrap.min.css'])
@endsection

@section('content')
    <h2>Регистрация</h2>
    <form>
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Пароль еще раз</label>
            <input type="password" class="form-control" id="exampleInputPassword2">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Проверить меня</label>
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
@endsection

@section('footer')
    <div class="h-14.5 hidden lg:block mt-4">Registr</div>
@endsection

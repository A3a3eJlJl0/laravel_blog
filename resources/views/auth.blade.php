@extends('main')

@section('title')
    Авторизация
@endsection

@section('header')
    Авторизация
@endsection

@section('content')
<form method="post" action="{{ route('auth.auth') }}">
    @csrf
    <fieldset class="form-group col-3">
        <label for="login" class="col-form-label">Имя пользователя</label>
        <input type="text" class="form-control" name="login" value="{{old('login') ?? ''}}">
    </fieldset>
    <fieldset class="form-group col-3">
        <label for="login" class="col-form-label">Пароль</label>
        <input type="password" class="form-control" name="password">
    </fieldset>
    <fieldset class="form-group col-3">
        <label for="remember" class="col-form-label">Запомнить меня</label>
        <input type="checkbox" name="remember" class="custom-checkbox">
    </fieldset>
    <fieldset class="form-group col-3">
        <input type="submit" class="btn btn-primary" value="Войти">
    </fieldset>
</form>
@endsection

@extends('main')

@section('title')
    Добавить новость
@endsection

@section('header')
    Добавить новость
@endsection

@section('content')
    <form method="post" action="{{ route('news.add') }}">
        <fieldset class="form-group col-3">
            <label for="" class="col-form-label">Название новости
                <input type="text" class="form-control" name="name" value="">
            </label>
        </fieldset>
        <fieldset class="form-group col-3">
            <label for="announce" class="col-form-label">Краткое описание
                <input type="text" class="form-control" name="announce" value="">
            </label>
        </fieldset>
        <fieldset class="form-group col-3">
            <label for="announce" class="col-form-label">Текст новости
                <textarea class="form-control" name="detail" cols="50" rows="20"></textarea>
            </label>
        </fieldset>
        <fieldset class="form-group col-3">
            <input type="submit" class="btn btn-primary" value="Добавить">
        </fieldset>
    </form>
@endsection

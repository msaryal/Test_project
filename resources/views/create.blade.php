@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('index') }}" class="btn btn-primary">Список книг</a>
        <div class="row justify-content-center">

            <div class="col-12">
                Добавление книги
                <form action="{{ route('store') }}" method="post" class="w-50">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Название">
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" class="form-control" name="author_id" placeholder="ID автора">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="description" placeholder="Описание">
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" class="form-control" name="page_count" placeholder="Количество страниц">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Добавить">
            </form>
            </div>
        </div>
    </div>
@endsection

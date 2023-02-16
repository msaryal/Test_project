@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <a href="{{ route('create') }}" class="btn btn-primary">Добавить</a>
        </div>
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Author ID</th>
                    <th scope="col">Description</th>
                    <th scope="col">Page count</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->author_id }}</td>
                        <td>{{ $book->description }}</td>
                        <td>{{ $book->page_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

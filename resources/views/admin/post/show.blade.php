@extends('layouts.wrapper-admin', ['title' => $post->title])

@section('content')
    <h1>Post ma'lumot</h1>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $post->id }}</td>
            </tr>
            <tr>
                <td>Sarlavhasi</td>
                <td>{{ $post->title }}</td>
            </tr>
            <tr>
                <td>Kategoriyalar</td>
                <td>TODO Show categories</td>
            </tr>
            <tr>
                <td>Yaratilgan sana</td>
                <td>{{ $post->created_at }}</td>
            </tr>
            <tr>
                <td>Yangilangan sana</td>
                <td>{{ $post->updated_at }}</td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection

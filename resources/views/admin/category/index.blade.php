@extends('layouts.wrapper-admin', ['title' => 'Category'])

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Kategoriyalar</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1 mb-3">
                        <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Qo'shish</a>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nomi</th>
                                        <th>Ko'rish</th>
                                        <th>Yangilash</th>
                                        <th>O'chirish</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->title }}</td>
                                            <td><a href="{{ route('admin.category.show', $category->id) }}"><i class="far fa-eye"></i></a></td>
                                            <td><a href="{{ route('admin.category.edit', $category->id) }}" class="text-success"><i class="fas fa-edit"></i></a></td>
                                            <td>
                                                <form action="{{ route('admin.category.delete', $category->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="far fa-trash-alt text-danger"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.content -->
            </div>
        </section>
    </div>



@endsection

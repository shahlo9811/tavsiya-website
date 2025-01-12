@extends('layouts.wrapper-admin', ['title' => 'Tag'])

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ediketlarni tahrirlash</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <row>
                    <div class="w-25">
                        <form method="post" action="{{ route('admin.tag.update', $tag->id) }}">
                            @csrf
                            @method('patch')
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Nomi</label>
                                    <input type="text" class="form-control" name="title"
                                            value="{{ $tag->title }}"
                                    @error('title')
                                    <div class="text-danger">Ushbu maydonni to'ldirish zarur</div>
                                    @enderror
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Yangilash">
                        </form>
                    </div>
                </row>
            </div>
        </section>
    </div>
@endsection

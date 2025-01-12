@extends('layouts.wrapper-admin', ['title' => 'User'])

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Foydalanuvchi qo'shish</h1>
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
                        <form method="post" action="{{ route('admin.user.store') }}">
                            @csrf
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Foydalanuvchi nomini kiriting</label>
                                    <input type="text" class="form-control" name="name"
                                           placeholder="Имя пользователя">
                                    @error('name')
                                    <div class="text-danger">
                                    Bu maydonni toʻldirish majburiy!</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Foydalanuvchi elektron pochta manzilini kiriting:</label>
                                    <input type="text" class="form-control" name="email"
                                           placeholder="Email">
                                    @error('email')
                                    <div class="text-danger">Bu maydonni toʻldirish majburiy!</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Foydalanuvchi rolini kiriting:</label>
                                    <select name="role" class="form-control">
                                        <option value="administrator">Administrator</option>
                                        <option value="reader">O'quvchi</option>
                                    </select>
                                    @error('role')
                                    <div class="text-danger">Bu maydonni toʻldirish majburiy!</div>
                                    @enderror
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </form>
                    </div>
                </row>
            </div>
        </section>
    </div>
@endsection
